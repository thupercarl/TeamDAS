<!--
Name: Jean-Kenneth Antonio
Date: 01-24-2021

This is the confirm.php page for the Coneybeare Cleantech website. It links to the about, home, and sign up page
and displays form data submitted from webform.html
-->
<?php

if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
    echo "console.log('If request method fired')";
    //send user to form page
    header("Location: webform.php");
}

include('includes/head.php');

ini_set('display_errors', 1);
error_reporting(E_ALL);

?>

<body>

<div class="container-xl bg-light" id="main">

    <!--Navigation bar-->
    <?php
    include('includes/navbar.php');
    ?>

    <!-- Thank you -->
    <br>
    <div class="row">
        <div class="text-center offset-1 h4">
            Thank you, your information has been submitted for review.
        </div>
    </div>

    <br>

    <!-- Submission Summary -->
    <div class="container border p-3 theme-color">

        <!-- Form data-->

        <div class="border p-2 bg-white p-5">

            <?php
            //company information var
            $cname = $_POST['cname'];
            $cabout = $_POST['cabout'];
            $ctagline = $_POST['ctagline'];
            $cemail = $_POST['cemail'];
            $cphone = $_POST['cphone'];
            $curl = $_POST['curl'];
            $ccategory = $_POST['ccategory'];
            //$clogo = $_POST['clogo'];
            $keywords = $_POST['keywords'];

            //Contact person var
            $cfname = $_POST['cfname'];
            $clname = $_POST['clname'];
            $cpemail = $_POST['cpemail'];

            //location var
            $city = $_POST['city'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            $carea = $_POST['carea'];

            //echo var_dump($keywords);
            //$keywords = explode(",", $keywords);
            //echo var_dump($keywords);


            //IMAGE UPLOAD
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["clogo"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["clogo"]["tmp_name"]);
                if($check !== false) {
                    //echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    //echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                //echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["clogo"]["size"] > 500000) {
                //echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                //echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["clogo"]["tmp_name"], $target_file)) {
                   // echo "The file ". htmlspecialchars( basename( $_FILES["clogo"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
            }

            //file name var
            //echo $_FILES["clogo"]["name"];
            $filename = $target_dir . $_FILES["clogo"]["name"];


            //Email start
            //Email body will fill in as it is submitted
            $emailBody = "A request has been made<br>";

            //submission summary
            echo "<h5 class='h5'> Submission Summary</h5>";
            echo "<b>Company Name: </b> $cname <br>";

            $emailBody .= "<b>Company Name: </b> $cname <br>";

            if (!empty($cabout)) {
                echo "<b>Company About: </b> $cabout <br>";

                $emailBody .= "<b>Company About: </b> $cabout <br>";

                if (!empty($ctagline)) {
                    echo "<b>Tagline: </b> $ctagline <br>";
                    $emailBody .= "<b>Tagline: </b> $ctagline <br>";
                }
            }

            echo "<b>Company Email: </b> $cemail <br>";
            $emailBody .= "<b>Company Email: </b> $cemail <br>";

            //show phone of not empty
            if (!empty($cphone)) {
                echo "<b>Company Phone: </b> $cphone <br>";
                $emailBody .= "<b>Company Phone: </b> $cphone <br>";
            }

            //show categories
            echo "<b>Company Category: </b> $ccategory <br>";
            $emailBody .= "<b>Company Category: </b> $ccategory <br>";

            //Image Provided
            //used inline styling here. Couldn't get to work with external sheet
            echo "<b>Image Provided: </b> <br> <img src='" . $filename . "' alt='Provided Image' style='max-width: 150px'> <br>";
            $emailBody .= "<b>Image Provided: </b> <br> <img src='" . $filename . "' alt='Provided Image' style='max-width: 150px'> <br>";

            //Keywords
            echo "<b>Keywords: </b> $keywords <br> <br>";
            $emailBody .= "<b>Keywords: </b> $keywords <br> <br>";

            //contact info
            if ((!empty($cfname) || !empty($clname))) {
                echo "<b>Contact Name: </b> $cfname $clname <br>";
                $emailBody .= "<b>Contact Name: </b> $cfname $clname <br>";

            }
            if (!empty($cpemail)) {
                echo "<b>Contact Email: </b> $cpemail <br> <br>";
                $emailBody .="<b>Contact Email: </b> $cpemail <br> <br>";
            }


            //location info echo
            //if both state and city was filled in
            if (!empty($city) && !empty($state)) {
                echo "<b>Location: </b> <br>$city, $state <br>";
                $emailBody .= "<b>Location: </b> <br>$city, $state <br>";

                echo "$country <br>";
                $emailBody .="$country <br>";
            }

            //If only city was filled in
            elseif (!empty($city)) {
                echo "<b>Location: </b> <br>$state <br>";
                $emailBody .= "<b>Location: </b> <br>$state <br>";

                echo "$country <br>";
                $emailBody .= "$country <br>";
            }
            //if only state was filled in
            elseif (!empty($state)) {
                echo "<b>Location: </b> $state <br>";
                $emailBody .= "<b>Location: </b> $state <br>";
                echo "$country <br>";
                $emailBody .= "$country <br>";
            }
            else {
                //if state and country was not filled in
                echo "<b>Location: </b> $country <br>";
                $emailBody .= "<b>Location: </b> $country <br>";
            }
            echo "<br>";

            //Service area
            echo "<b>Service Area: </b> $carea <br> <br>";
            $emailBody .= "<b>Service Area: </b> $carea <br> <br>";

            //Send email to admin
            $emailTo = 'coneybearecatalog@gmail.com';
            $emailFrom = 'Coneybeare Cleantech <coneybearecatalog@gmail.com>';


            //Finish up the email body
            $emailSubject = 'New Catalog Request';
            $headers = "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: $emailFrom\r\n";
            $emailBody .= "<br> Login here to review request: <br> https://das.greenriverdev.com/login.php";
           // $success = mail($emailTo, $emailSubject, $emailBody, $headers);

            ?>

        </div>

    </div>

    <!-- Footer -->
    <?php
        include('includes/footer.html');
    ?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--Webform country select maintained by mojoaxel: https://mojoaxel.github.io/bootstrap-select-country/index.html -->
<script src="js/bootstrap-select-country.min.js"></script>

</body>
</html>