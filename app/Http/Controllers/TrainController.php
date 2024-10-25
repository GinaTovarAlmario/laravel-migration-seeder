<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    //gestisco la pagina index
    public function index(){
        return view('trains.index');
    }
}
