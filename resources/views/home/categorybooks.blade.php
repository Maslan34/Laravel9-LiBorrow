
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Liborrow : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{asset('assetsForFront')}}/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('assetsForFront')}}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="{{asset('assetsForFront')}}/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{asset('assetsForFront')}}/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{asset('assetsForFront')}}/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<!-- Start Header -->
<header id="mu-header" class="" role="banner">
    <div class="container">
        <nav class="navbar navbar-default mu-navbar">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Text Logo -->
                    <a class="navbar-brand" href="{{route('home')}}"><i class="fa fa-book" aria-hidden="true"></i> Liborrow</a>

                    <!-- Image Logo -->
                <!-- <a class="navbar-brand" href="index.html"><img src="{{asset('assetsForFront')}}/images/logo.png"></a> -->


                </div>

                @php
                    $mainCategories=\App\Http\Controllers\HomeController::mainCategoryList();
                @endphp

                <div class="subnav" >
                    <button style="background-color: inherit;margin-bottom:5px" class="subnavbtn"><img  width="50px" src="{{asset("/assetsForFront/images/menü.png")}}">
                        <i   style="color: white" class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <ul>

                            <li><a href="#">10 BEST</a></li>
                            <li><a href="#">AUTHOR</a></li>
                            <li><div class="dropdown">
                                    <button class="dropbtn">Categories</button>
                                    <div class="dropdown-content">
                                        @foreach($mainCategories as $rs)
                                            <ul>

                                                @if(count($rs->children))
                                                    <div class="dropdownSubCategory">
                                                        <button class="dropsubbtn">{{$rs->title}}</button>
                                                        <div class="dropdown-subcontent">

                                                            @include('home.categoryTree',['children'=>$rs->children])
                                                        </div>


                                                @else
                                                    {{$rs->title}}

                                                @endif

                                            </ul>
                                        @endforeach
                                    </div>

                                </div>



                            <li><a href="#">WHO WE ARE</a></li>

                        </ul>
                    </div>
                </div>




                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav mu-menu navbar-right">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#mu-book-overview">BOOKS OF THE WEEK</a></li>
                        <li><a href="#mu-author">AUTHOR</a></li>
                        <li><a href="#mu-pricing">PRICE</a></li>
                        <li><a href="#mu-testimonials">3 BEST</a></li>
                        <li><a href="#mu-contact">CONTACT</a></li>

                    </ul>
                </div>


    </div><!-- /.container-fluid -->
    </nav>
    </div>
</header>
<!-- End Header -->

<!-- Start Featured Slider -->

<section id="mu-hero">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6 col-sm-push-6">
                <div class="mu-hero-right">
                    <img src="{{asset('assetsForFront')}}/images/ebook.png" alt="Ebook img">
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-sm-pull-6">
                <div class="mu-hero-left">
                    <h1>Perfect Landing Page Template to Present Your eBook</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam saepe, recusandae quidem nulla! Eveniet explicabo perferendis aut, ab quos omnis labore laboriosam quisquam hic deserunt ipsum maxime aspernatur velit impedit.</p>
                    <a href="#" class="mu-primary-btn">Download Now!</a>
                    <span>*Avaliable in PDF, ePUB, Mobi & Kindle.</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Start Featured Slider -->

<!-- Start main content -->

