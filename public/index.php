<?php

session_start();

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/Todo.php');


// get todos
$todoApp = new \MyApp\Todo();
$todos = $todoApp->getAll();

// var_dump($todos);
// exit;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>TodoApp</title>
</head>
<body>
    <div id="container">
        <h1>Todos</h1>
        <form action="" id="new_todo_form">
            <input type="text" id="new_todo" placeholder="What needs to be done?">
        </form>
        <ul id="todos">
        <?php foreach ($todos as $todo) : ?>
            <li id="todo_<?= h($todo->id); ?>" data-id="<?= h($todo->id); ?>">
                <input type="checkbox" class="update_todo" <?php if ($todo->state === '1') {
                    echo 'checked'; } ?>>
                <span class="todo-title <?php if ($todo->state === '1') { echo 'done'; } ?>"><?= h($todo->title); ?></span>
                <div class="delete-todo">x</div>
            </li>
        <?php endforeach; ?>
            <li id="todo_template" data-id="">
                <input type="checkbox" class="update_todo">
                <span class="todo-title"></span>
                <div class="delete-todo">x</div>
            </li>
        </ul>
    </div>
    <input type="hidden" id="token" value="<?= h($_SESSION['token']); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="todo.js"></script>
</body>
</html>