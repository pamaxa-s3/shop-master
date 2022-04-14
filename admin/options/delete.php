<?php
   include "../../Configs/db.php";

$sql = "DELETE FROM `products` WHERE `products`.`id` = '" . $_GET['id'] . "'";

if ($conn->query($sql) === TRUE) {
   echo "Record deleted successfully";
} else {
   echo "Error deleting record: " . $conn->error;
}

$conn->close();

header('Location: /admin/products.php');
?>
