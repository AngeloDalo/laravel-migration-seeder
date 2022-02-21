<?php

namespace App\Http\Controllers;

//use App\Train;
use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        //$trains = Train::where('giorno', date('Y-m-d'))->get();
        $data = ['trains' => $trains];
        //dd($trains);
        return view('/guest/trains', $data);
    }
}
