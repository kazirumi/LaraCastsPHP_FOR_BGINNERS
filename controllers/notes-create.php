<?php
require 'Validator.php';

$heading="Notes Create";
$config =require('config.php');
$db =new Database($config['database']);

//$validator=new Validator();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $errors=[];
    //dd($validator->string($_POST['description'],1,1000));
    if(! Validator::string($_POST['description'],1,1000)){
        $errors['body']='A description is required and can not be greater than 1000';
    }

    if (empty($errors)){
        $db->query('INSERT INTO notes ( `body`, `user_id`) VALUES ( :body , :user_id);',[':body'=>$_POST['description'],':user_id'=>1]);
    }
}
require 'views/notes-create.view.php';