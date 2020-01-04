<!-- It has a <section> tag which has "text-center pt-2" classes to justify all it's content to the center and set a margin top -->
<section class="text-center pt-2">

    <!-- Wrapping the logo  the contact links and search bar in a <div> container so that they can be targeted together using the class attribute -->
    <!-- Giving it a bootstrap class "row" to use the grid system-->
    <div class="row mx-0 mt-3">

        <!-- Using a <article> tag because it is a semantic element used to wrap a description or a text information on a webpage -->
        <article class="col-md-4 col-lg-4 mx-auto px-5 mb-4 ">

            <!-- Giving <h6> a bootstrap class "font-weight-bold text-white" to make the heading bold and white -->
            <!-- Giving <h6> a bootstrap class "mb-3 " to add bottom margin -->
            <h6 class="font-weight-bold text-white mb-3">WHERE TO FIND US</h6>

            <!-- Giving <p> a bootstrap class "text-white " to make the text in the article white-->
            <p class="text-white"> 29B Block A South Circular Road Dublin 12 inside Griffith College Dublin, Ireland.</p>
        </article>

        <!-- Using a <figure> tag to wrap the logo because it is a semantic element for wrapping images-->
        <!-- Giving it a bootstrap class "col-md-4 col-lg-4" to make it occupy 4 colums on larger and medium display -->
        <!-- Giving it a bootstrap class "mx-auto" to automatically set the margin -->
        <!-- Giving it a bootstrap class "align-self-end" to make it moke to the bottom of its cell -->
        <!-- Giving it a bootstrap class "order-2 order-md-1" to make appear last on small screens and second on medium screens -->
        <figure class="col-md-4 col-lg-4 mx-auto align-self-end order-2 order-md-1">
            <img src="../images/logo.png" class="w-25 mx-auto d-block" alt="logo">

            <!-- Using a <figurecaption> tag to wrap the text because it is a semantic element for wrapping text belonging to images-->
            <figcaption class="text-center py-3 text-white-50">
                © 2019 Creative Barbers
            </figcaption>
        </figure>

        <div class="col-md-4 col-lg-4 order-1 order-md-2 d-flex justify-content-center">

            <!-- Using an <ul> Un-ordered list to display the "Book Appointment" link and the social media icons at the footer of the page  -->
            <ul class="list-unstyled mb-4">

                <!-- Giving the <li> items a bootstrap class "list-inline-item to make them appear on the same line -->
                <li class="list-inline-item">
                    <a class="font-weight-bold text-white mr-auto" href="../php-template/reservation.php">BOOK <br> APPOINTMENT</a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-md rgba-white-slight mx-3">
                        <i class="fab fa-facebook-f">&nbsp;</i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-md rgba-white-slight mx-3">
                        <i class="fab fa-twitter">&nbsp;</i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-md rgba-white-slight mx-3">
                        <i class="fab fa-google-plus-g">&nbsp;</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>