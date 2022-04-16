<?php
$sql = "SELECT * FROM `products` WHERE `id` = '" . $_GET["id"] . "'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="card mb-3" style="max-width: 900px;width: 100%;">
   <div class="row no-gutters">
   <div class="col-md-3 mb-2 mx-2">
   <img src="<?php echo $row["image"] ?>" class="card-img-top mt-2 rounded-lg" alt="card">
   </div>
   <div class="col-md-8">
      <div class="card-body">
         <h4 class="card-title"><?php echo $row["title"] ?></h4>
         <p class="card-text"><small class="text-muted"><?php echo $row["description"] ?></small></p>
         <p class="card-text"><?php echo $row["content"] ?></p>
         </div>
      </div>
   </div>
</div>