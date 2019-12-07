<html>

<head>
  <title>MyPage</title>
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

    <table>
  <tr>
    <th>ID</th>
    <th>name</th>
    <th>email</th>
    <th>gender</th>
  </tr>
  @foreach ($users as $users)
  <tr>
    <td>{{$users->id}}</td>
    <td>{{$users->name}}</td>
    <td>{{$users->email}}</td>
    <td>{{$users->gender}}</td>
  </tr>
  @endforeach
</table>

    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Hanako Yamada</h2>

       


      </br>
        <p>【ペット情報】</p>
        <p>名前：ポチ</p>
        <p>犬種：キャバリア</p>
      </br>
        <p>はじめまして！普段はカメラマンをしている東京在住です！</p>
        <p>２歳のキャバリア♂のポチと暮らしています♪</p>
    </br>
        <button type="button" class="btn btn-warning">プロフィールを編集する</button> 

      </div>
    </br>
      <div class="col-md-5 order-md-1">
        <img src="{{ asset('image/mypage-sample1.jpg') }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
      </div>
    </div> 

    <div class="album py-5 bg-light">
            <div class="container">
              <h1 class="jumbotron-heading">参加予定のイベント</h1>
    <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" img src="{{ asset('image/sample1.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">【渋谷】クリスマスパーティー！！！</p>
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
    </div>


    <div class="album py-5 bg-light">
            <div class="container">
              <h1 class="jumbotron-heading">過去に参加したイベント</h1>
    <div class="row">
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