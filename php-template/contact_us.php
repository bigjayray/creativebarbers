<!-- include config file for contact us form logic -->
<?php include('../includes/config.php') ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Contact Us | Creative Barbers</title>
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
        <form method="POST" class="col-md-5 my-5 pb-5" action="">
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

            <!-- Giving <h1> a bootstrap class "display-4 font-weight-bold" to make the heading bigger and bold  -->
            <!-- Giving <h1> a bootstrap class "pt-5 mb-3" to add padding top and bottom margin -->
            <h1 class="text-center pt-3  display-4 font-weight-bold">CONTACT US </h1>

            <!-- Using a <fieldset> tag because it is semantic element to group form elements  it a class attribute which will enables us to target this element and its descedent elements -->
            <fieldset class="container">

                <!-- Using a <div> tag to wrap the input fields(elements) inside the fieldset and giving it a class attribute  -->
                <!-- This was done for all the element inside the fieldset -->
                <div class="form-group pt-2">

                    <!-- Using the <label> tag to specify the label/name for an element -->
                    <!-- The "for" attribute associates the label with a control element-->
                    <label for="usr">Name</label>

                    <!-- Giving the <input> a bootstrap class "form-control" to enable the input field contol the form -->
                    <!-- Giving the <input> a bootstrap class "rounded-0 border border-secondary" to make the input field border black and remove the rounded edges-->
                    <input type="text" class="form-control rounded-0 border border-secondary" placeholder="Name" id="usr" name="name" required>
                </div>

                <div class=" form-group pt-3">
                    <label for="pwd">Email</label>
                    <input type="text" class="form-control rounded-0 border border-secondary" placeholder="Email" id="pwd" name="email" required>
                </div>

                <div class=" form-group pt-3">
                    <label for="pwd">Subject</label>
                    <input type="text" class="form-control rounded-0 border border-secondary" placeholder="Subject" id="pwd" name="subject" required>
                </div>

                <div class="form-group pt-3">
                    <label for="comment">Comment</label>
                    <textarea class="form-control rounded-0 border border-secondary" rows="9" placeholder="Comment" id="comment" name="comment" required></textarea>
                </div>
                <div class="form-group d-flex justify-content-center py-5">
                    <button type="submit" class="btn btn-dark px-5 rounded-0" name="contact">SUBMIT</button>
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