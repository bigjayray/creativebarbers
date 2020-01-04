<?php include('../includes/config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us | Creative Barbers</title>
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
        <!-- Giving <section> bootstrap classes "mr-0 pb-5" to remove right margin and add bottom padding-->
        <section class="row mr-0 pb-5 ">

            <!-- Using a <figure> tag to wrap the logo because it is a semantic element for wrapping images-->
            <!-- Giving it a bootstrap class "col-md-4 col-lg-4" to make it occupy 4 colums on larger and medium display -->
            <!-- Giving it a bootstrap class "px-0" to remove the left and right padding -->
            <!-- Giving it a bootstrap class "order-1 order-md-2" to make appear first on small screens and second on medium screens -->
            <figure class="col-md-6 order-1 order-md-2 mt-5">
                <img src="../images/creativebarbers_6.jpg" class="img-fluid mx-auto d-block mr-0 " alt="logo" width="960" height="245">
            </figure>

            <!-- Using a <article> tag because it is a semantic element used to wrap a description or a text information on a webpage -->
            <article class="col-md-6 order-2 order-md-1 text-center">

                <!-- Giving <h1> a bootstrap class "text-md-right" to justify the text to the right on medium screen size-->
                <!-- Giving <h1> a bootstrap class "py-4 px-5 " to add padding to all sides -->
                <!-- Giving <h1> a bootstrap class "font-weight-bold " to make the heading bigger and bold  -->
                <h1 class="text-md-right py-4 px-5 font-weight-bold">About Us</h1>

                <!-- Giving <p> a bootstrap class "text-dark" to make the text in the article black -->
                <!-- Giving <p> a bootstrap class "px-md-5" to add top and bottom on medium screen size -->
                <!-- Giving <p> a bootstrap class "text-dark" to make the text in the article black -->
                <p class="text-dark px-md-5 ml-5 text-md-right "><strong>CREATIVE BARBERS</strong> founded by <strong>Elder Bob</strong> and <strong>Man Jero</strong> first opened their door in June of 2019 and has quickly become a staple in Dublin, Ireland. We offer a classic barber shop experience
                    while providing a broad range of classic and modern barber services. If you are looking for a great classic cut, a clean fade, or the best shave in town, we got you covered. Once seated in one of the handsome barber chairs, you
                    can rest easy knowing you will receive your complete service in one spot – no ushering from place to place. We want you to kick back, relax and enjoy yourself.
                </p>
            </article>
        </section>
        <section class="row mr-0">
            <article class="col-md-6 text-center ">
                <figure class="container px-0 col-md-6 order-1 order-md-2">
                    <img src="../images/time.jpg" class="img-fluid mx-auto d-block mr-0 " alt="logo" width="100" height="245">
                </figure>
                <h1 class="text-center mt-2">Hours</h1>
                <p class="text-dark  px-md-5 mb-5 mx-5 text-monospace">
                    <!-- Using the <strong> tag to make the the text appear bold -->
                    <strong>Monday – Wednesday</strong>
                    <br> 9:00 am to 6:00 pm
                    <br>
                    <strong>Thursday</strong>
                    <br> 9:00 am to 8:00pm
                    <br>
                    <strong>Friday</strong>
                    <br> 9:00 am to 6:00 pm
                    <br>
                    <strong>Saturday</strong>
                    <br> 10:00 am to 4:00 pm
                    <br>
                    <strong>Sunday</strong>
                    <br/>Closed
                </p>
            </article>
            <article class="col-md-6 text-center mb-5">
                <figure class="container px-0 col-md-6 order-1 order-md-2">
                    <img src="../images/location.png" class="img-fluid mx-auto d-block mr-0 rounded-circle" alt="logo" width="100" height="245">
                </figure>
                <h1 class="text-center mt-2">Location</h1>
                <p class="text-dark px-md-5 mb-5 mx-5">29B Block A South Circular Road Dublin 12 inside Griffith College Dublin, Ireland.
                </p>
            </article>
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