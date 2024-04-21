<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Updated</title>
</head>
<body>
    <h1>Task Updated</h1>
    <p>An existing task has been updated:</p>
    <ul>
        <li>Title: {{ $task->title }}</li>
        <li>Description: {{ $task->description }}</li>
        <li>Status: {{ $task->status }}</li>
        <li>Deadline: {{ $task->deadline }}</li>
    </ul>
</body>
</html>
