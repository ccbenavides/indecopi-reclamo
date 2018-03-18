<!DOCTYPE html>
<html lang="en">
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
        <style>
        *{
            font-family: 'Lato', sans-serif;
        }
        </style>
    @yield('extra-css')
</head>
<body>
    <div class="login-page">
    
   <!-- <section class="container-fluid">
        <section class="container">
            <div class="row">
                <div class="text-center">
                    <h2>Info Empresa</h2>
                </div>
            </div>
        </section>
    </section>-->
    <div class="container" style="background:white;">
    
    @yield('content')
    </div>
    <br/>

<section class="container-fluid ">
    <div class="container">
        <div class="text-center">
            <p>CopyRight 2018 - powered by EquipoLts</p>
        </div>
    </div>
</section>
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