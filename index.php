<?php include(__DIR__ . '/partials/header.php'); ?>

	<div class="game" name="game">
		<div class="content">
			<h2><?= $game['title']; ?></h2>
			<p><?= $game['body']; ?></p>
		</div>
	</div>

	<div class="characters" name="characters">
		<div class="content">
			<div class="current-character"></div>
			<div class="character-grid">
				<?php foreach($characters['characters'] as $character): ?>
					<div class="character">
						<div class="portrait">
							<img src="<?= $character['thumb']; ?>"/>
						</div>
						<div class="name"><?= $character['name']; ?></div>
						<div class="model"><img src="<?= $character['gif']; ?>"/></div>
						<div class="description"><?= $character['description']; ?></div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="current-description"></div>
		</div>
	</div>

	<div class="updates" name="updates">
		<div class="content">

			<?php $i = 0; foreach($updates['updates'] as $update): ?>
				<?php if(++$i > 4) break; ?>

				<a href="/updates/show?<?= $update['slug']; ?>" class="update">

					<div class="bkgd" style="background-image: url('<?= $update['image']; ?>');"></div>

					<div class="copy">

						<div class="middle">
							<p class="date"><?= $update['date']; ?></p>
							<h3 class="title"><?= $update['title']; ?></h3>
							<p class="abstract"><?= $update['abstract']; ?></p>
							<img src="/img/arrow.png" class="long-arrow"/>
							<div class="more">Read Post</div>
						</div>

					</div>

				</a>

			<?php endforeach; ?>

		</div>
	</div>

<?php include(__DIR__ . '/partials/footer.php'); ?>
