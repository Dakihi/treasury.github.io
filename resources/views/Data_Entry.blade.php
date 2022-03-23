@include('layouts.header')
@include('layouts.head')
//@include('layouts.sidebar')
@include('layouts.neck')
@yield('content')

@section('sidebar-content')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('MDBootstrap/css/modal.min.css')}}" rel="stylesheet">
    <link href="{{asset('MDBootstrap/css/mdb.min.css')}}" rel="stylesheet"><!-- Material Design Bootstrap -->
</head>

<body>
     <div class="well container-fluid"   >
    <div class="pull-center">
        <!--Content-->
        <div class="modal-content" style="width:80%;margin-left: 10%">
            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist" >
                    <li class="nav-item">
                        <p>   
                    </li>
                </ul>
                
            </div>
            
        </div>
    </div>
    
    
    
</body>


</html>

