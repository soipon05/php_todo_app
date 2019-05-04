<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/functions.php');

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
            <li>
                <input type="checkbox">
                <span>Do something!</span>
                <div class="delete_todo">x</div>
            </li>
            <li>
                <input type="checkbox" checked>
                <span class="done">Do something again!</span>
                <div class="delete_todo">x</div>
            </li>
        </ul>
    </div>
</body>
</html>