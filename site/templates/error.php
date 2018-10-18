<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="page" data-section="<?= $page->id() ?>">
	<h1><?= $page->title()->html(); ?></h1>
	<?= $page->text()->kirbytext(); ?>

	<a href="<?= $site->url(); ?>" title="home" role="button">
		Go home
	</a>
</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>