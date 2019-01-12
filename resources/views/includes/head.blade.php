<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS de Bootstrap -->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap.min.css">

<!-- CSS Animate -->
<link href="{{ URL::asset('http://127.0.0.1:8000/css/animate.css') }}" rel="stylesheet">

<!-- Icono -->
<link rel="icon" href="http://127.0.0.1:8000/images/finders.ico" />

<!-- jS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://127.0.0.1:8000/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>

<!-- Font Awesome -->
{{-- <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> --}}
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!-- Fuentes -->
<link href="https://fonts.googleapis.com/css?family=Monda|PT+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet"> 

<!-- ANGULAR -->
<script src="http://127.0.0.1:8000/angular/js/angular.min.js"></script>
<script src="http://127.0.0.1:8000/angular/app.js"></script>

<!-- Estilo propio -->
<link href="{{ URL::asset('http://127.0.0.1:8000/css/estilo.css') }}" rel="stylesheet">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>CERES</title>

<!-- Scripts -->
<script src="{{ asset('http://127.0.0.1:8000/js/app.js') }}" defer></script>


<script src="{{ asset('http://127.0.0.1:8000/chart_modules/Chart.js') }}"></script>
<script src="{{ asset('http://127.0.0.1:8000/chart_modules/angular-chart.min.js') }}"></script>
<script src="{{ asset('http://127.0.0.1:8000/chart_modules/tc-angular-chartjs.min.js') }}"></script> 
