<?php
//php file to manage changing head tags
switch ($_SERVER["SCRIPT_NAME"]) {
    case "php-template/about_us.php":
        $CURRENT_PAGE = "About";
        $PAGE_TITLE = "About Us | Creative Barbers";
        $CSS_PATH = true;
        break;
    case "php-template/contact_us.php":
        $CURRENT_PAGE = "Contact Us";
        $PAGE_TITLE = "Contact Us | Creative Barbers";
        $CSS_PATH = true;
        break;
    case "php-template/reservation.php":
        $CURRENT_PAGE = "Reservation";
        $PAGE_TITLE = "Reservation | Creative Barbers";
        $CSS_PATH = true;
        break;
    case "php-template/services.php":
        $CURRENT_PAGE = "Services";
        $PAGE_TITLE = "Services | Creative Barbers";
        $CSS_PATH = true;
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Creative Barbers";
        $CSS_PATH = false;
}
