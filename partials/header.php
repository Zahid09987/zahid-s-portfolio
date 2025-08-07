<div class="sidebar-content glass-effect p-4 d-flex flex-column h-100">
    <div class="sidebar-header mb-4">
        <h1 class="mb-1"></h1>
        <p class="text-muted"><?php echo _("Informatics"); ?></p>
    </div>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="?page=home" class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>">
                <?php echo _("Home"); ?>
            </a>
        </li>
        <li class="nav-item">
            <a href="?page=about" class="nav-link <?php echo ($current_page == 'about') ? 'active' : ''; ?>">
                <?php echo _("About Zahid"); ?>
            </a>
        </li>
        <li class="nav-item">
            <a href="?page=portfolio" class="nav-link <?php echo ($current_page == 'portfolio') ? 'active' : ''; ?>">
                <?php echo _("Portfolio"); ?>
            </a>
        </li>
        <li class="nav-item">
            <a href="?page=contact" class="nav-link <?php echo ($current_page == 'contact') ? 'active' : ''; ?>">
                <?php echo _("Contact"); ?>
            </a>
        </li>
    </ul>
    <div class="theme-switcher mt-4 pt-3 border-top">
        <h6 class="mb-3 text-muted"><?php echo _("Theme"); ?></h6>
        <div class="btn-group w-100" role="group" aria-label="Theme switcher">
            <a href="?theme=light" class="btn btn-outline-secondary <?php echo ($current_theme == 'light') ? 'active' : ''; ?>"><?php echo _("Light"); ?></a>
            <a href="?theme=dark" class="btn btn-outline-secondary <?php echo ($current_theme == 'dark') ? 'active' : ''; ?>"><?php echo _("Dark"); ?></a>
            <a href="?theme=system" class="btn btn-outline-secondary <?php echo ($current_theme == 'system') ? 'active' : ''; ?>"><?php echo _("System"); ?></a>
        </div>
    </div>
    <div class="language-switcher mt-3 pt-3 border-top">
        <h6 class="mb-2 text-muted"><?php echo _("Language"); ?></h6>
        <a href="?lang=en_US" class="btn btn-outline-secondary <?php echo ($current_lang == 'en_US') ? 'active' : ''; ?>"><?php echo _("English (US)"); ?></a>
        <a href="?lang=en_GB" class="btn btn-outline-secondary <?php echo ($current_lang == 'en_GB') ? 'active' : ''; ?>"><?php echo _("English (UK)"); ?></a>
    </div>
</div>