<!--
Author: Jake Donaldson
Date:   1/25/21
        This page is meant to be the homepage for the ConeyBeareSustainability Catalogue
        -->

<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
?>


<?php
include('includes/head.php');
?>

<body class="bg-dark">

<div class="container-xl bg-light" id="main">

    <?php
    include('includes/navbar.php');
    ?>

    <main>

        <?php                                                                   //Problems with block
        //echo "<p>Connecting</p>";
        //connect to database
        //echo "<h1>Found the connect file</h1>";
        $cnxn = connect();

        //echo "<p>Connected to database successfully</p>";
        //define a query
        $sql = "SELECT name, category, city, about, country, url FROM company";
        if(isset($_GET['search'])) {
            $searchTerm = $_GET['search'];
            $sql .= " WHERE category LIKE '$searchTerm' OR category LIKE '%$searchTerm%' OR name LIKE '$searchTerm' 
            OR name LIKE '%$searchTerm%' OR about LIKE '$searchTerm' OR about LIKE '%$searchTerm%'";//wildcards
        }

        //echo "<p>$sql</p>";

        //send query
        $result = mysqli_query($cnxn, $sql);

        if(mysqli_num_rows($result) == 0) {
            echo "<h2>No resulting sustainability companies found</h2>";
        }
        else {
            echo "<div class='row ml-5 mr-5'><h1>'$searchTerm'</h1><h4 class='col-sm mt-3 text-right'>Below is a list of companies that most closely fit your search</h4></div>";

        }

        echo "<div class='row ml-5 mr-5'>";
        //print the data
        $columnCount = 0;
        foreach ($result as $row) {
            if($columnCount % 3 == 0) {
                //echo "<p>INSIDE COLUMN LOOP</p>";
                echo "</div>";
                echo "<hr class='rounded'>";
                echo "<div class='row ml-5 mr-5'>";
            }
            $name = $row['name'];
            $category = $row['category'];
            $city = $row['city'];
            $country = $row['country'];
            $about = $row['about'];
            $url = $row['url'];

            if(empty($url)) {
                $url = '#';
            }

            echo "<div class='col-sm'>";
            echo "<a class='text-dark' href='$url' target='_blank'><img src='images/companies/default_nologo.png' class='rounded mx-auto d-block' alt='default' style='width:100px;height:100px;'></a>";
            echo "<a class='text-dark' href='$url' target='_blank'>$name</a>";
            echo "<p>Location: $city, $country</p>";
            echo "</div>";
            echo "<div class='col-sm'><p>$about</p></div>";
            $columnCount++;
        }
        echo "</div>"
        ?>

        <!--
        example companies


        <div class="row ml-5 mr-5">
            <h1>Energy</h1>
            <h4 class="col-sm mt-3 text-right">Below is a list of companies that most closely fit your search</h4>

        </div>
            divider
            <hr class="rounded">

        <div class="row ml-5 mr-5">
            <div class="col-sm">
                <a class="text-dark" href="https://www.umicore.com/" target="_blank">Umicore</a>
                <p>Location: Belgium</p>
                <p>Tagline: lorem ipsum dolor sin amet</p>
            </div>
            <div class="col-sm">
                <a class="text-dark" href="https://www.equinor.com/en.html" target="_blank">Statoil ASA</a>
                <p>Location: Stavanger</p>
                <p>Tagline: lorem ipsum dolor sin amet</p>
            </div>
            <div class="col-sm">
                <a class="text-dark" href="https://www.cenovus.com/" target="_blank">Cenovus Energy Inc.</a>
                <p>Location: Calgary</p>
                <p>Tagline: lorem ipsum dolor sin amet</p>
            </div>
        </div>

        divider
        <hr class="rounded">

        <div class="row ml-5 mr-5">
            <div class="col-sm">
                <a class="text-dark" href="https://www.woodside.com.au/" target="_blank">Woodside Petroleum Ltd.</a>
                <p>Location: Australia</p>
                <p>Tagline: lorem ipsum dolor sin amet</p>
            </div>
            <div class="col-sm">
                <a class="text-dark" href="https://algonquinpower.com/" target="_blank">Algonquin Power & Utilities Corp.</a>
                <p>Location: Ontario, Canada</p>
                <p>Tagline: lorem ipsum dolor sin amet</p>
            </div>
            <div class="col-sm">
                <a class="text-dark" href="https://calwave.energy/" target="_blank">CalWave Power Technology</a>
                <p>Location: California</p>
                <p>Tagline: lorem ipsum dolor sin amet</p>
            </div>
        </div>
        -->
    </main>

    <?php
    include('includes/footer.html');
    ?>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>