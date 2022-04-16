<?php
   include $_SERVER['DOCUMENT_ROOT'] . '/partsSite/head.php';
?>

<?php
	$sql = "SELECT * FROM `products` WHERE `id` = '" . $_GET["id"] . "'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	$category = mysqli_fetch_assoc($conn->query("SELECT * FROM `categories` WHERE `id` = '" . $row["category_id"] . "'"));
?>

<body>

<?php
   include $_SERVER['DOCUMENT_ROOT'] . '/partsSite/nav.php';
?>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home</a></li>
			<li class="breadcrumb-item">
				<a href="/category.php?id=<?php echo $category["id"] ?>"><?php echo $category["title"] ?></a>
			</li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo $row["title"] ?></li>
		</ol>
	</nav>

	<div class="container">
		<div class="row m-2">

			<div class="col-3 bg-light">
               <?php
                  include $_SERVER['DOCUMENT_ROOT'] . '/partsSite/cat_nav.php';
               ?>
			</div>

			<div class="col-9">
				<div class="container">
					<div class="row">
						
						<?php
                     include $_SERVER['DOCUMENT_ROOT'] . '/partsSite/product_info-card.php';
                  ?>				
					</div>
            </div>
			</div><!-- class="col-9" -->
		</div><!-- class="row" -->
	</div><!-- class="container" -->



	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/partsSite/footer.php';
	?>
</body>

</html>