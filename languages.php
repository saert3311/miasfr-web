<?php
// Get current domain

$currentURL = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Extract the subdomain
$divided_url = explode('.', $currentURL);

if (count($divided_url) > 2) {
    $language = $divided_url[0];
} else {
    $language = isset($_GET['lang']) ? $_GET['lang'] : 'en';
}

// Set the locale based on the selected language
$locale = $language . '.utf8';
setlocale(LC_ALL, $locale);

// Specify the path to the language files
$languagePath = 'languages/';

// Load the appropriate language file
$textDomain = 'messages';
bindtextdomain($textDomain, $languagePath);
textdomain($textDomain);

// Define translation function
function ___($message)
{
    return gettext($message);
}
