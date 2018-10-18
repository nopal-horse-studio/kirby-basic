<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<html class="no-js" lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
	<?php $settings = page('settings'); ?>
	<!-- M E T A -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="<?= $settings->seotags()->html() ?>">
	<meta name="description" content="<?= $settings->seodescription()->html() ?>">
	<meta name="author" content="<?= $settings->author()->html(); ?>">
	<link rel="index" href="<?= $site->url(); ?>">
	<link rel="canonical" href="<?= $site->url(); ?>" />

	<!--F A C E B O O K-->
	<meta property="og:url" content="<?= $site->url() ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?= $page->title()->html(); ?> | <?= $site->title()->html(); ?>">
	<meta property="og:image" content="<?php if ($seothumb = $settings->seoimage()->toFile()): echo $seothumb->url(); endif ?>">
	<meta property="og:description" content="<?= $settings->seodescription()->html() ?>">
	<meta property="og:site_name" content="<?= $site->title()->html(); ?>">

	<!--T W I T T E R-->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@site_account">
	<meta name="twitter:url" content="<?= $site->url() ?>">
	<meta name="twitter:title" content="<?= $page->title()->html(); ?> | <?= $site->title()->html(); ?>">
	<meta name="twitter:description" content="<?= $site->title()->html(); ?>">
	<meta name="twitter:image" content="<?php if ($seothumb = $settings->seoimage()->toFile()): echo $seothumb->url(); endif ?>">

	<!--G O O G L E -->
	<meta itemprop="name" content="<?= $page->title()->html(); ?> | <?= $site->title()->html(); ?>">
	<meta itemprop="description" content="<?php echo $settings->seodescription()->html() ?>">
	<meta itemprop="image" content="<?php if ($seothumb = $settings->seoimage()->toFile()): echo $seothumb->url(); endif ?>">

	<!--P I N T E R E S T-->
	<meta name="pinterest" content="nopin" description="<?= $settings->seodescription()->html() ?>">

	<!-- T I T L E -->
	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

	<?php if ($favicon = page('settings')->icon()->toFile()): ?>

	<!--F A V I C O N S-->
	<link rel="shortcut icon" href="<?= $favicon->url(); ?>?v=@<?= $settings->favicon(); ?>" type="image/x-icon">
	<link rel="icon" href="<?= $favicon->url(); ?>?v=@<?= $settings->favicon(); ?>" type="image/x-icon">
	<?php else: ?>

	<!--A P P - F A V I C O N S-->
	<link rel="apple-touch-icon" sizes="57x57" href="<?= $site->url(); ?>/assets/favicons/apple-icon-57x57.png?v=@<?= $settings->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= $site->url(); ?>/assets/favicons/apple-icon-60x60.png?v=@<?= $settings->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= $site->url(); ?>/assets/favicons/apple-icon-72x72.png?v=@<?= $settings->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= $site->url(); ?>/assets/favicons/apple-icon-76x76.png?v=@<?= $settings->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= $site->url(); ?>/assets/favicons/apple-icon-114x114.png?v=@<?= $settings->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= $site->url(); ?>/assets/favicons/apple-icon-120x120.png?v=@<?= $settings->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= $site->url(); ?>/assets/favicons/apple-icon-144x144.png?v=@<?= $settings->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= $site->url(); ?>/assets/favicons/apple-icon-152x152.png?v=@<?= $settings->favicon(); ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $site->url(); ?>/assets/favicons/apple-icon-180x180.png?v=@<?= $settings->favicon(); ?>">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?= $site->url(); ?>/assets/favicons/android-icon-192x192.png?v=@<?= $settings->favicon(); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= $site->url(); ?>/assets/favicons/favicon-32x32.png?v=@<?= $settings->favicon(); ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= $site->url(); ?>/assets/favicons/favicon-96x96.png?v=@<?= $settings->favicon(); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= $site->url(); ?>/assets/favicons/favicon-16x16.png?v=@<?= $settings->favicon(); ?>">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png?v=@<?= $settings->favicon(); ?>">
	<meta name="theme-color" content="#ffffff">

	<?php endif ?>

	<!-- C S S -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/kube/6.5.2/css/kube.css">
	<link rel="stylesheet" href="https://gitcdn.xyz/repo/jorgefrac/architecture-sass/master/assets/css/app.min.css">
	<?= css('assets/css/main.min.css'.'?v=@'.(rand(10000, 20000))); ?>

	<?php if ($site->optionid()=='true'): ?>
	<!--G O O G L E   |   A N A L Y T I C S-->
	<?php snippet('module/google.analytics', array('site' => $site)) ?>
	<?php endif ?>
</head>
<body>



