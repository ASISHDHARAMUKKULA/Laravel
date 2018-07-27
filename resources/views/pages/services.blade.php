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
    @if(count($services)>0)
    <ul class="list-group">
        @foreach($services as $service)
            <li class="list-group-item">{{$service}}</li>
        @endforeach
    </ul>

        @endif

    
    <p>This is the Services Page</p>

      
    </body>
</html>
