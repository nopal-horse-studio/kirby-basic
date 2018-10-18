<?php $navs = $pages->visible(); ?>

<header>
	<div class="container">
		<div class="row">
			<div class="col col-4">
				<a href="<?= $site->url(); ?>" class="header__logo" title="<?= $site->title()->html(); ?>">
					Logo
				</a>
			</div>
			<div class="col col-8">
				<nav class="header__navigation">
					<ul>
						<li>
							<a href="<?= $site->url(); ?>" title="Home">
								Home
							</a>
						</li>
						<?php foreach ($navs as $nav): ?>
							<li>
								<a href="<?= $nav->url(); ?>" title="<?= $nav->title()->html(); ?>">
									<?= $nav->title()->html(); ?>
								</a>
							</li>
						<?php endforeach ?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>