<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$rootUrl='/LaracastsPhpForBeginers/index.php';

$routes=[
        '/LaracastsPhpForBeginers/'=>'controllers/index.php',
        $rootUrl.'/about'=>'controllers/about.php',
        $rootUrl.'/notes'=>'controllers/notes.php',
        $rootUrl.'/note'=>'controllers/note.php',
];

function abort($code=404){
http_response_code($code);

require 'views/'.$code.'.php';

die();
}

if(array_key_exists($uri,$routes)){
require $routes[$uri];
}else{
abort();
}