<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

<link rel="stylesheet" type="text/css" href="/style.css" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<body>
<div id="page"><!--start page -->

	<div id="header"><!--start header -->
		<div id="logo">
			<h1>Dario <span class="style1">Lanzardo</span></h1>
			<div class="tagline">Immagini e racconti</div>
		</div>
		<div id="topnav">
			<div class="menu">
				<div class="menu_item"><a href="/index.html">home</a></div>
				<div class="menu_desc">informazioni/novit&agrave;</div>
			</div>
		<div class="menu">
				<div class="menu_item"><a href="/immagini.html">immagini</a></div>
				<div class="menu_desc">pubblicazioni/mostre</div>
			</div>
		<div class="menu">
				<div class="menu_item"><a href="/parole.html">parole</a></div>
				<div class="menu_desc">narrativa/blog</div>
			</div>
		</div>
	</div><!--end header -->
	<img src="/images/head-doppio-half.jpg" alt="Immagine sul doppio" />
	<div id="body"><!-- start body -->

<?php get_sidebar(); ?>
