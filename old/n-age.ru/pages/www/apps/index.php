<!DOCTYPE html>
<html>
<? require_once  '../../../head.php'; headpagepage ();  //����������� head?>
<title><? $titles = title ($title); echo $titles[11]; ?></title>
</head>
<body>
	
<div class="page-wrapper">	
<? require_once $url.'top-menu.php'; //����������� �������� ����?>
<div class="content">

<div class="menupage">

<div class="z1">
	<h1>����������</h1>
</div>
<div class="devel">
������ � ����������
<div>
<img src="<?=SERVNAME;?>images/angel.png" alt="angel" /> 
</div>
</div>
</div>



</div>


<div class="page-buffer2"></div>
</div> 

<? require_once $url.'footer.php'; //����������� footer?>
	</body>
</html>
