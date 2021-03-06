<html>

<head>
  <title>検索結果一覧</title>
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>


<body>

      <header>
          <div class="navbar navbar-dark" style="background-color:#FF564C">
            <div class="container d-flex justify-content-between">
              <a href="home.html" class="navbar-brand d-flex align-items-center">
              <img class="logo" src="{{ asset('image/logo.png') }}" alt="logo" width="120">
              </a>
            </div>
          </div>
        </header>

    <div class="album py-5 bg-light">
            <div class="container">
              <h1 class="jumbotron-heading">イベント一覧</h1>
    <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" img src="{{ asset('image/sample1.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">【渋谷】クリスマスパーティー！！！</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="event-sample1.html"><button type="button" class="btn btn-sm btn-outline-secondary">詳細をみる</button></a>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" img src="{{ asset('image/sample2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">第１回　ダルメシアンの会</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">詳細をみる</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" img src="{{ asset('image/sample3.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">みんなで楽しくワイワイ( ´∀｀)大型犬も可！！</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">詳細をみる</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" img src="{{ asset('image/sample4.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">愛犬の洋服作り体験しませんか？小型犬のみ</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">詳細をみる</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" img src="{{ asset('image/sample5.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">【好評につき第四段！！】楽しいしつけ教室</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">詳細をみる</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" img src="{{ asset('image/sample6.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">トリミングモデル犬を大募集〜♪</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">詳細をみる</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>            


            <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">

              <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <a href="home.html"><img class="nav-link" img src="{{ asset('image/home-icon.png') }}"></a>
                    </div>
                    <div class="col-sm">
                      <img class="nav-link" img src="{{ asset('image/search-icon.png') }}"></a>
                    </div>
                    <div class="col-sm">
                      <img class="nav-link" img src="{{ asset('image/add-icon.png') }}"></a>
                    </div>
                    <div class="col-sm">
                      <a href="mypage.html"><img class="nav-link" img src="{{ asset('image/mypage-icon.png') }}"></a>
                    </div>
                  </div>
                </div>
              </div>

            </nav>
  </body>
</html>