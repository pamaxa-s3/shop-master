<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Configs/db.php';
    $page = "products";
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
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </nav>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header mx-3">
                                    <div class="row justify-content-between">
                                        <h4 class="card-title">Product info</h4>
                                        <div class="btn-group" role="group">
                                            <a href="options/edit-category.php" class="btn btn-info btn-fill mx-1">Edit category</a>
                                            <a href="options/add-product.php" class="btn btn-success btn-fill">Add product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                        <?php
                                            include $_SERVER['DOCUMENT_ROOT'] . '/admin/modules/product.php';
                                        ?>
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