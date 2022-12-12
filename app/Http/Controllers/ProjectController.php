<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Project;

class ProjectController extends Controller
{
    public function index(){

        $data = Project::all();
            /* return $data_dosen; */
            /* return view('dashboard.project',['project'=>$project 
            ]); */
            return view('dashboard.project')->with('data', $data);
    }
}
