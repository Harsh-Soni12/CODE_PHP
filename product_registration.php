<!DOCTYPE html>
<html>
<head>
    <title>Product Form</title>
</head>
<body>

<h2>Product Details</h2>

<form method="post" enctype="multipart/form-data">

    Product Name <br>
    <input type="text" name="product_name" required><br><br>

    Product Price <br>
    <input type="text" name="product_price" required><br><br>

    Product Type <br>
    <select name="product_type">
        <option>Electronics</option>
        <option>Clothes</option>
        <option>Books</option>
        <option>Food</option>
        <option>Car</option>
        <option>Bike</option>
    </select><br><br>

    Product Image <br>
    <input type="file" name="product_image" required><br><br>

    Product Quantity <br>
    <input type="number" name="product_qty" required><br><br>

    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>

<?php

include("db.php");

if(isset($_POST['submit']))
{
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_type = $_POST['product_type'];
    $product_qty = $_POST['product_qty'];

    $product_image = $_FILES['product_image']['name'];
    $tmp = $_FILES['product_image']['tmp_name'];

    if(!file_exists("images"))
    {
        mkdir("images");
    }

    if(move_uploaded_file($tmp,"images/".$product_image))
    {
        $sql = "INSERT INTO product(product_name,product_price,product_type,product_image,product_qty)
                VALUES('$product_name','$product_price','$product_type','$product_image','$product_qty')";

        if(mysqli_query($conn,$sql))
        {
            echo "Record Inserted Successfully";
        }
        else
        {
            echo "Database Error : ".mysqli_error($con);
        }
    }
    else
    {
        echo "Image Upload Failed";
    }
}

?>