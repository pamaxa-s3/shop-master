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
    $prod_name = mysqli_fetch_assoc($conn->query("SELECT * FROM `products` WHERE `id` = '" . $_GET["id"] . "'")); 
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
                        <li class="breadcrumb-item active" aria-current="page">Edit product</li>
                    </ol>
                </nav>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <div class="row">
                                        <h4 class="card-title col-2">Edit product</h4>
                                        <h4 class="card-title col-9"><?php echo $prod_name["title"] ?></h4>
                                    </div>
                                    
                                </div>

                                <div class="card-body">
                                    <form method="POST">
                                        <div class="row">
                                            <div class="col-md-2 pr-1">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select class="form-control" name="prod-category" placeholder="Category" value="" required>
                                                <?php
                                                    $sql = "SELECT * FROM `categories`";
                                                    $result = $conn->query($sql);
                                                    while( $row = mysqli_fetch_assoc($result) ){
                                                    echo "<option value=" . $row["id"] . ">" . $row["title"] . "</option>";
                                                    }
                                                ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="prod-title" placeholder="" value="<?php echo $prod_name["title"] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-7 pl-1">
                                                <div class="form-group">
                                                    <label>Short list</label>
                                                    <input type="text" class="form-control"
                                                    name="prod-description" placeholder="" value="<?php echo $prod_name["description"] ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About product</label>
                                                    <input type="text" class="form-control"
                                                    name="prod-content" placeholder="" value="<?php echo $prod_name["content"] ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/admin/products.php" class="btn btn-danger btn-fill pull-right ml-2 text-light">Cancel</a>
                                        <button type="submit" class="btn btn-info btn-fill pull-right" name="edit_product">Edit done</button>
                                        <div class="clearfix"></div>
                                    </form>
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