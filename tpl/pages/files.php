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
    <div class="file-field input-field">
        <a class="waves-effect waves-light pink lighten-3 btn new-file">
            <span>Новый файл</span>
            <input type="file" multiple>
        </a>
    </div>
    <div>
        <a class="waves-effect waves-light pink lighten-3 btn new-folder"><i class="material-icons left">create_new_folder</i>Новая папка</a>
    </div>
</div>
<table class="highlight">
    <thead>
        <tr>
            <th>Имя</th>
            <th>Размер</th>
            <th>Дата создания</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>

<? include_once(__DIR__.'/../chunks/authorization.php'); ?>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.js"></script>
<script src="/js/h.js"></script>
<script src="/js/authorization/init.js"></script>
<script src="/js/authorization/eventsInit.js"></script>
<script src="/js/init.js"></script>
<script src="/js/eventsInit.js"></script>
</body>
</html>
