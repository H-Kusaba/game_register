<?php

namespace App\Http\Controllers;

use App\Ranking;
use Illuminate\Http\Request;


class RankingController extends Controller
{
    public function get()
    {
        $url = sprintf('https://rss.itunes.apple.com/api/v1/jp/ios-apps/top-grossing/all/25/explicit.json');
        $html = file_get_contents($url);
        $json = json_decode($html, true)['feed']['results'];
        for ($i = 0;$i < 20; $i++){
            $rank = $i + 1;
            $ranking = new Ranking;
            $ranking->title = $json[$i]['name'];
            $ranking->body = $json[$i]['url'];
            $ranking->rank = $rank;
            $ranking->image = $json[$i]['artworkUrl100'];
            $ranking->save();
        }
        return view('getRanking');
    }
}
