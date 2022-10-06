<?php
    session_start();

    session_destroy();

    header('Location: /php-project/13_sessions.php');