<!--
Author: Jake Donaldson
Date:   1/25/21
        This page is meant to be the homepage for the ConeyBeareSustainability Catalogue

Jean-Kenneth Antonio: Changed the style to be more modern looking using whole screen pages and
    placed images and videos from pixabay. Added scrolling to compensate webpage length
Date: 03-19-2021
-->
<?php
include('includes/homepagehead.php');
include('includes/navbar.php');
?>

<body class="bg-light">

<!-- First Section Homepage -->

<div class="jumbotron bg-white hero-img-home">
    <img src="images/coneybeare-4-transparent.png" class="img-fluid" alt="logo"> <br>


    <br><br><br>
    <button onclick="topFunction()" id="returnButton" title="Go to top"><img src="images/chevup.png"></button>

    <div class="text-center row">

        <br>

        <div class="col-12">
            <div class="display-4 text-white responsive-font col-sm">
                A searchable database and on-line marketplace for innovative solutions in sustainability
            </div>

            <br>

            <form method="get" action="../categories.php">
                <input type="text" name="search" placeholder="What are you looking for?" class="text-center col-8"
                       style="height: 50px;font-size: 30px; border-radius: 30px">

                <br>
                <br>

                <button class="btn btn-success btn-lg" type="submit">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>
            </form>
        </div>
    </div>

    <br><br><br>

    <div class="card-deck row">

        <div class="card border-dark col-sm card-color card-hover btn"
             onclick="document.getElementById('join').scrollIntoView()">
            <div class="card-body text-center text-white">
                <h4 class="card-title"><strong>Applying to the Catalogue</strong></h4>
            </div>
        </div>

        <div class="card border-dark col-sm card-color card-hover btn"
             onclick="document.getElementById('mission').scrollIntoView()">
            <div class="card-body text-center text-white">
                <h4 class="card-title"><strong>Read our Mission</strong></h4>
            </div>
        </div>

        <div class="card border-dark col-sm card-color card-hover btn"
             onclick="document.getElementById('browse').scrollIntoView()">
            <div class="card-body text-center text-white">
                <h4 class="card-title"><strong>Browse the Catalogue</strong></h4>
            </div>
        </div>
    </div>
</div>

<!-- Second section Homepage-->
<a class="anchor" id="join"></a>
<div class="join-catalog-home" style="background-image: ">

    <div class="row h-100 align-items-center">
        <div class="col-sm-6 text-center bg-light h-100 border border-dark">
            <div class="responsive-font">Apply to our Catalogue!</div>
            <p class="welcome">In our sign up form we will ask for details about your company, from its name to its
                contact information,
                to a point of contact between us and your company.
            </p>
            <a href="https://das.greenriverdev.com/webform.php">
                <button class="btn btn-success">Sign Up</button>
            </a>
            <br>
            <br>

        </div>

        <div class="col-sm-6 text-center">
            <video class="video-fluid center creek-vid" autoplay loop muted>
                <source src="video/Cascade%20-%20300.mp4" type="video/mp4"/>
                <!-- https://pixabay.com/videos/cascade-creek-water-flowing-300/ -->
            </video>
            <div class="mask rgba-purple-slight"></div>

        </div>
    </div>

</div>

<br>

<a class="anchor" id="browse"></a>
<div class="join-catalog-home">

    <div class="row h-100 align-items-center">

        <div class="col-sm-6 text-center">
            <video class="video-fluid center windmill-vid" autoplay loop muted>
                <source src="video/Wind%20Turbine%20-%2029740.mp4" type="video/mp4"/>
                <!-- https://pixabay.com/videos/wind-turbine-pinwheel-29740/ -->
            </video>

            <div class="mask rgba-purple-slight"></div>

        </div>

        <div class="col-sm-6 text-center bg-light h-100 border border-dark">
            <div class="responsive-font">Browsing the Catalogue</div>
            <p class="welcome"> The catalogue is sorted in alphabetical order. Use the search bar to find what you are
                looking for or click the button below to go the catalogue
            </p>
            <a href="https://das.greenriverdev.com/categories.php">
                <button class="btn btn-success">Browse</button>
            </a>
            <br>
            <br>
        </div>
    </div>
