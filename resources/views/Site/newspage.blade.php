<html>
<head>
    <style class="vjs-styles-defaults">

        .video-js {
            width: 300px;
            height: 150px;
        }

        .vjs-fluid {
            padding-top: 56.25%
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>الخبرية</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/site/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/site/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/site/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/site/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/site/css/main.css')}}">

    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi?ver=1.0" type="text/css"
          media="all">
    <link href="https://vjs.zencdn.net/7.0.3/video-js.css" rel="stylesheet">
    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="http://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>

</head>

<body class="text-right" style="direction: rtl;">

<header>
    <div class="row bg-dark m-0">
        <div class="col-md-6">
            <div class="time text-white pr-5 text-right pt-2" style="font-size: 0.8em;">الجمعة، ٤ ديسمبر ٢٠٢٠ ٥:٤١:٢٦
                م
            </div>
        </div>
        <div class="col-md-6">
            <div class=" text-dark top-nav pl-5 text-left pt-2">
                <a href="en-index.html" class="text-white ">English</a>
            </div>
        </div>
    </div>

    <div class=" logo   w-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-white" style="line-height: 100px;">
                    <a href="#" style="display: inline-block;">
                        <img src="img/logo.png" height="130" width="170">
                    </a>تجريبي
                </div>
                <div class="col-md-6 text-left">
                    <div class="live"
                         style="color: #fff; display: inline-block; margin-right: 50%; text-align: center; margin-top: 20px;">
                        <i class="fas fa-tv fa-2x text-danger" style="font-size: 30px;"></i>
                        <h5>بث مباشر</h5>
                    </div>
                </div>
            </div>


            <!-- <div class="h2 logo-text text-dark" style="width: 150px; text-align: center; margin-right: 0px;">الخبرية</div> -->


        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light nav-bg-color p-0" style="z-index: 10;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav p-0">
                    <li class="nav-item ">
                        <a class="nav-link aa" href="#">الرئيسية
                            <div class="show-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link aa" href="#">الاخبار
                            <div class="show-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link aa" href="#">اسواق
                            <div class="show-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link aa" href="#">رياضة
                            <div class="show-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link aa" href="#">منوعات
                            <div class="show-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link aa" href="#">البرامج
                            <div class="show-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link aa" href="#">مقالات
                            <div class="show-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link aa" href="#">مصر
                            <div class="show-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link aa " href="#">فيديوهات
                            <div class="show-link"></div>
                        </a>
                    </li>
                </ul>
                <div class="search m-auto " style="padding-left: 80px !important;">
                    <i class="fas fa-search fa-2x" style="color: #022f66;"></i>
                </div>
            </div>
        </div>
    </nav>
    <div class="all-position-absolute">
        <div class="full-search "
             style="z-index: 10; position: fixed; height: 100vh; width: 100vw; left: 0px; top: 0px; background: #000;">
            <i class="fas fa-sign-out-alt text-light fa-2x mr-5 mt-5 close-search"></i>
            <form class="form-inline pr-5" style="margin-top: 10%;">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">بحث</button>
                <input class="form-control mr-sm-2 w-75" type="search" aria-label="Search">
            </form>
        </div>
        <div class="change-bg togg-position" style="direction: ltr; text-align: center; z-index: 3;">
            <i class="fas fa-globe fa-2x fa-spin" style=" color:rgba(0,123,255,.5)"></i>
            <div class="chose-bg text-center" style="width: 120px; height: 120px;">
                <div class="change-black"
                     style="width: 50px; height: 20px; background: #581735; margin: auto; margin-top: 20px; cursor: pointer; display: inline-block;"></div>
                <div class="change-black"
                     style="width: 50px; height: 20px; background: #fff; margin: auto; margin-top: 20px; cursor: pointer; display: inline-block;"></div>
                <div class="change-black"
                     style="width: 50px; height: 20px; background: #d3d3d3; margin: auto; margin-top: 20px; cursor: pointer; display: inline-block;"></div>
                <div class="change-black"
                     style="width: 50px; height: 20px; background: #022f66; margin: auto; margin-top: 20px; cursor: pointer; display: inline-block;"></div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item " aria-current="page"><a href="#">الاخبار</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الخبر</li>
                </ol>
            </nav>

        </div>
    </div>
    <div class="row text-center mb-3">
        <img src="{{asset('assets/site/img/'. $news -> Image)}}" width="40%" height="90" alt="" class=" m-auto">
    </div>
    <div class="row mt-1" style="background: rgba(238, 238, 238, 0.74);">

        <div class="col-md-8 pt-3">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <h4 class="text-success my-4 font-weight-bold"> {{ $news -> Title_News }}</h4>
                    <img src="img/nnn.jpg" class="img-fluid" alt="">
                    <p class="mt-5"> {{ $news -> Content }}
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="list-Latest-news-title mr-0 my-3">
                <a href="" class="text-white">أخر الاخبار</a>
            </div>
            <div class="col-md-12  bg-white">
                <div class="card" style="width: 100%">
                    <ul class="list-group list-group-flush p-0" style="position: relative;">
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/a.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير
                                بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/b.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير
                                بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/c.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير
                                بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/d.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير
                                بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/a.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير
                                بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/b.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير
                                بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/c.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير
                                بوصلة إيران
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 bg-white">
                <div class="h3 w-100 py-2 bg-light pr-2 text-info">اعلانات</div>
            </div>
        </div>
    </div>
</div>
<footer class="mt-5 py-3 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="img/logo.png" width="150" height="150" alt="">
                <ul class="contact text-center" style="list-style: none;">

                    <li style="background: #4167b2;">
                        <a href="#">
                            <i class="fab fa-facebook-f fa-xm"></i>
                        </a>
                    </li>
                    <li style="background: #54a8e5">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li style="background: red">
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li style="background: #e05440">
                        <a href="#">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li style="background: #ffe35f">
                        <a href="#">
                            <i class="fab fa-snapchat-ghost"></i>
                        </a>
                    </li>
                    <li style="background: #b24eba">
                        <a href="#">
                            <i class="fab fa-instagram fa-1x"></i>
                        </a>
                    </li>
                </ul>
                <br>
                <p style="font-size: 0.7em;">© جميع الحقوق محفوظة لقناة الخبرية 2018
                </p>
            </div>
            <div class="col-md-3">

                <ul style="list-style: none;">
                    <li style="color: rgb(17, 125, 226); font-size: 1.2em; margin-bottom: 10px;   ">الاقسام</li>
                    <li>
                        <a href="#">الاخبار</a>
                    </li>
                    <li>
                        <a href="#">اسواق</a>
                    </li>
                    <li>
                        <a href="#">رياضة</a>
                    </li>
                    <li>
                        <a href="#">منوعات</a>
                    </li>
                    <li>
                        <a href="#">برامج</a>
                    </li>
                    <li>
                        <a href="#">مقالات</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">

                <ul style="list-style: none;">
                    <li style="color: rgb(17, 125, 226);; font-size: 1.2em; margin-bottom: 10px;   ">المواضيع</li>
                    <li>
                        <a href="#">علم</a>
                    </li>
                    <li>
                        <a href="#">ثقافة وفن</a>
                    </li>
                    <li>
                        <a href="#">تكنولوجيا</a>
                    </li>
                    <li>
                        <a href="#">النشرات</a>
                    </li>
                    <li>
                        <a href="#">اسواق</a>
                    </li>
                    <li>
                        <a href="#">طب وصحة</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">

                <ul style="list-style: none;">
                    <li style="color: rgb(17, 125, 226);; font-size: 1.2em; margin-bottom: 10px;   ">اخبار الدول</li>
                    <li>
                        <a href="#">مصر</a>
                    </li>
                    <li>
                        <a href="#">السعودية</a>
                    </li>
                    <li>
                        <a href="#">امريكا</a>
                    </li>
                    <li>
                        <a href="#">المغرب</a>
                    </li>
                    <li>
                        <a href="#">اليمن</a>
                    </li>
                    <li>
                        <a href="#">العراق </a>
                    </li>
                </ul>
            </div>


            <div class="col-md-12 text-center pt-2" style="direction: ltr; text-align: left">
                <a href="http://bragma.com/">
                    <p style="display: inline-block; font-size: 0.9em;">© Copyright 2018 bragma.com </p>
                    <img src="img/bragmalogo.png" height="30" width="70" alt="bragma">
                </a>
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="https://vjs.zencdn.net/7.0.3/video.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.slick-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,

        });
    });
</script>


</body>
</html>
