<?php include(__DIR__ . '/partials/header.php'); ?>

	<div class="header">
		<div class="content">
			<img src="img/nightown.png">
			<div class="main-nav">
				<a href="#game">Game</a>
				<a href="#characters">Characters</a>
				<a href="#updates">Updates</a>
			</div>
		</div>
	</div>

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

				<div class="update"	style="background-image: url('<?= $update['image']; ?>');">
					<a href="/updates/show?<?= $update['slug']; ?>" class="copy">
						<p class="date"><?= $update['date']; ?></p>
						<h3><?= $update['title']; ?></h3>
						<p><?= $update['abstract']; ?></p>
						<span class="long-arrow"></span>
					</a>
				</div>

			<?php endforeach; ?>

		</div>
	</div>

<?php include(__DIR__ . '/partials/footer.php'); ?>
