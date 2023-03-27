<?php

$heading="Notes Create";

if($_SERVER['REQUEST_METHOD']==='POST'){
    dd($_POST['description']);
}
require 'views/notes-create.view.php';