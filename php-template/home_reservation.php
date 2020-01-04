<!--include config file for reservation form logic -->
<?php

include('../includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Reservation | Creative Barbers</title>
    <!--    include head tag contents - for better code reuse-->
    <?php include('../includes/head-tag-contents.php');?>
</head>

<body>
<!-- Wrapping the entire body in a <div> conatiner which has a class attribute -->
<!-- Giving it a bootstrap "container" class to set the margin of the entire content of the page -->
<div class="wrapper container">

    <!-- Here is our main header that is used across all the pages because it is a semantic element for grouping page header elements -->
    <header>
        <!--    include header tag contents - for better code reuse-->
        <?php include("../includes/navigation2.php");?>
    </header>

    <!-- Here is the page main content -->
    <!-- Using a <main> tag because it is a semantic element used to group and represent the main content of the webpage -->
    <!-- Giving it a bootstrap class "d-flex justify-content-center" to justify all its content to the center -->
    <main class="d-flex justify-content-center">

        <!-- Using a <form> tag to create a form which is used as a container for all the form elements  -->
        <!-- It has a form "method" attribute which specifies what type of action to carried out -->
        <form method="POST" class="col-md-7" action="home_reservation.php">
            <!-- notification message -->
            <?php if (isset($msg)) : ?>
                <div class="error success" >
                    <h3>
                        <?php
                        echo $msg;
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <!--    include logic for errors -->
            <?php include('../includes/errors.php'); ?>

            <!-- Giving <h1> a bootstrap class "display-4 font-weight-bold " to make the heading bigger and bold  -->
            <!-- Giving <h1> a bootstrap class "pt-5 mb-3" to add padding top and bottom margin -->
            <h1 class="text-center py-md-5 mt-2 display-4 font-weight-bold">RESERVATION</h1>

            <!-- Using a <fieldset> tag because it is semantic element to group form elements  it a class attribute which will enables us to target this element and its descedent elements -->
            <fieldset class="container mb-2">

                <!-- Giving it a bootstrap class "row" to use the grid system-->
                <div class="row">

                    <!-- Using a <div> tag to wrap the input fields(elements) inside the fieldset and giving it a class attribute  -->
                    <!-- This was done for all the element inside the fieldset -->
                    <div class="form-group pt-2 col-md-4">

                        <!-- Giving the <input> a bootstrap class "form-control to enable the input field contol the form -->
                        <!-- Giving the <input> a bootstrap class "rounded-0 border border-secondary" to make the input field border black and remove the rounded edges-->
                        <label for="phn">Phone</label>
                        <input type="tel" class="form-control rounded-0 border border-secondary" placeholder="Phone" id="phn" name="phone" required>
                    </div>
                    <div class=" form-group pt-2 col-md-4">
                        <label for="dt">Date</label>
                        <input type="date" class="form-control rounded-0 border border-secondary" placeholder="Date" id="dt" name="date" required>
                    </div>
                    <div class=" form-group pt-2 col-md-4">
                        <label for="time">Time</label>
                        <input type="time" class="form-control rounded-0 border border-secondary" id="dt" name="time" required>
                    </div>
                    <div class=" form-group pt-2 col-md-12">
                        <label for="add">Address</label>
                        <textarea class="form-control rounded-0 border border-secondary" rows="3" placeholder="Address" id="add" name="address" required></textarea>
                    </div>
                    <div class=" form-group pt-2 col-md-6 mb-0">
                        <label for="serv">Service</label>

                        <!-- Using a <select> tag to create a drop down list -->
                        <select name="service" class="form-control rounded-0 border border-secondary custom-select mb-3" id="serv" required>

                            <!-- Adding options to the dropdown list using an <option> tag -->
                            <option selected>Select A Service </option>
                            <option value="Haircut and Hot Towel">Haircut w/ Hot Towel - €21</option>
                            <option value="Haircut and Wash">Haircut w/ Wash - €25</option>
                            <option value="Haircut and Beard">Haircut w/ Beard – €25</option>
                            <option value="Haircut and Razor">Haircut w/ Razor – €51</option>
                            <option value="Haircut and Steam">Haircut w/ Steam – €65</option>
                            <option value="Kids Cuts">Kids Cut - €15</option>
                            <option value="Stylist Women">Stylist Women - €35</option>
                            <option value="Stylist Men">Stylist Men - €21</option>
                            <option value="Stylist Children">Stylist Children - €15</option>
                        </select>
                    </div>
                    <div class=" form-group pt-2 col-md-6 mb-0">
                        <label for="styl">Stylist</label>
                        <select name="stylist" class="form-control rounded-0 border border-secondary custom-select mb-3" id="styl" required>
                            <option selected>Select A Stylist </option>
                            <option value="Any">Any</option>
                            <option value="Brodie">Brodie</option>
                            <option value="Hanna">Hanna</option>
                            <option value="Simon">Simon</option>
                            <option value="Alessandro">Alessandro</option>
                            <option value="Alison">Alison</option>
                        </select>
                    </div>
                </div>

                <div class="form-group d-flex justify-content-end py-5 mb-5">
                    <button type="submit" class="btn btn-dark px-5 rounded-0" name="home_reservation">MAKE RESERVATION</button>
                </div>
            </fieldset>
        </form>
    </main>
    <!-- Here is the Footer of the page -->
    <!-- Using a <footer> tag because it is a semantic element used to group and represent the main content of the webpage -->
    <footer class="page-footer font-small bg-dark ">
        <!--    include footer tag contents - for better code reuse-->
        <?php include("../includes/footer2.php");?>
    </footer>
</div>
<!-- Adding Bootstrap javascript element -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Using the <script>tag to add the "fontawesome" javascript link to the webpage -->
<script src="https://kit.fontawesome.com/150b4f6935.js" crossorigin="anonymous"></script>
</body>

</html>