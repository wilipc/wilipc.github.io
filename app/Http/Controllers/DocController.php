<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class DocController extends Controller
{

    public function profile(){
        return view('docente/perfild');
    }
}
