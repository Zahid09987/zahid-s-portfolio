<?php
// Theme Handling
$themes = ['light', 'dark', 'system'];
$default_theme = 'system';
$current_theme = isset($_COOKIE['theme']) && in_array($_COOKIE['theme'], $themes) ? $_COOKIE['theme'] : $default_theme;

if (isset($_GET['theme']) && in_array($_GET['theme'], $themes)) {
    $new_theme = $_GET['theme'];
    setcookie('theme', $new_theme, time() + (86400 * 365), "/");
    $current_theme = $new_theme;
    header('Location: ' . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}

$pages = ['home', 'about', 'portfolio', 'contact'];
$default_page = 'home';
$current_page = isset($_GET['page']) && in_array($_GET['page'], $pages) ? filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING) : $default_page;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zahid's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script>
        (function() {
            const theme = "<?php echo $current_theme; ?>";
            if (theme === 'dark' || (theme === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>
</head>
<body>
    <div class="background-shapes"></div>
    <div class="container-fluid main-container">
        <div class="row">
            <nav class="col-lg-3 col-md-4 sidebar">
                <?php include 'partials/header.php'; ?>
            </nav>
            <main class="col-lg-9 col-md-8 ms-sm-auto px-md-4 main-content">
                <div class="content-wrapper">
                    <?php
                    $page_file = "pages/{$current_page}.php";
                    if (file_exists($page_file)) {
                        include $page_file;
                    } else {
                        include 'pages/404.php';
                    }
                    ?>
                </div>
                <?php include 'partials/footer.php'; ?>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>