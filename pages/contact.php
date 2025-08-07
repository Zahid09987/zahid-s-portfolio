<div class="container-fluid py-5">
    <h1 class="page-title"><?php echo _("Get In Touch"); ?></h1>
    <p class="lead mb-4">
        <?php echo _("He's currently open to any opportunities, whether it's a full-time role or a freelance project. If you have an idea or a project in mind, feel free to reach out!"); ?>
    </p>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label"><?php echo _("Name"); ?></label>
            <input type="text" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label"><?php echo _("Email address"); ?></label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label"><?php echo _("Message"); ?></label>
            <textarea class="form-control" id="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><?php echo _("Send Message"); ?></button>
    </form>
</div>