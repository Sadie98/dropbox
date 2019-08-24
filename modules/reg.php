<?

if(!$dbh) include('dbh.php');

if(isset($_POST['email']) && isset($_POST['password'])){
	try{
		$res = $dbh->query("INSERT INTO `users` SET `email` = '".$_POST['email']."', `pw` = '".$_POST['password']."'")->fetch();
	}catch(Exception $e){
		return $e->getMessage();
	}
}

return $res;