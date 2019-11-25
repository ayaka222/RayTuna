<html>

<head>
  <title>event</title>
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


    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">【渋谷】クリスマスパーティー！！！</h2>
        <p class="lead">大切なワンちゃんと同伴でクリスマスパーティーしませんか？</p>
        <button type="button" class="btn btn-warning">参加する</button>
        </br>  
      </div>
    </br>
      <div class="col-md-5 order-md-1">
        <img src="{{ asset('image/sample1.jpg') }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
      </div>
    </div>  
    </br>
    <div class="card">
      <div class="card-header">
        イベント企画者
      </div>
      <div class="card-body">
        <p class="card-text">ああああああ</p>
      </div>
    </div></br>
    <div class="card">
      <div class="card-header">
        ステータス
      </div>
      <div class="card-body">
        <p class="card-text">募集中</p>
      </div>
    </div></br>
    <div class="card">
      <div class="card-header">
        日時
      </div>
      <div class="card-body">
        <p class="card-text">2019年12月25日</p>
      </div>
    </div></br>
    <div class="card">
      <div class="card-header">
        参加費
      </div>
      <div class="card-body">
        <p class="card-text">飼い主：1000円/人 ワンちゃん：500円/匹</p>
      </div>
    </div></br>
    <div class="card">
      <div class="card-header">
        募集要項
      </div>
      <div class="card-body">
        <p class="card-text">特になし</p>
      </div>
    </div></br>
    <div class="card">
      <div class="card-header">
        その他
      </div>
      <div class="card-body">
        <p class="card-text">
          小型犬から大型犬までOKです！</br>
          トイレが覚えれていないワンちゃんはマナーベルト着用でお願いします！</br>
          当日ビンゴ大会による景品もあります！みんなで楽しくワイワイしましょう！</br>
        </p>
      </div>
    </div>
  </br>
    <button type="button" class="btn btn-warning">参加する</button>   
  </br></br></br></br></br></br></br></br>


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