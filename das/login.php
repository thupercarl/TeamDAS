<?php
//ini_set('display_errors',1);
//error_reporting(E_ALL);
//
//session_start();
//
//$err = false;
//$username = "";
//
//if($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $username = strtolower(trim($_POST['username']));
//    $password = trim($_POST['password']);
//}
//
//require('login_creds.php');
//
//
//if($username == $adminUser && $password == $adminPassword){
//
//    $_SESSION['loggedin'] = true;
//
//    //Redirect to page the user was on
//    if (!isset($_SESSION['page'])) {
//        $_SESSION['page'] = 'index.php';
//    }
//    header("location: " . $_SESSION['page']);
//}
//
//$err = true;
//
//?>

<?php
include('includes/head.php');
?>

<link rel="stylesheet" href="css/login.css">
<body>

<div class="container bg-light" id="main">

    <?php
    include('includes/navbar.php');
    ?>


    <h2>Administrator Login</h2>
    <form class="login" action="/admin_page.php" method="post">
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input class="loginText" type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input class="loginText" type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" class="loginButton">Login</button>
        </div>
    </form>

    <?php
    include('includes/footer.html');
    ?>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>