<?php

namespace App\Http\Controllers;

use App\Ranking;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
        $ranking = Ranking::All();
        return view('test', ['rankings' => $ranking]);
    }
}
