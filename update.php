<?php
include_once "config.php";

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];

$sql = "UPDATE users SET name=:name, surname, email=:email WHERE id=:id";

$prep = $conn->prepare($sql);
$prep->binParam(":name", $name);
$prep->binParam(":surname", $surname);
$prep->binParam(":email", $email);
$prep->binParam(":id", $id);
$prep->execute();

head("Location: dashboard.php");