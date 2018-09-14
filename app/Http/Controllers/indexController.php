<?php

namespace App\Http\Controllers;

use App\Ranking;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $ranking = Ranking::All();
        return view('index', ['rankings' => $ranking]);
    }

    public function ViewRankingDetail(Request $request)
    {
        $ranking = Ranking::find($request->id);
        return view('RankingDetail', ['ranking' => $ranking]);
    }
}
