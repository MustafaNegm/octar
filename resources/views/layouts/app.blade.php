<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet"  href="{{asset("assets/")}}/css/bootstrap.css"  type="text/css"/>
    <link rel="stylesheet"  href="{{asset("assets/")}}/css/style.css"  type="text/css"/>
    <link href="{{asset("assets/")}}/css/font-awesome.css" rel="stylesheet">
    @yield('css')
</head>
<body>

<section class="contents">
    <div class="page-container @yield('page_container')">
             @yield('sidebar')
        <div class="@yield('page_content')">
            @yield('content')
        </div>
    </div>
</section>



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{asset('assets/')}}/js/bootstrap.js" type="text/jscript" ></script>
@yield('js')
</body>
</html>
