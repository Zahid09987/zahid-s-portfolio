<?php
define('LANG_DIR', __DIR__ . '/../locale/');
define('DEFAULT_LANG', 'en-us');

$available_langs = [];
foreach (glob(LANG_DIR . '*.json') as $file) {
    $lang_code = basename($file, '.json');
    $lang_data = json_decode(file_get_contents($file), true);
    if (isset($lang_data['__metadata']['name'])) {
        $available_langs[$lang_code] = $lang_data['__metadata']['name'];
    }
}

if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $available_langs)) {
    setcookie('lang', $_GET['lang'], time() + (86400 * 30), "/");
    $current_lang = $_GET['lang'];
} elseif (isset($_COOKIE['lang']) && array_key_exists($_COOKIE['lang'], $available_langs)) {
    $current_lang = $_COOKIE['lang'];
} else {
    $current_lang = DEFAULT_LANG;
}

$lang_file = LANG_DIR . $current_lang . '.json';
if (file_exists($lang_file)) {
    $translations = json_decode(file_get_contents($lang_file), true);
} else {
    $translations = [];
}

function t($key)
{
    global $translations;
    return $translations[$key] ?? $key;
}
