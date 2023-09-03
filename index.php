<?php
require 'functions.php';
// require 'router.php';
require 'Database.php';
$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];
$query = "Select * from posts where id = ?";
$posts = $db->query($query, [$id])->fetch(PDO::FETCH_ASSOC);

dd($posts);
