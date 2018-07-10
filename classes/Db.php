<?php 
class DB
{
private static $_instance=null;
private $_pdo,
 $_errors=false,
 $_queery,
 $_results,
$_count=0;

private function __construct()
{

try
{
$this->_pdo= new PDO('mysql:host='.Config::get('mysqli/host').';dbname='.Config::get('mysqli/db'),
	                                                                Config::get('mysqli/username'),
                                                                	Config::get('mysqli/password'));

} catch(PDOExcepation $e)
{
die($e->getMessage());

}
}
public static function getinstance()
{
if (!isset(self::$_instance)) {
$_instance=new DB();
}
return self::$_instance;


}



}











?>