<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //gestisco la pagina index
    public function index(){
        // recupero i dati train dal db e li gestisco
        $trains = Train::all();
        // dd($trains);
        return view('trains.index',compact('trains'));
    }
}
