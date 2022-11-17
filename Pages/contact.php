<?php 
    if(!isset($name)) {
        $name = "";
    }
    if(!isset($company)) {
        $company = "";
    }
    if(!isset($email)) {
        $email = "";
    }
    if(!isset($number)) {
        $number = "";
    }
    if(!isset($subject)) {
        $subject = "";
    }
    if(!isset($message)) {
        $message = "";
    }
    if(!isset($success)) {
        $success = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Contact</title>
        <link rel="stylesheet" href="../Assets/CSS/main.css">
        <script src="https://kit.fontawesome.com/52d68163f3.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    </head>
    <body id="body" class="contact-page">
        <div id="container">
            <div class="main">
                <div class="main-scrollbar">
                    <div class="main-scrollbar-cont">
                        <?php include '../Assets/PHP/header.php' ?>
                        <div class="main-content">
                            <div class="nav-directory">
                                <div class="container">
                                    <ul class="directory-list">
                                        <li class="directory-item"><a href="../index.php">Home</a></li>
                                        <li class="directory-break">/</li>
                                        <li class="directory-item">Our Offices</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="contact-offices_title">
                                <div class="container">
                                    <h1 class="contact-title">Our Offices</h1>
                                </div>
                            </div>
                            <div class="contact-offices container">
                                <div class="contact-location">
                                    <div class="contact-location-about">
                                        <div class="contact-location-about_image">
                                            <a class="contact-image">
                                                <img src="../Assets/Images/Contact Locations/cambridge.jpg">
                                            </a>
                                        </div>
                                        <div class="contact-location-about_info">
                                            <h2 class="contact_name"><a href="#">Cambridge Office</a></h2>
                                            <p class="contact_address">
                                                Unit 1.31, <br>
                                                St John's Innovation Centre, <br>
                                                Cowley Road, Milton, <br>
                                                Cambridge, <br>
                                                CB4 0WS
                                            </p>
                                            <div class="contact_number"><a href="tel:04837658458">04837 65 84 58</a></div>
                                            <div class="contact_show-more">
                                                <a class="contact_btn btn">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-map">
                                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d152.71541974050166!2d0.15365403075510592!3d52.235269231240935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8711469d7de59%3A0x4ad66f1b36a452da!2sNetmatters%20Cambridge!5e0!3m2!1sen!2suk!4v1668501978094!5m2!1sen!2suk" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                                    </div>
                                </div>
                                <div class="contact-location">
                                    <div class="contact-location-about">
                                        <div class="contact-location-about_image">
                                            <a class="contact-image">
                                                <img src="../Assets/Images/Contact Locations/wymondham.jpg">
                                            </a>
                                        </div>
                                        <div class="contact-location-about_info">
                                            <h2 class="contact_name"><a href="#">Wymondham Office</a></h2>
                                            <p class="contact_address">
                                                Unit 15, <br>
                                                Penfold Drive, <br>
                                                Gateway 11 Business Park, <br>
                                                Wymondham, Norfolk, <br>
                                                NR18 0WZ
                                            </p>
                                            <div class="contact_number"><a href="tel:04837658458">03455 63 67 09</a></div>
                                            <div class="contact_show-more">
                                                <a class="contact_btn btn">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-map">
                                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2424.6443793239573!2d1.1343763513471823!3d52.57604207972574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8dba0b4b%3A0x9c77ffbfe7911dab!2sNetmatters!5e0!3m2!1sen!2suk!4v1668525517987!5m2!1sen!2suk" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                                    </div>
                                </div>
                                <div class="contact-location">
                                    <div class="contact-location-about">
                                        <div class="contact-location-about_image">
                                            <a class="contact-image">
                                                <img src="../Assets/Images/Contact Locations/yarmouth-2.jpg">
                                            </a>
                                        </div>
                                        <div class="contact-location-about_info">
                                            <h2 class="contact_name"><a href="#">Great Yarmouth Office</a></h2>
                                            <p class="contact_address">
                                                Suite F23, <br>
                                                Beacon Innovation Centre, <br>
                                                Beacon Park, Gorleston, <br>
                                                Great Yarmouth, Norfolk, <br>
                                                NR31 7RA
                                            </p>
                                            <div class="contact_number"><a href="tel:04837658458">03455 63 67 09</a></div>
                                            <div class="contact_show-more">
                                                <a class="contact_btn btn">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-map">
                                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d151.61002140693887!2d1.712899720046678!3d52.555859828924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47da0593b311cec3%3A0x1cb3c1d4c0b340f6!2sNetmatters%20Great%20Yarmouth!5e0!3m2!1sen!2suk!4v1668525477194!5m2!1sen!2suk" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-page-form container">
                                <div class="contact-page-form-section form-one">
                                    <div class="contact-form_details">
                                        <p><strong>Email us on:</strong></p>
                                        <p>
                                            <a href="#" class="email">sales@netmatters.com</a>
                                        </p>
                                        <p><strong>Business Hours:</strong></p>
                                        <p><strong>Monday - Friday 07:00 - 18:00</strong></p>
                                    </div>
                                    <div class="contact-form_opening-hours">
                                        <p class="opening-hours_open">Out of Hours IT Support<i class="fa-solid fa-angle-down"></i></p>
                                        <div class="opening-hours_menu">
                                            <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                            <p>
                                                <strong>Monday - Friday 18:00 - 22:00</strong> 
                                                <strong>Saturday 08:00 - 16:00</strong> <br>
                                                <strong>Sunday 10:00 - 18:00</strong>
                                            </p>
                                            <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-page-form-section form-two">
                                    <form action="./form-results.php#contact-form" method="POST" accept-charset="UTF-8" id="contact-form" novalidate>
                                        <div class="err_messages">
                                            <?php if(isset($err_name)) { ?>
                                                <div class="err_message">
                                                    <?php echo htmlspecialchars($err_name); ?>
                                                    <div class="err_close">×</div>
                                                </div>
                                            <?php } ?>

                                            <?php if(isset($err_email)) { ?>
                                                <div class="err_message">
                                                    <?php echo htmlspecialchars($err_email); ?>
                                                    <div class="err_close">×</div>
                                                </div>
                                            <?php } ?>

                                            <?php if(isset($err_number)) { ?>
                                                <div class="err_message">
                                                    <?php echo htmlspecialchars($err_number); ?>
                                                    <div class="err_close">×</div>
                                                </div>
                                            <?php } ?>

                                            <?php if(isset($err_subject)) { ?>
                                                <div class="err_message">
                                                    <?php echo htmlspecialchars($err_subject); ?>
                                                    <div class="err_close">×</div>
                                                </div>
                                            <?php } ?>

                                            <?php if(isset($err_message)) { ?>
                                                <div class="err_message">
                                                    <?php echo htmlspecialchars($err_message); ?>
                                                    <div class="err_close">×</div>
                                                </div>
                                            <?php } ?>

                                            <?php if(isset($success)) { ?>
                                                <div class="err_message success">
                                                    <?php echo htmlspecialchars($success); ?>
                                                    <div class="err_close">×</div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-item">
                                                <label for="name" class="required">Your Name</label>
                                                <input id="name" type="text" class="form-control" name="name" value="<?php htmlspecialchars($name) ?>">
                                            </div>
                                            <div class="form-item">
                                                <label for="company">Company Name</label>
                                                <input id="company" type="text" class="form-control" name="company" value="<?php htmlspecialchars($company) ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-item">
                                                <label for="email" class="required">Your Email</label>
                                                <input id="email" type="email" class="form-control" name="email" value="<?php htmlspecialchars($email) ?>" >
                                            </div>
                                            <div class="form-item">
                                                <label for="number" class="required">Your Telephone Number</label>
                                                <input id="number" type="text" class="form-control" name="number" value="<?php htmlspecialchars($number) ?>">
                                            </div>
                                        </div>
                                        <div class="form-item">
                                            <label for="subject" class="required">Subject</label>
                                            <input id="subject" type="text" class="form-control" name="subject" value="<?php htmlspecialchars($subject) ?>">
                                        </div>
                                        <div class="form-item">
                                            <label for="message" class="required">Message</label>
                                            <textarea id="message" class="form-control" name="message" value="<?php htmlspecialchars($message) ?>"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="marketing-checkbox">
                                                <span class="media">
                                                    <span class="media-checkbox">
                                                        <span class="checkbox-container">
                                                            <input name="marketing-preference" class="checkbox" type="checkbox" value="1">
                                                            <span class="checked">
                                                                <i class="fa-solid fa-check checkmark"></i>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="media-content">
                                                        Please tick this box if you wish to receive marketing information from us.
                                                        Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-action">
                                            <button name="submit" class="btn submit-btn">Send Enquiry</button>
                                            <p><strong class="required"></strong> Fields Required</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php include '../Assets/PHP/newsletter.php' ?>
                        </div>
                        <?php include '../Assets/PHP/footer.php' ?>
                    </div>
                </div>
            </div>
            <?php include '../Assets/PHP/sidebar.php' ?>
        </div>
        <script src="../Assets/JS/main.js"></script>
    </body>
</html>