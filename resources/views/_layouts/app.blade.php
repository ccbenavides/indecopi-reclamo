<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css" >
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/skins/_all-skins.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
        <style>
        *{
            font-family: 'Lato', sans-serif;
        }

    .linea-title {
        padding-bottom: 20px;
        position: relative;
    }
    .linea-title:after {
        content: "";
        width: 60px;
        height: 2px;
        position: absolute;
        background: #fcbb17;
        bottom: 0;
        left: 0;
        right: 0;
        margin: 0 auto;
    }
</style>
    @yield('extra-css')
</head>
<body class="skin-blue" style="background-color: #ecf0f5;">

<div class="container" style="background:white;">
    @yield('content')

    <!-- FOOTER -->
<div class="container-fluid footer row" >
    <div class="container">
        <footer>
        <p class="pull-right panel-body"><a href="#">Back to top</a></p>
        <p>&copy; 2018 Team LTS. &middot;</p>
        </footer>
    </div>
</div>
</div>



    @yield('jquery')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.responsive.min.js') }}"></script>
    @yield('extra-js')

</body>
</html>