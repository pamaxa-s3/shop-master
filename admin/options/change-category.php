<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Configs/db.php';
    $page = "categories";

    if(isset($_POST["edit_category"]) && isset($_POST["edit_category"]) != null){
    
        $sql = "UPDATE `categories` SET `title` = '" . $_POST["new-category"] . "' WHERE `categories`.`id` = '" . $_GET["id"] . "'";

        $conn->query($sql);

        $conn->close();

    header('Location: /admin/options/edit-category.php');
    }
?>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/admin/partsSite/head.php';
?>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="http://picsum.photos/800" data-color="blue">
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
                            <a href="/admin/options/edit-category.php">Categories</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Change Category</li>
                    </ol>
                </nav>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Change Category</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="row">
                                            <div class="col-md-12 px-2">
                                                <div class="form-group">
                                                    <label>New Category</label>
                                                <?php
                                                    $sql = "SELECT * FROM `categories` WHERE `id` = '" . $_GET["id"] . "'" ;
                                                    $result = $conn->query($sql);
                                                    while( $row = mysqli_fetch_assoc($result) ){
                                                    ?>
                                                    <input type="text" class="form-control"                                                    name="new-category"
                                                    placeholder="Enter new category"
                                                    value="<?php echo $row["title"]; ?>" required>
                                                    <?php
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/admin/options/edit-category.php" class="btn btn-danger btn-fill pull-right ml-2 text-light">Cancel</a>
                                        <button type="submit" class="btn btn-info btn-fill pull-right" name="edit_category">Edit done</button>
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