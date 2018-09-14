@extends('layouts.BStemplete')

@section('title', 'TOP PAGE')

@section('style')
.ranking-container {}
.ranked-img { height: 100px; width: 100px;}
.artc-content { padding: 5px; }
.artc-img { margin-bottom: 10px; width: 100%; }
.artc-p { text-align: center;}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
    width: 80%;
    margin: auto;
}
#ofc-link {display: block; text-align: right; width: 150px;}
.todetail {text-align: right;}
@endsection

@section('navbar')
  @parent
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="/image/largeimage.png">
      </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <table class="table table-striped">
      <h3>AppStoreランキング</h3>
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">カテゴリ : 全体ランキング
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">ゲーム</a></li>
            <li><a href="#">教育</a></li>
            <li><a href="#">ショッピング</a></li>
          </ul>
        </div>
    <!--  DBでforeach -->
      <tbody>
        @foreach ($rankings as $ranking)
        <tr>
          <td>
          <a href="/RArticle?id={{$ranking->id}}"><img class="ranked-img img-rounded" src="{{$ranking->icon}}"></a>
          </td>
          <td>
            <h4><a href="/RArticle?id={{$ranking->id}}">{{$ranking->rank}}. {{$ranking->title}}</a></h4>
            <p>{{mb_substr($ranking->body, 1, 90)}}....   <a href="/RArticle?id={{$ranking->id}}">詳細ページへ</a></p>
          </td>
          <td>
            <a href="{{$ranking->url}}" class="btn btn-info" id="ofc-link" role="button">AppStore公式ページ</a>
          </td>
        </tr>
        @endforeach
      </tbody>
  </table>
  </div>
  <div class="col-md-4">
    <div class="artc-container">
    <h4>おすすめアプリ</h4>
      @for ($i=0;$i < 2;$i++)
      <div class="artc-content">
        <img class="artc-img" src="/image/noimage-cont.png">
        <p class="artc-p">提携記事説明文がここに入ります。</p>
      </div>
      @endfor
    </div>
    
  </div>
</div>

@endsection