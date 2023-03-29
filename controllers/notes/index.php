<?php
//var_dump($_SERVER['REQUEST_URI']);
use core\Database;

$heading="My Notes";

$config = require base_path('config.php');
$db =new Database($config['database']);

$notes=$db->query('select * from notes where user_id=1')->getAll();

//dd($notes);
 view('notes/index.view.php',['heading'=>$heading,'notes'=>$notes]);

