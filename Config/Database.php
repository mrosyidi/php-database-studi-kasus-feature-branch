<?php

  namespace COnfig
  {
    class Database
    {
      public static function getConnection(): \PDO
      {
        $host = "localhost";
        $port = 3306;
        $database = "belajar_php_todolist";
        $username = "root";
        $password = "12345";
        return new \PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
      }
    }
  }
