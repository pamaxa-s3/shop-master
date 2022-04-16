<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Configs/db.php';
    $page = "products";

    if(isset($_POST["edit_product"]) && isset($_POST["edit_product"]) != null){
        
        $sql = "UPDATE `products` SET `title` = '" . $_POST["prod-title"] . "', `description` = '" . $_POST["prod-description"] . "', `content` = '" . $_POST["prod-content"] . "' WHERE `products`.`id` = '" . $_GET["id"] . "'";

        $conn->query($sql);

        $conn->close();

    header('Location: /admin/products.php');
    }
?>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/admin/partsSite/head.php';
?>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="http://picsum.photos/800" data-color="purple">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/admin" class="simple-text">
                        Shop Master
                    </a>
                </div>
                <?php
                    include $_SERVER['DOCUMENT_ROOT'] . '/admin/partsSite/nav.php';
                ?>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item">
                            <a href="/admin/products.php">Products</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                    </ol>
                </nav>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header mx-3">
                                    <div class="row justify-content-between">
                                        <h4 class="card-title">Edit Category</h4>
                                        <div class="btn-group" role="group">
                                            <a href="add-category.php" class="btn btn-success btn-fill">Add category</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Edit button</th>
                                                <th scope="col">Delete button</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                    $sql = "SELECT * FROM `categories`";
                                                $result = $conn->query($sql);
                                                while( $row = mysqli_fetch_assoc($result) ){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row["id"] ?></td>
                                                    <td><?php echo $row["title"] ?></td>
                                                    <td><a href="change-category.php?id=<?php echo $row["id"] ?>" class="btn btn-info btn-fill mr-1">Edit category</a></td>
                                                    <td><a href="delete-category.php?id=<?php echo $row["id"] ?>" class="btn btn-dark">Delete category</a></td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/admin/partsSite/connectJsFiles.php';
?>

</html>