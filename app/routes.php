<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('about/culture', 'PagesController@aboutCulture');
$router->get('contact', 'PagesController@contact');
$router->get('create', 'UsersController@create');
$router->get('users', 'UsersController@index');

$router->post('names', 'UsersController@store');

