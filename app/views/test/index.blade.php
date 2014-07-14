@extends('layouts.master')

@section('titulo')
   Titulo desde la vista
@stop

@section('content')
    <h1>Hola desde la vista index con blade!!</h1>
    <p>{{$nombre}}</p>
    <p><?php echo HTML::link("test/hola", "Ir a Hola", array('id' => 'hola', 'class' => 'classhola' ));?></p>
    <p>
    	@for ($i = 0; $i < 10; $i++)
    		El valor de is es = {{ $i }} <br />
		@endfor
    </p>
@stop