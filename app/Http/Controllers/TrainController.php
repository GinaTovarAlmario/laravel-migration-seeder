<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //gestisco la pagina index
    public function index(){
        // recupero i dati train dal db e li gestisco
        $trains = Train::wherebetween("orario_di_partenza", ["2024-10-28 00:00:00","2024-10-28 23:59:59"])->get();
        // dd($trains);
        return view('trains.index',compact('trains'));
    }
}
