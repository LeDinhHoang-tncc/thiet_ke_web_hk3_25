<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|ico)$/', $_SERVER["REQUEST_URI"])) {
    return false;
}

$f3 = require('lib/base.php');

$f3->set('DEBUG', 3);
$f3->set('AUTOLOAD', 'app/controllers/');
$f3->set('UI', 'app/views/');

$f3->route('GET /', function ($f3) {
    echo \Template::instance()->render('home.html');
});

$f3->run();
