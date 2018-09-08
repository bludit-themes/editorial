<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="author" content="Bludit CMS">

<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>

<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>

<!-- Include Favicon -->
<?php echo Theme::favicon('assets/favicon.png'); ?>

<!-- Include CSS Styles from this theme -->
<?php
	echo Theme::css(array(
		'assets/font-awesome/css/font-awesome.min.css',
		'assets/css/main.css',
		'assets/css/bludit.css'
	));
	echo '<noscript>'.Theme::css('assets/css/noscript.css').'</noscript>';
?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
