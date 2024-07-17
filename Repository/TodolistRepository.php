<?php

  namespace Repository
  {
    use Entity\Todolist;

    interface TodolistRepository
    {
      public function findAll(): array;
      public function save(Todolist $todo): void;
      public function remove(int $number): bool;
    }

    class TodolistRepositoryImpl implements TodolistRepository
    {
      private \PDO $connection;

      public function __construct(\PDO $connection)
      {
        $this->connection = $connection;
      }

      public function findAll(): array
      {
        $sql = "SELECT id, todo FROM todolist";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $todolist = [];

        foreach($statement as $row)
        {
          $todo = new Todolist();
          $todo->setId($row['id']);
          $todo->setTodo($row['todo']);
          $todolist[] = $todo;
        }

        return $todolist;
      }

      public function save(Todolist $todo): void
      {
        $sql = "INSERT INTO todolist(todo) VALUES(?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$todo->getTodo()]);
      }

      public function remove(int $number): bool
      {

      }
    }
  }
