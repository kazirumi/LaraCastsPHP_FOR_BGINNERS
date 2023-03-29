<?php
//var_dump($_SERVER['REQUEST_URI']);
$heading="Notes";
$currentUserID='1';

$config = require('config.php');
$db =new Database($config['database']);

$note=$db->query('select * from notes where id= :id',[
    ':id'=>$_GET['id']])->findOrFail();
//dd($note);
//dd($note['user_id']==$currentUserID);

//checking authorize data
authorize($note['user_id']===$currentUserID);


require('views/notes/show.view.php');

