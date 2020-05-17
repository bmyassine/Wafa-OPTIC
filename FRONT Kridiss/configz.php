<?php
class configz
{
  private $conn;
  function __construct()
  {
    $servername="localhost";
    $dbname="bij";
    $username="root";
    $password="";
    $this->conn=new PDO("mysql:host=$servername;port=3308;dbname=$dbname",$username,$password);
  }
  function getConnection()
  {
    return $this->conn;
  }
} ?>
