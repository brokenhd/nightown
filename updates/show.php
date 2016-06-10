<?php include(__DIR__ . '/../partials/header.php'); ?>

	<?php $page = $_SERVER['QUERY_STRING']; ?>

	<?php $update = $updates['updates'][$page]; ?>

	<?= $update['title']; ?>

<?php include(__DIR__ . '/../partials/footer.php'); ?>
