<? require_once 'config.php';    //подключение конфига?><? $_SESSION['title'] = array (
'/pages/new_age/we/' =>'Мы', 
	'/pages/new_age/we/history/' =>'История',
	'/pages/new_age/we/team/' =>'Команда', 
	'/pages/new_age/we/strategy/' =>'Стратегия', 
'/pages/new_age/portfolio/' =>'Портфолио',	
'/pages/new_age/our_projects/' =>'Наши проекты',
'/pages/new_age/news/' =>'Новости',
'/pages/new_age/articles/' =>'Статьи', 
'/pages/new_age/contacts/' =>'Контакты', 
'/pages/www/development/' =>'Разработка сайтов', 
'/pages/www/web_style/' =>'Web style', 
'/pages/www/apps/' =>'Приложения', 
'/pages/art/photoshoot/' =>'Фотосессии', 
'/pages/art/gallery/' =>'Галерея', 
'/pages/art/vernissage/' =>'Фото проекты', 
'/pages/art/graphics/' =>'Клипарт', 
'/' =>'New Age' 
); ?><? function headmain () { ?>
<head> 
	<script src="<?=SERVNAME;?>js/jquery2.0.3.js"></script>
	<link rel="stylesheet" href="<?=SERVNAME;?>css/style.css" type="text/css" media="all">
	<script src="<?=SERVNAME;?>js/lavalamp.js" type="text/javascript"></script>  
	<link rel="shortcut icon" href="<?=SERVNAME;?>favicon.ico" type="image/x-icon" />
	<meta name="robots" content="all"/>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<? if (strstr($_SERVER['REQUEST_URI'], "gallery") or $_SERVER['REQUEST_URI']=="/"){} else {?><script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async" src="https://web.redhelper.ru/service/main.js?c=prog1"></script><?}?>	
<? if($_SERVER['REQUEST_URI']=="/"){ //скрипты для главной	страницы?>
	<script src="js/newage.js" type="text/javascript"></script>  	 
	<script src="js/jquery.roundabout.js"></script> 
	<script type="text/javascript">
	$(document).ready(function () { 
		var lavampObject = $('.menu-new').lavaLamp({ fx: "backout", speed: 700 });
	});
	</script>
<?}?><? if($_SERVER['REQUEST_URI']=="/pages/art/gallery/"){ //скрипты для главной	страницы?>
<script type="text/javascript">
	$(document).ready(function() {
	<? $col=1; $c1=1; $c2=2; $c5=5; $c6=6; $ca=2; while ($col <=2) {?>  
			$('#c<?=$c1;?>, #c<?=$c2;?>, #c<?=$c5;?>, #c<?=$c6;?>').click(function(){ 
				$('.artproj<?=$col;?>').toggleClass('yes'); 
				$('.artproj<?=$ca;?>').removeClass('yes'); 
				$('.artproj3').removeClass('yes'); 
				$('.artproj4').removeClass('yes'); 
				
			});		
	<? $col++; $ca--; $c1+=2;$c2+=2;$c5+=2;$c6+=2;} ?>	
	<? $col=3; $c1=9; $c2=10; $c5=13; $c6=14; $ca=4;
	while ($col <=4) {?>  
			$('#c<?=$c1;?>, #c<?=$c2;?>, #c<?=$c5;?>, #c<?=$c6;?>').click(function(){ 
				$('.artproj<?=$col;?>').toggleClass('yes'); 
				$('.artproj<?=$ca;?>').removeClass('yes'); 
				$('.artproj1').removeClass('yes'); 
				$('.artproj2').removeClass('yes'); 
				
			});		
	<? $col++; $ca--; $c1+=2;$c2+=2;$c5+=2;$c6+=2;} ?>}); 
</script>   
<?}?>
<? if($_SERVER['REQUEST_URI']=="/pages/new_age/we/team/"){ //скрипты для главной	страницы?> 
	<script type="text/javascript">
	$(document).ready(function () { 
		var lavampObject = $('.menu-new').lavaLamp({ fx: "backout", speed: 700 });
	});
	</script>
	<script type="text/javascript">
    $(document).ready(function() {
    $('#smdiv').hide();  
    $('#bmdiv').hide();  
    $('#jediv').hide();  
    $('#jeidiv').hide();  
    $('#midiv').hide();  
	
		$('#sm').click(function(){ 
		$('#smdiv').fadeIn(); 
			
		$('#bmdiv').fadeOut();	
		$('#jediv').fadeOut();	
		$('#jeidiv').fadeOut();	
		$('#midiv').fadeOut();	
		$('#contsdiv').fadeOut();	
		});		
		
		$('#bm').click(function(){ 
		$('#bmdiv').fadeIn(); 
			
		$('#smdiv').fadeOut();			
		$('#jediv').fadeOut();	
		$('#jeidiv').fadeOut();	
		$('#midiv').fadeOut();	
		$('#contsdiv').fadeOut();	
		});	
		
		$('#je').click(function(){ 
		$('#jediv').fadeIn(); 
			
		$('#smdiv').fadeOut();	 	
		$('#jeidiv').fadeOut();	
		$('#midiv').fadeOut();	
		$('#bmdiv').fadeOut();
		$('#contsdiv').fadeOut();
		});	
		
		$('#jei').click(function(){ 
		$('#jeidiv').fadeIn(); 
			
		$('#smdiv').fadeOut();			
		$('#jediv').fadeOut();	
		$('#bmdiv').fadeOut();	
		$('#midiv').fadeOut();	
		$('#contsdiv').fadeOut();	
		});	
		
		$('#mi').click(function(){ 
		$('#midiv').fadeIn(); 
			
		$('#smdiv').fadeOut();			
		$('#jediv').fadeOut();	
		$('#bmdiv').fadeOut();	
		$('#jeidiv').fadeOut();	
		$('#contsdiv').fadeOut();	
		});
   }); 
	</script>	
<?}?><title><?foreach ($_SESSION['title'] as $tit=>$tits) { if (isset($tits)){ if($_SERVER['REQUEST_URI']==$tit){echo $tits;} else {}}}?></title>
</head>
<?	return;} ?> 
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