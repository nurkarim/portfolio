<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('public/css/app.css') }}" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}"/>
        <link rel="stylesheet" href="{{ asset('public/css/reset.css') }}"/>
        <link rel="stylesheet" href="{{ asset('public/css/protfolio.css') }}"/>
        
  
        <link rel="stylesheet" href="{{ asset('public/css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('public/css/colors/green2.css') }}" id="color"/>
        <!-- Google Web fonts
================================================== --> 
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

<!-- Font Icons
================================================== --> 
    <link rel="stylesheet" href="{{ asset('public/icon-fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('public/icon-fonts/real-estate/flaticon.css') }}" />
        <meta name="csrf-token" value="{{ csrf_token() }}" />
    </head>
    <body>
    <div class="wrapper top_60 container">
        <div  id="app">
            
                       
        </div>
    </div>
<script src="{{ asset('public/js/app.js') }}" type="text/javascript"></script>
        <!-- Javascripts
================================================== -->  
<script src="{{ asset('public/js/jquery-2.1.4.min.js') }}"></script> 
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script> 

<link rel="stylesheet" href="{{ asset('public/css/Demo.min.css') }}" />
 
    </body>
</html>