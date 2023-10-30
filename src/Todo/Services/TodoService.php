<?php

namespace App\Todo\Services;

use Kernel\Services\BasicService;
use App\Todo\Services\Query;
use PDO;

class TodoService extends BasicService
{
  public function __construct()
  {
    parent::__construct();
  }

  public function read_todos(int $customer_id)
  {
    $todos = $this->client->prepare(Query::$SELECT);
    $todos->execute(["c_id" => $customer_id]);

    return $todos->fetchAll(PDO::FETCH_ASSOC);
  }

  public function create_todo(string $todo, int $customer_id)
  {
    $stmt = $this->client->prepare(Query::$INSERT);
    $stmt->execute(["todo" => $todo, "c_id" => $customer_id]);
    
    return "Todo is created!";
  }

  public function delete_todo(int $id)
  {
    $stmt = $this->client->prepare(Query::$DELETE);
    $stmt->execute(["id" => $id]);

    return "Todo is deleted!";
  }

  public function update_todo(string $todo, int $id)
  {
    $stmt = $this->client->prepare(Query::$UPDATE);
    $stmt->execute(["todo" => $todo, "id" => $id]);

    return "Todo is updated!";
  }
}

?>