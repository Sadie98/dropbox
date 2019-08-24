<?

if(!$dbh) include('dbh.php');

if(isset($_POST['email']) && isset($_POST['password'])){
	try{
		$res = $dbh->query("SELECT `user_id` FROM `users` WHERE `email` = '".$_POST['email']."' AND `pw` = '".$_POST['password']."'")->fetch();

		if($res[0]) $_SESSION['logged_in'] = $res[0];
	}catch(Exception $e){
		var_dump($e);
	}
}

return $res;