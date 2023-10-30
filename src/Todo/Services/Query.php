<?php

namespace App\Todo\Services;

class Query
{
  public static string $INSERT = "INSERT INTO Todo(todo, customer_id) VALUES(:todo, :c_id)";
  public static string $SELECT = "SELECT * FROM Todo WHERE customer_id = :c_id";
  public static string $DELETE = "DELETE FROM Todo WHERE id = :id";
  public static string $UPDATE = "UPDATE Todo SET todo = :todo WHERE id = :id";
  public static string $GET_ONE = "SELECT * FROM TODO WHERE customer_id = :c_id";
}

?>