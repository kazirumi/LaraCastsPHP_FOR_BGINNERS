<?php
//var_dump($_SERVER['REQUEST_URI']);
$heading="Notes";
$currentUserID='1';

$config =require('config.php');
$db =new Database($config['database']);

$note=$db->query('select * from notes where id= :id',[
    ':id'=>$_GET['id']])
    ->fetch();

if (! $note){
    abort();
}
//dd($note);

if($note['user_id']!==$currentUserID){
    abort(Response::FORBIDDEN);
}
require('views/note.view.php');

