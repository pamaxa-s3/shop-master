<div class="card col-4 m-2 shadow p-3 mb-5 bg-white rounded-lg" style="width: 18rem;">
	<img src="<?php echo $row["image"] ?>" class="card-img-top mt-2 rounded-lg" alt="card">
	<div class="card-body">
		<h5 class="card-title">
			<a href="/product.php?id=<?php echo $row["id"] ?>"><?php echo $row["title"] ?></a>
		</h5>
		<p class="card-text p-1"><?php echo $row["description"] ?></p>
		<a href="#" class="btn btn-primary">Заказать</a>
	</div>
</div>