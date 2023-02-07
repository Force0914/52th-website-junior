<?php
$conn = new PDO("mysql:host=localhost;dbname=52_junior;charset=utf8;","admin","1234");
$conn->query("INSERT INTO tickets(first_name, last_name, phone, password) VALUES ('{$_POST['first_name']}','{$_POST['last_name']}','{$_POST['phone']}','{$_POST['password']}')");
header("Location: home.html");