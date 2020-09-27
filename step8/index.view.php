<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Boolean</title>
</head>
<body>
<h1>Task for the day</h1>
    <ul>
    <li><strong>person Responsible:</strong> <?= $task['assigned_to']; ?></li>
    <li><strong>Due date:</strong> <?= $task['due']; ?></li>
    <li><strong>Name:</strong> <?= $task['title']; ?></li>
    <li><strong>Status:</strong> 
    <?= $task['completed'] ? 'complete' : 'Incomplete'; ?></li>
    </ul>

</body>
</html>