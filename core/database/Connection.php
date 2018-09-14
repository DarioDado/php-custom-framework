<?php

namespace Core\Database;

class Connection
{
  public static function make($config) 
  {
    try {
      return new \PDO(
        $config['database']['connection'] . ';dbname=' . $config['database']['dbname'],
        $config['database']['username'],
        $config['database']['password'],
        $config['database']['options']
      );
    } catch(PDOException $e) {
      die($e->getMessage());
    }
  }
}