<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
</head>

<body>
     <div id="app" style="width:60%; margin: 100px auto">
        @yield('content')
    </div>
    <script type="text/javascript" src="/js/app.js"></script>
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
</body>

</html>
