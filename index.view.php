<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Task for the day</h1>
	<ul>
		<?php foreach ($tasks as $task) : ?>
			<li>
			<?php if ($task->completed) :?>
				<strike>
			<?php endif; ?>
					<?= $task->description ?>

			<?php if ($task->completed) :?>
				</strike>
			<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>
