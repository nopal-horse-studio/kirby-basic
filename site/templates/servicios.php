<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="page" data-section="<?= $page->id() ?>">
	<div class="container">
		<div class="page__header">
			<h1><?= $page->title()->html(); ?></h1>
			<p>Subtitle</p>
		</div>
		<?= $page->text()->kirbytext(); ?>

		<ul>
			<?php foreach ($page->services()->toStructure() as $service): ?>
			<li>
				<h4><?= $service->name()->html(); ?></h4>
				<p><?= $service->description()->html(); ?></p>
			</li>
			<?php endforeach ?>
		</ul>
	</div>
</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>