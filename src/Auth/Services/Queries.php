<?php

namespace App\Auth\Services;

class Queries
{
  public static string $INSERT = "INSERT INTO Customer(email, password, name, lastname, role) VALUES(:email, :pwd, :name, :lname, :role)";
  public static string $FIND_USER = "SELECT * FROM Customer WHERE email = :email";
}