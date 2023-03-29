<?php
//var_dump($_SERVER['REQUEST_URI']);
$heading="My Notes";

$config = require('config.php');
$db =new Database($config['database']);

$notes=$db->query('select * from notes where user_id=1')->getAll();

//dd($notes);
require('views/notes/index.view.php');

