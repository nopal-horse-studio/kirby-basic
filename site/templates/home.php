<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main data-section="<?= $page->id() ?>">
	<div class="container">

		<?php $nosotros = page('nosotros'); ?>
		<section>
			<h2><?= $nosotros->title()->html(); ?></h2>
			<?= $nosotros->intro()->kirbytext(); ?>
			<a href="<?= $nosotros->url(); ?>" title="Ver" class="button">
				About me.
			</a>
		</section>

		<section class="page__cover">
			<div class="cover">
				<img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d"
				data-src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d"
				alt="<?= $site->title()->html(); ?>" class="js-lazyload">
			</div>
		</section>

		<?php $services = page('servicios'); ?>
		<section>
			<h2><?= $services->title()->html(); ?></h2>
			<ul>
				<?php foreach ($services->services()->toStructure() as $service): ?>
					<li>
						<h4><?= $service->name()->html(); ?></h4>
						<p><?= $service->description()->html(); ?></p>
					</li>
				<?php endforeach ?>
			</ul>
			<a href="<?= $services->url(); ?>" title="Ver" class="button">
				More services.
			</a>
		</section>

	</div>
</main>

<?php snippet('module/call-to-action') ?>
<?php snippet('footer') ?>
<?php snippet('footer.code') ?>