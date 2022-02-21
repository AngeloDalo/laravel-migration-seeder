<?php

namespace App\Http\Controllers;

//use App\Train;
use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::paginate(4);
        //$trains = Train::where('giorno', date('Y-m-d'))->get();
        $data = ['trains' => $trains];
        //dd($trains);
        return view('/guest/trains', $data);
    }
    public function show(Train $train) 
    {
        return view('/guest/trainsShow', compact('train'));
    }
}
