<?php 
    if(!isset($newsletter_name)) {
        $newsletter_name = "";
    }
    if(!isset($newsletter_email)) {
        $newsletter_email = "";
    }
    if(!isset($newsletter_marketing)) {
        $newsletter_marketing = 0;
    }


    $newsletter_name = filter_input(INPUT_POST, 'newsletter-name');
    $newsletter_email = filter_input(INPUT_POST, 'newsletter-email');
    $newsletter_marketing = filter_input(INPUT_POST, 'newsletter-marketing-preference');
    
    if(empty($newsletter_name)) {
        $err_newsletterName = "Name is required.";
    }

    if(empty($newsletter_email)) {
        $err_newsletterEmail = "Email is required.";
    } elseif(!filter_var($newsletter_email, FILTER_VALIDATE_EMAIL)) {
        $err_newsletterEmail = "Email is invalid.";
    }

    if($newsletter_marketing == 0) {
        $err_newsletterMarketing = "The marketing preference field is required.";
    }

    if(isset($_POST['submit-newsletter']) && empty($err_newsletterName) && empty($err_newsletterEmail) && empty($err_newsletterMarketing)) {
        
        $submit_newsletter = "INSERT INTO `newsletter`(`Newsletter_Name`, `Newsletter_Email`) VALUES ('{$newsletter_name}', '{$newsletter_email}')";

        $connect->query($submit_newsletter);
        
        $newsletter_name = "";
        $newsletter_email = "";
        $newsletter_marketing = "";

        $newsletter_success = "Successfully applied to newsletter.";
    }