<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="page" data-section="<?= $page->id() ?>">
	<div class="container">
		<div class="page__header">
			<h1><?= $page->title()->html(); ?></h1>
			<p>Subtitle</p>
		</div>
		<!--ROW-->
		<div class="row">
			<div class="col col-6">
				<form>
					<div class="form-item">
						<label>Name</label>
						<input type="text" name="" placeholder="">
					</div>
					<div class="form-item">
						<label>Last name</label>
						<input type="text" name="" placeholder="">
					</div>
					<div class="form-item">
						<label>Email</label>
						<input type="text" name="" placeholder="">
					</div>
					<div class="form-item">
						<label>Phone</label>
						<input type="text" name="" placeholder="">
					</div>
					<div class="form-item">
						<label>Message</label>
						<textarea name=""></textarea>
					</div>
					<div class="form-item">
						<button type="submit" class="button">Submit</button>
					</div>
				</form>
			</div>
			<div class="col col-6">
			</div>
		</div>
		<!--ROW-->
	</div>
</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>