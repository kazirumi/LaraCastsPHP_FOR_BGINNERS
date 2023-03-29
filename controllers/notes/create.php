<?php
use core\Database;
use core\Validator;

require base_path('core/Validator.php');

$heading="Notes Create";
$config = require base_path('config.php');
$db =new Database($config['database']);

//$validator=new Validator();
$errors=[];
if($_SERVER['REQUEST_METHOD']==='POST'){

    //dd($validator->string($_POST['description'],1,1000));

    if(! Validator::string($_POST['description'],1,1000)){
        $errors['body']='A description is required and can not be greater than 1000';
    }

    if (empty($errors)){
        $db->query('INSERT INTO notes ( `body`, `user_id`) VALUES ( :body , :user_id);',[':body'=>$_POST['description'],':user_id'=>1]);
        $_POST['description']='';

    }
}else{
    $_POST['description']='';
}
 view('notes/create.view.php',['heading'=>$heading,'errors'=>$errors]);