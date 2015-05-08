<?php

class User {

  private $id;
  private $tunnus;
  private $salasana;

  public function __construct($id, $tunnus, $salasana) {
  $this->id = $id;
	$this->tunnus = $tunnus;
  $this->salasana = $salasana;
  }
  public function getId(){
	return $this->id;
  }
  public function getUser($user ,$pass){
    $username = siistiString($user);
    $password = md5($pass);
    $conn = getConnection();
    $sql = "SELECT id, username, password FROM users WHERE username = '$username' AND password = '$password' LIMIT 1";
    $result = $conn->query($sql);
    $user = null;
      while($row = $result->fetch_assoc()) {
        $user = new User($row["id"], $row["username"], $row["password"]);
    }
    return $user;
    $conn->close();
  }
}
