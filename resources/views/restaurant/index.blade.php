<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/resource/css/style.css">
    <title>Restaurant</title>
    <style>
    #carouselExampleControls{
    position: relative;
  }


  .main-text p{
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    margin:0;
    padding:0;
    font-size: 80px;
    font-weight:500;
    color: aliceblue;
    /* text-align: center;
    width: 100%; */
  }

  @media(max-width:670px)
  {
    .main-text p{
      position: absolute;
    top: 30%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    margin:0;
    padding:0;
    font-size: 22px;
    font-weight:400;
    color: aliceblue;
  }


  .main-text #button{
    position: absolute;
    top: 38%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    margin:0;
    padding:10px;
    font-size: 10px;
    color: black;
  }

  .teaching-box{
    display: flex;
    justify-content: center;
    padding-top: 10px;
    text-align: center;
  }

  .teaching-text h2{
    font-size: 30px;
  }

  .teaching-text h4{
    font-size: 15px;
  }

  .box2 span{
    font-size:7px;
    font-weight: 800;
  }

  .box2 p{
    font-size:5px;
    font-weight: 500;
  }

  }


  .main-text button{
    position: absolute;
    top: 70%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    margin:0;
    padding:10px;
    font-size: 40px;
    color: black;
  }

  #carouselExampleControls{
      height: 80%;
      width:100%;
  }

  .business{
    height: 600px;
    background-color:white;
    text-align: center;
  }

  .teaching-box{
    display: flex;
    justify-content: center;
    padding-top: 30px;
    text-align: center;

  }

  .box2{
    background-color:orange;
    height: 150px;
    width: 400px;
    margin: 0 10px 0 10px;
  }

  .teaching-text{
    padding-top: 70px;
  }

  .teaching-text h2,h4{
    color: black;
  }

  .teaching-text h2{
    font-size: 80px;
  }

  .teaching-text h4{
    font-size: 50px;
  }
  *{
    box-sizing: border-box;
  }

  .box2 span{
    font-size:30px;
    font-weight: 800;
  }

  .box2 p{
    font-size:25px;
    font-weight: 500;
  }

  .conversation{
    height: 400px;
    background-color: #ebb94d;
    margin-top: 50px;
  }

  .upper-side{
    padding-top: 30px;
    height: autp;
    text-align: center;
  }

  .upper-side p{
    color: white;
    font-size: 28px;

  }

  #white{
    background-color: white;
    color: red;
    width: auto;
  }

  .upper-side a{
    border: 1px solid #da6b64;
    background-color: #da6b64;
    height: 100px;
    width: 700px;
    padding: 30px;
    font-size: 30px;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    color: white;
    border-radius: 15px;
  /* } */
  }

  .bottom-side{
    padding-top: 40px;
  }

  .bottom-side p{
    color: white;
    font-size: 28px;
    height: 40%;
    text-align: center;
  }

  .conversation button{
    padding: 30px 120px;
      background-color: #da6b64;
      border-radius: 50px;
      margin: 45px auto;
      width: 70%;
      font-size: 28px;
  }

  footer{
    background-color: white;
  }

  /* .twitter button{
    width: 75px;
    background: #4BB7E3;
    color: white;
    height: 22px;
    padding: 1px;
    border-radius: 5px;
    font-size: 8px;
  }

  .face button{
    width: 75px;
    background: #5193D5;
    color: white;
    height: 22px;
    padding: 1px;
    border-radius: 5px;
    font-size: 8px;
  }
  .facebook button{
    width: 50px;
    background: #5193D5 ;
    color: white;
    height: 22px;
    padding: 1px;
    border-radius: 5px;
    font-size: 8px;
  }
  .face i{
    font-size: 13px;
    padding-right: 3px;
  }
  .twitter,.face,.facebook{
    display: inline-block;
  }
  .sns{
    position: absolute;
    left: 42%;
    top:1090px;
  } */

  /* ここから先はホームページ用 */

  .coupon {
    border: 5px dotted #bbb; /* Dotted border */
    width: 80%;
    border-radius: 15px; /* Rounded border */
    margin: 0 auto; /* Center the coupon */
    max-width: 600px;
  }

  .container {
    padding: 2px 16px;
    background-color: #f1f1f1;
  }

  .promo {
    background: #ccc;
    padding: 3px;
  }

  .expire {
    color: red;
  }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning" id="navbar">
        <a class="navbar-brand" href="#">Japan India Curry Night</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
          <a class="nav-item nav-link active" href="{{route('coupons.index')}}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">掲載方法</a>
            <a class="nav-item nav-link" href="#">よくある質問</a>
            <a class="nav-item nav-link" href="#">掲載事例</a>
          </div>
        </div>
    <a href="{{route('coupons.create')}}"><button type="submit" class="btn btn-lg btn-danger" >お問い合わせ</button></a>
      </nav>

      <main>


                    <div class="main-cover">
                      <div class="items">
                          {{-- 画像はパブリックの中にimg作ってその中に入れる --}}
                        <img class="d-block w-100" src="{{asset('img/main1.jpg')}}" alt="First slide" height="100%" width="100%">
                      </div>

                    <div class="main-text">
                        <p>インドカレーで<br>
                          夜もお腹いっぱいに</p>
                    <div class="main-text">
                        <a href="{{route('coupons.create')}}">
                          <button id="button" type="submit" class="btn btn-warning">お問い合わせ</button>
                        </a>
                    </div>

                  </div>


    <div class="business">


        <div class="teaching-text">
            <h2>ディナータイム限定の集客サイトです</h2>
            <br>
            <h4>掲載費用は無料<br>
            クーポンを獲得しているお客様への特典の提供のみお願いします</h4>

        </div>

                <div class="teaching-box">
                    <div class="box2">
                        <span><p>STEP.1</p></span>
                        <p>お問い合わせから<br>
                            ご登録をお願いします</p>
                    </div>

                     <div class="box2">
                        <span><p>STEP.2</p></span>
                        <p>メールが届きます<br>
                            必要な情報を記入ください</p>
                    </div>

                     <div class="box2">
                        <span><p>STEP.3</p></span>
                        <p>弊社でクーポン画像の作成<br>
                            ページの登録をいたします</p>
                    </div>



            </div>

            <div class="conversation">

                <div class="upper-side">
                    <p>インドネパールカレー屋さん限定<br>
                       ディナータイムの集客を強力にサポート</p>

                    <p id="white">掲載費用は無料<br>
                        お問い合わせをお待ちしています</p>

                    <a href="{{route('coupons.create')}}">お問い合わせはこちら</a>

                </div>



                <!-- <div class="sns">

                     <div class="twitter">
                  <button type="button" name="button"><i class="fab fa-twitter"></i>ツイート</button>
                </div>
                <div class="face">
                  <button type="button" name="button"><i class="fab fa-facebook-f"></i>いいね！</button>
                </div>
                <div class="facebook">
                  <button type="button" name="button">シェア</button>
                </div>
                </div>
         -->


         <footer class="page-footer font-small blue">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
              <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
            </div>
            <!-- Copyright -->

          </footer>

      </main>




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
