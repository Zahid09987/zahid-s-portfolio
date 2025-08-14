<?php
$theme = $_COOKIE['theme'] ?? 'auto';
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="<?php echo htmlspecialchars($theme); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo t("Zahid's Portfolio"); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/user-solid-full.svg" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
        <div class="container">
            <a class="navbar-brand" href="index.php">Zahid</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=home"><?php echo t('Home'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=about"><?php echo t('About'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=project"><?php echo t('Projects'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=contact"><?php echo t('Contact'); ?></a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="theme-switcher" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-circle-half-stroke"></i> <?php echo t('Theme'); ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="theme-switcher">
                        <li><button class="dropdown-item" type="button" data-theme-value="light"><i class="fa-solid fa-sun"></i> <?php echo t('Light'); ?></button></li>
                        <li><button class="dropdown-item" type="button" data-theme-value="dark"><i class="fa-solid fa-moon"></i> <?php echo t('Dark'); ?></button></li>
                        <li><button class="dropdown-item" type="button" data-theme-value="auto"><i class="fa-solid fa-desktop"></i> <?php echo t('Auto'); ?></button></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="lang-switcher" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-language"></i> Language
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="lang-switcher">
                        <?php foreach ($available_langs as $lang_code => $lang_name) : ?>
                            <li><a class="dropdown-item" href="?lang=<?php echo $lang_code; ?>"><?php echo $lang_name; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main class="container mt-4">