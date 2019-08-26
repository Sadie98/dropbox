<?
include(__DIR__.'/../chunks/header.php'); ?>

<body>
<?include_once(__DIR__.'/../chunks/navbar.php');?>

<nav class="pink darken-4">
	<div class="nav-wrapper">
		<div class="col s12">
			<?
                $domain = $_SERVER['SERVER_NAME'];

			    $url = $_SERVER['REQUEST_URI']??'';
			    $urlParts = explode('/', $url);
			    $prev = '';
			    $href = 'https://'.$domain;

			    foreach($urlParts as $urlPart){
	                if(!$urlPart) continue;
	                $href .= '/'.$urlPart;

	                echo '<a href="'.$href.'" class="breadcrumb">'.$urlPart.'</a>';
                }
			?>
		</div>
	</div>
</nav>
<div class="add">
    <a class="waves-effect waves-light pink lighten-3 btn"><i class="material-icons left">add</i>Новый файл</a>
    <a class="waves-effect waves-light pink lighten-3 btn"><i class="material-icons left">create_new_folder</i>Новая папка</a>
</div>

<? include_once(__DIR__.'/../chunks/authorization.php'); ?>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../../js/materialize.js"></script>
<script src="../../js/init.js"></script>
</body>
</html>
