<?php

namespace App\Auth\Services;

use Kernel\Services\BasicService;
use App\Auth\Services\SqlQueries;
use PDO;

class AuthService extends BasicService
{
  public function __construct()
  {
    parent::__construct();
  }

  public function create_user(array $user)
  {
    $pwd = password_hash($user["password"], PASSWORD_BCRYPT);
    $stmt = $this->client->prepare(Queries::$INSERT);
    $stmt->execute([
        "email" => $user["email"],
        "pwd" => $pwd,
        "name" => $user["name"],
        "lname" => $user["lastname"],
        "role" => $user["role"]
      ]);
  }

  public function get_user(string $email)
  {
  $stmt = $this->client->prepare(Queries::$FIND_USER);
  $stmt->execute(["email" => $email]);

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

?>