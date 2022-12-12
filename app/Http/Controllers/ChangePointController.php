<?php

namespace App\Http\Controllers;

use App\Models\ChangePoint;
use Illuminate\Http\Request;

class ChangePointController extends Controller
{
    public function index(){

        $data = ChangePoint::all();
           
            return view('dashboard.changepoint')->with('data', $data);
    }
}
