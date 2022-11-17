<?php

    $name = filter_input(INPUT_POST, 'name');
    $company = filter_input(INPUT_POST, 'company');
    $email = filter_input(INPUT_POST, 'email');
    $number = filter_input(INPUT_POST, 'number');
    $subject = filter_input(INPUT_POST, 'subject');
    $message = filter_input(INPUT_POST, 'message');
    $phone_regex = "/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/";

    if(empty($name)) {
        $err_name = "Name is required.";
    }

    if(empty($email)) {
        $err_email = "Email is required.";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err_email = "Email is invalid.";
    }

    if(empty($number)) {
        $err_number = "Number is required.";
    } elseif(!preg_match($phone_regex, $number)) {
        $err_number = "Number is invalid.";
    }

    if(empty($subject)) {
        $err_subject = "Subject is required.";
    }

    if(empty($message)) {
        $err_message = "Message is required.";
    } elseif(strlen($message) < 6) {
        $err_message = "Message needs to be at least 5 characters.";
    }

    if(empty($err_name) && empty($err_email) && empty($err_number) && empty($err_subject) && empty($err_message)) {
        $success = "Successfully submitted the enquiry.";
    } 
    include('./contact.php');

?>
