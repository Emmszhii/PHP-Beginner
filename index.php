<?php
require 'functions.php';
// require 'router.php';

// connect to msSql db.
$dsn = "mysql:host=localhost;port=3306;user='root';dbname=myapp;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// dd($posts);

foreach ($posts as $post) {
    echo $post['title'] . ' have an ID of ' . $post['id'] . '<br>';
}
