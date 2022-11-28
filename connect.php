<?php
  if (isset($_POST['chooseDate']) || isset($_POST['name']) || 
  isset($_POST['phoneNumber']) || isset($_POST['email']) || isset($_POST['people']) || isset($_POST['note'])) {

    $chooseDate = $_POST['chooseDate'];
    $hours = $_POST['hours'];
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $people = $_POST['people'];
    $note = $_POST['note'];

    $conn = new mysqli('localhost','root','','nhahangthangbom');
    if($conn->connect_error){
      echo "$conn->connect_error";
      die("Connection Failed : ". $conn->connect_error);
	  } else {
      $stmt = $conn->prepare("insert into datban(chooseDate, hours, name, phoneNumber, email, people, note) values(?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssisis", $chooseDate, $hours, $name, $phoneNumber, $email, $people, $note);
      $execval = $stmt->execute();
    }

    }
?>