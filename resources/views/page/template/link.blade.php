<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="theme-color" content="#083756" /> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrf_token: '{{ csrf_token() }}' }</script>
    <title>Mircopel</title>

    <link rel='shortcut icon' href='{{asset('img/logo/'.$favicon->image)}}' type='image/png' />
    <link rel='icon' href='{{asset('img/logo/'.$favicon->image)}}' type='image/png' />
        <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Ubuntu:400,500,700" rel="stylesheet">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> --}}
    <link href=" {{ asset('css/materialize/materialize.min.css')}}" rel="stylesheet">
    <link href="{{ asset('icons/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/website.css') }}" rel="stylesheet">

</head>
