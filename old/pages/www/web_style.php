<!DOCTYPE html>
<html>
<? require_once  '../../head.php'; headpage ();  //����������� head?>
<title><? $titles = title ($title); echo $titles[10]; ?></title>
</head>
<body>
	
<div class="page-wrapper">	
<? require_once '../../top-menu.php'; //����������� �������� ����?>
<div class="content">

<div class="menupage">

<div class="z1">
	<h1>WEB STYLE</h1>
</div>
<div class="devel">
������ � ����������
<div>
<img src="<?=SERVNAME;?>images/angel.png" alt="angel" /> 
</div>
</div>
</div>



</div>


<div class="page-buffer"></div>
</div> 

<? require_once '../../footer.php'; //����������� footer?>
	</body>
</html>
