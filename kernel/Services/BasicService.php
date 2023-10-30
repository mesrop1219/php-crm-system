<?php

namespace Kernel\Services;

use PDO;

class BasicService
{
  protected PDO $client;

  public function __construct()
  {
    try {
      $this->client = new PDO(DSN, USER, PASSWORD);
    } catch (\Throwable $th) {
      echo "Sorry but we have a problem with database!";
    }
  }
}

?>