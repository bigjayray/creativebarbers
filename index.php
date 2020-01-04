<!DOCTYPE html>
<html lang="en">


<head>
    <title>Creative Barbers</title>
<!--    include head tag contents - for better code reuse-->
    <?php include("includes/head-tag-contents.php");?>
</head>

<body>
    <!-- Wrapping the entire body in a <div> conatiner which has a class attribute -->
    <!-- Giving it a bootstrap "container" class to set the margin of the entire content of the page -->
    <div class="wrapper container">

        <!-- Here is our main header that is used across all the pages because it is a semantic element for grouping page header elements -->
        <header>
            <!--    include header tag contents - for better code reuse-->
            <?php include("includes/navigation.php");?>
        </header>


        <!-- Here is our page's main content -->
        <!-- Using a <main> tag because it is a semantic element used to group and represent the main content of the webpage -->
        <main>
            <!-- It contains a <section> tag which is used to group the carousel indicator and the carousel images -->
            <!-- Giving it a bootstrap class "carousel slide" to create a sliding carousel-->
            <section id="slider" class="carousel slide" data-ride="carousel">

                <!-- Creating a carousel indicator using the "carousel-indicators"" bootstrap class -->
                <ul class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active">&nbsp;</li>
                    <li data-target="#slider" data-slide-to="1">&nbsp;</li>
                    <li data-target="#slider" data-slide-to="2">&nbsp;</li>
                </ul>

                <!-- This <section> tag is used to group the carousel images -->
                <!-- Using the "carousel-inner" bootstrap class to add slides to the carousel -->
                <section class="carousel-inner">

                    <!-- Using a <figure> tag to wrap the images and and style them -->
                    <!-- Using the "carousel-item" bootstrap class to specify the content of each slide -->
                    <figure class="carousel-item active">
                        <img src="images/carousel1.jpg" class="img-fluid mx-auto d-block w-100" alt="baber" width="100" height="500">
                    </figure>
                    <figure class="carousel-item">
                        <img src="images/carousel3.jpg" class="img-fluid mx-auto d-block w-100" alt="baber" width="100" height="500">
                    </figure>
                    <figure class="carousel-item">
                        <img src="images/carousel2.jpg" class="img-fluid mx-auto d-block w-100" alt="baber" width="100" height="500">
                    </figure>
                </section>

                <!-- Using a "carousel-control-prev" bootstrap class to adds a left (previous) button to the carousel, which allows the user to go back between the slides -->
                <a class="carousel-control-prev" href="#slider" data-slide="prev">

                    <!-- Used to create "previous" button icon -->
                    <span class="carousel-control-prev-icon">&nbsp;</span>
                </a>

                <!-- Using a "carousel-control-next" bootstrap class to adds a right (next) button to the carousel, which allows the user to go back between the slides -->
                <a class="carousel-control-next" href="#slider" data-slide="next">

                    <!-- Used to create "next" button icon -->
                    <span class="carousel-control-next-icon">&nbsp;</span>
                </a>
            </section>

            <!-- Giving <hi> a bootstrap class "text-dark" to make the text black -->
            <!-- Giving <h1> a bootstrap class "text-center" to justify the text to the center-->
            <!-- Giving <h1> a bootstrap class "font-weight-bold" to make the heading bigger and bold  -->
            <h1 class="text-dark text-center pt-4 font-weight-bold">TESTIMONIALS</h1>

            <section id="slider2" class="carousel carousel1 slide mx-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider2" data-slide-to="0" class="active">&nbsp;</li>
                    <li data-target="#slider2" data-slide-to="1">&nbsp;</li>
                    <li data-target="#slider2" data-slide-to="2">&nbsp;</li>
                </ol>
                <div class="carousel-inner1 carousel-inner">
                    <div class="carousel-item active">

                        <!-- Using the "carousel-caption" bootstrap class to add text to a carousel -->
                        <div class="carousel-caption">
                            <p>"First trip to the barbershop - top draw, great place, great location, great people! Cheers Simon "</p>
                            <p><strong> - John Smith</strong></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>"My first visit .. and absolutely happy with the result!! Honestly, I have been looking for a decent barber since years"
                            </p>
                            <p><strong> - Maro</strong></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>"The prices in my opinion are a true reflection of the quality of service provided and are very competitive as compared to many other places in the area.
                                <p><strong> - Tim</strong></p>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <!-- Here is the Footer of the page -->
        <!-- Using a <footer> tag because it is a semantic element used to group and represent the main content of the webpage -->
        <footer class="page-footer font-small bg-dark ">
            <!--    include footer tag contents - for better code reuse-->
            <?php include("includes/footer.php");?>
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