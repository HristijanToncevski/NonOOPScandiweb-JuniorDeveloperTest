<?php
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
                <button type="submit" name="add_button" onclick="document.location='ProductAdd.php'">ADD</button>
                <button form="form1" id="delete-product-btn" type="submit" name="delete_button" value="MASS DELETE">MASS DELETE</button>
            </div>
            <hr>
        </div>  
    </div>
    <form action="delete_product.php" method="post" id="form1">
    <div id="product-list">          
            <?php
                $query = "SELECT * FROM products";
                $result_products = mysqli_query($connection, $query);
                while($row = mysqli_fetch_array($result_products)) {
            ?> 
                <div class="container">
                        <input type="checkbox" class="delete-checkbox" type="checkbox" name="delete[]" value="<?php echo $row['id']; ?>">
                        <p><?php echo $row['sku']; ?></p>
                        <p><?php echo $row['name']; ?></p>
                        <p><?php echo $row['price']; ?>.00 $</p>
                        <?php if ($row['productType'] == 'DVD'): ?>
                        <p>Size: <?php echo $row['size']; ?> MB</p>
                        <?php elseif ($row['productType'] == 'Book'): ?>
                        <p>Weight: <?php echo $row['weight']; ?> KG</p>
                        <?php elseif ($row['productType'] == 'Furniture'): ?>
                        <p> Dimensions: <?php echo $row['height']; ?>x<?php echo $row['width']; ?>x<?php echo $row['length']; ?></p>  
                        <?php endif ?>
                </div>
            <?php } ?>        
    </div>
    </form>
    <div class="footer-div">
        <div class="footer">
            <hr>
            <p>Scandiweb Test assignment</p>
        </div>
    </div>

</body>
</html>
