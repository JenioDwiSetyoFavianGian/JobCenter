<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Job Center</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext" rel="stylesheet">

        <!-- CSS -->
        <link href="{{ asset('welcome/assets/css/main.css') }}" rel="stylesheet">

        <!-- JS -->
        <script src="{{ asset('welcome/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
        <script src="{{ asset('welcome/assets/js/vendor/jquery-1.12.0.min.js') }}"></script>
    </head>
    <body>
        <div class="site" id="page">
            <a class="skip-link sr-only" href="#main">Skip to content</a>

            <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
            <section class="hero-section hero-section--image clearfix clip">
                <div class="hero-section__wrap">
                    <div class="hero-section__option">
                        <img src="{{ asset('welcome/assets/images/index.jpg') }}" alt="Hero section image">
                    </div>
                    <!-- .hero-section__option -->

                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8">
                                <div class="title-01 title-01--11 text-center">
                                    <h2 class="title__heading">
                                        <span>Job Center</span>
                                        {{-- <strong class="hero-section__words">
                                            <span class="title__effect is-visible">AweSome</span>
                                            <span class="title__effect">Creative</span>
                                            <span class="title__effect">Free</span>
                                        </strong> --}}
                                    </h2>
                                    <div class="title__description">Delivering extraordinary creations from the very beginning of the time!</div>

                                    <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                                    <div class="title__action"><a href="{{ route('login') }}" class="btn btn-primary inline button-md">Login</a></div>
                                </div> <!-- .title-01 -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{-- <div class="button-group">
        	<a href="index-color.html" class="btn btn-outline-success button-sm">Color</a>
            <a href="index-slider.html" class="btn btn-outline-success button-sm">Slider</a>
            <a href="index-video.html" class="btn btn-outline-success button-sm">Video Background</a>
        </div> --}}

        <!-- JS -->
        <script src="{{ asset('welcome/assets/js/plugins/animate-headline.js') }}"></script>
        <script src="{{ asset('welcome/assets/js/main.js') }}"></script>
    </body>
</html>
