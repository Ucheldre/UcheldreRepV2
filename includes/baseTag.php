<?php
// Base Tag to be used in all pages. It must allow for debug 

$_COOKIE['debug'] = true; // Set debug to true for all pages
if (isset($_COOKIE['debug']) && $_COOKIE['debug'] == true) {
    $baseTag = '<base href="http://github.local/UcheldreRepV2/">';
    // Debug is enabled, use the base tag for debugging
} else {
    // $baseTag = '<base href="https://homepage-v2.cubex.cc/">';
    // Debug is disabled, use the base tag for production
}

echo $baseTag;
