<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', ' I Am Kibet') }}</title>
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="Restful Api developer,Fullstack Developer,Apis,Bespoke SOftwares,As a skilled full-stack developer, I specialize in Laravel,Php,Angularjs and vue.js. .
">
        <meta name="keywords" content="Great websites, SEO,User experience, User Design, Logo design,Php,Laravel.As a skilled full-stack developer, I specialize in Laravel,Php,Angularjs and vue.js. .
,wilson, Kibet, Demalee KIbet, Kipkoec, SOftwaere Development, Technology, Ajax,Laravel,Zend framework,PHP,Javascript,Web, websites,Website design,Web development">
    <meta name="author" content="Software Engineer,Fullstack Developer">
        <!-- Specify the primary language of the web page -->
        <meta http-equiv="Content-Language" content="en">
        <!-- Add Open Graph meta tags for social media sharing -->
        <meta property="og:title" content="With expertise in both front-end and back-end technologies, I am well-versed in building robust and dynamic web applications.
I strive for clean and efficient code, and I am committed to delivering high-quality solutions that meet user needs.">
        <meta property="og:description" content="Best websites,Customer services,Wordpress,Databases,SQL,MYSQL,Mongodb,Demalee,websites,web3,web2,Web development,SOftware Engineering,Bespoke SOftwares,SOftwares,Software as a Service,IAAS">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://wilsonkibet.com">

        <!-- Add Twitter Card meta tags for Twitter sharing -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="Best web development services,Front end ,APIS,Backend ,RESTFUL, APIS, FUllstack">
        <meta name="twitter:description" content="Best web development services,Front end ,APIS,Backend ,RESTFUL, APIS, FUllstack.">
        <!-- Add structured data markup using JSON-LD format -->
        <script type="application/ld+json">
            {
              "@context": "http://schema.org",
              "@type": "Organization",
              "name": "Brizzm Car Rental",
              "url": "https://wilsonkibet.com",

  "description": "Web development",
  "sameAs": [
    "https://wilsonkibet.com",
    "https://wilsonkibet.com",
    "https://wilsonkibet.com"
  ]
}
        </script>
        <script>
            // Improve page load speed

            // Load JavaScript files asynchronously
            function loadScript(src, callback) {
                var script = document.createElement('script');
                script.src = src;
                script.async = true;
                script.onload = callback;
                document.head.appendChild(script);
            }

            // Lazy loading for images

            // Intersection Observer API for lazy loading
            if ('IntersectionObserver' in window) {
                const lazyImages = document.querySelectorAll('img.lazy');

                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            const image = entry.target;
                            image.src = image.dataset.src;
                            image.classList.remove('lazy');
                            imageObserver.unobserve(image);
                        }
                    });
                });

                lazyImages.forEach((image) => {
                    imageObserver.observe(image);
                });
            } else {
                // Fallback for browsers that do not support Intersection Observer

                // Load a polyfill for Intersection Observer
                loadScript('https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver', () => {
                    const lazyImages = document.querySelectorAll('img.lazy');

                    const imageObserver = new IntersectionObserver((entries, observer) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                const image = entry.target;
                                image.src = image.dataset.src;
                                image.classList.remove('lazy');
                                imageObserver.unobserve(image);
                            }
                        });
                    });

                    lazyImages.forEach((image) => {
                        imageObserver.observe(image);
                    });
                });
            }

        </script>
    <!-- CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.pagepiling.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom-animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

</head>

<body class="body-piling">
<div class="progress-nav">
    <ul id="menu">
        <li data-menuanchor="About" class="active"><a href="#About">Home</a></li>
        <li data-menuanchor="Services"><a href="#Services">Skills</a></li>
        <li data-menuanchor="Skills"><a href="#Skills">Services</a></li>
        <li data-menuanchor="Resume"><a href="#Resume">Profile</a></li>
        <li data-menuanchor="Portfolio"><a href="#Portfolio">latest projects</a></li>
        <li data-menuanchor="Awards"><a href="#Awards">Clients</a></li>
        <li data-menuanchor="Testimonials"><a href="#Testimonials">Testimonials</a></li>
        <li data-menuanchor="Clients"><a href="#Clients">Blogs</a></li>
        <li data-menuanchor="Contact"><a href="#Contact">Contact</a></li>
    </ul>
</div>
<div class="wrapper">

    <!-- Preloader -->
{{--    <div class="loader-wrap">--}}
{{--        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>--}}
{{--        <div class="layer layer-one"><span class="overlay"></span></div>--}}
{{--        <div class="layer layer-two"><span class="overlay"></span></div>--}}
{{--        <div class="layer layer-three"><span class="overlay"></span></div>--}}
{{--    </div>--}}
<main class="py-4">
    @include('layouts.header')
    @yield('content')
</main>
    <footer id="footer" class="footer">
        <div class="container-fluid">
            <div class="copyright"> © Wilson Kibet. <?php echo date('D, d M Y')?>  . <br>  All Rights Reserved.</div>

        </div>
    </footer>

</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.pagepiling.min.js')}}"></script>
<script src="{{asset('js/jquery.viewport.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/typeit.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/validate.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/mixitup.js')}}"></script>
<script src="{{asset('js/TweenMax.min.js')}}"></script>
<script src="{{asset('js/parallax.min.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/script-2.js')}}"></script>

</body>

</html>

