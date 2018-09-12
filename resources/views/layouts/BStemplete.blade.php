<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="utf-8">
  <!-- InternetExplorerのブラウザではバージョンによって崩れることがあるので、互換表示をさせないために設定するmetaタグです。 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- レスポンシブWebデザインを使うために必要なmetaタグです。 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrapテンプレート</title>
  <!-- コンパイルして圧縮された最新版の CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!-- オプションのテーマ -->
  <style>
  .starter-template {
  padding: 40px 15px;
  text-align: center;
  }
  </style>
  </head>

<body>
  @secion('navbar')
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Game Register</a>
      </div>
      <ul class="nav navbar-nav">
        <!-- li><a href="#">Page 1</a></li-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>  新規会員登録</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>  ログイン</a></li>
      </ul>
    </div>
  </nav>
  @show

  <div class="container">
    @yield('content')
  </div>
  <div class="footer">
  </div>
  <!-- /.container -->
  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- BootstrapのJS読み込み -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>