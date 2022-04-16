<?php
   include $_SERVER['DOCUMENT_ROOT'] . '/Configs/db.php';

$sql = "DELETE FROM `categories` WHERE `categories`.`id` = '" . $_GET['id'] . "'";

if ($conn->query($sql) === TRUE) {
   echo "Record deleted successfully";
} else {
   echo "Error deleting record: " . $conn->error;
}

$conn->close();

header('Location: /admin/options/edit-category.php');
?>