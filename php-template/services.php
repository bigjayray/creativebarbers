<?php include('../includes/config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services | Creative Barbers</title>
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
    <main>

        <!-- It contains a <section> which is used to group the image and the about us content -->
        <!-- Giving <section> a bootstrap class "row" to use the grid system-->
        <!-- Giving <section> bootstrap classes "mr-0 pb-5" to remove right margin -->
        <section class="row mr-0">

            <!-- Using a <figure> tag to wrap the logo because it is a semantic element for wrapping images-->
            <!-- Giving it a bootstrap class "col-md-3" to make it occupy 3 colums on medium screens -->
            <!-- Giving it a bootstrap class "px-0" to remove the left and right padding -->
            <!-- Giving it a bootstrap class "pl-md-5  to add left and padding on medium screens  -->
            <!-- Giving it a bootstrap class "py-md-5 " to add top and bottom padding on medium screens-->
            <figure class="container px-0 pl-md-5 py-md-4 col-md-3">
                <img src="../images/creativebarbers_2.jpg" class="img-fluid m-auto d-block  " alt="services" width="500" height="400">
            </figure>

            <section class="p-4 col-md-9 text-center">

                <!-- Using a <article> tag because it is a semantic element used to wrap a description or a text information on a webpage -->
                <article>

                    <!-- Giving <h1> a bootstrap class "text-md-left" to justify the text to the left on medium screen size-->
                    <!-- Giving <h1> a bootstrap class "pt-md-5 pt-4 " to add padding top-->
                    <!-- Giving <h1> a bootstrap class "font-weight-bold " to make the heading bigger and bold  -->
                    <h1 class="text-md-left pt-md-0 pt-4 font-weight-bold">SERVICES</h1>

                    <!-- Giving <p> a bootstrap class "text-dark" to make the text in the article black -->
                    <!-- Giving <p> a bootstrap class "mr-md-5 mt-4" to add right margin on medium screen size -->
                    <!-- Giving <p> a bootstrap class "text-dark" to make the text in the article black -->
                    <p class="text-dark mr-md-5 mt-4 text-md-left">At Creative Barbers, all of our Stylists and Barbers are classically trained, blending old school techniques with the latest styles and trends, so you receive a fresh, one-of-a-kind look tailored just for you. You’ll walk out with
                        confidence and a smile on your face.</p>
                </article>

                <!-- Wrapping the menu items and images with a <div> to enable me target ans style them together-->
                <div class="text-left pt-md-5 mt-md-5 pt-4 row">

                    <!-- Using an <ul> Un-ordered list to display the Hair cuts and Stylist services -->
                    <!-- Giving it a bootstrap class "pr-5" to add padding to the right -->
                    <!-- Giving it a bootstrap class "col-md-6" to make it occupy 6 colums on smaller and medium display -->
                    <ul class="list-styled pr-5 col-md-6 ">
                        <li>
                            <h2>Hair Cuts</h2>
                        </li>
                        <li class="p-1"> - Haircut w/ Hot Towel - €21</li>
                        <li class="p-1"> - Haircut w/ Wash - €25</li>
                        <li class="p-1"> - Haircut w/ Beard – €25</li>
                        <li class="p-1"> - Haircut w/ Razor – €51</li>
                        <li class="p-1"> - Haircut w/ Steam – €65</li>
                        <li class="p-1"> - Kids Cut - €15</li>
                    </ul>
                    <figure class="container pr-md-5 py-md-4 col-md-5 align-self-end">
                        <img src="../images/creativebarbers_4.jpg " class="img-fluid mx-auto d-block " alt="logo " width="300 " height="400 ">
                    </figure>

                </div>

                <div class="text-left pb-md-5 mb-md-5 row">

                    <ul class="list-styled pr-5 col-md-6 ">
                        <li>
                            <h2>Stylists Services</h2>
                        </li>
                        <li class="p-1"> - Women - €35</li>
                        <li class="p-1"> - Men - €21</li>
                        <li class="p-1"> - Children - €15</li>
                    </ul>
                    <figure class="container pr-md-5 py-md-4 col-md-5 align-self-end">
                        <img src="../images/creativebarbers_5.jpg " class="img-fluid mx-auto d-block " alt="logo " width="300 " height="400 ">
                    </figure>

                </div>
            </section>
        </section>


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