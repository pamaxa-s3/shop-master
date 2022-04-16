<?php
   include $_SERVER['DOCUMENT_ROOT'] . '/partsSite/head.php';
?>

<body>

<?php
   include $_SERVER['DOCUMENT_ROOT'] . '/partsSite/nav.php';
	$cat = mysqli_fetch_assoc($conn->query("SELECT * FROM `categories` WHERE `id` LIKE '" . $_GET["id"] . "'"));

?>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo $cat["title"] ?></li>
		</ol>
	</nav>

	<div class="container">
		<div class="row m-2">

			<div class="col-3">
               <?php
                  include $_SERVER['DOCUMENT_ROOT'] . '/partsSite/cat_nav.php';
               ?>
			</div>

			<div class="col-9">
				<div class="container">
					<div class="row">
						<?php
						$sql = "SELECT * FROM products WHERE category_id='" . $_GET["id"] . "'";
						$result = $conn->query($sql);
						while( $row = mysqli_fetch_assoc($result) ){
							
							include $_SERVER['DOCUMENT_ROOT'] . '/partsSite/product_card.php';

						}
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