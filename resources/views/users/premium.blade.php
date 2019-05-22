
@extends('layouts.app')

@section('content')




    <div class="main-cover">
      <div class="items">
          {{-- 画像はパブリックの中にimg作ってその中に入れる --}}
        <img class="d-block w-100" src="{{asset('img/main1.jpg')}}" alt="First slide" height="100%" width="100%">
      </div>

    <div class="main-text">
        <p>月100円で<br>
          インドカレーをお得に！</p>
    </div>
    <div class="main-button">
        {{-- <a href="{{route('premium.checkout')}}"> --}}

            <form action="{{route('premium.checkout')}}" method="POST">
                @csrf

                    <script>
                      src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                      data-key="pk_test_ekFXpZuLO3OFkTXQuHzae7GH00RvB02IcH"
                      data-amount="100"
                      data-name="Stripe.com"
                      data-description="プレミアム会員になる"
                      data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                      data-locale="auto"
                    </script>
            </form>

          {{-- <button id="button" type="submit" class="btn btn-warning">お問い合わせ</button>
        </a> --}}
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
    <form action="{{route('premium.checkout')}}" method="POST">
            @csrf

                <script>
                  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                  data-key="pk_test_ekFXpZuLO3OFkTXQuHzae7GH00RvB02IcH"
                  data-amount="100"
                  data-name="Stripe.com"
                  data-description="プレミアム会員になる"
                  data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                  data-locale="auto"
                </script>
        </form>

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

</>


<form action="{{route('premium.checkout')}}" method="POST">
        @csrf
            <script
              src="https://checkout.stripe.com/checkout.js" class="stripe-button"
              data-key="pk_test_ekFXpZuLO3OFkTXQuHzae7GH00RvB02IcH"
              data-amount="100"
              data-name="Stripe.com"
              data-description="プレミアム会員になる"
              data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
              data-locale="auto">
            </script>

</form>

@endsection
