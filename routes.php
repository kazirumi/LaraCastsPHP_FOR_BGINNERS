<?php
$rootUrl='/LaracastsPhpForBeginers/index.php';
return  [
        '/LaracastsPhpForBeginers/'=>'controllers/index.php',
        $rootUrl.'/about'=>'controllers/about.php',
        $rootUrl.'/notes'=>'controllers/notes/index.php',
        $rootUrl.'/notes/create'=>'controllers/notes/create.php',
        $rootUrl.'/note'=>'controllers/notes/show.php',
];