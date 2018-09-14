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
        /*
        $url2 = 'https://itunes.apple.com/lookup?id=' . $json[2]['id'] . '&country=JP';
        $html2 = file_get_contents(sprintf($url2));
        $json2 = json_decode($html2, true);
        return var_dump($json2['results'][0]['description']
        //[2]['resultCount']['description']
    );  */

        for ($i = 0;$i < 20; $i++){
            //本文を取得
            $url2 = 'https://itunes.apple.com/lookup?id=' . $json[$i]['id'] . '&country=JP';
            $html2 = file_get_contents(sprintf($url2));
            $json2 = json_decode($html2, true);
            //return var_dump($json2);
            //順位を定義
            $rank = $i + 1;
            //クエリ文
            $ranking = new Ranking;
            $ranking->body = $json2['results'][0]['description'];
            $ranking->title = $json[$i]['name'];
            $ranking->url = $json[$i]['url'];
            $ranking->rank = $rank;
            $ranking->image = $json[$i]['artworkUrl100'];
            $ranking->save();
        }
        return view('getRanking');
    }
}
