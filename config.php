<?php

return [
  'database' => [
    'dbname' => 'php_practitioner',
    'username' => 'homestead',
    'password' => 'secret',
    'connection' => 'mysql:host=localhost',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ],
  ],
];