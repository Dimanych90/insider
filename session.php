<?php
session_set_cookie_params(30);
session_start();
var_dump(session_save_path());
echo __DIR__;
echo '<hr><br>';

if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = 'Dimasick';
    $_SESSION['time'] = time();
    echo 'Set a name';
} else {
    echo 'Hello ' . $_SESSION['name'] . ' was set ' .(time() - $_SESSION['time']) . ' sec ago';
}