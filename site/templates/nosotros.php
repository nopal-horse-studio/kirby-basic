<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="page" data-section="<?= $page->id() ?>">
	<div class="container">
		<div class="page__header">
			<h1><?= $page->title()->html(); ?></h1>
			<p>Subtitle</p>
		</div>
		<?= $page->text()->kirbytext(); ?>
	</div>
</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>