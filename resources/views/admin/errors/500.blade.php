<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <title>孙健魁-原创后台 @yield('title')</title>
    @include('admin.public.style')
    @yield('styles')
</head>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-62751496-1', 'auto');
        ga('send', 'pageview');

    </script>
<body>

<div class="wrapper-page shadow-none">

    <div class="ex-page-content text-center">
        <h1>500</h1>
        <h2 class="font-light">Internal Server Error.</h2><br>
        <p>Why not try refreshing your page? or you can contact <a href="#">support</a></p>

        <a class="btn btn-success m-t-20" href=""><i class="fa fa-angle-left"></i> Back to Dashboard</a>
    </div>

</div>
@include('admin.public.script')
@yield('script')
</body>
</html>
