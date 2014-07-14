<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>
		@section('titulo')
			titulo desde template
		@show
	</title>
	@section('javascript') <?php echo HTML::script('js/funciones.js');?> @show
	@section('css') <?php echo HTML::style('css/estilos.css');?> @show
</head>
<body>
	<h1>
		@section('titulo')
			Titulo desde el tamplate
		@show
	</h1>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>