</div>

<br>

<a class="anchor" id="mission"></a>
<div class="jumbotron bg-white img-background-banff">
    <div class="row align-items-center h-100">
        <div class="col-sm-6 text-light text-center align-items-center offset-3">
            <h1 class="responsive-font">Our Mission</h1>
            <p class="responsive-font-sub-1">Welcome to the Coneybeare Sustainability Catalogue. Our mission is to bring
                you
                a searchable database and on-line marketplace for innovative solutions in sustainability; Creating
                visibility and accelerating speed to market.
            </p>
        </div>
    </div>
</div>


<div class="bg-light" id="main">

    <div class="container-fluid pl-5 pr-5">

        <br>
        <!--divider-->
        <hr class="rounded">

        <h2 class="text-center responsive-font">What Service are you Searching for?</h2>

        <br>

        <div class="row">
            <div class="col-sm category-hover">
                <h5 class="text-center text-white bg-success">Energy</h5>
                <div class="text-center">
                    <a href="/categories.php?search=energy">
                        <svg viewBox="0 0 50 25">
                            <use href="icons/symbol-defs.svg#energy"></use>
                        </svg>
                    </a>
                </div>
                <br>
            </div>

            <div class="col-sm">
                <h5 class="text-center text-white bg-success">Water</h5>
                <div class="text-center">
                    <a href="/categories.php?search=wastewater">
                        <svg viewBox="0 0 50 25">
                            <use href="icons/symbol-defs.svg#water"></use>
                        </svg>
                    </a>
                </div>
                <br>
            </div>

            <div class="col-sm">
                <h5 class="text-center text-white bg-success">Manufacturing</h5>
                <div class="text-center">
                    <a href="/categories.php?search=consumer+goods">
                        <svg viewBox="0 0 50 25">
                            <use href="icons/symbol-defs.svg#manufacturing"></use>
                        </svg>
                    </a>
                </div>
                <br>
            </div>
        </div>


        <div class="row">
            <div class="col-sm">
                <h5 class="text-center text-white bg-success">Agriculture</h5>
                <div class="text-center">
                    <a href="/categories.php?search=agriculture">
                        <svg viewBox="0 0 50 25">
                            <use href="icons/symbol-defs.svg#agriculture"></use>
                        </svg>
                    </a>
                </div>
                <br>
            </div>

            <div class="col-sm">
                <h5 class="text-center text-white bg-success">Housing</h5>
                <div class="text-center">
                    <a href="/categories.php?search=housing">
                        <svg viewBox="0 0 50 25">
                            <use href="icons/symbol-defs.svg#housing"></use>
                        </svg>
                    </a>
                </div>
                <br>
            </div>

            <div class="col-sm">
                <h5 class="text-center text-white bg-success">Transportation</h5>
                <div class="text-center">
                    <a href="/categories.php?search=transportation">
                        <svg viewBox="0 0 50 25">
                            <use href="icons/symbol-defs.svg#transportation"></use>
                        </svg>
                    </a>
                </div>
                <br>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-4 text-center max-width-100text-center">
                <h5 class="text-center text-white bg-success">Circular-Economy</h5>
                <a href="/categories.php?search=economy">
                    <svg viewBox="0 0 50 25">
                        <use href="icons/symbol-defs.svg#circular-economy"></use>
                    </svg>
                </a>
            </div>

            <br>

            <div class="col-sm-4 text-center max-width-100">
                <h5 class="text-center text-white bg-success">Healthcare</h5>
                <a href="/categories.php?search=healthcare">
                    <svg viewBox="0 0 50 25">
                        <use href="icons/symbol-defs.svg#healthcare" height="100%"></use>
                    </svg>
                </a>
            </div>

            <br>

            <div class="col-sm-4 text-center max-width-100">
                <h5 class="text-white bg-success">Lighting</h5>
                <a href="/categories.php?search=lighting">
                    <svg viewBox="0 0 50 25">
                        <use href="icons/symbol-defs.svg#lighting"></use>
                    </svg>
                </a>
            </div>

        </div>

    </div>

    <br>
    <br>

    <?php
    include('includes/footer.html')
    ?>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="js/general.js"></script>
</body>

</html>