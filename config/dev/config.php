<?php

return [
    /**
 * Base URL of the site
 */
'base_url' => "http://lms.com/",
/**
 * Path to Views Directory
 */
'view' => "src/app/view/",
/**
 * Path to Models Directory
 */
'model' => "App\Model\\",

'library' => "App\Library\\",
'helper' => "App\Helper\\",
/**
 * Path to Layout Directory
 */
'layout' => "static/layout/",
/**
 * Path to services
 */
'service' => "App\Service\\",
/**
 * Path to static folder
 */
'static' => "",
/**
 * Path to upload folders
 */
'upload' => "upload",
/**
 * Set the name of the controller handles errors
 */
 'error_ctrl'  => "ErrorController",
/**
 * Set Environment value
 */
 'environment'  => null,
/**
 * Sets log file
 */
 'logs'  => "log",
/**
 * Session driver available options file|database
 */
 'session_driver'  => 'database',
//  'session_driver'  => 'file',
/**
 * Session expiration time
 */
 'session_expiration'  => 7200,
/**
 * Cookie expiration time
 */
 'cookie_expiration'  => 86400,
/**
 * Session save path
 */
 'session_save_path'  => 'session',
//  'session_save_path'  => 'C:\xampp\LMS\session',
/**
 * Sets default timezone
 */
 'timezone'  => 'Asia/Kolkata',

 'default_module' => 'home',

];