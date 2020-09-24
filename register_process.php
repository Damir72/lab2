<?php

$username = filterInput($_POST[‘username’]);

$password = filterInput($_POST[‘password’]);

if(empty($username) == 0 OR strlen($password) == 0)

header(“Location: index.php?msg=EmptyInput”);

?>