<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Task Created</title>
</head>
<body>
    <h1>New Task Created</h1>
    <p>A new task has been created:</p>
    <ul>
        <li>Title: {{ $task->title }}</li>
        <li>Description: {{ $task->description }}</li>
        <li>Status: {{ $task->status }}</li>
        <li>Deadline: {{ $task->deadline }}</li>
    </ul>
</body>
</html>
