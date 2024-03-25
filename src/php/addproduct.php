<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product toevoegen</title>
    <link rel="icon" href="assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/admin.css">
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