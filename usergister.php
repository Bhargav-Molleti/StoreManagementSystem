<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <title>User Registration</title>
    <link rel="icon" href="ggg.png"/>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
  
  <!-- <title>Sider Menu Bar CSS</title> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<style>
    .signUpH{
        margin-top: 0px;
        background-color: #454955;
         padding: 10px;
         color: #82858E;
         border-top-right-radius: 8px;
         border-top-left-radius: 8px;
         font-size: 150%;
         width :96.6%;
         margin-left : 0px;
      }
      b{
          color : white;
          font-size : 15px;
      }
     .a {
        background: none;
         border: none;
         background-color: rgb(56, 164, 231);
         margin: 10px 0px;
        padding: 10px;
        border-radius: 10px;
         outline: none;
         color: white;
        font-weight: bold;
        letter-spacing: 1px;
        width: 30%;
         transition: 1s;
         cursor: pointer;   
      }
 </style>
    
<body  style = "background-color: #2E3136; ">
 
<input type="checkbox" id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
  </label>
  <div class="sidebar">
  <header>S<sub>2</sub>vbr</header>
<ul>
<li><a href="index.php"><i class="fas fa-qrcode"></i>Pre-Home</a></li>
<!--<li><a href=""><i class="fas fa-link"></i>Cart</a></li>
<li><a href="userhome.php?logout='1'"><i class=""></i>LOG OUT</a></li>-->
</ul>
</div>




<div>
    <div class="borcol"
    style = " margin-top : -10px ;
            margin-left : -10px;
            width  : 1536px">
</div>    
    <div class="idd">            
        <img src="ggg.png"  width="20%" height="20%" class="img">
                
        <div>
        <h1 class="h1"><font color = "white">S<sub>2</sub>vbr</font><font color = "green"> store</font><sup style="font-size:50%; color: white;">&reg</sup></h1>
        </div>
    </div>
    <div class="borcol" style = " margin-top : -8px ;
            margin-left : -10px;
            width  : 1536px">
</div>
    <div style="margin-top:30px";></div>
        <center><p class="panels">User Registration</p></center>
        <div style="margin-top:10px";></div>
        <center><i class="fa fa-angle-double-down"></i></center>
        <div style="margin-top:10px";></div>
        <div class="signUpForm">
           <center> <p class="signUpH">Sign up</p></center>
           <!-- <p id="error2">You have entered a wrong email or password!</p>--> <!-- JavaScript:void(0)hp include('errors.php'); ?>-->
            <form method="post" action="usergister.php" >
            <?php include('errors.php'); ?>

                <label class="text">User Name/User ID
                    <br />
                    <input type= "text" name="username" value="<?php echo $username; ?>" class="input" placeholder="user name..." required="required" id="usernameM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>

                <label class="text">Email
                    <br />
                    <input type="email" name="email" value="<?php echo $email; ?>" class="input" placeholder="Email..." required="required" id="emailM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />

                <label class="text">Password
                    <br />
                    <input type="password" name="password_1" class="input" placeholder="Password..." required="required" id="passwordM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />

                <label class="text">Conform Password
                    <br />
                    <input type="password" name="password_2" class="input" placeholder="conform password..." required="required" id="passwordM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>


            <pre><button type="submit" name="reg_user" value="Register" class="submitBtn">Register</button>      <b>Already a member? </b><a class="a" href="userlog.php">Sign in</a></pre>
  	            
            </form>
            <!--<div id="display1">
                <i class="fa fa-spinner"></i> Logging in...</div>
        </div>-->
</div>
</body>
</html>