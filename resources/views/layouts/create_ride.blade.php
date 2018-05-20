<!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Welcome To ShareRide</title>
        <meta name="description" content="The most reliable and affordable means of commuting">
        <meta name="keywords" content="ShareRide, Book Ride, Hire Car, Pius, Wanjiru, Muriithi,">
        <meta name="author" content="Pius,Muriithi,Wanjiru,Pius Muriithi,Pius Wanjiru,Pius Muriithi Wanjiru,Kaboom,Pius M. Wanjiru">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="<i class='fa fa-car'></i>" type="image/x-icon"/>


        <link rel="stylesheet" href="{{ asset('css/fonticons.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

        <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
          
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#home">
                                                <!-- <img src="{{ asset('images/logo.png') }}"/> --><span style="color:white;"><i class="fa fa-car fa-2x"></i> ShareRide Inc.</span>
                                            </a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="/">HOME</a></li>
                                                <li><a href="#">GIVE RIDE</a></li>
                                                <li><a href="#">GET RIDE</a></li>
                                                <li><span><a><i class="fa fa-sign-out pull-right"></i>{{ link_to_route('logout', 'Log Out') }}</a></span></li>
                                                <li><span>Welcome,</span><h2>{{ \Auth::user()->first_name }}</h2></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>  
                        </div>
                    </div>
                </div>
            </header> <!--End of header -->

            <!-- @section('content') -->
            <section id="rides">
                    <div class="container">
                        <div class="row">
                            <h1 class="text-uppercase text-center wow fadeInDown animated" data-wow-delay="2s">create account</h1>
                            <div class="col-sm-6 col-md-offset-3">
                                <h1><strong>Create Ride</strong></h1>
                                <br/>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                {!! Form::open(array('route' => 'rides.store')) !!}

                                <div class="form-group">
                                    {!! Form::label('Origin') !!}
                                    &nbsp;<span class="required">*</span>
                                    {!! Form::text('origin', null, array('class' => 'form-control')) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('Destination') !!}
                                    &nbsp;<span class="required">*</span>
                                    {!! Form::text('destination', null, array('class' => 'form-control')) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('Ride capacity') !!}
                                    &nbsp;<span class="required">*</span>
                                    {!! Form::select('capacity', [1,2,3,4,5,6,7,8,9,10], null, array('class' => 'form-control')) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('Description') !!}
                                    {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
                                </div>

                                {!! Form::token() !!}
                                {!! Form::submit('Create ride', array('class' => 'btn btn-primary')) !!}

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                </section>
                <!-- Rides :End -->
                <!-- @endsection -->

                <!-- Footer -->
                @include('layouts.footer')
        
        </div>
        <!-- START SCROLL TO TOP  -->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/jquery.masonry.min.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>

        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>