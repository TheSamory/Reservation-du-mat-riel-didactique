<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\Ges_reservationController;
use App\Http\Controllers\MaterielController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/signup', function (){
    return view('signup');
})-> name('signup');

Route::get('/dash', function (){
    return view('home_admin');
})-> name('home_admin');

Route::get('/logout', function (){
    return view('signup');
})-> name('signup');





// routes etudiant
Route::get("/reservation/{id_materiel}", [Ges_reservationController::class, "index2"]);

Route::post("/home", [EtudiantController::class, "login"]);

Route::get("/matériel", [MaterielController::class, "index"]);

Route::get("/etudiant", [EtudiantController::class, "index"]);

Route::get("/ges_reservation", [Ges_reservationController::class, "index"]);

Route::post("/reservation/materiel", [Ges_reservationController::class, "store"]);

Route::post("/add_materiel", [MaterielController::class, "store"]);

Route::post("/add/etudiant", [EtudiantController::class, "store"]);

Route::get("/delete/materiel/{id_materiel}", [MaterielController::class, "destroy"]);

Route::get("/delete_reserv/{ref}", [Ges_reservationController::class, "destroy"]);

Route::get("/delete/etudiant/{id}", [EtudiantController::class, "destroy"]);



Route::get("/edit/materiel/{id}", [MaterielController::class, "edit"]);

Route::post("/update_materiel", [MaterielController::class, "update"]);

Route::get("/etudiant/edit/{id}", [EtudiantController::class, "edit"]);

Route::post("/update/etudiant", [EtudiantController::class, "update"]);

Route::get("/prendre_mat/{ref}", [Ges_reservationController::class, "prendre_mat"]);