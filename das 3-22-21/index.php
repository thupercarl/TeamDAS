<!--
Author: Jake Donaldson
Date:   1/25/21
        This page is meant to be the homepage for the ConeyBeareSustainability Catalogue

JRA E/N: Hero images were pulled from pixabay
        -->
<?php
include('includes/homepagehead.php');
include('includes/navbar.php');
?>


<body class="bg-light">

<!-- First Section Homepage -->
<div class="jumbotron bg-white hero-img-home">
    <img src="images/coneybeare-4-transparent.png" class="img-fluid" alt="logo"> <br>
    <!--        <p id="coneybeareTagline">Welcome to the Coneybeare Sustainability Catalogue. Our mission is to bring you <br> a searchable database and on-line marketplace for innovative solutions in sustainability; Creating visibility and accelerating speed to market.</p>-->
<!--    <div class="h4" id="coneybeareTagline">Creating visibility and accelerating speed to market.</div>-->

    <br><br><br>

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
                <!--        <button class="btn btn-success d-inline" type="submit" style="height: 100%;">Search<span class="glyphicon glyphicon-search"></span></button>-->
                <button class="btn btn-success btn-lg" type="submit">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>
            </form>
        </div>
    </div>

    <br><br><br>

    <div class="card-deck row">

        <div class="card border-dark col-sm card-color card-hover btn" onclick="document.getElementById('join').scrollIntoView()">
            <div class="card-body text-center text-white">
                <h4 class="card-title"><strong>Applying to the Catalogue</strong></h4>
<!--                <p class="card-text">Details</p>-->
            </div>
        </div>

        <div class="card border-dark col-sm card-color card-hover btn" onclick="document.getElementById('mission').scrollIntoView()">
            <div class="card-body text-center text-white">
                <h4 class="card-title"><strong>Read our Mission</strong></h4>
<!--                <p class="card-text">Details</p>-->
            </div>
        </div>

        <div class="card border-dark col-sm card-color card-hover btn" onclick="document.getElementById('browse').scrollIntoView()">
            <div class="card-body text-center text-white">
                <h4 class="card-title"><strong>Browse the Catalogue</strong></h4>
<!--                <p class="card-text">Details</p>-->
            </div>
        </div>
    </div>





<!--    <div class="row text-white">
        <div class="col-6 text-center">
            <div class="card mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

    </div>-->
</div>
<!--<div class="input-group d-block text-center">
    <div class="display-4 text-white">A searchable database and on-line marketplace for innovative solutions in sustainability</div>
    <br>
    <form method="get" action="../categories.php">
        <input type="text" name="search" placeholder="What are you looking for?"
               style="width: 80%; height: 50px;font-size: 30px; text-align: center; border-radius: 30px">

        <br>
        <br>
        <button class="btn btn-success d-inline" type="submit" style="height: 100%;">Search<span class="glyphicon glyphicon-search"></span></button>
            <button class="btn btn-success btn-lg" type="submit">
                <span class="glyphicon glyphicon-search"></span> Search
            </button>
    </form>
</div>-->

<!-- Second section Homepage-->
<a class="anchor" id="join"></a>
<div class="join-catalog-home" style="background-image: ">

    <div class="row h-100 align-items-center">
        <div class="col-sm-6 text-center bg-light h-100 border border-dark">
            <div class="responsive-font">Apply to our Catalogue!</div>
            <p class="welcome">In our sign up form we will ask for details about your company, from its name to its contact information,
                to a point of contact between us and your company.
            </p>
            <a href="https://das.greenriverdev.com/webform.php"><button class="btn btn-success">Sign Up</button></a>
            <br>
            <br>

        </div>

        <div class="col-sm-6 text-center">
            <video class="video-fluid center" style="margin: 0 auto; position: relative; height: 100%; overflow: hidden; z-index: -1; right: 105%; flex-flow: column wrap" autoplay loop muted>
                <source src="video/Cascade%20-%20300.mp4" type="video/mp4" />
<!--                https://pixabay.com/videos/cascade-creek-water-flowing-300/-->
            </video>
            <div class="mask rgba-purple-slight"></div>


        </div>

        <div class="col-6 text-center">

        </div>
    </div>


</div>


<br>

