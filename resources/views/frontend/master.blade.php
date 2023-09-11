<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School website</title>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    {{-- bootstarp 5 icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./frontend/cs/slick.css">
    <link rel="stylesheet" href="./frontend/cs/style.css">
    <link rel="stylesheet" href="./frontend/cs/teacher.css">
    @stack('css');
</head>

<body>
    <!-- 1st menu start -->
    @include('frontend.partials.header')

    <!-- home staart -->
    @yield('content')
    <!--mockup end  -->

    {{-- footer content --}}
    @include('frontend.partials.footer')

    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 2500,
            delay: 400
        });

        // ScrollReveal().reveal('.reveal-text, .revel-img1',{ delay: 400 ,origin:'right'});
        // ScrollReveal().reveal('.revel-img,  .reveal-text1', { delay: 500 ,origin:'left'});
        // ScrollReveal().reveal('.news', {
        //     delay: 500,
        //     origin: 'top'
        // });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="./frontend/js/jquery-1.12.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="./frontend/js/slick.min.js"></script>
    <script src="./frontend/js/jquery.counterup.min.js"></script>
    <script src="./frontend/js/fixed.js"></script>
</body>

</html>
