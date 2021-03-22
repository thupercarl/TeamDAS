<nav class="navbar navbar-expand-lg fixed-top navbar-dark nav-color rounded" id="navibar">
    <div class="container-fluid">
        <button class="navbar-toggler collapsed" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-nowrap" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/categories.php">Catalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/webform.php">Sign up</a>
                </li>
            </ul>

            <div class="input-group d-block">
                <form method="get" action="../categories.php">
                    <input type="text" name="search" placeholder="Enter search terms..." style="width: 80%; height: 35px;">
                    <input class="btn btn-success d-inline" type="submit" value="Search" style="height: 100%;">
                </form>
            </div>

            <!--
                Pass search query to category page
                Store passed search as variable
                use wildcards along with search in SQL query to populate list
            -->
        </div>
    </div>
</nav>

<script src="js/navbar.js"></script>