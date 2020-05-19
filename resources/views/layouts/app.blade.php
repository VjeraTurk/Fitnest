<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- <link rel ="stylesheet" href = "{{asset('css/app.css')}}"> ovo je nesto sto ima u verziji 5-->
        <title>{{config('app.name'),'Fitnest'}}</title>
        <!-- Fonts -->
	   <!-- <link href="http://fonts.googleapis.com/css?family=Tangerine|Poiret+One|Amatic+SC" rel="stylesheet" type="text/css" >-->     
    </head>
    <body>
        @yield('content')
    </body>
</html>
