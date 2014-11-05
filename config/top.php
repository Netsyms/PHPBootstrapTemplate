<?php
if (!IN_APP) { die(); }


/**
 * Page handling.
 */
$pageid = $_GET['p'];

if (!isset($_GET['p']) || $_GET['p'] == '') {
	$pageid = 'index';
}
// No traversal allowed!
$pageid = str_replace("..","", str_replace("/","",str_replace("\\","",$pageid)));

// PROTIP: You can set the server's default 404 URL to /index.php?p=404 to display this!
if (!file_exists(PAGE_DIR.$pageid.PAGE_EXT) || $pageid == PAGE_404) {
	$pageid = PAGE_404;
	header("HTTP/1.0 404 Page not found");
}
?>