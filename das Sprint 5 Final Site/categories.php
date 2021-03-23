<!--
Author: Jake Donaldson
Date:   3/20/21
        This page is meant to be the catalog for the ConeyBeareSustainability Catalog
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
        <?php
        //echo "<p>Connecting</p>";
        //connect to database
        //echo "<h1>Found the connect file</h1>";
        $cnxn = connect();

        //echo "<p>Connected to database successfully</p>";
        //define a query
        $sql = "SELECT companies.name, companies.category, companies.city, companies.state, companies.about,
                companies.country, companies.url, companies.company_email, companies.company_phone, 
                companies.logo, companies.company_id, companies.tag_cloud, companies.shown
                FROM companies";

        //if the user used the search bar
        if(isset($_GET['search'])) {
            $searchTerm = $_GET['search'];

            $sql .= " WHERE category LIKE '$searchTerm' OR category LIKE '%$searchTerm%' OR name LIKE '$searchTerm'
            OR name LIKE '%$searchTerm%' OR about LIKE '$searchTerm' OR about LIKE '%$searchTerm%' 
            OR tag_cloud LIKE '%$searchTerm%' ORDER BY companies.name ASC";
        }
        else {
            $sql .= " ORDER BY companies.name ASC";
        }

        //Add a break between


        //send query
        $result = mysqli_query($cnxn, $sql);

        if(mysqli_num_rows($result) == 0) {
            echo "<h2>No resulting sustainability companies found</h2>";
        }
        else if(mysqli_num_rows($result) != 0 && $searchTerm == "") {
            echo "<h4 class='col-sm mt-3 text-right'>Below is a list of all companies in our database</h4>";
        }
        else {
            echo "<div class='row ml-5 mr-5'><h1>'$searchTerm'</h1><h4 class='col-sm mt-3 text-right'>Below is a list
            of companies that most closely fit your search</h4></div>";
        }

        echo "<div class='row ml-5 mr-5'>";

        //print the data
        $columnCount = 0;
        foreach ($result as $row) {

            //create three columns
            if($columnCount % 3 == 0) {
                echo "</div>";
                echo "<hr class='rounded'>";
                echo "<div class='row ml-5 mr-5 text-center'>";
            }
            $location = "";
            $city = $row['city'];
            $state = $row['state'];
            $country = $row['country'];
            $name = $row['name'];
            $category = $row['category'];
            $email = $row['email'];
            $phone = $row['phone'];
            $about = $row['about'];
            $url = $row['url'];
            $logo = $row['logo'];
            $tags = $row['tag_cloud'];
            $shown = $row['shown'];

            //remove all non-printable characters
            $about = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $about);

            //get location to display correctly
            $city = trim($city);
            $state = trim($state);
            $country = trim($country);
            $email = trim($email);
            $phone = trim($phone);
            if(!empty($row['city']) || !empty($row['state']) || !empty($row['country'])) {
                $location = "Location: ".$city.", ".$state.", ".$country;
            }
            else {
                $location = "";
            }

            $stringposition = strpos($url, "http");
            //echo "<p>String position $stringposition</p>";
            //echo "<p>Start Editing URL Data</p>";
            if(strpos($url, "http") === false && !empty($url)){
                //echo "<p>inside the IF for contains</p>";
                $url = "https://".$url;
            }

            if($logo == null) {
                $logo = "images/companies/default_nologo.png";
            }

            //echo "<p>Finished first edit, starting empty URL</p>";
            if(empty($url) && $shown == 1) {
                echo "<div class='col-sm'>";
                    echo "<div class='card mx-auto' style='width: 18rem; height: 100%;'>";
                        echo "<div class='card-body' style='background-color: #e9e9e9'>";
                            echo "<h5 class='card-title'>$name</h5>";
                            echo "<img src='$logo' alt='default' style='width:100px;height:100px;'>";
                            echo "<br>";
                            echo "<button class='btn btn-secondary mt-5' disabled>$name</button>";
                            echo "<p class='card-text'>$category</p>";
                            echo "<p class='card-text'>$location</p>";
                            echo "<p class='card-text'>$tags</p>";
                            echo "<p class='card-text'>$about</p>";
                            echo "<br>";
                            echo "<p>$email</p>";
                            echo "<p>$phone</p>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            }
            else if(!empty($url) && $shown == 1){
                echo "<div class='col-sm'>";
                    echo "<div class='card mx-auto' style='width: 18rem; height: 100%;'>";
                        echo "<div class='card-body' style='background-color: #e9e9e9'>";
                            echo "<h5 class='card-title'>$name</h5>";
                            echo "<a href='$url' target='_blank'><img src='$logo' alt='default' style='width:100px;height:100px;'></a>";
                            echo "<br>";
                            echo "<a href='$url' class='btn btn-success mt-5' target='_blank'>$name</a>";
                            echo "<p class='card-text'>$category</p>";
                            echo "<p class='card-text'>$location</p>";
                            echo "<p class='card-text'>$tags</p>";
                            echo "<p class='card-text'>$about</p>";
                            echo "<br>";
                            echo "<p>$email</p>";
                            echo "<p>$phone</p>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            }
            else {
                //do nothing
            }
            //incrememnt columnCount to make tri-column display work
            $columnCount++;
        }
        echo "</div>";
        echo "</div>";
        ?>
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