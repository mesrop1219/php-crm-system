<?php

namespace App\Actions\Services;

class Query
{
  public static string $SELECT = "SELECT * FROM Action WHERE customer_id = :c_id";
  public static string $INSERT = "INSERT INTO Action(title, action, sum, customer_id) VALUES(:title, :act, :sum, :c_id)";
}

?>