<?php
    session_start();
    unset($_SESSION["user"]);
    echo "Вы вышли";
