<?php

use core\Database;

$heading="Notes";
$currentUserID='1';

$config = require base_path('config.php');
$db =new Database($config['database']);

$note=$db->query('select * from notes where id= :id',[
    ':id'=>$_GET['id']])->findOrFail();
//dd($note);
//dd($note['user_id']==$currentUserID);

//checking authorize data
authorize($note['user_id']===$currentUserID);


 view('notes/show.view.php',['heading'=>$heading,'note'=>$note]);

