<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="author" content="Bludit CMS">

<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>

<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>

<!-- Include Favicon -->
<?php echo Theme::favicon('assets/favicon.png'); ?>

<!-- Link to Google fonts -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400;1,600&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">

<!-- Include CSS Styles from this theme -->
<?php
	echo Theme::css(array(
		'assets/css/main.css',
		'assets/css/bludit.css'
	));
	echo '<noscript>'.Theme::css('assets/css/noscript.css').'</noscript>';
?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>