<a class="anchor" id="browse"></a>
<div class="join-catalog-home">

    <div class="row h-100 align-items-center">

        <div class="col-sm-6 text-center">
            <video class="video-fluid center" style="margin: 0 auto; position: relative; height: 100%; overflow: hidden; z-index: -1; flex-flow: column wrap" autoplay loop muted>
                <source src="video/Wind%20Turbine%20-%2029740.mp4" type="video/mp4" />
                <!--            https://pixabay.com/videos/wind-turbine-pinwheel-29740/-->
            </video>

            <!--<img src="images/river-banff.jpg" alt="A river flowing from snowy mountains"
                 style="margin: 0 auto; position: relative; height: 100%; overflow: hidden; z-index: -1;">-->
            <div class="mask rgba-purple-slight"></div>

        </div>

        <div class="col-sm-6 text-center bg-light h-100 border border-dark">
            <div class="responsive-font">Browsing the Catalogue</div>
            <p class="welcome"> The catalogue is sorted in alphabetical order. Use the search bar to find what you are looking for or click the button below to go the catalogue
            </p>
            <a href="https://das.greenriverdev.com/categories.php"><button class="btn btn-success">Browse</button></a>
            <br>
            <br>
        </div>
    </div>
</div>

    <br>

<a class="anchor" id="mission"></a>
<div class="jumbotron bg-white img-background-banff">
    <!--                <img src="images/coneybeare-4-transparent.png" class="img-fluid" alt="logo"> <br>-->
    <!--        <p id="coneybeareTagline">Welcome to the Coneybeare Sustainability Catalogue. Our mission is to bring you <br> a searchable database and on-line marketplace for innovative solutions in sustainability; Creating visibility and accelerating speed to market.</p>-->
    <!--        <div class="h4">Creating visibility and accelerating speed to market.</div>-->
    <div class="row align-items-center h-100">
        <div class="col-sm-6 text-light text-center align-items-center offset-3">
            <h1 class="responsive-font">Our Mission</h1>
            <p class="responsive-font-sub-1">Welcome to the Coneybeare Sustainability Catalogue. Our mission is to bring you
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
                <a href="/categories.php?search=energy"><svg viewBox="0 0 50 25"><use href="icons/symbol-defs.svg#energy"></use></svg></a>
            </div>
            <br>
        </div>

        <div class="col-sm">
            <h5 class="text-center text-white bg-success">Water</h5>
            <div class="text-center">
                <a href="/categories.php?search=wastewater"><svg viewBox="0 0 50 25"><use href="icons/symbol-defs.svg#water"></use></svg></a>
            </div>
            <br>
        </div>

        <div class="col-sm">
            <h5 class="text-center text-white bg-success">Manufacturing</h5>
            <div class="text-center">
                <a href="/categories.php?search=consumer+goods"><svg viewBox="0 0 50 25"><use href="icons/symbol-defs.svg#manufacturing"></use></svg></a>
            </div>
            <br>
        </div>
    </div>


    <div class="row">
        <div class="col-sm">
            <h5 class="text-center text-white bg-success">Agriculture</h5>
            <div class="text-center">
                <a href="/categories.php?search=agriculture"><svg viewBox="0 0 50 25"><use href="icons/symbol-defs.svg#agriculture"></use></svg></a>
            </div>
            <br>
        </div>

        <div class="col-sm">
            <h5 class="text-center text-white bg-success">Housing</h5>
            <div class="text-center">
                <a href="/categories.php?search=housing"><svg viewBox="0 0 50 25"><use href="icons/symbol-defs.svg#housing"></use></svg></a>
            </div>
            <br>
        </div>

        <div class="col-sm">
            <h5 class="text-center text-white bg-success">Transportation</h5>
            <div class="text-center">
                <a href="/categories.php?search=transportation"><svg viewBox="0 0 50 25"><use href="icons/symbol-defs.svg#transportation"></use></svg></a>
            </div>
            <br>
        </div>
    </div>


    <div class="row">

        <div class="col-sm-4 text-center max-width-100text-center">
            <h5 class="text-center text-white bg-success">Circular-Economy</h5>
            <a href="/categories.php?search=economy"><svg viewBox="0 0 50 25"><use href="icons/symbol-defs.svg#circular-economy"></use></svg></a>
        </div>

        <br>

        <div class="col-sm-4 text-center max-width-100">
            <h5 class="text-center text-white bg-success">Healthcare</h5>
            <a href="/categories.php?search=healthcare"><svg viewBox="0 0 50 25"><use href="icons/symbol-defs.svg#healthcare" height="100%"></use></svg></a>
        </div>

        <br>

        <div class="col-sm-4 text-center max-width-100">
            <h5 class="text-white bg-success">Lighting</h5>
            <a href="/categories.php?search=lighting"><svg viewBox="0 0 50 25"><use href="icons/symbol-defs.svg#lighting"></use></svg></a>
        </div>

    </div>

</div>

    <br>
    <br>
    <?php
    include('includes/footer.html')
    ?>

</div>
<!--<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow60.png" />-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:3,fadeduration:[500,100]},controlHTML:'<img src="images/chevup.png">',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>