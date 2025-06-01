<?php

use App\Filters\AppFilter;
use Router\Router;

return [
    ['/', 'app/indexPage'],
    ['/home', 'app/indexPage2'],
    ['/data', 'app/index'],
    ['/user', 'app/user', Router::METHOD_POST, AppFilter::class, 'user'],
];
