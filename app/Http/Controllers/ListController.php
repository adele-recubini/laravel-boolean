<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class ListController extends Controller
{
    public function index(){

//vado a prendere tutte le macchine del database prendendo tutte le righe e trasfomradole in un aray
      $cars = Car::all();


      return view('list', ['cars' =>$cars]);

    }
}
