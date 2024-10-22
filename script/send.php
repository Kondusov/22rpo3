<?php
//var_dump( $_POST);
$name = $_POST['name'];
$age = $_POST['age'];
echo ($name);
echo ($age);
header('Location: ../index.html');