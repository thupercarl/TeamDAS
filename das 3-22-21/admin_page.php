<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<?php
include('includes/head.php');
?>

<link rel="stylesheet" href="css/login.css">
<body>


    <?php
    include('includes/navbar.php')
    ?>

<div class="container shadow-none p-3 theme-color">

    <!--        Form data-->


    <div class="border p-2 bg-white p-5">

        <?php
        $cnxn = connect();
        echo "<p>Connected to database successfully</p>";

        $sql = "SELECT * FROM companies WHERE shown = '0'";

        $result = mysqli_query($cnxn, $sql);

        if(mysqli_num_rows($result) == 0) {
            echo "<h2>No pending sustainability companies to approve.</h2>";
        }
        else {
            //display all the sites
            echo "<div class='row m1-5 mr-5'>";
            $columnCount = 0;

            foreach ($result as $row) {

                $company_id = $row['company_id'];
                $name = $row['name'];
                $category = $row['category'];
                $logo = $row['logo'];
                $about = $row['about'];
                $tagline = $row['tagline'];
                $url = $row['url'];
                $tag_cloud = $row['tag_cloud'];
                $company_phone = $row['company_phone'];
                $company_email = $row['company_email'];
                $contact_fname = $row['contact_fname'];
                $contact_lname = $row['contact_lname'];
                $contact_phone = $row['contact_phone'];
                $contact_email = $row['contact_email'];
                $address = $row['address'];
                $city = $row['city'];
                $state = $row['state'];
                $country = $row['country'];

                if($columnCount % 2 == 0) {
                    echo "</div>";
                    echo "<hr class='rounded'>";
                    echo "<div class='row ml-5 mr-5'>";
                }
                    echo "<div class='col-sm'>";
                    echo "<div class='card' style='width: 100%; height: 100%;'>";
                    echo "<div class='card-body' style='background-color: #e9e9e9'>";
                    echo "<p class='card-title'>Name: $name</p>";
                    echo "<p>ID: $company_id</p>";
                    echo "<p class='card-text'>Category: $category</p>";
                    echo "<img src='$logo' alt='default' style='width:250px;height:250px;'>";
                    echo "<p class='card-text'>About: $about</p>";
                    echo "<p class='card-text'>Tagline: $tagline</p>";
                    echo "<p class='card-text'>URL: $url</p>";
                    echo "<p class='card-text'>Keywords: $tag_cloud</p>";
                    echo "<p class='card-text'>Company Phone: $company_phone</p>";
                    echo "<p class='card-text'>Company Email: $company_email</p>";
                    echo "<p class='card-text'>Contact: $contact_fname $contact_lname</p>";
                    echo "<p class='card-text'>Contact Phone: $contact_phone</p>";
                    echo "<p class='card-text'>Contact Email: $contact_email</p>";
                    echo "<p class='card-text'>Address: $address</p>";
                    echo "<p class='card-text'>City: $city</p>";
                    echo "<p class='card-text'>State: $state</p>";
                    echo "<p class='card-text'>Country: $country</p>";

                    //this here is what we call art
                    echo "<form method='post' action='/update.php'>";
                    echo "<input type=hidden id='company_id' name='company_id' value='$company_id'>";
                    echo "<input type=hidden id='$company_id' name='action' value=''>";
                    echo "<button type='submit' class='card-text accept' onclick='setAccept($company_id)' id='accept-$company_id' value='$company_id'>Accept</button>";
                    echo "<button type='submit' class='card-text reject' onclick='setReject($company_id)' id='reject-$company_id' value='$company_id'>Reject</button>";
                    echo "</form>";

                    echo "</div></div></div>";

            }
        }

        ?>
    </div>

    <?php
    include('includes/footer.html')
    ?>
</div>


    <script>
        //ART I TELL YOU!
        function setAccept(){
            let obj = document.getElementById(arguments[0]);

            obj.value = "accept";
        }
        //AAAAAARTT!
        function setReject(){
            let obj = document.getElementById(arguments[0]);

            obj.value = "reject";
        }
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>

</html>
