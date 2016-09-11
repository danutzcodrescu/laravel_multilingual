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
        <div class="my-container one-project">
            <div class="background-slider project-image"  style="background-image: url('http://demo.joomlavi.com/j3/jv-structure/images/uploads/project/1/project07.jpg');"></div>
            <div class="thumbnails">
                <img id="1" src ="http://demo.joomlavi.com/j3/jv-structure/images/uploads/project/1/project03.jpg"/>
                <img id="2" src ="http://demo.joomlavi.com/j3/jv-structure/images/uploads/project/1/project02.jpg"/>
                <img id="3" src ="http://demo.joomlavi.com/j3/jv-structure/images/uploads/project/1/project06.jpg"/>
                <img id="4" src ="http://demo.joomlavi.com/j3/jv-structure/images/uploads/project/1/project07.jpg"/>
                <img id="5" src ="http://demo.joomlavi.com/j3/jv-structure/images/uploads/project/1/project14.jpg"/>
                <img id="6" src ="http://demo.joomlavi.com/j3/jv-structure/images/uploads/project/1/project17.jpg"/>
            </div>
        </div>
        <div class="my-container project-details">
            <div>
                <h4 class="h2">Project Description</h4>
                <p><strong>Client:</strong> Manu</p>
                <p><strong>Location:</strong> Zaventem</p>
                <p><strong>Starting date:</strong> 09/09/2016</p>
                <p><strong>Ending date:</strong> 16/09/2016</p>
            </div>
            <div>
                <h4 class="h2">Project Details</h4>
                <p>Lorem ipsum dolor sit amet, mea cu omnium urbanitas, labitur volumus id eum. Ius ignota offendit similique et, sea dolorum vituperata ullamcorper et, justo insolens omittantur sit ne. Aliquip pertinax vix ad, ea eos euismod officiis. Utamur minimum repudiare qui ex. Rationibus theophrastus his ut, eum iudico pericula no. Mei id fugit dolor. Has ne legere tibique. At eam decore probatus. Delenit interesset an mei, ut eos tota vivendo deseruisse. Est at facete delenit democritum. Te nihil aliquip ornatus cum.</p>
            </div>
            
        </div>
        @include('footer')
        <script type="text/javascript" src="/js/app.min.js"></script>
        <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://laravel-manu-wildman2bad.c9users.io:8082/browser-sync/browser-sync-client.2.13.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
    </body>
</html>
