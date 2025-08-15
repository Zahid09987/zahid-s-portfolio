<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<h1 class="display-5 fw-bold"><?php echo t("Contact Zahid"); ?></h1>
<hr>
<?php
if (isset($_SESSION['form_status'])):
    $status = $_SESSION['form_status'];
    $alert_class = $status['success'] ? 'alert-success' : 'alert-danger';
?>
    <div class="alert <?php echo $alert_class; ?>" role="alert">
        <?php echo htmlspecialchars($status['message']); ?>
    </div>
<?php
    unset($_SESSION['form_status']);
endif;
?>
<h5 class="text-center"><?php echo t("You can reach him via the form below or through his social media channels."); ?></h5>
<form action="process-contact.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label"><?php echo t("Name"); ?></label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label"><?php echo t("Email address"); ?></label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label"><?php echo t("Message"); ?></label>
        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>" data-callback='onSubmit' data-action='submit'><?php echo t("Submit"); ?></button>
</form>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.querySelector('form').submit();
    }
</script>

<div class="text-center mt-5">
    <h2><?php echo t("Follow Zahid on Social Media"); ?></h2>
    <p><?php echo t("Connect with him on his social networks."); ?></p>
    <a href="https://github.com/Zahid09987" class="btn btn-dark btn-lg m-2 social-icon" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-github"></i> <?php echo t("GitHub"); ?></a>
    <a href="https://www.linkedin.com/in/zahid-rizky-fakhri-97418a2a2" class="btn btn-primary btn-lg m-2 social-icon" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i> <?php echo t("LinkedIn"); ?></a>
    <a href="https://x.com/Zahid_9807" class="btn btn-info btn-lg m-2 social-icon" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter"></i> <?php echo t("Twitter/X"); ?></a>
</div>