
<html>
<head>
<body>
<ul>
<?php foreach ($tasks as $task) :?>
<li>
<?php if ($task->completed) : ?>
<?= $task->description; ?> </>
<?php else: ?>
<?= $task->description; ?>
<?php endif; ?>

</li>
</ul>
</body>
</head>
</html>