<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<a class="nav-link <?php if ( !isset($_GET["id"])){ ?> active <?php } ?>" href="/">Все</a>

<?php
   $sql = "SELECT * FROM categories";
   $result = $conn->query($sql);
   while( $row = mysqli_fetch_assoc($result) ){
      if( isset($_GET["id"]) && $_GET["id"] == $row["id"] ){
         ?>
      <a class="nav-link active" href="/category.php?id=<?php echo $row["id"] ?>"><?php echo $row["title"] ?></a>
         <?php
      } else {
?>
      <a class="nav-link" href="/category.php?id=<?php echo $row["id"] ?>"><?php echo $row["title"] ?></a>
<?php
   }
}
?>
</div>Z