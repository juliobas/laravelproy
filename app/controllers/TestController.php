<?php

class TestController extends BaseController {

	/**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.master';

    public function getIndex()
    {
    	$nombre = "Julio Centeno";
    	return $this->layout->content = View::make('test.index', compact("nombre"));
    }

    public function getHola()
    {
    	return $this->layout->content = View::make('test.hola');
    }

}
