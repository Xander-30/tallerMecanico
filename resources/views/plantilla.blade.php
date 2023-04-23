<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TallerMecanico</title>


    <!--=====================================
	PLUGINS DE CSS
	======================================-->

	{{-- BOOTSTRAP 4 --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    {{-- OverlayScrollbars.min.css --}}
	<link rel="stylesheet" href="{{ url('/') }}/css/plugins/OverlayScrollbars.min.css">
    
    {{-- CSS AdminLTE --}}
	<link rel="stylesheet" href="{{ url('/') }}/css/plugins/adminlte.min.css">
    {{--<link rel="stylesheet" href="{{ url('/') }}/css/plugins/estilos.css">--}}

    {{-- NOTIE --}}
	<link rel="stylesheet" href="{{ url('/') }}/css/plugins/notie.css">

    {{-- google fonts --}}
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- DataTables -->
	<link rel="stylesheet" href="{{ url('/') }}/css/plugins/dataTables.bootstrap4.min.css">	
	<link rel="stylesheet" href="{{ url('/') }}/css/plugins/responsive.bootstrap.min.css">

     <!--=====================================
	PLUGINS DE jS
	======================================-->

    {{-- Fontawesome --}}
	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

     <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    {{-- NOTIE --}}
	{{-- https://github.com/jaredreich/notie --}}
	<script src="{{ url('/') }}/js/plugins/notie.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	{{-- jquery.overlayScrollbars.min.js --}}
	<script src="{{ url('/') }}/js/plugins/jquery.overlayScrollbars.min.js"></script>

    {{-- JS AdminLTE --}}
	<script src="{{ url('/') }}/js/plugins/adminlte.js"></script>

    {{--Sweetalert--}}
    <script src="{{ url('/') }}/js/plugins/sweetalert.js"></script>
    
     <script type="text/javascript" src="libs/js/jquery.js"></script>
     <script type="text/javascript" src="libs/js/crud.js"></script> 

     <!-- DataTables 
	https://datatables.net/-->
	<script src="{{ url('/') }}/js/plugins/jquery.dataTables.min.js"></script>
	<script src="{{ url('/') }}/js/plugins/dataTables.bootstrap4.min.js"></script> 
	<script src="{{ url('/') }}/js/plugins/dataTables.responsive.min.js"></script>
	<script src="{{ url('/') }}/js/plugins/responsive.bootstrap.min.js"></script>	

 

</head>
<body class="sidebar-mini layout-fixed">
    <div class="wrapper">
        

          @include('modules.header')
          @include('modules.sidebar')

          {{--me trae un contenido dinamico--}}
          @yield('content')
          {{--@include('paginas.inicio')--}}
          @include('modules.footer')
          

    </div>
    


      {{--captura la ruta de mi cms--}}
    
    <input type="hidden" id="ruta" value="{{ url('/') }}">
    
    <script src="{{url('/')}}/js/codigo.js"></script>

</body>
</html>