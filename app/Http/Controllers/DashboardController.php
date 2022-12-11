<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Project;

class DashboardController extends Controller
{
    public function index(){

        $project = Project::all();
            /* return $data_dosen; */
            return view('dashboard.project',['project'=>$project 
            ]);
    }
    }