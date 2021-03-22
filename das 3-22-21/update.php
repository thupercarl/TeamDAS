<?php
//ALL THIS SHIT IS GAVINS CODE
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<?php
include('includes/head.php');
?>

<body>

    <?php
    include('includes/navbar.php')
    ?>

    <div class="container shadow-none bg-light">
    <?php

        $cnxn = connect();
        echo "<p>Connected to database successfully</p>";

        $action = $_POST['action'];
        $target = $_POST['company_id'];

        if($action === 'accept'){
            echo "<p>adding company to catalogue</p>";

            $sql = "UPDATE companies SET shown = 1 WHERE company_id = $target";

            mysqli_query($cnxn, $sql);

            echo "<p>Action Successful</p>";

        } elseif ($action === 'reject'){
            echo "<p>removing company from database</p>";

            $sql = "DELETE FROM companies WHERE company_id = $target";

            mysqli_query($cnxn, $sql);

            echo "<p>Action Successful</p>";
        }


    ?>
    </div>

    <?php
    include('includes/footer.html')
    ?>

</body>
