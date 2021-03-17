<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//ricordati di aggiungere nel controller la creazione del model
use App\Car;
//fine

class ListController extends Controller
{
    public function index(){

//vado a prendere tutte le macchine del database prendendo tutte le righe e trasfomradole in un aray
      $cars = Car::all();


      return view('list', ['cars' =>$cars]);

    }
}
