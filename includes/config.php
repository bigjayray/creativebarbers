<?php

//php file to manage connections to db and manage form logic

session_start();

// variable declaration0
$errors = array();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'creativebarbers');

//validates form inputs
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//RESERVATION logic
if (isset($_POST['make_reservation'])) {
    // receive all input values from the form
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $time = mysqli_real_escape_string($db, $_POST['time']);
    $service = mysqli_real_escape_string($db, $_POST['service']);
    $stylist = mysqli_real_escape_string($db, $_POST['stylist']);

    // form validation: ensure that the form is correctly filled
    if (empty($name)) { array_push($errors, "Name is required"); }
    if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
        array_push($errors, 'Name can only contain letters, numbers and white spaces');
    }

    if (empty($phone)) { array_push($errors, "Phone number is required"); }

    if (empty($email)) { array_push($errors, "Email is required"); }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, 'Invalid Email');
    }

    if (empty($date)) { array_push($errors, "Date is required"); }
    if (empty($time)) { array_push($errors, "Time is required"); }
    if (empty($service)) { array_push($errors, "Service is required"); }
    if (empty($stylist)) { array_push($errors, "Stylist is required"); }

    // save form and email user if there are no errors in the form
    if (count($errors) == 0) {
        $query = "INSERT INTO reservation (name, phone, email, date, time, service, stylist) 
					  VALUES('$name', '$phone', '$email', '$date', '$time', '$service', '$stylist')";
        mysqli_query($db, $query);

        //email user reservation information
        $comment = 'Hello '. $name . ', You have made a reservation at creative barbers for ' . $date . ' and your selected service is '. $service .' and your selected stylist ' .$stylist;

        $to = $email;
        $subject = "Reservation at Creative Barbers";
        $txt = $comment;
        $headers = "From: jeremiahidoko@gmail.com" . "\r\n" .
            "CC: boboghumah@gmail.com";

        mail($to,$subject,$txt,$headers);

        $msg = "Reservation made";
    }

}

// CONTACT FORM logic
if (isset($_POST['contact'])) {

    //variable declaration
    $name = validate($_POST['name']);
    $subject = validate($_POST['subject']);
    $email = validate($_POST['email']);
    $comment = validate($_POST['comment']);

    // form validation: ensure that the form is correctly filled
    if (empty($name)) { array_push($errors, "Name is required"); }
    if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
        array_push($errors, 'Name can only contain letters, numbers and white spaces');
    }

    if (empty($subject)) { array_push($errors, "Subject is required"); }

    if (empty($email)) { array_push($errors, "Email is required"); }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, 'Invalid Email');
    }

    if (empty($comment)) { array_push($errors, "Comment is required"); }

    // if there are no error email administrator comments
    if (count($errors) == 0) {
        $to = "jeremiahidoko@gmail.com";
        $subject = "Contact form Creative Barbers - " . $subject;
        $txt = $comment;
        $headers = "From: $email" . "\r\n" .
            "CC: boboghumah@gmail.com";

        mail($to,$subject,$txt,$headers);

        $msg = "Contact form submitted";
    }

}

// REGISTER USER logic
if (isset($_POST['signup_user'])) {
    // receive all input values from the form
    $firstname = validate($_POST['firstname']);
    $lastname = validate($_POST['lastname']);
    $email = validate($_POST['email']);
    $password_1 = validate($_POST['password_1']);
    $password_2 = validate($_POST['password_2']);

    // form validation: ensure that the form is correctly filled
    if (empty($firstname)) { array_push($errors, "First name is required"); }
    if (!preg_match('/^[a-zA-Z0-9\s]+$/', $firstname)) {
        array_push($errors, 'Name can only contain letters, numbers and white spaces');
    }

    if (empty($lastname)) { array_push($errors, "Last name is required"); }
    if (!preg_match('/^[a-zA-Z0-9\s]+$/', $lastname)) {
        array_push($errors, 'Name can only contain letters, numbers and white spaces');
    }

    if (empty($email)) { array_push($errors, "Email is required"); }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, 'Invalid Email');
    }

    if (empty($password_1)) { array_push($errors, "Password is required"); }

    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    $query = "SELECT * FROM users WHERE email='$email'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) > 0) {
        array_push($errors, "User already exists");
    }

    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database
        $query = "INSERT INTO users (firstname, lastname, email, password) 
					  VALUES('$firstname', '$lastname', '$email', '$password')";
        mysqli_query($db, $query);

        $_SESSION['email'] = $email;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['success'] = "You are now logged in";
        header('location: user_page.php');
    }

}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, 'Invalid Email');
    }

    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['success'] = "You are now logged in";
            header('location: user_page.php');

            //to populate user information
            while ($row = $results->fetch_array(MYSQLI_ASSOC)) {
                $_SESSION['email'] = $row["email"];
                $_SESSION['firstname'] = $row["firstname"];
                $_SESSION['lastname'] = $row["lastname"];

            }

            //for the reservation history
            $query2 = "SELECT * FROM reservation WHERE email='$email'";
            $results2 = mysqli_query($db, $query2);

            if (mysqli_num_rows($results2) == 1) {
                while ($row = $results2->fetch_array(MYSQLI_ASSOC)) {
                    $_SESSION['service'] = $row["service"];
                    $_SESSION['date'] = $row["date"];
                    $_SESSION['stylist'] = $row["stylist"];
                }
                $_SESSION['reservation'] = true;
            }
        } else {
            array_push($errors, "Wrong email/password combination");
        }
    }
}

// home RESERVATION logic
if (isset($_POST['home_reservation'])) {

    $email = $_SESSION['email'];

    // receive all input values from the form
    $phone = validate($_POST['phone']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $time = mysqli_real_escape_string($db, $_POST['time']);
    $address = validate($_POST['address']);
    $service = mysqli_real_escape_string($db, $_POST['service']);
    $stylist = mysqli_real_escape_string($db, $_POST['stylist']);

    // form validation: ensure that the form is correctly filled
    if (empty($phone)) { array_push($errors, "Phone number is required"); }
    if (empty($date)) { array_push($errors, "Date is required"); }
    if (empty($time)) { array_push($errors, "Time is required"); }
    if (empty($service)) { array_push($errors, "Service is required"); }
    if (empty($stylist)) { array_push($errors, "Stylist is required"); }

    // save form and email user if there are no errors in the form
    if (count($errors) == 0) {
        $query = "INSERT INTO homereservation (phone, email, date, time, address, service, stylist) 
					  VALUES('$phone', '$email', '$date', '$time', '$address', '$service', '$stylist')";
        mysqli_query($db, $query);

        //email user reservation information
        $comment = 'Hello '. $email . ', You have made a reservation at creative barbers for ' . $date . ' and your selected service is '. $service .' and your selected stylist ' .$stylist;

        $to = $email;
        $subject = "Reservation at Creative Barbers";
        $txt = $comment;
        $headers = "From: jeremiahidoko@gmail.com" . "\r\n" .
            "CC: boboghumah@gmail.com";

        mail($to,$subject,$txt,$headers);

        $msg = "Reservation made";
    }

}