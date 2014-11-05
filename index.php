<?php
ob_start(); // Allows sending headers after content.

// Use this in includes to check if they're accessed directly
define(IN_APP, TRUE);

// Bootstrap the site (not the CSS, noob)
require("config/settings.php");
require("config/top.php");
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		include("inc/header.php");
	?>
</head>

<body>
	<?php
		// Load body content.
		include(PAGE_DIR.$pageid.PAGE_EXT);
		
		// Load footer.
		include("inc/footer.php");
	?>
	<script src="<?php echo BOOTSTRAP_JS; ?>"></script>
</body>
</html>
<?php ob_flush(); ?>