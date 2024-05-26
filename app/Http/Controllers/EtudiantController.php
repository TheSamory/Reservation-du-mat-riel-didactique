<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Ges_reservation;
use App\Models\Materiel;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use function Laravel\Prompts\alert;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_etudiant = Personne::all();
        return view("etudiant" ,  compact("data_etudiant"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
        [
   
        ]); 
        $user = Personne::where('email', $request['email'])->first();
       
            if(!$user){
                DB::beginTransaction();
                $mat = $this->generate_pass();
                Personne::create(array_merge($request->all(), ['password' => $mat]));
                DB::commit();
                return redirect('/etudiant');
            }else{
           
                DB::rollBack();
                return redirect('/etudiant');
              }
                
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $etudiant = Personne::find($id);
        return view("update_etudiant", compact("etudiant"));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $res = Personne::firstWhere("id", $request->id)->update($request->all());
        //dd($res);
        if($res)
        {
      //   $success = "Etudiant modifier avec success" ;
         return redirect('/etudiant');
        }else{
            return redirect("/etudiant");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            
            $res = Personne::destroy($id);
             $success = "Demade supprimer avec success";
             return redirect('/etudiant');
         }catch(\Throwable $th){
            return redirect('/etudiant');
         }
    }




    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
      ]);
      $data_mat = Materiel::where('categorie',  'Electronique')->get();
      $data_mat_ch = Materiel::where('categorie',  'Chimique')->get();
      $data_mat_me = Materiel::where('categorie',  'Médical')->get();
      $data_mat_sp = Materiel::where('categorie',  'Sport')->get();
     // dd($data_mat_sp);

      $user = Personne::where('email', $data['email'])->first();

      

      if($user && $data['password'] == $user->password)
      {
        $emaill = $data['email'];
      
      //dd($npetudiant);
      $id_etud = $user->id;
       $dataa = Personne::find($id_etud);
      $prenom_etud = $dataa->prenom;
      
       

       session(['prenom_etud' => $prenom_etud ]);
       session(['id_etud' => $id_etud]);
         return view('home' , compact('data_mat', 'data_mat_ch', 'data_mat_me', 'data_mat_sp'));
      }else{
        $user2 = Admin::where('email', $data['email'])->first();
       
        $npetudiant = $this->showCount();
        session(['npetudiant' => $npetudiant]);

        $nbreserv = $this->showCount1();
        session(['nbreserv' => $nbreserv]);

        $nbmat = $this->showCount2();
        session(['nbmat' => $nbmat]);

        if($user2 &&  $data['password'] == $user2->password){
            return view('home_admin'); 
      }else{
        return "Identifiants incorrects" ;
      }
    }
     
    }

    public function generate_pass(){
        $mat = Str::random(5);
        $exist = Personne::find($mat);
        if($exist != null){
           $this->generate_pass();
        }else{
            return $mat;

        }
    }

    public function showCount()
    {
        $Count = Personne::count();
        return $Count;
    }

    public function showCount1()
    {
        $Count = Ges_reservation::count();
        return $Count;
    }

    public function showCount2()
    {
        $Count = Materiel::count();
        return $Count;
    }
}