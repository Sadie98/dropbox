<?

if(!$dbh) include('dbh.php');

if(isset($_POST['email']) && isset($_POST['password'])){
	try{
		$res = $dbh->query("SELECT 1 FROM `users` WHERE `email` = '".$_POST['email']."' AND `pw` = '".$_POST['password']."'")->fetch(PDO::FETCH_NUM);

		if($res[0]) $authorized = true;
	}catch(Exception $e){
		return $e->getMessage();
	}
}

return $res;