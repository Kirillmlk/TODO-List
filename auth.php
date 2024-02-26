<?php
    if ($_COOKIE['user'])
        setcookie('user', 'true', time() - 3600, '/');
    else
        setcookie('user', 'true', time() + 3600, '/');

header('Location: /');
