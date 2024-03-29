<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La mode.com - online shopping site</title>
    <meta name="discription" content="最新の流行ファッションをお届けします。">
    <meta name="keyword" content="ファッション, 女性, 流行, トレンド, 最新, ブランド, The Virginia, JILLSTUART, ZARA, mignon, H&M">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/responsive-layout.css">
    <!-- Bootstrap4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- slick.css -->
    <link rel="stylesheet" href="css/slick-theme.css" type="text/css">
    <link rel="stylesheet" href="css/slick.css" type="text/css">
</head>

<body>
    <header>
        &copy;La Mode.com
    </header>
    <!-- ヘッダーナビゲーション -->
    <!-- モバイル用toggle-menuとブラウザ用でレスポンシブ対応する -->
    <nav class="navbar_visible navbar navbar-expand-lg fixed-top navbar-light">
        <a class="navbar-brand" href="#">Menu</a>
    <!-- 商品検索フォーム -->
        <form action="" method="GET" class="nav-searchbar" name="site-search" role="search">
            <input type="search" value="商品名を入力してください">
            <input type="submit" value="検索">
        </form>
    <!-- トグルメニュー -->
        <button id="menu-button" type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="ナビゲーションの切り替え">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <!-- nav > div > a で、listを使わずにリンクを並行表示 -->
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link" href="#news">お知らせ</a>
                <a class="nav-item nav-link" href="#">商品を探す</a>
                <a class="nav-item nav-link" href="#">買い物かご</a>
                <a class="nav-item nav-link" href="#">よくある質問</a>
                <a class="nav-item nav-link" href="#">利用規約</a>
            </div>
        </div>
    </nav>
    <div>
        <img id="top_image" src="images/top_image_custom.png" alt="La_mode_img">
    </div>
    <!-- メニュー展開時の影色のオーバーレイ -->
    <div class="overlayMenu hidden">
        <!-- <div class="overlay-inner"> -->
        <!-- </div> -->
    </div>

    <main>

        <!-- スライド式のお知らせを掲載 -->
        <!-- <div id="news" class="slider-container">
            <div class="slider slick-slide slick-list slide-track">
                <div class="single-item">
                    <div>
                        <h3><a>1</a></h3>
                    </div>
                </div>
                <div class="single-item">
                    <div>
                        <h3><a>2</a></h3>
                    </div>
                </div>
                <div class="single-item">
                    <div>
                        <h3><a>3</a></h3>
                    </div>
                </div>
                <div class="single-item">
                    <div>
                        <h3><a>4</a></h3>
                    </div>
                </div>
                <div class="single-item">
                    <div>
                        <h3><a>5</a></h3>
                    </div>
                </div>
            </div>
        </div> -->

        <section id="news">
            <article></article>
        </section>

    </main>
    <footer>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- slick.min.js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
     <script src="slick.min.js" type="text/javascript"></script>
    <script src="javascript/script.js"></script>
</body>

</html>
