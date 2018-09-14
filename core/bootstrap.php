<?php

use Core\App;
use Core\Database\QueryBuilder;
use Core\Database\Connection;

App::bind('config', require 'config.php');


// now when we required composer autoload.php file, all classes will load automaticly
// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/QueryBuilder.php';
// require 'core/database/Connection.php';


App::bind('database', new QueryBuilder(Connection::make(App::get('config'))));

function view($name,$data=[])
{
  extract($data);

  return require "app/views/$name.view.php";
}

function redirect($path)
{
  header("Location: $path");
}