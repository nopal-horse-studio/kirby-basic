<?php $contact = page('contact'); ?>

<footer>
	<div class="container">
		<p>
			<?= $contact->street()->html(); ?>,
			<?= $contact->colony()->html(); ?>,
			<?= $contact->cp()->html(); ?>,
			<?= $contact->city()->html(); ?>,
			<?= $contact->state()->html(); ?>,
			<?= $contact->country()->html(); ?>
		</p>
		<p><?= $contact->email()->html(); ?></p>
		<p><?= $contact->phone()->html(); ?></p>
		<p><?= $contact->telephone()->html(); ?></p>
		<p><?= $contact->whatsapp()->html(); ?></p>

		<p>©<?= date('Y') ?> Todos los derechos reservados.</p>
	</div>
</footer>

