<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_materiel = Materiel::all();
       // dd($data_materiel);
        return view('materiel' , compact('data_materiel'));
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
           
          //  'categorie'=> 'required',
          //  'referene' => 'required',
         //   'commentaire' => 'required',
          //  'file_name' => 'required|image|mimes:jpeg|max:2048'
]);

    $materiel = new Materiel();
    $materiel->categorie = $request->categorie;
    $materiel->reference = $request->reference;
    $materiel->commentaire = $request->commentaire;

if($request->hasFile('file_name')){
//dd($materiel);
    $file = $request->file('file_name');
    $filename = $file->getClientOriginalName();
    $path = $file->storeAs('imgs_materiel', $filename);
    $materiel->file_name = $path;

    $materiel->save();

   
   // DB::beginTransaction();
   // Materiel::create(array($materiel));
   
    DB::commit();
  
  return redirect('/matériel');
}
else{
    return view('home_admin');
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
        $materiel = Materiel::find($id);
        return view("update_materiel", compact("materiel"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $res = Materiel::firstWhere("id", $request->id)->update($request->all());
        if($res)
        {
         return redirect('/matériel');
        }else{
            return redirect("/matériel");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
          Materiel::destroy($id);
            return redirect('/matériel');
        }catch(\Throwable $th){
            return view('home_admin');
        }
       
    }
}