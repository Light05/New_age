<? function headmain () { ?>
	<head> 
		<script src="js/jquery2.0.3.js"></script>
		<script src="js/jquery.roundabout.js"></script> 
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all"> 
		
		<script src="js/lavalamp.js" type="text/javascript"></script>  
		<script src="js/newage.js" type="text/javascript"></script>  
		
		<script src="js/jquery.event.drop-2.2.js" type="text/javascript"></script> 
		<script src="js/jquery.event.drag-2.2.js" type="text/javascript"></script> 
		
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<meta name="robots" content="all"/>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<title>New Age</title>
	</head>
<?	return;} ?>		
<? function headpage () { ?>
	<head>
		<script src="../../js/jquery2.0.3.js"></script>
		<link rel="stylesheet" href="../../css/style.css" type="text/css" media="all">
		<meta name="robots" content="all"/>
		<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon" /> 
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<? return;} ?>	
<? function headpagepage () { ?>
	<head>
		<script src="../../../js/jquery2.0.3.js"></script>
		<link rel="stylesheet" href="../../../css/style.css" type="text/css" media="all">
		<meta name="robots" content="all"/>
		<link rel="shortcut icon" href="../../../favicon.ico" type="image/x-icon" /> 
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"> 
		<script src="../../../js/lavalamp.js" type="text/javascript"></script> 
<?	return;} ?>	

<? function headpagepages () { ?>
	<head>
		<script src="../../../../js/jquery2.0.3.js"></script>
		<link rel="stylesheet" href="../../../../css/style.css" type="text/css" media="all">
		<meta name="robots" content="all"/>
		<link rel="shortcut icon" href="../../../../favicon.ico" type="image/x-icon" /> 
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"> 
		<script src="../../../../js/lavalamp.js" type="text/javascript"></script> 
<?	return;} ?>	


<? function title () { $title = array (
'Мы', 
'Контакты', 
'История',
'Портфолио',
'Наши проекты',
'Новости',
'Статьи', 
'Команда', 
'Стратегия', 
'Разработка сайтов', 
'Web style', 
'Приложения', 
'Фотосессии', 
'Галерея', 
'Фото проекты', 
'Клипарт', 
'Поздравление' 
); 
return $title;}?>

<? 
$utl = explode("/", $_SERVER['REQUEST_URI']);
$countutl = count($utl); 
$countutl -=2;
$url = "";
while (1 <= $countutl)
{
	$url .="../"; 
	$countutl--;
} 
?>