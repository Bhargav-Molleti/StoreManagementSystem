<?php
        //product details
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "project";

        //connection
        $con = new mysqli($host,$user,$pass,$db);

        //connection checking
        if(!$con)
        {
            echo "there is a problem while connection not working";
        }
        else
        {           
            $username = $_GET['username'];
            $query = "SELECT * FROM users WHERE username = '$username'";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);
            $result = mysqli_fetch_assoc($data);
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Product</title>
    <link rel="icon" href="ggg.png"/>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
  
  <!-- <title>Sider Menu Bar CSS</title> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    
    <style>
        .signUpH{
        margin-top: 0px;
        background-color: #454955;
         padding: 10px;
         color: #82858E;
         border-top-right-radius: 8px;
         border-top-left-radius: 8px;
         font-size: 150%;
         width : 100%%;
         margin-left : 0px;
      }


    </style>

</head>
<body style="background-color:  #2E3136;">
 
<div class="borcol" style = " margin-top : -10px ;
            margin-left : -10px;
            width  : 1533px"></div>



<input type="checkbox" id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
  </label>
  <div class="sidebar">
  <header>S<sub>2</sub>vbr</header>
<ul>
<li><a href="adminhome.php"><i class="fas fa-qrcode"></i>Home</a></li>
<li><a href="Addproduct.php"><i class="fas fa-link"></i>Add Product</a></li>
<li><a href="modify.php"><i class="fas fa-link"></i>Update Product</a></li>
<li><a href="deleteown.php"><i class="fas fa-link"></i>Delete Product</a></li>
<li><a href="userdetails.php"><i class="fas fa-sliders-h"></i>User Details</a></li>
<li><a href="Adminlog.php"><i class=""></i>LOG OUT</a></li>
</ul>
</div>
  
     
    <div class="idd">            
        <img src="ggg.png"  width="20%" height="20%" class="img">
                
        <div>
        <h1 class="h1"><font color = "white">S<sub>2</sub>vbr</font><font color = "green"> store</font><sup style="font-size:50%; color: white;">&reg</sup></h1>
        </div>
    </div>

    <div class="borcol" style = " margin-top : -8px ;
            margin-left : -10px;
            width  : 1533px"></div>
    
    <div style="margin-top:30px";></div>
       <center><p class="panels">Delete Product</p></center>
        <div style="margin-top:10px";></div>
        <center><i class="fa fa-angle-double-down"></i></center>
        <div style="margin-top:10px";></div>
        <div class="signUpForm">
         <center> <p class="signUpHeading">DELETE PRODUCT</p></center>
          <form  method="post">
          <label class="text">product id
            <br />
            <input type="text" name="username" class="input" value="<?php echo $result['username']; ?>" required="required" id="emailM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
          </label>
                <br />
                <input type="submit" name="delete" value="DELETE" class="submitBtn">
          </form>
           </div>
</div>

</body>
</html>


<?php

//$connection = mysqli_connect("localhost","root","");
//$db = mysqli_select_db($connection, 'phpcrud');

if(isset($_POST['delete']))
{
    $username = $_POST['username'];

    $query = "DELETE FROM users WHERE username='$username' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script>alert("Data Deleted");
        window.loaction.href="userdetails.php";</script>';

        
        //header("location:userdetails.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>
