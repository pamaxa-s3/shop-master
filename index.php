<?php
   include $_SERVER['DOCUMENT_ROOT'] . '/partsSite/head.php';
?>

<body>

<?php
   include $_SERVER['DOCUMENT_ROOT'] . '/partsSite/nav.php';
?>

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
						$sql = "SELECT * FROM products";
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