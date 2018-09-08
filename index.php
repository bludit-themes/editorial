<!DOCTYPE HTML>
<!--
	Theme design by HTML5 UP - html5up.net | @ajlkn
	Website running on BLUDIT - bludit.com | @bludit
-->
<html>
<head>
<?php include(THEME_DIR_PHP.'head.php') ?>
</head>
<body>

<?php 	// Load plugins
	Theme::plugins('siteBodyBegin');
?>

<!-- Wrapper -->
<div id="wrapper">

	<!-- Main -->
	<div id="main">
	<div class="inner">

		<!-- Header -->
		<header id="header">
			<a href="<?php echo $site->url() ?>" class="logo">
				<strong><?php echo $site->title() ?></strong> <?php echo $site->slogan() ?>
			</a>

			<!-- Social Networks -->
			<?php
				$socialNetworks = array(
					// Key => Label
					'github'=>'Github',
					'twitter'=>'Twitter',
					'facebook'=>'Facebook',
					'googleplus'=>'Google Plus',
					'instagram'=>'Instagram',
					'codepen'=>'Codepen',
					'linkedin'=>'Linkedin'
				);
			?>

			<ul class="icons">
				<?php foreach ($socialNetworks as $key=>$label): ?>
					<?php if ($site->{$key}()): ?>
						<li><a href="<?php echo $site->{$key}() ?>" class="icon fa-<?php echo $key ?>"><span class="label"><?php echo $label ?></span></a></li>
					<?php endif; ?>
				<?php endforeach; ?>
				<?php
					// Check if the plugin RSS is enabled
					if (pluginActivated('pluginRSS')) {
						echo '<li><a href="'.$site->rss().'" class="icon fa-rss"><span class="label">RSS</span></a></li>';
					}
					// Check if the plugin Sitemap is enabled
					if (pluginActivated('pluginSitemap')) {
						echo '<li><a href="'.$site->sitemap().'" class="icon fa-sitemap"><span class="label">Sitemap</span></a></li>';
					}
				?>
			</ul>
		</header>

		<?php
			if ($WHERE_AM_I=='page') {
				include(THEME_DIR_PHP.'page.php');
			} else {
				include(THEME_DIR_PHP.'home.php');
			}
		?>

	</div>
	</div>

	<!-- Sidebar -->
	<div id="sidebar">
		<div class="inner">
		<?php include(THEME_DIR_PHP.'sidebar.php') ?>
		</div>
	</div>

</div>

<!-- Scripts -->
<?php
	echo Theme::javascript('assets/js/jquery.min.js');
	echo Theme::javascript('assets/js/skel.min.js');
	echo Theme::javascript('assets/js/util.js');
	echo '<!--[if lte IE 8]>'.Theme::javascript('assets/js/ie/respond.min.js').'<![endif]-->';
	echo Theme::javascript('assets/js/main.js');
?>

<?php 	// Load plugins
	Theme::plugins('siteBodyEnd');
?>

</body>
</html>