<?php 

session_start();
 $GLOBALS['config']=array(
// 
'mysqli'=>array(
'host'=>'127.0.0.1',
'username'=>'root',
'password'=>'',
'db'=>'ORS'
),
// 
'remember'=>array( 
'cookie_name'=>'hash',
'cookie_expiry'=>604800
 ),
// 
'session'=>array(
'session_name'=>'user'
)
//  End of Nested array
 );

 // Requireng the Classes
 spl_autoload_register( function( $class)
{

require_once 'classes/'.$class.'.php';

});

require_once 'function/sanitize.php';
// $var=$GLOBALS['config']['mysqli']['host'];
 ?>