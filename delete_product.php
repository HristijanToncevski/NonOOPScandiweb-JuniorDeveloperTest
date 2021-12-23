<?php
include_once "Database.php";

if(isset($_POST['delete_button'])){
    if(!empty($_POST['delete'])){
    $all = $_POST['delete'];
    $string = implode(",", $all);
    $query = "DELETE FROM products WHERE id IN ($string)";
    $result = mysqli_query($connection, $query);
    header("Location: index.php");
    exit;
}
header("Location: index.php");
exit;
}
?>
