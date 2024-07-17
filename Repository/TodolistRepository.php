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
  }
