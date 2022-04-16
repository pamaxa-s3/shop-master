<table class="table table-hover table-striped" id="product-items">
    <thead>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Content</th>
        <th>Category</th>
    </thead>

    <tbody>
<?php
$sql = "SELECT * FROM `products`";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_assoc($result)){
?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td class="td-img"><img src="<?php echo $row["image"] ?>" /></td>
            <td><?php echo $row["title"] ?></td>
            <td><?php echo $row["description"] ?></td>
            <td><?php echo $row["content"] ?></td>
            <td><?php echo $row["category_id"] ?></td>
            <td>
                <div class="btn-group" role="group">
                    <a href="options/edit-product.php?id=<?php echo $row["id"] ?>" class="btn btn-info btn-fill mr-1">Edit</a>
                    <a href="options/delete.php?id=<?php echo $row["id"] ?>" class="btn btn-dark btn-fill">Delete</a>
                </div>
            </td>
        </tr>
<?php
    }
?>
    </tbody>
</table>
