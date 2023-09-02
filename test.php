<?php
$books = [
  [
    'name' => "Do android dream",
    'author' => "Vue",
    'releaseYear' => 2011,
    'url' => "Hail",
  ],
  [
    'name' => "Do I Dream",
    'author' => "Djangp",
    'releaseYear' => 2012,
    'url' => "Hail Mary",
  ],
  [
    'name' => "Do you Dream",
    'author' => "React",
    'releaseYear' => 2013,
    'url' => "Hail Mary",
  ]
];

$filterByAuthor = array_filter($books, function($book) {
  return $book['author'] === 'Vue';
});


require "index.view.php";