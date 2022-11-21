<div class="newsletter" id="newsletter">
    <div class="container">
        <form action="./index.php#newsletter" method="POST" accept-charset="UTF-8" class="sign-up" id="sign-up" name="sign-up" novalidate>
            <div class="err_messages">
                <?php if (isset($_POST['submit-newsletter'])){ ?>

                    <?php if(isset($err_newsletterName)) { ?>
                        <div class="err_message">
                            <?php echo $err_newsletterName; ?>
                            <div class="err_close">×</div>
                        </div>
                    <?php } ?>

                    <?php if(isset($err_newsletterEmail)) { ?>
                        <div class="err_message">
                            <?php echo $err_newsletterEmail; ?>
                            <div class="err_close">×</div>
                        </div>
                    <?php } ?>

                    <?php if(isset($err_newsletterMarketing)) { ?>
                        <div class="err_message">
                            <?php echo $err_newsletterMarketing; ?>
                            <div class="err_close">×</div>
                        </div>
                    <?php } ?>

                    <?php if(isset($newsletter_success)) { ?>
                        <div class="err_message success">
                            <?php echo $newsletter_success; ?>
                            <div class="err_close">×</div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <h2>Email Newsletter Sign-Up</h2>
            <div class="user-input-container">
                <div class="sign-up-input">
                    <div class="form-group">
                        <label for="newsletter-name" class="required">Your Name</label>
                        <input  type="text" class="form-control" id="newsletter-name" name="newsletter-name" value="<?php echo $newsletter_name ?>">
                    </div>
                </div>
                <div class="sign-up-input">
                    <div class="form-group">
                        <label for="newsletter-email" class="required">Your Email</label>
                        <input  type="email" class="form-control" id="newsletter-email" name="newsletter-email" value="<?php echo $newsletter_email ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="marketing-checkbox">
                    <span class="media">
                        <span class="media-checkbox">
                            <span class="checkbox-container">
                                <input name="newsletter-marketing-preference" class="checkbox" type="checkbox">
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
            <button name="submit-newsletter" class="btn btn-norm-dark">Subscribe</button>
        </form>
    </div>
</div>