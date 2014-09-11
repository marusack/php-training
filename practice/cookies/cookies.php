<?php

if (isset($_COOKIE['username'])) {
    echo "Bienvenido " .  $_COOKIE['username'] . "!<br/>";
} else {
    echo "Bienvenido invitado!<br/>";
}