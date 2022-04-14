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
    <li class="nav-item <?php if($page == "products"){ echo "categories";} ?>">
        <a class="nav-link" href="./typography.html">
            <i class="nc-icon nc-bullet-list-67"></i>
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