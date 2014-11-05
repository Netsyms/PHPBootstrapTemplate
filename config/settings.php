<?php
/**
Site settings and stuff.
*/

// Site name.  See header.php for usage details.
define(SITE_NAME, "Example site");

// Folder with pages.  Needs trailing slash.
define(PAGE_DIR, "pages/");

// Where is the Javascript?
define(JS_DIR, "js/");

// Where is the Bootstrap JS?
define(BOOTSTRAP_JS, JS_DIR."bootstrap.min.js");

// CSS dir.
define(CSS_DIR, "css/");

// Where is the bootstrap css?
define(BOOTSTRAP_CSS, CSS_DIR."bootstrap.min.css");

// Use the bootstrap-theme as well?
define(USE_THEME, FALSE);

// Theme location
define(BS_THEME_CSS, CSS_DIR."bootstrap-theme.min.css");

// Font Awesome is awesome.
define(FONT_AWESOME_CSS, "//cdn.apocalypselabs.net/font-awesome/css/font-awesome.min.css");

// The file extension of pages.
define(PAGE_EXT, ".html");

// Page for 404.
define(PAGE_404, '404');
?>