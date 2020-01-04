<?php

session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

?>
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
    <main class="mr-0">

                <div class="card p-5">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="../images/creativebarbers_9.jpg" class="card-img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <?php if (isset($_SESSION['email'])) :?>
                                        <h5 class="card-title"><?php echo $_SESSION['firstname']; ?></h5>
                                        <h5 class="card-title"><?php echo $_SESSION['lastname']; ?></h5>
                                        <h5 class="card-title"><?php echo $_SESSION['email']; ?></h5>
                                <?php  endif ?>
                                <a href="home_reservation.php" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Home Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="p-5 mb-5">
                    <table class="container table table-striped">
                        <thead>
                        <tr>
                            <th scope="col" class="font-weight-bold">Reservation History</th>
                            <th scope="col" class="font-weight-bold">Date</th>
                            <th scope="col" class="d-none d-sm-block font-weight-bold">Stylist</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $email = $_SESSION['email'];
                        // connect to database
                        $db = mysqli_connect('localhost', 'root', '', 'creativebarbers');
                        //for the reservation history
                        $query2 = "SELECT * FROM reservation WHERE email='$email'";
                        $query4 = "SELECT * FROM homereservation WHERE email='$email'";
                        $results2 = mysqli_query($db, $query2);
                        $results4 = mysqli_query($db, $query4);

                        if ((mysqli_num_rows($results2) >= 1) || (mysqli_num_rows($results4) >= 1)) {
                            while ($row = $results2->fetch_array(MYSQLI_ASSOC)) {?>
                                <tr>
                                    <td><?php echo $row['service']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td class="d-none d-sm-block"><?php echo $row['stylist']; ?></td>
                                </tr>
                            <?php }
                            if (mysqli_num_rows($results4) >= 1) {
                                while ($row = $results4->fetch_array(MYSQLI_ASSOC)) {?>
                                    <tr>
                                        <td><?php echo $row['service']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td class="d-none d-sm-block"><?php echo $row['stylist']; ?></td>
                                    </tr>
                                <?php }
                            }

                        }
                        else {?>
                            <tr>
                                <td>No History Data </td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
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