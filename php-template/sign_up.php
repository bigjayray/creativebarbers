<!-- include config file for sign up form logic -->
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
        <form method="post" class="col-md-4 my-5 pb-5" action="sign_up.php">
            <?php include('../includes/errors.php'); ?>

            <!-- Giving <h1> a bootstrap class "display-4 font-weight-bold" to make the heading bigger and bold  -->
            <!-- Giving <h1> a bootstrap class "pt-5 mb-3" to add padding top and bottom margin -->
            <h1 class="text-center mt-2 display-4 font-weight-bold">SIGN UP</h1>

            <!-- Using a <fieldset> tag because it is semantic element to group form elements  it a class attribute which will enables us to target this element and its descedent elements -->
            <fieldset class="container">

                <!-- Using a <div> tag to wrap the input fields(elements) inside the fieldset and giving it a class attribute  -->
                <!-- This was done for all the element inside the fieldset -->
                <div class="form-group pt-2">

                    <label for="fName">First name</label>
                    <!-- Giving the <input> a bootstrap class "form-control" to enable the input field contol the form -->
                    <!-- Giving the <input> a bootstrap class "rounded-0 border border-secondary" to make the input field border black and remove the rounded edges-->
                    <input type="text" class="form-control rounded-0 border border-secondary" placeholder="First name" id="fName" name="firstname" required>
                </div>
                <div class="form-group pt-2">
                    <label for="lName">Last name</label>
                    <input type="text" class="form-control rounded-0 border border-secondary" placeholder="Last name" id="lName" name="lastname" required>
                </div>
                <div class="form-group pt-2">
                    <label for="eml">Email</label>
                    <input type="email" class="form-control rounded-0 border border-secondary" placeholder="Email" id="eml" name="email" required>
                </div>
                <div class="form-group pt-2">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control rounded-0 border border-secondary" placeholder="Password" id="pwd" name="password_1" required>
                </div>
                <div class="form-group pt-2">
                    <label for="con_pwd">Confirm Password</label>
                    <input type="password" class="form-control rounded-0 border border-secondary" placeholder="Confirm Password" id="con_pwd" name="password_2" required>
                </div>
                <div class="form-group d-flex justify-content-center py-4">
                    <button type="submit" class="btn btn-dark px-5 rounded-0" name="signup_user">SIGN UP</button>
                </div>
                <p>Already a member? <a href="../php-template/login.php">Sign in</a></p>
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