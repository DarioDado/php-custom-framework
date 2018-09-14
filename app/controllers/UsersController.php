<?php

namespace App\Controllers;

use Core\App;

class UsersController
{
  public function index()
  {
    $users = App::get('database')->fetchAll('users');
    return view('users',compact('users'));
  }
  
  public function store()
  {
    App::get('database')->insert('users', [
      'name' => $_POST['name'],
    ]);

    redirect('/users');
  }

  public function create()
  {
    return view('create');
  }
}