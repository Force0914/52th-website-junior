<?php
$conn = new PDO("mysql:host=localhost;dbname=52_junior;charset=utf8;","admin","1234");
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$conn->query("INSERT INTO `tickets`(`first_name`, `last_name`, `phone`, `password`) VALUES ('$first_name','$last_name','$phone','$password')");
header("Location: home.html");