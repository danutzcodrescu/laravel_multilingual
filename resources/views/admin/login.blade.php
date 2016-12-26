<!Doctype html>
<html>
    <head>
        <title>Autentificare</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/css/app.min.css" rel="stylesheet" type="text/css">
    </head>
<body>
    <h1>Autentificare panou de control</h1>
     {!! Form::open(array('url' => '/admin')) !!}
            <div >
                {!! Form::label('email', 'Adresa email') !!}
                {!! Form::text('email', '', array('placeholder' => 'Adresa email')) !!}
                {{ $errors->first('email') }}
            </div>
            <div>
                {!! Form::label('password', 'Parola') !!}
                {!! Form::password('password', '', array('placeholder' => 'Parola')) !!}
                {{ $errors->first('password') }}
            </div>
            <div>
                <button type="submit">Autentificare!</button>
            </div>
    {!! Form::close() !!}  

</body>
</html>