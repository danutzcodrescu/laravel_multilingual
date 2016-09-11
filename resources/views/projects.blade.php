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
        <div class="my-container background-opacity projects-background">
            <div>
                <h4 class="h1 text-center">Our projects</h4>
            </div>
        </div>
        <div class="my-container projects" style="margin-top: 30px">
            <a href="{{route('main-projects-detailed', ['id' => 1])}}">
                <div class="background-slider project-image"  style="background-image: url('/dist/images/1980-2.jpeg');"></div>
                <h5 class="h3">Project construction</h5>
                <div>
                    <p>September 2016</p>
                    <span>&#9698</span>
                </div>
            </a>
            <a href="{{route('main-projects-detailed', ['id' => 2])}}">
                <div class="background-slider project-image"  style="background-image: url('/dist/images/1980-3.jpeg');"></div> 
                <h5 class="h3">Project construction</h5>
                <div>
                    <p>September 2016</p>
                    <span>&#9698</span>
                </div>
            </a>
            <a href="{{route('main-projects-detailed', ['id' => 3])}}">
                <div class="background-slider project-image"  style="background-image: url('/dist/images/1980-dow3nload.jpeg');"></div>
                <h5 class="h3">Project construction</h5>
                <div>
                    <p>September 2016</p>
                    <span>&#9698</span>
                </div>
            </a>
            <a href="{{route('main-projects-detailed', ['id' => 4])}}">
                <div class="background-slider project-image"  style="background-image: url('/dist/images/1980-downloa2d.jpeg');"></div>
                <h5 class="h3">Project construction</h5>
                <div>
                    <p>September 2016</p>
                    <span>&#9698</span>
                </div>
            </a>
            <a href="{{route('main-projects-detailed', ['id' => 5])}}">
                <div class="background-slider project-image"  style="background-image: url('/dist/images/1980-3.jpeg');"></div> 
                <h5 class="h3">Project construction</h5>
                <div>
                    <p>September 2016</p>
                    <span>&#9698</span>
                </div>
            </a>
            <a href="{{route('main-projects-detailed', ['id' => 6])}}">
                <div class="background-slider project-image"  style="background-image: url('/dist/images/1980-downloa2d.jpeg');"></div>
                <h5 class="h3">Project construction</h5>
                <div>
                    <p>September 2016</p>
                    <span>&#9698</span>
                    
                </div>
            </a>
            <a href="{{route('main-projects-detailed', ['id' => 7])}}">
                <div class="background-slider project-image"  style="background-image: url('/dist/images/1980-2.jpeg');"></div>
                <h5 class="h3">Project construction</h5>
                <div>
                    <p>September 2016</p>
                    <span>&#9698</span>
                </div>
            </a>
            <a href="{{route('main-projects-detailed', ['id' => 8])}}">
                <div class="background-slider project-image"  style="background-image: url('/dist/images/1980-3.jpeg');"></div> 
                <h5 class="h3">Project construction</h5>
                <div>
                     <p>September 2016</p>
                     <span>&#9698</span>
                </div>
               
            </a>
        </div>
        @include('footer')
        <script type="text/javascript" src="/js/app.min.js"></script>
        <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://laravel-manu-wildman2bad.c9users.io:8082/browser-sync/browser-sync-client.2.13.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
    </body>
</html>
