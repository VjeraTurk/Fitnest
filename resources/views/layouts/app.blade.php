<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel ="stylesheet" href = "{{asset('css/app.css')}}"> ovo je nesto sto ima u verziji 5-->
        <link rel ="stylesheet" href = "{{asset('css/app.css')}}">
        <title>{{config('app.name'),'Fitnest'}}</title>
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
        <!-- <link href="http://fonts.googleapis.com/css?family=Tangerine|Poiret+One|Amatic+SC" rel="stylesheet" type="text/css" >-->     
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
