<?php
const   BASE_PATH= __DIR__.'/../';

require BASE_PATH . 'core/function.php';

//require base_path('Database.php');
//require base_path('Response.php');
spl_autoload_register(function ($class){
    //core\Database
    $class= str_replace('\\','/',$class);
   require base_path($class.'.php');
});

require base_path('core/router.php');

