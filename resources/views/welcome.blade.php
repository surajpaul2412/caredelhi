<!DOCTYPE html>
<html>
<head>
    <title>Self Care Software | Auricular</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
    <!-- font style -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- slider -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">

    <!-- card slider -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <style>
      .slick-slider {
        width: 100%;
        background-color: transparent;
        .slick-track {
          display: flex;
          align-items: center;
          flex-wrap: nowrap;
          height: 100px;
          justify-content: center;
        }
        .slick-slide{
          float: none;
          display: inline-block;
          vertical-align: middle;
          padding: 10px 0px;
          margin: 10px;
          background-color: white;
          transition: all 0.3s ease;
          height: auto;
          text-align: center;
          &.slick-current,
          &.slick-center {
              background:linear-gradient(45deg, rgb(246, 146, 89), rgb(241, 105, 117));
            padding: 30px 0px;
            //margin: 50px 0px;
          }
        }
      }
      .slick-prev,
      .slick-next {
        z-index:10;  
        top: 0px;
        background-color: transparent;
      }
      .slick-prev {
        left: 10px;
      }
      .slick-next {
        right: 10px;
      }
        html, body{
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            background-color: #fff;
        }
        .bold{
            font-weight: bold;
        }
        .bg-info{
            background-color: #53cfe9 !important;
        }
        .bg-danger{
            background-color: #eb6379 !important;
        }
        .bg-green{
            background-color: #82daca;
        }
        .carousel {
            width: 100% !important; 
            margin: 0px auto;
        }
        .wrapper{
          width:100%;
          padding-top: 20px;
          text-align:center;
        }
        h2{
          font-family:sans-serif;
          color:#fff;
        }
        .carousel{
          width:90%;
          margin:0px auto;
        }
        .slick-slide{
          margin:10px;
        }
        .slick-slide img{
          width:100%;
          border: 2px solid #fff;
        }
        /*modal*/
        @media (min-width: 576px) {
             .modal-dialog {
                 max-width: 400px;
            }
             .modal-dialog .modal-content {
                 padding: 1rem;
            }
        }
         .modal-header .close {
             margin-top: -1.5rem;
        }
         .form-title {
             margin: -2rem 0rem 2rem;
        }
         .btn-round {
             border-radius: 3rem;
        }
         .delimiter {
             padding: 1rem;
        }
         .social-buttons .btn {
             margin: 0 0.5rem 1rem;
        }
         .signup-section {
             padding: 0.3rem 0rem;
        }
        .wrapper-card {
           display: flex;
           flex-wrap: nowrap;
           margin: 40px auto;
           width: 77%;
        }
         .card {
           background: #e9e6e6;
           border-radius: 3px;
           box-shadow: 0 1px 1px rgba(0, 0, 0, 0);
           flex: 1;
           margin: 8px;
           padding: 30px;
           position: relative;
           text-align: center;
           transition: all 0.5s ease-in-out;
        }
         .card.popular {
           margin-top: -10px;
           margin-bottom: -10px;
        }
         .card.popular .card-title h3 {
           color: #3498db;
           font-size: 22px;
        }
         .card.popular .card-price {
           margin: 10px;
        }
         .card.popular .card-price h1 {
           color: #3498db;
           font-size: 60px;
        }
         .card.popular .card-action button {
           background-color: #3498db;
           border-radius: 80px;
           color: #fff;
           font-size: 17px;
           margin-top: -15px;
           padding: 15px;
           height: 80px;
        }
         .card.popular .card-action button:hover {
           background-color: #2386c8;
           font-size: 23px;
        }
         .card:hover {
           box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
         .card-ribbon {
           position: absolute;
           overflow: hidden;
           top: -10px;
           left: -10px;
           width: 114px;
           height: 112px;
        }
         .card-ribbon span {
           position: absolute;
           display: block;
           width: 160px;
           padding: 10px 0;
           background-color: #3498db;
           box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
           color: #fff;
           font-size: 13px;
           text-transform: uppercase;
           text-align: center;
           left: -35px;
           top: 25px;
           transform: rotate(-45deg);
        }
         .card-ribbon::before, .card-ribbon::after {
           position: absolute;
           z-index: -1;
           content: '';
           display: block;
           border: 5px solid #2980b9;
           border-top-color: transparent;
           border-left-color: transparent;
        }
         .card-ribbon::before {
           top: 0;
           right: 0;
        }
         .card-ribbon::after {
           bottom: 0;
           left: 0;
        }
         .card-title h3 {
           color: rgba(0, 0, 0, 0.3);
           font-size: 15px;
           text-transform: uppercase;
        }
         .card-title h4 {
           color: rgba(0, 0, 0, 0.6);
        }
         .card-price {
           margin: 00px 0;
        }
         .card-price h1 {
           font-size: 46px;
        }
         .card-price h1 sup {
           font-size: 15px;
           display: inline-block;
           margin-left: -20px;
           width: 10px;
        }
         .card-price h1 small {
           color: rgba(0, 0, 0, 0.3);
           display: block;
           font-size: 11px;
           text-transform: uppercase;
        }
         .card-description ul {
           display: block;
           list-style: none;
           margin: 10px 0;
           padding: 0;
        }
         .card-description li {
           color: rgba(0, 0, 0, 0.6);
           font-size: 15px;
           margin: 0 0 15px;
        }
         .card-description li::before {
           font-family: FontAwesome;
           content: "\f00c";
           padding: 0 5px 0 0;
           color: rgba(0, 0, 0, 0.15);
        }
         .card-action button {
           background: transparent;
           border: 2px solid #3498db;
           border-radius: 30px;
           color: #3498db;
           cursor: pointer;
           display: block;
           font-size: 15px;
           font-weight: bold;
           padding: 20px;
           width: 100%;
           height: 60px;
           text-transform: uppercase;
           transition: all 0.3s ease-in-out;
        }
         .card-action button:hover {
           background-color: #3498db;
           box-shadow: 0 2px 4px #196090;
           color: #fff;
           font-size: 17px;
        }
    </style>
</head>
<body style="margin-bottom: -10px;">
    <!-- header -->
    <header style="background-color: #bebebe;">
        <nav class="navbar navbar-expand-md navbar-dark container" style="box-shadow: none;">
          <a class="navbar-brand bold" href="" style="font-size: 20px;color: #fff;">
            Self Care Software
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <img src="{{asset('backend/img/download.png')}}" width="55px">
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ 'login' }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ 'register' }}">Sign Up</a>
              </li>
            </ul>
          </div>
        </nav>
    </header>
    <!-- slider -->
    <section>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators --> 
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <iframe width="100%" height="550px" src="https://www.youtube.com/embed/bbt3v-fELlE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="carousel-item">
              <iframe width="100%" height="550px" src="https://www.youtube.com/embed/P3XBt1IEYg4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="carousel-item">
              <iframe width="100%" height="550px" src="https://www.youtube.com/embed/UYF59NxI_AM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </section>
    <!-- features -->
    <section class="container py-5" style="display:none;">
        <div class="row">
            <div class="col-md-6 pl-5">
                <h1 class="bold" style="font-size: 40px;color: #4b3049;">
                    Software<br><span style="font-size: 50px;">Features !</span>
                </h1>
                <h5 class="pt-2" style="color: #b08ead;"><span><img src="{{asset('backend/img/target.svg')}}" width="45px"></span>Seamlessly empower fully researched growth strategies .</h5>
                <h5 class="pt-2" style="color: #b08ead;"><span><img src="{{asset('backend/img/target.svg')}}" width="45px"></span>Seamlessly empower fully researched growth strategies .</h5>
                <h5 class="pt-2" style="color: #b08ead;"><span><img src="{{asset('backend/img/target.svg')}}" width="45px"></span>Seamlessly empower fully researched growth strategies .</h5>
            </div>
            <div class="col-md-6">
                <img src="https://static.vecteezy.com/system/resources/previews/000/165/838/non_2x/acupuncture-point-vector.png" width="100%">
            </div>
        </div>
    </section>
    <!-- plans -->
    <div align="center">
      <h3 class="bold  pt-5 pb-4">Our Plans</h3>
    </div>
    @if($packages->count())
    <div class="container slick-slider">
      @foreach($packages as $package)
      <div class="card popular" style="border-radius: 10px;background-color: #acafaf;">
                <div class="card-title">
                    <h3 class="text-white">{{$package->name}}</h3>
                </div>
                <div class="card-price">
                  <h5>₹<span>{{$package->price}}<hr style="margin-top: -15px;border:2px solid red;width: 70px;"></span></h5>
                    <h1 class="text-white bold">
                        <sup>₹</sup>
                        {{$package->special_price}}
                    </h1>
                </div>
                <div class="card-description" style="margin-bottom: 10px;">
                    <ul>
                        <li class="text-white">Validity : {{$package->number_of_days}} Days.</li>
                    </ul>
                </div>
                <div class="card-action1">
                    <a href="{{route('order.checkout',encrypt($package->id))}}" class="btn" style="border-radius: 25px;background: #dddddd !important;color: #000 !important;">Get Package</a>
                </div>
            </div>
      @endforeach
    </div>
    @endif
    <!-- footer -->
    <footer class="bg-dark">
        <p class="py-2 text-white" align="center" style="font-size: 13px;">Self Care Software | Powered by <a class="text-info" href="http://codeburnerz.com/" style="font-size: 12px;">Codeburnerz Technology</a></p>
    </footer>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>

<!--  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<script type="text/javascript">
    $(".slick-slider").slick({
        centerMode: true,
        slidesToShow: 3,
        dots: true,
        arrows: true,
        swipe: true,
        swipeToSlide: true,
        infinite: true,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
</script>
</body>
</html>