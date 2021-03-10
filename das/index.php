<!--
Author: Jake Donaldson
Date:   1/25/21
        This page is meant to be the homepage for the ConeyBeareSustainability Catalogue
        -->
<?php
include('includes/head.php');
?>
<body class="bg-dark">

<div class="container-xl bg-light" id="main">



    <main>
        <div class="row ml-1 mr-1">
            <h3>Our Mission</h3>
            <br>
            <p class="welcome col-sm">Welcome to the Coneybeare Sustainability Catalogue. Our mission is to bring you
                a searchable database and on-line marketplace for innovative solutions in sustainability; Creating
                visibility and accelerating speed to market.
            </p>
            <img class="col-sm float-right mt-1 rounded-circle" src="images/water_lily.jpg" alt="waterlily" style="width:10%;height:10%;">

        </div>
        <?php
        include('includes/navbar.php');
        ?>


        <!--divider-->
        <hr class="rounded">

        <h2 class="text-center">What Service are you Searching for?</h2>

    </main>

    <div class="row">
        <div class="col-sm category-hover">
            <h5 class="text-center text-white bg-success">Energy</h5>
            <div class="text-center">
                <a href="/categories.php?search=energy"><svg><use href="icons/symbol-defs.svg#energy"></use></svg></a>
            </div>
        </div>

        <div class="col-sm">
            <h5 class="text-center text-white bg-success">Water</h5>
            <div class="text-center">
                <a href="/categories.php?search=wastewater"><svg class="pl-3"><use href="icons/symbol-defs.svg#water"></use></svg></a>
            </div>
        </div>

        <div class="col-sm">
            <h5 class="text-center text-white bg-success">Manufacturing</h5>
            <div class="text-center">
                <a href="/categories.php?search=consumer+goods"><svg><use href="icons/symbol-defs.svg#manufacturing"></use></svg></a>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-sm">
            <h5 class="text-center text-white bg-success">Agriculture</h5>
            <div class="text-center">
                <a href="/categories.php?search=agriculture"><svg><use href="icons/symbol-defs.svg#agriculture"></use></svg></a>
            </div>
        </div>

        <div class="col-sm">
            <h5 class="text-center text-white bg-success">Housing</h5>
            <div class="text-center">
                <a href="/categories.php?search=housing"><svg class="pl-3"><use href="icons/symbol-defs.svg#housing"></use></svg></a>
            </div>
        </div>

        <div class="col-sm">
            <h5 class="text-center text-white bg-success">Transportation</h5>
            <div class="text-center">
                <a href="/categories.php?search=transportation"><svg><use href="icons/symbol-defs.svg#transportation"></use></svg></a>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-sm">
            <h5 class="text-center text-white bg-success">Circular-Economy</h5>
            <div class="text-center">
                <a href="/categories.php?search=economy"><svg><use href="icons/symbol-defs.svg#circular-economy"></use></svg></a>
            </div>
        </div>

        <div class="col-sm">
            <h5 class="text-center text-white bg-success">Healthcare</h5>
            <div class="text-center">
                <a href="/categories.php?search=healthcare"><svg class="pl-3"><use href="icons/symbol-defs.svg#healthcare"></use></svg></a>
            </div>
        </div>

        <div class="col-sm">
            <h5 class="text-center text-white bg-success">Lighting</h5>
            <div class="text-center">
                <a href="/categories.php?search=lighting"><svg><use href="icons/symbol-defs.svg#lighting"></use></svg></a>
            </div>
        </div>
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