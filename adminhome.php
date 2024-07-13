<?php
    
  session_start(); 

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location:Adminlog.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Home</title>
    <link rel="icon" href="ggg.png"/>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
  
  <!-- <title>Sider Menu Bar CSS</title> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <!-- diplay div -->   
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid  #303030;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
        .proHead{
    text-align: center;
    color: rgb(89, 156, 255);
    background-color: #454955;
    width: 100%;
    margin: 5px auto 0px;
    padding: 10px;
    border-radius: 10px;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    letter-spacing: 1px;
    font-size: 150%;
}
.imgCover{
    width: 200px;
    height: 170px;
    overflow: hidden;
    border-bottom: 3px solid rgb(221, 219, 219);
    cursor: pointer;
    overflow: hidden;
}
.fContainer1, .fContainer2,{
    border: 1px solid rgb(221, 219, 219);
    margin: 0px;
    padding: 0px;
    width: 2%;
    margin:0px auto;
    border-top: none;
    border-bottom: none;
}
.boor{
    margin-left : 20px;
    margin-right : 10px;
}
.w{
    margin-left : 370px;
    margin-top : 50px;
    margin-bottom : 0px;
}
.h{
    margin-left : 640px;
    margin-top : -200px;
    margin-bottom : 300px;
    color :rgb(84, 199, 84);
    font-size : 60px;
}
</style>

<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
</script>

</head>
<body>
 
<div class="borcol" style = " margin-top : -10px ;
            margin-left : -10px;
            margin-top : -10px;
            width  : 1536px"></div>

<div style="background-color:  #2E3136;
	          width:1536px;
	          height:40%; 
              margin-left : -10px;                                          
            overflow:fixed;">


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
<li><a href="adminhome.php?logout='1'"><i class=""></i>LOG OUT</a></li>
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
            width  : 1546px"></div></div>
    <div>
        <center><h1 class="h1"><font color = "gray">S<sub>2</sub>vbr</font><font color = "green"> store</font></h1></center>
        </div>

<form method="post">
<div class="filter">
    <div id="search-container">

        <input type="text"   name="product_search"  placeholder="Search product name here..">
        <button name="search">Search</button>
</div>
</div><br><br>
</form>



<?php

    if(isset($_POST['search']))
    {
        //user details
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
            $product_search = $_POST['product_search'];

            $result=mysqli_query($con,"SELECT * FROM product WHERE product_type = '$product_search' || product_brand = '$product_search' ");


            while($row = mysqli_fetch_array($result)){ 
                ?>

                
            <div class="borr">   
              <div class="col-md-3">
                <div class="product">
                    <img src="<?php echo $row["product_img"]; ?>" class="img-responsive" style="width:350px;  height:350px;">
                    <h5 class="text-info"><?php echo $row["product_name"]; ?></h5>
                    <h5 class="text-info">Colour : <?php echo $row["product_color"]; ?></h5>
                    <h5 class="text-danger">Rs : <?php echo $row["product_cost"]; ?></h5>    
                </div><br><br>
             </div>
            </div>
                <?php
            }       

        }
    }
?>

<img src="wel.png" class="w"><br>
<i class="h">Bhargav</i>


</body>
</html>