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
        <div class="my-container" style="margin-top: 30px; margin-bottom: 30px;">
            <div class="about text-center h2">
                 <h3 class="h2 h3_under">Contact Us</h3> 
            </div>
        </div>
     
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.1501993708443!2d-77.0387184844226!3d38.897680454532136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7bcdecbb1df%3A0x715969d86d0b76bf!2sThe+White+House!5e0!3m2!1sen!2sbe!4v1473417480097" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
       
        <div class="my-container grouped-form">
            <div class="contact-box">
                <h4 class="h2">Headquarters</h4>
                <a href="#map">
                    <span class="glyphicon glyphicon-map-marker"></span>
                    <span>Brussels, Belgium</span>
                </a>
                <a href="tel:0032495304278">
                    <span class="glyphicon glyphicon-earphone"></span>
                    <span>+32 495 304 278</span>
                </a>
                <a href="mailto:manu.temeian@sef.com">
                    <span class="glyphicon glyphicon-envelope"></span>
                    <span>manu.temeian@sef.com</span>
                </a>
                <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
            </div>
            {!! Form::open(array('url' => 'foo/bar')) !!}
                <div >
                    {!! Form::text('fname', '', array('placeholder' => 'First Name *')) !!}
                    {!! Form::text('lname', '', array('placeholder' => 'Last Name')) !!}
                </div>
                <div >
                    {!! Form::text('email', '', array('placeholder' => 'Email *')) !!}
                    {!! Form::text('email', '', array('placeholder' => 'Service')) !!}
                </div>
                <div>
                     {!! Form::textarea('mess', '', array('placeholder' => 'Message *', 'size'=>'50x10')) !!}
                </div>
                <div>
                    <p>All fields with * are obligatory</p>
                    {!! Form::submit('Send Message!') !!}
                </div>
            {!! Form::close() !!}      
        </div>
       
        @include('footer')
        <script type="text/javascript" src="/js/app.min.js"></script>
        <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://laravel-manu-wildman2bad.c9users.io:8082/browser-sync/browser-sync-client.2.13.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
    </body>
</html>
