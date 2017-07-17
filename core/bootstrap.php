<?php

use App\Core\App;

App::bind('config', require('config.php'));
App::bind('database' , new QueryBuilder(Connection::make(App::get('config')['database'])));

function view($path , $data = [])
{
	extract($data);
	require ('app/views/'.$path.'.view.php');
}

function redirect($path)
{	
	header('location: '.$path);
}