
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jugol Kumar</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/frontend/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/frontend/css/yBox.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/frontend/css/style.css">
    @stack('css')
</head>
<body>
<div id="main-wrapper">
    @include('frontend.includes.navbar')

    @yield('content')


    @include('frontend.includes.newsletter')
    @include('frontend.includes.footer')

</div>

<script src="{{asset('/')}}assets/frontend/js/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}assets/frontend/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/frontend/js/typed.js"></script>
<script src="{{asset('/')}}assets/frontend/js/mixitup.js"></script>
<script src="{{asset('/')}}assets/frontend/js/circle-progress.js"></script>
<script src="{{asset('/')}}assets/frontend/js/swiper-bundle.min.js"></script>
<script src="{{asset('/')}}assets/frontend/js/yBox.js"></script>
<script src="{{asset('/')}}assets/frontend/js/main.js"></script>

@stack('js')

<script>
    var icon = document.getElementById("modeIcon");
    icon.onclick = function (){
        document.body.classList.toggle("darktheme");

        if (document.body.classList.contains("darktheme")){
            icon.src = "{{asset('/')}}assets/frontend/image/sun.png"
        }else {
            icon.src = "{{asset('/')}}assets/frontend/image/moon.png"
        }
    }
</script>

</body>
</html>
