<?php

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
        <form action="">
            <input type="text" id="new_todo" placeholder="What needs to be done?">
        </form>
        <ul>
        <?php foreach ($todos as $todo) : ?>
            <li>
                <input type="checkbox" <?php if ($todo->state === '1') {
                    echo 'checked'; } ?>>
                <span class="<?php if ($todo->state === '1') { echo 'done'; } ?>"><?= h($todo->title); ?></span>
                <div class="delete_todo">x</div>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="todo.js"></script>
</body>
</html>