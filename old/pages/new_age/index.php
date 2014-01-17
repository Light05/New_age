<!DOCTYPE html>
<html>
<? require_once  '../../head.php'; headpage ();  //подключение head?>
<title><? $titles = title ($title); echo $titles[0]; ?></title>
</head>
<body>
	
<div class="page-wrapper">	
<? require_once '../../top-menu.php'; //подключение верхнего меню?>
<div class="content">

<div class="menupage">

<div class="z1">
	<h1>МЫ</h1>
</div>

<a href="history/">История</a>
<a href="team/">Команда</a>
<a href="strategy/">Стратегия</a>
</div>



</div>


<div class="page-buffer"></div>
</div> 

<? require_once '../../footer.php'; //подключение footer?>
	</body>
</html>
