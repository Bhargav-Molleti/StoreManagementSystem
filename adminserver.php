<?php

session_start();

$AdmiName ="";
$password ="";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'project');

//login admin

if (isset($_POST['login_admin'])) {
  $AdminName = mysqli_real_escape_string($db, $_POST['AdminName']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($AdminName)) {
  	array_push($errors, "AdminName is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = ($password);
  	$query = "SELECT * FROM admins WHERE AdminName='$AdminName' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results)){
  	  $_SESSION['AdminName'] = $AdminName;
  	  $_SESSION['password'] = $password;
  	  header('location: adminhome.php');
  	}else {
  		//array_push($errors, "Wrong AdminName/password combination");
		  $resul = '<div style="position:absolute; 
		  bottom:200px; 
		  margin-left:580px ; 
		  color: white;
		   border:3px; 
		  background-color: red;
		  width: 20.4%;
		  border-radius: 10px;
		  padding: 10px;">Wrong Admin-Name/password combination</div>';
		  echo $resul;      

  	}
  }
}
?>