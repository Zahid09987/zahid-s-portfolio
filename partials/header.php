<div class="sidebar-content glass-effect p-4 d-flex flex-column h-100">
    <div class="sidebar-header mb-4">
        <h1 class="mb-1">Zahid's Portfolio</h1>
        <p class="text-muted">Informatics</p>
    </div>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="?page=home" class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>">
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="?page=about" class="nav-link <?php echo ($current_page == 'about') ? 'active' : ''; ?>">
                About Zahid
            </a>
        </li>
        <li class="nav-item">
            <a href="?page=portfolio" class="nav-link <?php echo ($current_page == 'portfolio') ? 'active' : ''; ?>">
                Portfolio
            </a>
        </li>
        <li class="nav-item">
            <a href="?page=contact" class="nav-link <?php echo ($current_page == 'contact') ? 'active' : ''; ?>">
                Contact
            </a>
        </li>
    </ul>
    <div class="theme-switcher mt-4 pt-3 border-top">
        <h6 class="mb-3 text-muted">Theme</h6>
        <div class="btn-group w-100" role="group" aria-label="Theme switcher">
            <a href="?theme=light" class="btn btn-outline-secondary <?php echo ($current_theme == 'light') ? 'active' : ''; ?>">Light</a>
            <a href="?theme=dark" class="btn btn-outline-secondary <?php echo ($current_theme == 'dark') ? 'active' : ''; ?>">Dark</a>
            <a href="?theme=system" class="btn btn-outline-secondary <?php echo ($current_theme == 'system') ? 'active' : ''; ?>">System</a>
        </div>
    </div>
</div>