<?php include 'connect.php';
if(isset($_POST['add_product'])){
  $product_name=$_POST['product_name'];
  $product_price=$_POST['product_price'];
  $product_image=$_FILES['product_image']['name'];
  $product_image_temp_name=$_FILES['product_image']['tmp_name'];
  $product_image_folder='../assets/'.$product_image;

  $insert_query=mysqli_query($conn, "insert into `products` (name,price,image) values
    ('$product_name', '$product_price','$product_image')") or die("insert query failed");
    if($insert_query){
      move_uploaded_file($product_image_temp_name,$product_image_folder);
      $display_message= "Product inserted succesfully";
    }else{
        $display_message= "There is some error inserting product";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product toevoegen</title>
    <link rel="icon" href="assets/favicon.png" type="image/x-icon">
    <style>
body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        margin-top: 15%;
    }
    .heading {
        text-align: center;
        margin-top: 0;
    }
    .add_product {
        display: flex;
        flex-direction: column;
    }
    .input_fields {
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    .submit_btn {
        background-color: grey;
        color: white;
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }
    .submit_btn:hover {
        background-color: black;
    }
    </style>
    
</head>
<body>
<?php include('header.php') ?>

<div class="container">

<?php
if(isset($display_message)){
    echo "<div class='display_message'>
    <span>$display_message</span>
    <i class='fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
    </div>";
}
?>

</div>

    <div class="container">
        <section>
        <h3 class="heading">Product Toevoegen</h3>
        <form action="" class="add_product" method="post" enctype="multipart/form-data"> 
            <input type="text" name="product_name" placeholder="Enter product name" class="input_fields" required>
            <input type="number" name="product_price" min="0" placeholder="Enter product price" class="input_fields" required>
            <input type="file" name="product_image"  class="input_fields" required accept="image/png, image/jpg, image/jpeg">
            <input type="submit" name="add_product" class="submit_btn"  value="Add Product">
        </form> 
        </section>
            
    </div>
    <script src="../js/script.js"></script>
</body>
</html>