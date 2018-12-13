<?php
session_start();

// global variable it is an array of diferent config settings
$GLOBALS['Config'] = array(
    'mysql' =>array(
      'host' => '127.0.0.1',
      'username' => 'root',
      'password' => 'mongezi',
      'db' => 'log'
    ),
     'remember' => array(
         'cookie_name' => 'hash',
         'cookie_expirity' => 604800
             ),
     'session' => array(
         'session_name' => 'user'
     )    
);

//autoloading the classes avoid requir_eonce
// spl_autoload _register(function($class){
//     include class/$class.'php';
// });

require_once dirname(__DIR__).'../functions/sanitize.php';