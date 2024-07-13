<?php include('adminserver.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <title>Admin Login</title>
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
         width : 96.6%;
         margin-left : 0px;
      }
   </style>  

<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
</script>


</head>
<body style = "background-color:  #2E3136; ">


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

 
<div class="borcol" style = " margin-top : -10px ;
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
        <center><p class="panels">Admin Login</p></center>
        <div style="margin-top:10px";></div>
        <center><i class="fa fa-angle-double-down"></i></center>
        <div style="margin-top:10px";></div>
        <div class="signUpForm">
            <center><p class="signUpH">LOG IN</p></center>
          <!--  <p id="error2">You have entered a wrong email or password!</p>-->
            <form method="post" action="Adminlog.php">
            <?php include('errors.php'); ?>
                <label class="text">Admin Name
                    <br />
                    <input type="text" name="AdminName" class="input" placeholder="Admin name..." required="required" id="emailM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />
                <label class="text">Password
                    <br />
                    <input type="password" name="password" class="input" placeholder="Password..." required="required" id="passwordM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />
                <button type="submit" name="login_admin" class="submitBtn">LOG IN</button>
            </form>
           <!-- <div id="display1">
                <i class="fa fa-spinner"></i> Logging in...</div>-->
        </div>
</div>
</body>
</html>