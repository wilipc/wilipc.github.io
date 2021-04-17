<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function listgroup(){
        return view('docente/listgroup');
    }

    public function addgroup(){
        return view('docente/addgroup');
    }

    public function listalum(){
        return view('alumno/listalum');
    }
}
