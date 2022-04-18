<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Configs/db.php';
    $page = "products";

    if(isset($_POST["add_product"])){
        
        $sql = "INSERT INTO `products` (`title`, `description`, `content`, `category_id`, `image`) VALUES ('" . $_POST["prod-title"] . "', '" . $_POST["prod-description"] . "', '" . $_POST["prod-content"] . "', '" . $_POST["prod-category"] . "', 'http://picsum.photos/100')";

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
        <div class="sidebar" data-image="http://picsum.photos/800" data-color="green">
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
                        <li class="breadcrumb-item active" aria-current="page">Create new product</li>
                    </ol>
                </nav>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Create new product</h4>
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
                                                    <input type="text" class="form-control" name="prod-title"
                                                        placeholder="Title" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-7 pl-1">
                                                <div class="form-group">
                                                    <label>Short list</label>
                                                    <input type="text" class="form-control" name="prod-description"
                                                        placeholder="Description" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About product</label>
                                                    <textarea rows="4" cols="80" class="form-control"
                                                        name="prod-content" placeholder="Content" value=""
                                                        required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/admin/products.php" class="btn btn-danger btn-fill pull-right ml-2 text-light">Cancel</a>
                                        <button type="submit" class="btn btn-success pull-right" name="add_product">Add
                                            new product</button>
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