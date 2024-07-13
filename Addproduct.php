<?php
error_reporting(0);
?>
<?php include('editdata.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Add product</title>
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
  
</head>
<body style="background-color:  #2E3136">
 
<div class="borcol" style = " margin-top : -10px ;
            margin-left : -10px;
            width  : 1517px"></div>


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
            width  : 1517px"></div>
    

    <div style="margin-top:10px";></div>
       <center><p class="panels">Add Product</p></center>
        <div style="margin-top:10px";></div>
       <center> <i class="fa fa-angle-double-down"></i><center>
        <div style="margin-top:5px";></div>
        <div class="signUpForm">
           <p class="signUpH">ADD PRODUCT</p>
            <p id="error2">You have entered a wrong email or password!</p>
            <form action="" method="post" enctype="multipart/form-data">


            <label class="text">product id
                    <br />
                    <input type="text" name="product_id" class="input" placeholder="Enter product id..." required="required" id="emailM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />
                <label class="text">product Type
                    <br />
                    <input type="text" name="product_type" class="input" placeholder="Enter product id..." required="required" id="emailM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />
                <label class="text">product Brand
                    <br />
                    <input type="text" name="product_brand" class="input" placeholder="Enter product id..." required="required" id="emailM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />
                <label class="text">Product Name
                    <br />
                    <input type="text" name="product_name" class="input" placeholder="Enter product name..." required="required" id="passwordM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />
                <label class="text">product color
                    <br />
                    <input type="text" name="product_color" class="input" placeholder="Enter product color..." required="required" id="emailM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />
                <label class="text">product cost
                    <br />
                    <input type="text" name="product_cost" class="input" placeholder="Enter product cost..." required="required" id="emailM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />
                <label class="text">Upload product image
                    <br/>
                    <input type="file" name="product_img">
                    <input type="submit"  name="insert" value="Save Data" class="submitBtn">
            </form>
</div>
    






</body>
</html>