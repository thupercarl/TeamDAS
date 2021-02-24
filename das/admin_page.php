<?php
include('includes/head.php');
?>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION['loggedin'])) {

    //Store the page that I'm currently on in the session
    $_SESSION['page'] = $_SERVER['SCRIPT_URI'];

    //Redirect to login
    header("location: login.php");
}

?>

<link rel="stylesheet" href="css/login.css">
<body>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<div class="container bg-light" id="main">

    <?php
    include('includes/navbar.php')
    ?>
    </div>

<div class="container border p-3 theme-color">

    <!--        Form data-->


    <div class="border p-2 bg-white p-5">
        <!--
//        <?php
//        $uname = $_POST['uname'];
//        $psw = $_POST['psw'];
//
//        echo "<h5 class='h5'>Login Info</h5>";
//        echo "<b>Username: </b> $uname <br>";
//        echo "<b>Password: </b> $psw <br>";
//        ?>
        -->
        <h2>Applicants</h2>
        <h3>Company Name</h3>
        <p>About</p>
        <p>Tagline</p>
        <p>Catagory</p>
        <p>Company Email</p>
        <p>Company Phone</p>

        <button type="button" class="accept">Accept</button>
        <button type="button" class="reject">Reject</button>

    </div>

    <?php
    include('includes/footer.html')
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
