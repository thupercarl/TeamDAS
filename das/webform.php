<!--
Name: Jean-Kenneth Antonio
Date: 01-24-2021

This is the webform.php page for the Coneybeare Cleantech website. It links to the about, home, and sign up page
and contains the form companies may fill to send for submission. It connects to confirm.php after submission.

Logo Color: #5B9F51
-->

<?php
include('includes/head.php');
?>

<body>

<div class="container-xl bg-light" id="main">

<!--        Navigation bar-->
        <?php
        include('includes/navbar.php');
        ?>

    <div id="signUpHeader">
        <p class="display-2">Sign Up<img id="returnSymbol" src="images/Keyboard-return-01.svg" alt="Keyboard Return Symbol"></p>
    </div>

    <div class="row">
        <div class="col offset-1 h4">
            Ready to start connecting?
        </div>
    </div>

    <div class="row">
        <div class="col lead offset-2">
            Fill in the form below:
        </div>
    </div>
    <br>

    <!-- Company Information Form -->
    <form action="confirm.php" method="POST" class="border p-5 theme-color rounded" id="companyform"
          enctype="multipart/form-data">

        <fieldset class="form-group border p-2 bg-white rounded">

            <div class="h4">
                Company Information
            </div>

            <div class="lead">
                Please enter your company information:
            </div>

            <br>

            <!-- company name field -->
            <div class="form-group">
                <label for="companyname">Name*:</label>
                <input type="text" class="form-control" id="companyname" placeholder="Enter company name" name="cname">

                <span class="err" id="err-cname">
                    * Name Required
                </span>
            </div>

            <!-- about field -->
            <div class="form-group">
                <label for="about">About:</label>
                <textarea class="form-control" rows="5" oninput="revealTagline()" id="about"
                          placeholder="Enter a summary about your company" name="cabout"></textarea>
            </div>

            <!-- Tagline Field-->
            <div class="form-group hidden" id="taglinefield">
                <label for="taglinebox">Tagline:</label>
                <textarea class="form-control" rows="2"  maxlength="250"  id="taglinebox"
                          placeholder="Enter a tagline for your company you wish to see
                          in the sustainability catalog (Max 250 Characters)" name="ctagline"></textarea>
            </div>

            <!-- email field -->
            <div class="form-group">
                <label for="companyemail">Company Email*:</label>
                <input type="email" class="form-control" id="companyemail"
                       placeholder="Enter company email ex. company@company.com" name="cemail">

                <span class="err" id="err-cemail">
                    * Valid Email Required
                </span>
            </div>

            <!-- phone field -->
            <div class="form-group">
                <label for="companyphone">Company Phone:</label>
                <input type="tel" class="form-control" id="companyphone"
                       placeholder="Enter company phone number ex. 1234567890" name="cphone">
            </div>

            <!-- url field -->
            <div class="form-group">
                <label for="companyurl">Company URL*:</label>
                <input type="text" class="form-control" id="companyurl"
                       placeholder="Enter company website URL ex. 'company.com'" name="curl">

                <span class="err" id="err-curl">
                    * Valid Company URL Required
                </span>
            </div>

            <!-- category field -->
            <div class="form-group">
                <label for="companycategory">Select Category*: </label> <br>
                <select class="btn border" id="companycategory" name="ccategory">
                    <option value="000">--- Selection ---</option>
                </select>
                <br>
                <span class="err" id="err-ccategory">
                    * Category Selection Required
                </span>
            </div>

            <!-- Logo field -->
            <div class="form-group">
                <label for="clogo">Upload a logo or product image of the company* <br></label>
                <a tabindex="0" class="cursor text-decoration-none"
                   data-toggle="popover" title="Company or Product Image" data-placement="right" data-trigger="focus"
                   data-content="Upload an image of your company logo or product.
                   Accepts .jpg .png .jpeg and .gif files under 1 MiB only. Example: logo.jpg">&#9432;:</a>
                <br>
                <input type="file" id="clogo" name="clogo">

                <br>
                <span class="err" id="err-clogo">
                    * Invalid Image or file size is too large
                </span>
            </div>


            <!-- Keyword fields -->
            <label>Keywords</label>
            <a tabindex="0" class="cursor text-decoration-none"
               data-toggle="popover" title="Keywords" data-placement="right" data-trigger="focus"
               data-content="Keywords accept a-z, 0-9, dashes, periods, +, and #.
               Uppercase letters will be converted to lowercase letters.
               Any other characters such as spaces will be ignored!">&#9432;</a>
            <br>
            <div id="tags">
                <span>sustainability</span>
                <input type="text" value="" placeholder="Add a tag"/>
            </div>

            <div class="d-none" id="hiddenKeywords">

            </div>

            <br>
            <br>
            <br>
            <hr>
            <br>

            <!-- Contact Person Information -->
            <div class="h4">
                Contact Person Information
            </div>

            <div class="lead">
                Please enter contact information should the team have any questions about the form during review
            <a tabindex="0" class="cursor text-decoration-none"
               data-toggle="popover" title="If Left Unfilled..." data-placement="right" data-trigger="focus"
               data-content="The reviewers may instead contact through the company email">&#9432;:</a>
            </div>

            <br>

            <!-- First Name -->
            <div class="form-group">
                <label for="cfname">First Name:</label>
                <input type="text" class="form-control" id="cfname" placeholder="Enter first name" name="cfname">

                <span class="err" id="err-cfname">
                    * First Name Required
                </span>
            </div>

            <!-- Last Name -->
            <div class="form-group">
                <label for="clname">Last Name:</label>
                <input type="text" class="form-control" id="clname" placeholder="Enter last name"  name="clname">

                <span class="err" id="err-clname">
                    * Last Name Required
                </span>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="cpemail">Contact Email:</label>
                <input type="text" class="form-control" id="cpemail" placeholder="Enter contact email" name="cpemail">

                <span class="err" id="err-cpemail">
                    * Valid Email Required
                </span>
            </div>

            <br>
            <hr>
            <br>

            <!-- Location -->
            <div class="h4">
                Location Information
            </div>
            <div class="lead">
                Where your company is and their service area (scope of operation):
            </div>
            <br>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City (Optional)</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
                </div>

                <div class="form-group col-md-6">
                    <label for="state">State/Province/Region (Optional)</label>
                    <input type="text" class="form-control" id="state" placeholder="Enter State/Province/Region" name="state">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4" id="countrydiv">
                    <label for="country">Select Country*: </label> <br>
                    <select class="selectpicker countrypicker form-control"
                            data-default="US" id="country" name="country"></select>
                </div>
            </div>

            <div class="form-row">
                <!-- Service Area field -->
                <div class="form-group">
                    <label for="companyarea">Select Service Area* </label>
                    <a tabindex="0" class="cursor text-decoration-none"
                       data-toggle="popover" title="Company Scope" data-placement="right" data-trigger="focus"
                       data-content="What is the scope your company works in? Do you work locally?
                        or do you work globally? Pick the scope the company often works.">&#9432;:</a>
                    <br>
                    <br>
                    <select class="btn border" id="companyarea" name="carea">
                        <option value="000">--- Selection ---</option>
                    </select>
                    <br>
                    <span class="err" id="err-carea">
                    * Area Selection Required
                </span>
                </div>

            </div>
        </fieldset>

        <!-- submit button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-default bg-white text-dark">Request Addition</button>
        </div>

    </form>
    <?php
    include("includes/footer.html")
    ?>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--Webform country select maintained by mojoaxel: https://mojoaxel.github.io/bootstrap-select-country/index.html -->
<script src="js/bootstrap-select-country.min.js"></script>
<!-- script taken from http://jsbin.com/hehurot/5/edit?html,css,js,output for keywords-->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->

<script src="js/webform.js"></script>

</body>
</html>