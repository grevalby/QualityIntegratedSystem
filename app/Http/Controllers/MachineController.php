<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function index(){

        $data = Machine::all();
            
            return view('dashboard.machine')->with('data', $data);
    }
}
