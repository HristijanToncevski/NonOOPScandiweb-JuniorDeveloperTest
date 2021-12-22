<?php
    include_once 'classes/Product.php';
    include_once "Database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header-div">
        <div class="header">
            <span>Product List</span>
            <div class="btn-container">
                <button onclick="window.location='ProductAdd.php'">ADD</button>
                <button id="delete-product-btn">MASS DELETE</button>
            </div>
            <hr>
        </div>
    </div>

    <div id="product-list">
        <?php
            
        ?>
    </div>
    
    <div class="footer-div">
        <div class="footer">
            <hr>
            <p>Scandiweb Test assignment</p>
        </div>
    </div>
</body>
</html>