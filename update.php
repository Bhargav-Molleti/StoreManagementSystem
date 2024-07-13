<?php 
error_reporting(0); 
?>
<?php
        //product details   <?php error_reporting(0); 

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
            $product_id = $_GET["product_id"];
            $query = "SELECT * FROM product WHERE product_id = '$product_id'";
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
    <title>Admin Login</title>
    <link rel="icon" href="ggg.png"/>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
  
  <!-- <title>Sider Menu Bar CSS</title> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <!-- diplay div 
    
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    -->    <style>
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
<body style="background-color: #2E3136;">
 
<div class="borcol" style = " margin-top : -10px ;
            margin-left : -10px;
            width  : 1519px"></div>



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
<li><a href="modify.php"><i class="fas fa-link"></i>update Product</a></li>
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
            width  : 1519px"></div>

<div style="margin-top:30px";></div>
       <center> <p class="panels">Update Product</p></center>
        <div style="margin-top:10px";></div>
       <center> <i class="fa fa-angle-double-down"></i></center>
        <div style="margin-top:10px";></div>
        <div class="signUpForm">
          <center> <p class="signUpH">UPDATE PRODUCT</p><center>


          <form method="post" action="update.php" enctype="multipart/form-data">

            <label class="text">product id
                    <br />
                    
                    <input type="text" name="product_id" value="<?php echo $result['product_id']; ?> Id Can NOt Be Not Changed ..."  class="input" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />
                <label class="text">product Type
                    <br />
                    <input type="text" name="product_type" value="<?php echo $result['product_type']; ?>"  class="input" placeholder="Enter product type..." required="required" id="emailM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />
                <label class="text">product Brand
                    <br />
                    <input type="text" name="product_brand" value="<?php echo $result['product_brand']; ?>"  class="input" placeholder="Enter product brand..." required="required" id="emailM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />    
                <label class="text">Product Name
                    <br />                          
                    <input type="text" name="product_name" value="<?php echo $result['product_name']; ?>" class="input" placeholder="Enter product name..." required="required" id="passwordM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />
                <label class="text">product color
                    <br />
                    <input type="text" name="product_color" value="<?php echo $result['product_color']; ?>" class="input" placeholder="Enter product color..." required="required" id="emailM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />
                <label class="text">product cost
                    <br />
                    <input type="text" name="product_cost" value="<?php echo $result['product_cost']; ?>" class="input"  placeholder="Enter product cost..." required="required" id="emailM" onfocus="this.className += ' inputfocus'"
                        onblur="this.className='input'">
                </label>
                <br />
                <label class="text">Upload product image
                    <br/>
                   <input value="<?php echo $result['product_img']; ?>"  class="input">
                    <input type="file" name="product_img" value="<?php echo $result['product_img']; ?>" >
                </label>
                <button name="update"  class="submitBtn">Update</button>
                </form>
             </div>
</div>
  
</body>
</html>

<?php
//if(isset($_POST['update']))

if (isset($_POST['update']) && isset($_FILES['product_img'])) 
{
    //product details
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "project";

    //connection  $data 
    $con = new mysqli($host,$user,$pass,$db);

    //connection checking
    if(!$con)
    {
        echo "there is a problem while connection not working";
    }
    else
    {
        $product_id = $_POST['product_id'];
        $product_type = $_POST['product_type'];
        $product_brand = $_POST['product_brand'];
        $product_name = $_POST['product_name'];
        $product_color = $_POST['product_color'];
        $product_cost = $_POST['product_cost'];
        //$product_img = $_FILES['product_img'];

    $filename = $_FILES['product_img']['name'];
    $tempname = $_FILES['product_img']['tmp_name'];
    $folder = "images/".$filename;
    move_uploaded_file($tempname,$folder);

                    
        $query = mysqli_query($con,"UPDATE product SET product_name ='$product_name' , product_type = '$product_type' , product_brand = '$product_brand' , product_color = '$product_color' , product_cost = '$product_cost' , product_img = '$folder'  WHERE product_id = '$product_id'");
        if($query)
        {
            echo "<script>alert('done');</script>";
            
        }
        else
        {
            echo "<script>alert('done');</script>";

        }
    
    }
}

?>