<?php

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: ../index.php");
}

?>
<!-- The <nav> tag is used to group the navigation links at the top of the page -->
<!-- I am using it because it is a semantic element for grouping navigation links -->
<!-- Giving it a bootstrap class "navbar" to create a navigation bar -->
<!-- Giving it a bootstrap class "navbar-expand-md" to enable the make the navigation links appear vertically on smaller screens -->
<!-- Giving it a bootstrap class "navbar-dark bg-dark" to set the navbar background colour -->
<!-- Giving it a bootstrap class "justify-content-end" to justify the navigation links to the left -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <!-- Giving <a> bootstrap class "navbar-brand" to create a brand name-->
    <a class="navbar-brand d-none d-md-block" href="../index.php">&nbsp;
        <img src="../images/logo.png" class="w-25" alt="logo">
    </a>

    <!-- This bootstrap class "navbar-toggler" creates a hamburger icon at the smaller screen widths. Clicking the hamburger icon displays the links vertically -->
    <button class="navbar-toggler pull-left" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon">&nbsp;</span>&nbsp;
    </button>

    <!-- Giving it a bootstrap class "navbar-nav" to add links the navbar -->
    <!-- Giving it a bootstrap class "collapse navbar-collapse" to add the navigation links to the collapsible nav bar -->
    <div class="collapse navbar-collapse  justify-content-end" id="collapsibleNavbar">

        <!-- Using an Un-ordered list to display the navigation links and giving it a class attribute which will enables us to target this element and its descedent elements -->
        <ul class="navbar-nav ">

            <!-- Giving the <li> items a bootstrap class "nav-item" to add them to the nav bar -->
            <!-- Giving the <a> items a bootstrap class "nav-link" to style them as nav-bar links -->
            <!-- Giving the <a> first item a bootstrap class "d-none d-md-block " to make only visible on meduim and above screen sizes -->
            <!-- Giving the <a> items a bootstrap class "mx-2" to add left and right margin -->
            <li class="nav-item "><a class="nav-link text-white d-none d-md-block font-weight-bold mx-2" href="../php-template/reservation.php">BOOK APPOINTMENT</a></li>
            <li class="nav-item "><a class="nav-link text-white-50 mx-2" href="../php-template/about_us.php">About Us</a></li>
            <li class="nav-item"><a class="nav-link text-white-50 mx-2" href="../php-template/services.php">Services</a></li>
            <li class="nav-item "><a class="nav-link text-white-50 mx-2" href="../php-template/contact_us.php">Contact Us</a></li>
            <!-- logged in user logout option-->
            <?php  if (isset($_SESSION['email'])) { ?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php  echo $_SESSION['firstname']; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../php-template/user_page.php">Profile</a>
                    <a class="dropdown-item" href="../index.php?logout='1'">Logout</a>
                </div>
            <?php } else { ?>
            <li class="nav-item "><a class="nav-link text-white-50 mx-2" href="../php-template/login.php">Login</a></li>
            <?php } ?>
        </ul>
    </div>

    <!-- Giving the <button> a bootstrap class "d-block d-md-none" to make the button only visible on smaller view ports -->
    <div class="d-flex d-md-none justify-content-center col-9">
        <a href="../php-template/reservation.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">BOOK APPOINTMENT</a>
    </div>
</nav>