<?php
error_reporting(0);
?>
<?php

$connection = mysqli_connect("localhost","root","","project");
$db = mysqli_select_db($connection, 'project');

//if(isset($_POST['insert']))
if (isset($_POST['insert'])) 
{
    $filename = $_FILES['product_img']['name'];
    $tempname = $_FILES['product_img']['tmp_name'];
    $folder = "images/".$filename;
    move_uploaded_file($tempname,$folder);


    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_color = $_POST['product_color'];
    $product_cost = $_POST['product_cost'];
    $product_type = $_POST['product_type'];
    $product_brand = $_POST['product_brand'];
   /* $product_img = $_FILES['product_img'];

    $img_name = $_FILES['product_img']['name'];
	$img_size = $_FILES['product_img']['size'];
	$tmp_name = $_FILES['product_img']['tmp_name'];
	$error = $_FILES['product_img']['error'];

    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Sorry, your file is too large.";
            header("Location: editdatahtml.php?error=$em");
        }else {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg", "jpeg", "png"); 

                if (in_array($img_ex_lc, $allowed_exs)) {
                     $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                     $img_upload_path = 'uploads/'.$new_img_name;
                     //move_uploaded_file($tmp_name, $img_upload_path);

                    //$sql = "INSERT INTO product (product_img) VALUES('$new_img_name')";
                    $query = "INSERT INTO product (product_id, product_name, product_color, product_cost,product_img)  VALUES ('$product_id','$product_name','$product_color','$product_cost','$new_img_name')";
                    $query_run = mysqli_query($connection, $query);

                }
            }
        }*/
        $query_run = mysqli_query($connection,"INSERT INTO product (product_id,product_type,product_brand, product_name, product_color, product_cost,product_img)  VALUES ('$product_id','$product_type','$product_brand','$product_name','$product_color','$product_cost','$folder')");

       if($query_run)
    {
        echo "<script>alert('Data Saved');</script>";
        //header("Location: editdatahtml.php");
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>

<?php

//$connection = mysqli_connect("localhost","root","");
//$db = mysqli_select_db($connection, 'phpcrud');

if(isset($_POST['delete']))
{
    $product_id = $_POST['product_id'];

    $query = "DELETE FROM product WHERE product_id='$product_id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("location:productdelete.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>