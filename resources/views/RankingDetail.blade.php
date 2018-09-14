@extends('layouts.BStemplete')

@section('title', $ranking->title)

@section('style')
.ranking-container {}
.ranked-img { height: 100px; width: 100px;}
.artc-content { padding: 5px; }
.artc-img { margin-bottom: 10px; width: 100%; }
.artc-p { text-align: center;}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
    width: 100%;
    margin: auto;
}
#ofc-link {display: block; text-align: right; width: 150px;}
.todetail {text-align: right;}
.right {text-align: right;}
.inline {display: inline-block;}
.block {display: block;}
@endsection

@section('navbar')
  @parent
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
    <img src="{{$ranking->icon}}" class="img-rounded">
    </div>
    <div class="col-md-9">
        <div class="col-mod-5">
            <h2>{{$ranking->title}}</h2>
            <h4><a href="{{$ranking->artistUrl}}">{{$ranking->artist}}</a></h4>
            <p><a href="{{$ranking->url}}" class="btn btn-info" role="button">App storeでみる</a></p>
            <p>ジャンル</p>
            <p class="inline"><a href="#" class="btn btn-info" role="button">{{$ranking->genre1}}</a></p>
            <p class="inline"><a href="#" class="btn btn-info" role="button">{{$ranking->genre2}}</a></p>
            <p class="inline"><a href="#" class="btn btn-info" role="button">{{$ranking->genre3}}</a></p>
        </div>  
    </div>
  </div>
    <div class="col-md-12">
        <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading block">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse1">●最新アップデート情報(クリックして開く)</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">{{$ranking->releasenote}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="col-md-2"></div>
    <div class="col-md-2">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{$ranking->image1}}">
                </div>
                <div class="item">
                    <img src="{{$ranking->image2}}">
                </div>
                <div class="item">
                    <img src="{{$ranking->image3}}">
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
    <div class="col-md-8">
        <h2>説明</h2>
        <p>{{$ranking->body}}</p>
    </div>
</div>



@endsection