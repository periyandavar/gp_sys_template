<?php

return [
     'host'  => getenv('DB_HOST') ,

 'user'  => getenv('DB_USERNAME') ,

 'password'  => getenv('DB_PASSWORD') ,

'database'  => getenv('DB_DATABASE') ,
/**
 * For pdo  "pdo/driverName" ex: pdo/mysql
 * For mysqli 'mysqli'
 */
 'driver'  => 'pdo/mysql' ,
//  'driver'  => 'mysqli' ,

];