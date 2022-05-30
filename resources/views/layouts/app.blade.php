<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{asset('vendors/scripts/core.js')}}"></script>
    <script src="{{asset('vendors/scripts/script.min.js')}}"></script>
    <script src="{{asset('vendors/scripts/process.js')}}"></script>
    <script src="{{asset('vendors/scripts/layout-settings.js')}}"></script>
    <!-- switchery js -->
    <script src="{{asset('src/plugins/switchery/switchery.min.js')}}"></script>
    <!-- bootstrap-tagsinput js -->
    <script src="{{asset('src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
    <!-- bootstrap-touchspin js -->
    <script src="{{asset('src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('vendors/scripts/advanced-components.js')}}"></script>
    <link rel="stylesheet" type="text/css"
        href="{{asset('admin/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .tag {
            background-color: coral;
            display: inline-block;
            padding: 2px 6px;
            margin: 2px;
            font-size: 15px;
            border-radius: 2px;
        }

     .tag [data-role="remove"] {
            margin-left: 8px;
            cursor: pointer;

        }
    </style>
</head>


<body>
@if(Session::has('success'))
    <style>
        .ajs-message.ajs-custom {
            color: white;
            background-color:#FF9138;
            border-color:#FF9138;
        }
    </style>
    <script>
        alertify.notify('{{Session::get('success')}}', 'custom', 2, function () { console.log('dismissed'); });
        alertify.set('notifier', 'position', 'bottom-right');
    </script>
    @endif
    @yield('content')

</body>

</html>