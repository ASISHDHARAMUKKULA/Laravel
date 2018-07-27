<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
     @include('ins.navbar');
    <h1>{{$title}}</h1>
    <p>This is the Laravel Application</p>
    <a href="/posts">Blog</a>
        
    </body>
</html>
