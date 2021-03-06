<html>
<head>
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
</head>

<body class="text-right" style="direction: rtl;">

<header>
    <div class="row bg-dark m-0">
        <div class="col-md-6">
            <div class="time text-white pr-5 text-right pt-2" style="font-size: 0.8em;">الأربعاء، ٢ ديسمبر ٢٠٢٠ ١٢:١٩:٠٤
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
                <div class="col-md-6 text-white" style="line-height: 100px;"><a href="#" style="display: inline-block;"><img
                            src="img/logo.png" height="130" width="170"></a>تجريبي
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

</header>
<div class="container pt-3">
    <div class="row text-center mb-3">
        <img src="{{asset('assets/site/img/12144.jpg')}}" width="60%" height="90" alt="" class=" m-auto">
    </div>
    <div class="row mb-3">
        <div class="col-md-8 pb-4">
            <div class="main-news">
                <a href="">
                    <div class="img-main-news">
                        <img src="{{asset('assets/site/img/aab.JPG')}}" alt="" class="w-100" height="430">
                    </div>
                    <div class="main-news-body">
                        <h2 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 100%">
                <ul class="list-group list-group-flush p-0" style="position: relative;">
                    <div class="list-Latest-news-title mr-2 mb-3"> أخر الاخبار</div>
                    @foreach($news as $new)
                        <a href="{{route('Site.newspage', $new -> id)}}">
                            <li class="list-group-item d-flex flex-row">
                                <img src="{{$new -> Image}}" alt="" width="85" height="70">
                                {{$new -> Content}}

                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="Advertisement text-center text-white">اعلانات</div>
        <div class="Advertisement-title"></div>
    </div>
    <div class="row mb-3">
        <div class="col-md-8    bg-white mb-3">
            <div class="list-Latest-news-title mr-2 mb-3" style="right: -25px;">
                <a href="" class="text-white">الأخبار</a>
            </div>
            <div class="row px-2">
                <div class="col-md-4 col-sm-6">
                    <a href="">
                        <div class="card" style="width: 100%; margin-bottom:20px;">
                            <img class="card-img-top" src="img/a.jpg" height="200" width="100%" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">عنوان الخبر</h5>
                                <span class="card-text">اكتب عن هذا الخبر اكتب عن هذا الخبر </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="">
                        <div class="card" style="width: 100%; margin-bottom:20px;">
                            <img class="card-img-top" src="img/b.jpg" height="200" width="100%" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">عنوان الخبر</h5>
                                <span class="card-text">اكتب عن هذا الخبر اكتب عن هذا الخبر </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="">
                        <div class="card" style="width: 100%; margin-bottom:20px;">
                            <img class="card-img-top" src="img/c.jpg" height="200" width="100%" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">عنوان الخبر</h5>
                                <span class="card-text">اكتب عن هذا الخبر اكتب عن هذا الخبر </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="">
                        <div class="card" style="width: 100%; margin-bottom:20px;">
                            <img class="card-img-top" src="img/d.jpg" height="200" width="100%" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">عنوان الخبر</h5>
                                <span class="card-text">اكتب عن هذا الخبر اكتب عن هذا الخبر </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="">
                        <div class="card" style="width: 100%; margin-bottom:20px;">
                            <img class="card-img-top" src="img/c.jpg" height="200" width="100%" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">عنوان الخبر</h5>
                                <span class="card-text">اكتب عن هذا الخبر اكتب عن هذا الخبر </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="">
                        <div class="card" style="width: 100%; margin-bottom:20px;">
                            <img class="card-img-top" src="img/b.jpg" height="200" width="100%" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">عنوان الخبر</h5>
                                <span class="card-text">اكتب عن هذا الخبر اكتب عن هذا الخبر </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">

            <div class="col-md-12  bg-white">
                <div class="list-Latest-news-title mr-2 mb-3" style="right: -25px;">
                    <a href="" class="text-white">الأكثر قرائة</a>
                </div>
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
        </div>
    </div>
    <div class="row mt-3">
        <div class="list-Latest-news-title mr-2 mb-3" style="display: block; width: calc(100% + 8px); ">
            <a href="" class="text-white">فيديو الخبرية</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="program-container">
                        <a href="">
                            <img src="img/ab.jpg" alt="" height="300" width="100%">
                            <p>#فيديو الخبرية</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="program-container">
                        <a href="">
                            <img src="img/ac.jpg" alt="" height="300" width="100%">
                            <p>#فيديو الخبرية</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="program-container">
                        <a href="">
                            <img src="img/fb.jpg" alt="" height="300" width="100%">
                            <p>#فيديو الخبرية</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="program-container">
                        <a href="">
                            <img src="img/d.jpg" alt="" height="300" width="100%">
                            <p>#فيديو الخبرية</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row Markets mt-3" style="background: rgba(238, 238, 238, 0.459);">
        <div class="col-md-6 ">
            <div class="list-Latest-news-title mr-2 my-3 mb-3" style="display: block; width: calc(100% + 8px);">
                <a href="" class="text-white">الأسواق</a>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="main-news">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/aa.jpg" alt="" class="w-100" height="440">
                            </div>
                            <div class="main-news-body h-25">
                                <h5 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-news">
                        <a href="">
                            <div class="img-main-news mb-4">
                                <img src="img/ab.jpg" alt="" class="w-100" height="200">
                            </div>
                            <div class="main-news-body h-25">
                                <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                            </div>
                        </a>
                    </div>
                    <div class="main-news">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/ab.jpg" alt="" class="w-100" height="217">
                            </div>
                            <div class="main-news-body h-25">
                                <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="list-Latest-news-title mr-0 mt-3 mb-3" style="display: block; width: calc(100% + 8px);">
                <a href="" class="text-white">النشرات الاقتصادية</a>
            </div>
            <div class="main-news mb-2">
                <a href="">
                    <div class="img-main-news mb-3">
                        <img src="img/ac.jpg" alt="" class="w-100" height="222">
                    </div>
                    <div class="main-news-body h-25">
                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                    </div>
                </a>
            </div>
            <div class="main-news mb-2">
                <a href="">
                    <div class="img-main-news">
                        <img src="img/ac.jpg" alt="" class="w-100" height="200">
                    </div>
                    <div class="main-news-body h-25">
                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-5   mb-3">
        <div class="list-Latest-news-title mr-2  mb-3" style="display: block; width: calc(100% + 8px);">
            <a href="" class="text-white">السعودية</a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/ac.jpg" alt="" width="100%" height="230px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/ab.jpg" alt="" width="100%" height="230px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/ac.jpg" alt="" width="100%" height="230px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/ab.jpg" alt="" width="100%" height="230px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row mt-1" style="background: rgba(238, 238, 238, 0.74);">

        <div class="col-md-8 pt-3">
            <div class="list-Latest-news-title mr-2 mb-3">
                <a href="" class="text-white">امريكا</a>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="main-news">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/f.jpg" alt="" class="w-100" height="400">
                            </div>
                            <div class="main-news-body">
                                <h2 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/d.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/c.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/a.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/b.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/d.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="list-Latest-news-title mr-0 my-3">
                <a href="" class="text-white">الاراء</a>
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
        </div>
    </div>
    <div class="row mt-5  bg-light mb-3">
        <div class="list-Latest-news-title mr-2  mb-3" style="display: block; width: calc(100% + 8px); ">
            <a href="" class="text-white">العراق</a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/e1.jpg" alt="" width="100%" height="250px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/e2.jpg" alt="" width="100%" height="250px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/e3.jpg" alt="" width="100%" height="250px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/e4.jpg" alt="" width="100%" height="250px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row mt-5 ">

        <div class="col-md-8 mb-3 p-0">
            <div class="list-Latest-news-title mr-2 mb-3">
                <a href="" class="text-white">الرياضة</a>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="main-news">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/g.jpg" alt="" class="w-100" height="400">
                            </div>
                            <div class="main-news-body">
                                <h2 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/h.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/j.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/k.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/g.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/j.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-0 ">
            <div class="list-Latest-news-title mr-2 mb-3">
                <a href="" class="text-white">فيس بوك</a>
            </div>
            <div class="col-md-12 ">
                <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush p-0" style="position: relative;">

                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/face2.jpg" alt="" width="85" height="80"> قرقاش: استراتيجية أميركا تتطلب
                                تغيير بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/face3.jpg" alt="" width="85" height="82"> قرقاش: استراتيجية أميركا تتطلب
                                تغيير بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/face4.jpg" alt="" width="85" height="85"> قرقاش: استراتيجية أميركا تتطلب
                                تغيير بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/face1.jpg" alt="" width="85" height="85"> قرقاش: استراتيجية أميركا تتطلب
                                تغيير بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/face2.jpg" alt="" width="85" height="85"> قرقاش: استراتيجية أميركا تتطلب
                                تغيير بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/c.jpg" alt="" width="85" height="85"> قرقاش: استراتيجية أميركا تتطلب تغيير
                                بوصلة إيران
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-8">
            <div class="Advertisement text-center">اعلانات</div>
            <div class="Advertisement-title" style="height: 650px; width: 100%; background: #fff;">

            </div>
        </div>
        <div class="col-md-4 p-0 ">
            <div class="list-Latest-news-title mr-2 mb-3 twiter" style="background: #22b1db;">
                <a href="" class="text-white">تويتر</a>
            </div>
            <div class="col-md-12 ">
                <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush p-0" style="position: relative;">

                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img
                                    src="https://selfpublishingadvice.org/wp-content/uploads/2013/10/twitter-1024x1024.png"
                                    alt="" width="85" height="80"> قرقاش: استراتيجية أميركا تتطلب تغيير بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ33KOQqE_5iyX0n3YKJ-woB881B91T0GXft2RK_oPbgzGZivXx"
                                    alt="" width="85" height="82"> قرقاش: استراتيجية أميركا تتطلب تغيير بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZr5_qXeVvh9Q4GoL4IJ1Td-GhDVKvdypAIcHu_t0If1vfuM6x"
                                    alt="" width="85" height="85"> قرقاش: استراتيجية أميركا تتطلب تغيير بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzrGysbbzHhsUf5RMMs68CsbgQ_gw6y01DAz9eN4bGaoOrlTtWjA"
                                    alt="" width="85" height="85"> قرقاش: استراتيجية أميركا تتطلب تغيير بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img
                                    src="https://help.twitter.com/content/help-twitter/en/using-twitter/someone-blocked-me-on-twitter/_jcr_content/yang/image.img.png/1511833040186.png"
                                    alt="" width="85" height="85"> قرقاش: استراتيجية أميركا تتطلب تغيير بوصلة إيران
                            </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/c.jpg" alt="" width="85" height="85"> قرقاش: استراتيجية أميركا تتطلب تغيير
                                بوصلة إيران
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5   mb-3" style="background: rgba(0, 0, 0, 0.082);">
        <div class="list-Latest-news-title mr-2  mb-3" style="display: block; width: calc(100% + 16px);">
            <a href="" class="text-white">اليمن</a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/a.jpg" alt="" width="100%" height="150px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/d.jpg" alt="" width="100%" height="150px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/c.jpg" alt="" width="100%" height="150px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/b.jpg" alt="" width="100%" height="150px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row mt-5  bg-light mb-3" style="background: #0005;">
        <div class="list-Latest-news-title mr-2  mb-3" style="display: block; width: calc(100% + 8px);">
            <a href="" class="text-white">المغرب</a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/ma.jpg" alt="" width="100%" height="300px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/mb.jpg" alt="" width="100%" height="300px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/mc.jpg" alt="" width="100%" height="300px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <div class="row">
        <div class="list-Latest-news-title mr-3 my-3 mb-3" style="display: block; width: calc(100% + 8px); ">
            <a href="" class="text-white">طب وصحة</a>
        </div>
        <div class="col-md-6">
            <div class="main-news">
                <a href="">
                    <div class="img-main-news">
                        <img src="img/l.jpg" alt="" class="w-100" height="400">
                    </div>
                    <div class="main-news-body">
                        <h2 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-news">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/m.gif" alt="" class="w-100" height="200">
                            </div>
                            <div class="main-news-body h-25">
                                <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-news">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/m.gif" alt="" class="w-100" height="200">
                            </div>
                            <div class="main-news-body h-25">
                                <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-news">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/m.gif" alt="" class="w-100" height="200">
                            </div>
                            <div class="main-news-body h-25">
                                <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-news">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/m.gif" alt="" class="w-100" height="200">
                            </div>
                            <div class="main-news-body h-25">
                                <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row program mt-5 pt-0" style="background: rgba(238, 238, 238, 0.472); overflow: hidden;">
        <div class="list-Latest-news-title mr-2 mb-3 mb-3" style="display: block; width: calc(100% + 8px); ">
            <a href="" class="text-white">جدول البرامج</a>
        </div>
        <div class="main-slider" style="direction: ltr">
            <div class="container">
                <div class="row">
                    <div class="slick-slider slick-initialized">
                        <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous
                        </button>
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                 style="opacity: 1; width: 3600px; transform: translate3d(-1440px, 0px, 0px);">
                                <div class="iteam slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true"
                                     tabindex="-1" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                                     tabindex="-1" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                                     tabindex="-1" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                                     tabindex="-1" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1"
                                     style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1"
                                     style="width: 180px;">
                                    <div class="time-news red">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1"
                                     style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1"
                                     style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-current slick-active" data-slick-index="4"
                                     aria-hidden="false" tabindex="0" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-active" data-slick-index="5" aria-hidden="false"
                                     tabindex="0" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-active" data-slick-index="6" aria-hidden="false"
                                     tabindex="0" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-active" data-slick-index="7" aria-hidden="false"
                                     tabindex="0" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-cloned" data-slick-index="8" aria-hidden="true"
                                     tabindex="-1" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-cloned" data-slick-index="9" aria-hidden="true"
                                     tabindex="-1" style="width: 180px;">
                                    <div class="time-news red">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-cloned" data-slick-index="10" aria-hidden="true"
                                     tabindex="-1" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-cloned" data-slick-index="11" aria-hidden="true"
                                     tabindex="-1" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-cloned" data-slick-index="12" aria-hidden="true"
                                     tabindex="-1" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-cloned" data-slick-index="13" aria-hidden="true"
                                     tabindex="-1" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-cloned" data-slick-index="14" aria-hidden="true"
                                     tabindex="-1" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                                <div class="iteam slick-slide slick-cloned" data-slick-index="15" aria-hidden="true"
                                     tabindex="-1" style="width: 180px;">
                                    <div class="time-news">22:00 AM</div>
                                    <img src="img/mb.jpg" alt="" width="100%" height="300">
                                    <div class="program-title">مع هيكل</div>
                                </div>
                            </div>
                        </div>


                        <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row all-program bg-white mt-3">
        <div class="list-Latest-news-title mr-2 mb-3" style="display: block; width: calc(100% + 8px); ">
            <a href="" class="text-white">البرامج</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="program-container">
                        <a href="">
                            <img src="img/fb.jpg" alt="" height="300" width="100%">
                            <p>#اسم البرنامج</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="program-container">
                        <a href="">
                            <img src="img/fb.jpg" alt="" height="300" width="100%">
                            <p>#اسم البرنامج</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="program-container">
                        <a href="">
                            <img src="img/fb.jpg" alt="" height="300" width="100%">
                            <p>#اسم البرنامج</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="program-container">
                        <a href="">
                            <img src="img/fb.jpg" alt="" height="300" width="100%">
                            <p>#اسم البرنامج</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5  bg-light mb-3">
        <div class="list-Latest-news-title mr-2  mb-3" style="display: block; width: calc(100% + 8px); ">
            <a href="" class="text-white">أمريكا</a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/a.jpg" alt="" width="100%" height="150px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/d.jpg" alt="" width="100%" height="150px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/c.jpg" alt="" width="100%" height="150px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/b.jpg" alt="" width="100%" height="150px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row mt-5 social-media">
        <div class="col-md-9">
            <div class="row">
                <div class="list-Latest-news-title mr-4  mb-4" style="display: block; width: calc(100% + 8px);">
                    <a href="" class="text-white"> الخبرية ستايل</a>
                </div>

                <div class="col-md-8">
                    <div class="main-news">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/style.gif" alt="" class="w-100" height="412 ">
                            </div>
                            <div class="main-news-body h-25">
                                <h4 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main-news">
                        <a href="">
                            <div class="img-main-news mb-2">
                                <img src="img/style1.jpg" alt="" class="w-100" height="200">
                            </div>
                            <div class="main-news-body h-25">
                                <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                            </div>
                        </a>
                    </div>
                    <div class="main-news">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/style2.jpg" alt="" class="w-100" height="200">
                            </div>
                            <div class="main-news-body h-25">
                                <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="list-Latest-news-title mr-0 mb-3 mb-3" style="display: block; width: calc(100% + 8px);">
                <a href="" class="text-white">الاخيرة</a>
            </div>
            <div class="main-news">
                <a href="">
                    <div class="img-main-news mb-3">
                        <img src="img/ba.jpg" alt="" class="w-100" height="200">
                    </div>
                    <div class="main-news-body h-25">
                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                    </div>
                </a>
            </div>
            <div class="main-news">
                <a href="">
                    <div class="img-main-news">
                        <img src="img/ba.jpg" alt="" class="w-100" height="200">
                    </div>
                    <div class="main-news-body h-25">
                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <div class="row mt-1  mb-3 " style="background: rgba(0, 0, 0, 0.231);">

        <div class="list-Latest-news-title mr-2  mb-3" style="display: block; width: calc(100% + 8px); z-index: 2;">
            <a href="" class="text-white">تكنولوجيا</a>
        </div>
        <div class="col-md-3 col-sm-6" style="z-index: 2;">
            <div class="main-news">
                <a href="">
                    <div class="img-main-news">
                        <img src="img/ba.jpg" alt="" class="w-100" height="300">
                    </div>
                    <div class="main-news-body h-25">
                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6" style="z-index: 2;">
            <div class="main-news">
                <a href="">
                    <div class="img-main-news">
                        <img src="img/ba.jpg" alt="" class="w-100" height="300">
                    </div>
                    <div class="main-news-body h-25">
                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6" style="z-index: 2;">
            <div class="main-news">
                <a href="">
                    <div class="img-main-news">
                        <img src="img/ba.jpg" alt="" class="w-100" height="300">
                    </div>
                    <div class="main-news-body h-25">
                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6" style="z-index: 2;">
            <div class="main-news">
                <a href="">
                    <div class="img-main-news">
                        <img src="img/ba.jpg" alt="" class="w-100" height="300">
                    </div>
                    <div class="main-news-body h-25">
                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <div class="row mt-5   mb-3" style="background: url(./img/ff.jpg); position: relative;">
        <div class="full-background"></div>
        <div class="list-Latest-news-title mr-2  mb-3" style="display: block; width: calc(100% + 8px); z-index: 2;">
            <a href="" class="text-white">ثقافة وفن</a>
        </div>
        <div class="col-md-3 col-sm-6" style="z-index: 2;">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/fa.jpg" alt="" width="100%" height="230px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6" style="z-index: 2;">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/fb.jpg" alt="" width="100%" height="230px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6" style="z-index: 2;">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/fc.jpg" alt="" width="100%" height="230px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6" style="z-index: 2;">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/fb.jpg" alt="" width="100%" height="230px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="list-Latest-news-title mr-0 my-3 mb-3" style="display: block; width: calc(100% + 8px); ">
                <a href="" class="text-white">علم</a>
            </div>
            <div class="row bg-white pt-3 ml-2">
                <div class="col-md-6">
                    <a href="">
                        <div class="card" style="width: 100%">
                            <img src="img/ia.jpg" alt="" width="100%" height="230px">
                            <div class="card-title pr-3">
                                عنوان خبر
                            </div>
                            <div class="card-body">
                                <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="">
                        <div class="card" style="width: 100%">
                            <img src="img/ib.png" alt="" width="100%" height="230px">
                            <div class="card-title pr-3">
                                عنوان خبر
                            </div>
                            <div class="card-body">
                                <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="list-Latest-news-title mr-0 my-3 mb-3" style="display: block; width: calc(100% + 8px); ">
                <a href="" class="text-white">الخبرية معرفة</a>
            </div>
            <div class="row bg-white pt-3">
                <div class="col-md-6">
                    <a href="">
                        <div class="card" style="width: 100%">
                            <img src="img/ia.jpg" alt="" width="100%" height="230px">
                            <div class="card-title pr-3">
                                عنوان خبر
                            </div>
                            <div class="card-body">
                                <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="">
                        <div class="card" style="width: 100%">
                            <img src="img/ib.png" alt="" width="100%" height="230px">
                            <div class="card-title pr-3">
                                عنوان خبر
                            </div>
                            <div class="card-body">
                                <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row Arabs-and-the-world mt-5" style="background: rgba(238, 238, 238, 0.685);">
        <div class="list-Latest-news-title mr-4  mb-3 mt-2" style="display: block; width: calc(100% + 8px); ">
            <a href="" class="text-white">العرب والعالم</a>
        </div>
        <div class="col-md-6">
            <div class="main-news mb-2">
                <a href="">
                    <div class="img-main-news">
                        <img src="img/bb.jpg" alt="" class="w-100" height="408">
                    </div>
                    <div class="main-news-body">
                        <h2 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-news mb-2">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/bd.jpg" alt="" class="w-100" height="200">
                            </div>
                            <div class="main-news-body h-25">
                                <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-news mb-2">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/bc.jpeg" alt="" class="w-100" height="200">
                            </div>
                            <div class="main-news-body h-25">
                                <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-news mb-2">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/bc.jpeg" alt="" class="w-100" height="200">
                            </div>
                            <div class="main-news-body h-25">
                                <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-news mb-2">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/bb.jpg" alt="" class="w-100" height="200">
                            </div>
                            <div class="main-news-body h-25">
                                <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                            </div>
                        </a>
                    </div>
                </div>
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
