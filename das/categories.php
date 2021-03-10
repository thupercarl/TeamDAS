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
<!--
        <div class="row ml-5 mr-5">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <img src="images/companies/default_nologo.png" alt="default" style="width:100px;height:100px;">
                        <p class="card-text">Some quick info</p>
                        <p class="card-text">Some quick info</p>
                        <p class="card-text">Some quick info</p>
                        <a href="#" class="btn btn-success">Go Somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <img src="images/companies/default_nologo.png" alt="default" style="width:100px;height:100px;">
                        <p class="card-text">Some quick info</p>
                        <p class="card-text">Some quick info</p>
                        <p class="card-text">Some quick info</p>
                        <a href="#" class="btn btn-success">Go Somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <img src="images/companies/default_nologo.png" alt="default" style="width:100px;height:100px;">
                        <p class="card-text">Some quick info</p>
                        <p class="card-text">Some quick info</p>
                        <p class="card-text">Some quick info</p>
                        <a href="#" class="btn btn-success">Go Somewhere</a>
                    </div>
                </div>
            </div>
        </div>
-->
        <?php                                                                   //Problems with block
        //echo "<p>Connecting</p>";
        //connect to database
        //echo "<h1>Found the connect file</h1>";
        $cnxn = connect();

        //echo "<p>Connected to database successfully</p>";
        //define a query
        /*$sql = "SELECT companies.name, companies.category, companies.city, companies.state, companies.about,
                companies.country, companies.url, companies.company_email, companies.company_phone, 
                companies.logo, tags.tag_name, tags.tag_id, companies.company_id 
                FROM companies, company_tags, tags";*/

        $sql = "SELECT companies.name, companies.category, companies.city, companies.state, companies.about,
                companies.country, companies.url, companies.company_email, companies.company_phone, 
                companies.logo, companies.company_id, companies.tag_cloud
                FROM companies";

        /*$sql = "SELECT name, category, city, state, about,
                country, url, company_email, company_phone, 
                logo FROM companies";*/

        if(isset($_GET['search'])) {
            $searchTerm = $_GET['search'];
            /*$sql .= " WHERE companies.company_id = company_tags.company_id AND company_tags.tag_id = tags.tag_id AND
            companies.category LIKE '$searchTerm' OR companies.category LIKE '%$searchTerm%' OR companies.name LIKE '$searchTerm'
            OR companies.name LIKE '%$searchTerm%' OR companies.about LIKE '$searchTerm' OR companies.about LIKE '%$searchTerm%' 
            OR tags.tag_name='$searchTerm'";//wildcards*/


            $sql .= " WHERE category LIKE '$searchTerm' OR category LIKE '%$searchTerm%' OR name LIKE '$searchTerm'
            OR name LIKE '%$searchTerm%' OR about LIKE '$searchTerm' OR about LIKE '%$searchTerm%' 
            OR tag_cloud LIKE '%$searchTerm%'";
        }

        //echo "<p>$sql</p>";

        //send query
        $result = mysqli_query($cnxn, $sql);

        if(mysqli_num_rows($result) == 0) {
            echo "<h2>No resulting sustainability companies found</h2>";
        }
        else if(mysqli_num_rows($result) != 0 && $searchTerm == "") {
            echo "<h4 class='col-sm mt-3 text-right'>Below is a list of all companies in our database</h4>";
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
            if(empty($url)) {
                echo "<div class='col-sm'>";

                    echo "<div class='card' style='width: 18rem; height: 100%;'>";
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
            else{
                echo "<div class='col-sm'>";

                    echo "<div class='card' style='width: 18rem; height: 100%;'>";
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