<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <!-- Styles -->

    </head>
    <body>
 
    <div id="app">
        <button id="1" >1</button>
        <button id="2">2</button>
        <button id="3">3</button>
        <button id="4">4</button>

    </div>
    <footer>soy un footer</footer>

        <script src='{{mix("js/app.js")}}'></script>
    </body>
</html>
