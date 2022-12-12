<?php

namespace App\Http\Controllers;

use App\Models\DefectList;
use Illuminate\Http\Request;

class DefectListController extends Controller
{
    public function index(){

        $data = DefectList::all();
            /* return $data_dosen; */
            /* return view('dashboard.project',['project'=>$project 
            ]); */
            return view('dashboard.defectlist')->with('data', $data);
    }
}
