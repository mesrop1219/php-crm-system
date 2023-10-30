<?php

namespace App\Actions\Services;

use Kernel\Services\BasicService;
use App\Actions\Services\Query;
use PDO;

class ActionsService extends BasicService
{
  public function __construct()
  {
    parent::__construct();
  }

  public function read_actions(int $customer_id)
  {
    $stmt = $this->client->prepare(Query::$SELECT);
    $stmt->execute(["c_id" => $customer_id]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function create_action(array $data)
  {
    $stmt = $this->client->prepare(Query::$INSERT);
    $stmt->execute([ 
      "title" => $data["title"], 
      "act" => $data["action"],
      "sum" => $data["sum"],
      "c_id" => $data["customer_id"] 
    ]);

    return "Your action created!";
  }
}

?>