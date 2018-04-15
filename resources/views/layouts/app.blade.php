<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>App Name - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"> -->
        <!-- css -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/medium-editor.min.css')}}" rel="stylesheet" type="text/css"> -->
        <!-- <script type="text/javascript" src="{{ asset('js/medium-editor.js') }}"></script> -->

        <!-- <script type="text/javascript" src="{{asset('js/medium-editor-insert-plugin.js')}}"></script> -->
    </head>
    <body>

      <div id="app">
            @yield('content')
      </div>
      <!-- js -->
      <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
