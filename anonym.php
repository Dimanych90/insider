<?php

$context = ' шшсукаубыл';

$users = (function() use ($context) {

    // эта переменная создается только 1 раз при вызове функции и исчезает сразу после вызова не занимая память
    $userNameTemplate = 'Маша номер %d создана в контексте ' . $context;

    $users = [];
    for($i = 1; $i <= 10; $i++) {
        $users[] = str_replace('%d', $i, $userNameTemplate);
    }

    return $users;
})();

var_dump($users);
var_dump($userNameTemplate);