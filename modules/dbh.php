<?

$dsn = 'mysql:dbname=u759106231_1;host=sql260.main-hosting.eu';
$user = file_get_contents('../config/dbuser');
$password = file_get_contents('../config/dbpassword');

try{
	$dbh = new PDO($dsn, $user, $password);
}catch(Exception $e){
	var_dump($e);
}