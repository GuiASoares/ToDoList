<?php
    session_start();
    session_destroy();
    header('Location: ../../public/pages/index.php');
    exit;