@extends('layouts.app')

@section('content')
<html>
    <head>
    <title>Forta</title>
       <script type='text/javascript'>
            var centreGot = false;
        </script>
        {!! $map['js'] !!}

    </head>
<body>
    <div class="container">
           <div><h1> {{ Auth::user()->name}}, Ваш маршрут построен:</h1></div>
            {!! $map['html'] !!}

            <div id="directionsDiv"></div>
    </div>
</body>
</html>
@ENDSECTION