<?php

class Post {
  private $username;
  private $date;
  private $message;
  private $title;
  private $id;
  
   public function __construct($id, $username, $title, $message, $date) {
    $this->id = $id;
    $this->username = $username;
    $this->title = $title;
    $this->message = $message;
    $this->date = $date;
  }
  //Getters
  public function getUsername() {
    return $this->username;
  }
  public function getDate(){
	return $this->date;
  }
  public function getMessage(){
	return $this->message;
  }
  public function getTitle(){
    return $this->title;
  }
  public function getId(){
    return $this->id;
  }

  public function getPosts(){
    // Create connection
    $conn = getConnection();

    $sql = "SELECT id, username, title, message, date FROM post ORDER BY date desc";
    $result = $conn->query($sql);
    $resuls = array();
      while($row = $result->fetch_assoc()) {
        $post = new Post($row["id"], $row["username"], $row["title"], $row["message"], $row["date"]);
        $results[] = $post;
    }
    return $results;
    $conn->close();
  }

  public function addPost(){
    $conn = getConnection();
    $sql = "INSERT INTO post ".
       "(username, title, message) ".
       "VALUES ".
       "('$this->username','$this->title','$this->message')";
    $conn->query($sql);
    $conn->close();
  }

  public function removePost($id){
    $conn = getConnection();
    $sql = "DELETE FROM post WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
  }
}

