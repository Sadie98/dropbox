<?

$domain = 'sadie98.ru';

$url = $_SERVER['REQUEST_URI']??'';

if($url == '/'){
    include('tpl/pages/main.php');
}else{
	include('tpl/pages/files.php');

}