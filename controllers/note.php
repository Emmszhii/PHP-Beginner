<?php
$heading = 'Note';
$config = require('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

$note = $db->query("SELECT * FROM notes where id = :id", [
    'id'    => $_GET['id'],
    // 'user'  => 1
])->fetch(PDO::FETCH_ASSOC);


if (!$note) {
    abort();
}
if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}
// dd($note);

require './views/note.view.php';
