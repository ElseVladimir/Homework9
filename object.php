<?php
require_once "config/connect_db.php";
require_once "classes/Teachers.php";
require_once "classes/Objects.php";

$id = htmlspecialchars($_GET['id']);
$name = htmlspecialchars($_GET['name']);
$surname = htmlspecialchars($_GET['surname']);

if(empty($id)){
    die('empty id');
}
if(empty($name)){
    die('empty name');
}
if(empty($surname)){
    die('empty surname');
}


$objects = Objects::getTeachersForObjects($pdo,$id);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework 9</title>
</head>
<body>
    <h3>Преподователь <?=$name;?> <?=$surname;?> читает:</h3>
    <?php foreach ($objects as $object): ?>
        <ul>
            <li><?=$object['name'];?> <?=$object['surname'];?></li>
        </ul>
    <?php endforeach;?>

</body>
</html>
