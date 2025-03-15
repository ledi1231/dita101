<?php

include_once 'config.php';

$sql = "DELETE FROM users WHERE id=:id";

$sqlUsers = $conn->prepare($sql);
$getUsers->bindParam(":id", $id);
$sqlUsers->execute();

header("Location:dashboard.php");