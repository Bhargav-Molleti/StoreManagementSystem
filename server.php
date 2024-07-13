<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
    $resu = '<div style="position:absolute; 
                            bottom: 15px; 
                            margin-left:600px ; 
                            color: white;
                             border: 10px; 
                            background-color: red;
                            width: 15.5%;
                            border-radius: 10px;
                            padding: 10px;">The two passwords do not match</div>';

	array_push($errors, "$resu");
  echo $resu;
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1 ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
     //array_push($errors, "Username already exists");LIMIT 1 _assoc
     $resut = '<div style="position:absolute; 
                            bottom:80px; 
                            margin-left:600px ; 
                            color: white;
                             border:3px; 
                            background-color: red;
                            width: 14.5%;
                            border-radius: 10px;
                            padding: 10px;">Username/email already exists</div>';
    array_push($errors,("$resut"));
    echo $resut;
    }
  

    if ($user['email'] === $email) {
      //array_push($errors, "email already exists");
      $resul = '<div style="position:absolute; 
                            bottom:80px; 
                            margin-left:620px ; 
                            color: white;
                             border:3px; 
                            background-color: red;
                            width: 14.3%;
                            border-radius: 10px;
                            padding: 10px;">email/username already exists</div>';
     array_push($errors,( "$resul"));
     echo $resul;
    }
  }
  
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = ($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: userlog.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = ($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
  	  header('location: userhome.php');
  	}else {
  		$resul = '<div style="position:absolute; 
                            bottom:200px; 
                            margin-left:580px ; 
                            color: white;
                             border:3px; 
                            background-color: red;
                            width: 19%;
                            border-radius: 10px;
                            padding: 10px;">Wrong username/password combination</div>';
     echo $resul;      

  	}
  }
}

?>