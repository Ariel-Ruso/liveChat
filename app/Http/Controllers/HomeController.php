<?php
//con este code hare una sala de chat @ArielEchevarria

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view ('index');
    }
}
