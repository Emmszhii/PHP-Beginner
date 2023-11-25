<?php

$heading = 'My Notes';

$config = require('config.php');
$db = new Database($config['database']);

$notes = $db->query('SELECT * FROM notes where user_id = 1')->fetchAll(PDO::FETCH_ASSOC);

// dd($notes);

require './views/notes.view.php';
