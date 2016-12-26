<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
       
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/css/app.min.css" rel="stylesheet" type="text/css">
       
    </head>
    <body>
        @include('menu', array('items' => Lang::get('routes'), 'lang' =>LaravelLocalization::getCurrentLocale()))
        {{!! $home->body !!}}
        @include('footer')
        <!--<script src="/js/cycle.js"></script>-->
        <!--<script type="text/javascript" src="/js/app.min.js"></script>-->
         <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://laravel-manu-wildman2bad.c9users.io:8082/browser-sync/browser-sync-client.2.13.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
    </body>
</html>
