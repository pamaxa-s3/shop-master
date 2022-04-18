<ul class="nav">
    <li class="nav-item <?php if($page == "home"){ echo "active";} ?>">
        <a class="nav-link" href="/admin">
            <i class="nc-icon nc-bank"></i>
            <p>Home</p>
        </a>
    </li>
    <li class="nav-item <?php if($page == "users"){ echo "active";} ?>">
        <a class="nav-link" href="./user.html">
            <i class="nc-icon nc-circle-09"></i>
            <p>Users</p>
        </a>
    </li>
    <li class="nav-item <?php if($page == "products"){ echo "active";} ?>">
        <a class="nav-link" href="/admin/products.php">
            <i class="nc-icon nc-app"></i>
            <p>Products</p>
        </a>
    </li>
    <li class="nav-item <?php if($page == "categories"){ echo "active";} ?>">
        <a class="nav-link" href="/admin/options/edit-category.php">
            <i class="nc-icon nc-bullet-list-67"></i>
            <!-- <a href="options/edit-category.php" class="btn btn-info btn-fill mx-1">Edit category</a> -->
            <p>Categories</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="nc-icon nc-button-power"></i>
            <p>Log out</p>
        </a>
    </li>
</ul>