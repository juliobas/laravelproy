@extends('layouts.master')



@section('content')
    <h1>Hola desde la vista hola!!</h1>
    <p><?php echo HTML::link("test/index", "Ir a Index", array('id' => 'hola', 'class' => 'classhola' ));?></p>
    <p><?php echo HTML::image('images/julio.jpg', "Texto" , array('class' => 'image', 'id' => 'imagenes'));?></p>
@stop