<main role="main">

    <!-- Start Counter -->
    <section id="mu-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-counter-area">

                        <div class="mu-counter-block">
                            <div class="row">

                                <!-- Start Single Counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-single-counter">
                                        <i class="fa fa-files-o" aria-hidden="true"></i>
                                        <div class="counter-value" data-count="749.345">0</div>
                                        <h5 class="mu-counter-name">Total Pages</h5>
                                    </div>
                                </div>
                                <!-- / Single Counter -->
                                <!-- Start Single Counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-single-counter">
                                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        <div class="counter-value" data-count="33.298">0</div>
                                        <h5 class="mu-counter-name">Chapters</h5>
                                    </div>
                                </div>
                                <!-- / Single Counter -->

                                <!-- Start Single Counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-single-counter">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        <div class="counter-value" data-count="10.989">0</div>
                                        <h5 class="mu-counter-name">Active Readers</h5>
                                    </div>
                                </div>
                                <!-- / Single Counter -->

                                <!-- Start Single Counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-single-counter">
                                        <i class="fa fa-trophy" aria-hidden="true"></i>
                                        <div class="counter-value" data-count="36">0</div>
                                        <h5 class="mu-counter-name">Got Awards</h5>
                                    </div>
                                </div>
                                <!-- / Single Counter -->

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter -->

    @foreach($books as $rs)
    <!-- Start Book Overview -->
    <div id="TamSayfaSagSutunIciUrunlerAlani">
        <div id="TamSayfaSagSutunIciUrunlerDengelemeAlani">

            <div class="TamSayfaSagSutunIciUrunSinirlamaAlani">
                <div class="TamSayfaSagSutunIciUrunResmiDisCercevesi">
                    <a href="/book/{{$rs->id}}"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" border="0" alt="" title=""></a>
                </div>
                <div class="TamSayfaSagSutunIciUrunUstBaslikMetni">
                    <a href="/book/{{$rs->id}}">{{$rs->title}}</a>
                </div>
                <div class="TamSayfaSagSutunIciUrunAltBaslikMetni">
                    <a href="/book/{{$rs->id}}">{{$rs->description}}</a>
                </div>
                <div class="TamSayfaSagSutunIciUrunPuanYildizlariAlani">
                    <a href="/book/{{$rs->id}}"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" border="0" alt="" title=""></a>
                </div>
                <div class="TamSayfaSagSutunIciUrunFiyatlariAlani">
									<span class="TamSayfaSagSutunIciUzeriCiziliUrunFiyati">
										<a href="/book/{{$rs->id}}"><del>{{$rs->price}}</del></a>
									</span>
                    <span class="TamSayfaSagSutunIciUrunFiyati">
										<a href="/book/{{$rs->id}}">{{$rs->price * 0.8}}</a>
									</span>
                </div>
            </div>



        </div>
    </div>
    @endforeach
    <!-- End Book Overview -->





    <!-- Start Testimonials -->
    <section id="mu-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-testimonials-area">
                        <div class="mu-heading-area">
                            <h2 class="mu-heading-title">YOU SHOULD READ BEFORE DIE</h2>
                            <span class="mu-header-dot"></span>
                        </div>

                        <div class="mu-testimonials-block">


                            <ul class="mu-testimonial-slide">

                                @foreach($sliderForBooks as $data)
                                    <li>
                                        <p>"{{$data->keywords}}"</p>
                                        <img class="mu-rt-img" src="" alt="img">
                                        <h5 class="mu-rt-name"> {{$data->title}}</h5>
                                        <span class="mu-rt-title">Page:{{$data->pages}}</span>
                                    </li>

                                @endforeach()



                            </ul>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials -->


    <!-- Start Contact -->
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">

                        <div class="mu-heading-area">
                            <h2 class="mu-heading-title">Drop Us A Message</h2>
                            <span class="mu-header-dot"></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>

                        <!-- Start Contact Content -->
                        <div class="mu-contact-content">

                            <div id="form-messages"></div>
                            <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message" id="message" name="message" required></textarea>
                                </div>
                                <button type="submit" class="mu-send-msg-btn"><span>SUBMIT</span></button>
                            </form>

                        </div>
                        <!-- End Contact Content -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

    <!-- Start Google Map -->
    <section id="mu-google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d589888.4396405783!2d-82.41588603632052!3d32.866951223053896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f9f727a4ed30eb%3A0xf2139b0c5c7ae1ec!2sDooley+Branch+Rd%2C+Millen%2C+GA+30442%2C+USA!5e0!3m2!1sen!2sbd!4v1497376364225" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <!-- End Google Map -->

</main>

<!-- End main content -->


<!-- Start footer -->
<footer id="mu-footer" role="contentinfo">
    <div class="container">
        <div class="mu-footer-area">
            <div class="mu-social-media">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
            <p class="mu-copyright">&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
        </div>
    </div>

</footer>
<!-- End footer -->



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="{{asset('assetsForFront')}}/js/bootstrap.min.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{asset('assetsForFront')}}/js/slick.min.js"></script>
<!-- Counter js -->
<script type="text/javascript" src="{{asset('assetsForFront')}}/js/counter.js"></script>
<!-- Ajax contact form  -->
<script type="text/javascript" src="{{asset('assetsForFront')}}/js/app.js"></script>



<!-- Custom js -->
<script type="text/javascript" src="{{asset('assetsForFront')}}/assets/js/custom.js"></script>


</body>
</html>
