<?php

  namespace Service
  {
    interface TodolistService
    {
      public function showTodolist(): void;
      public function addTodolist(string $todo): void;
      public function removeTodolist(int $number): bool;
    }
  }
