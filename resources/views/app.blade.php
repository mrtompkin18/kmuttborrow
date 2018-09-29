<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit:400" rel="stylesheet" type="text/css">
    <style>
        * {
             font-family: "Kanit" !important;
        }
        body {
            background: #efefef;
        }
    </style>
</head>

<body>
    <div id="app" class="content">
      <user-form></user-form>
    </div>
    <script type="text/javascript" src="/js/app.js"></script>
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
</body>

</html>
