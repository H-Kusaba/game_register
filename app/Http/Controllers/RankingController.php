<?php

namespace App\Http\Controllers;

use App\Ranking;
use Illuminate\Http\Request;


class RankingController extends Controller
{
    public function get()
    {
        $html = file_get_contents(sprintf('https://rss.itunes.apple.com/api/v1/jp/ios-apps/top-grossing/all/25/explicit.json'));
        $json = json_decode($html, true)['feed']['results'];
        for ($i = 0;$i < 20; $i++){
            //本文を取得
            $url2 = 'https://itunes.apple.com/lookup?id=' . $json[$i]['id'] . '&country=JP';
            $html2 = file_get_contents(sprintf($url2));
            $json2 = json_decode($html2, true)['results'][0];
            //順位を定義
            $rank = $i + 1;
            //Eloquent
            $ranking = new Ranking;
            $ranking->rank = $rank;
            $ranking->title = $json[$i]['name'];
            $ranking->body = $json2['description'];
            $ranking->icon = $json[$i]['artworkUrl100'];
            $ranking->url = $json[$i]['url'];
            $ranking->genre1 = $json2['genres'][0];
            isset($json2['genres'][1]) ? $ranking->genre2 = $json2['genres'][1] : '';
            isset($json2['genres'][2]) ? $ranking->genre3 = $json2['genres'][2] : '';
            $ranking->releasenote = $json2['releaseNotes'];
            $ranking->image1 = $json2['screenshotUrls'][0];
            isset($json2['screenshotUrls'][1]) ? $ranking->image2 = $json2['screenshotUrls'][1] : '';
            isset($json2['screenshotUrls'][2]) ? $ranking->image3 = $json2['screenshotUrls'][2] : '';
            $ranking->artist = $json[$i]['artistName'];
            $ranking->artistUrl = $json[$i]['artistUrl'];
            $ranking->save();
        }
        return view('getRanking');
    }
}
