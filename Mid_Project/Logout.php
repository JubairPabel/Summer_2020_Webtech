<?php
session_start();
session_destroy();

setcookie('name', "",time()-60);



header('location: login.html');

?>