<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Update product</title>
    <link rel="icon" href="ggg.png"/>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
  
  <!-- <title>Sider Menu Bar CSS</title> rgb(245, 246, 242);-->
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
      table{
          font-family : arial,sans-serif;
          border-collapse : collapse;
          width : 1000px;
          background-color :  #2E3136;
          margin-left : -200px;
      }
      td,th{
          border : 2px  solid rgb(199, 236, 199);;
          padding : 8px;
          text-align : center;
          color : white;
          width : 1000px;
      }
      tr{
          border : 2px ;
          padding : 8px;
          text-align : center;
          width : 1000px;
      }
      .buu{
          background-color : rgb(56, 164, 231);
          border-radius: 5px;
          padding: 2px;
          cursor: pointer;
          margin: 2px 0px;
          font-weight: bold;
          width : 100%;
      }
      .signUpH{
        margin-top: 0px;
        background-color: #454955;
         padding: 10px;
         color: white;
         border-top-right-radius: 8px;
         border-top-left-radius: 8px;
         font-size: 150%;
         width : 980px;
         margin-left : -200px;
      }
   </style>  
</head>

<body style="background-color:  #2E3136 ;" >

<div class="borcol"  
     style = " margin-top : -10px ;
            margin-left : -10px;
            width  : 1536px">
</div>


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


    <div class="borcol"
    style = " margin-top : -8px ;
            margin-left : -10px;
            width  : 1536px">

    </div>
    

    <div style="margin-top:10px";></div>
       <center><p class="panels">Update Product</p></center>
        <div style="margin-top:10px";></div>
       <center> <i class="fa fa-angle-double-down"></i><center>
        <div style="margin-top:5px";></div>
        <div class="signUpForm">
           <p class="signUpH">UPDATE PRODUCT</p>


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
                            $result=mysqli_query($con,"SELECT * FROM product");
                            echo "<div>";
                            echo "<table>";
                            //echo "<cellspacing'2' align='center' cellpadding='10'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>product_id</th> <th>product_name</th> <th>product_color</th>  <th>product_cost</th> <th>product_img</th> <th>update</th> <th>Delete</th>";
                            echo "</tr>";
                            echo "</thead>";
                            
                         
                            while($row=mysqli_fetch_array($result))
                                { 

                                   echo "<tbody>
                                   <tr>
                                   <td>".$row['product_id']."</td>
                                   <td>".$row['product_name']."</td>
                                   <td>".$row['product_color']."</td>
                                   <td>".$row['product_cost']."</td>
                                   <td>".$row['product_img']."</td>
                                   <td><a href='update.php?product_id=$row[product_id]'><button class='buu'>update</button></a></td>
                                   <td><a href='deletemooo.php?product_id=$row[product_id]'><input class='buu' type='submit' value='Delete'></a></td>
                                   </tr>
                                    </tbody>";
                                } 
                          echo "</table>";
                          echo "</div>";
                        
                        }
?> 
</body>
</html>
