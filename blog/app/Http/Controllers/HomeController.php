<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $plato = DB::table('plato')->get();
        dd($plato);
        return view('prueba');
    }
}