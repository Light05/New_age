<?
define ("SERVNAME", "http://n-age.ru/"); //константа полного пути
?>
 	
<? if (strstr($_SERVER['REQUEST_URI'], "gallery")){} else {?>
	<!-- RedHelper -->
	<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async" 
		src="https://web.redhelper.ru/service/main.js?c=prog1">
	</script> 
	<!--/Redhelper -->
<?}?>





<div class="topmenu">
	<? if (strstr($_SERVER['REQUEST_URI'], "gallery")){} else {?><div class="prew"><input class="back" type="button" value="" onclick="history.go(-1)" /></div><?}?>
	<div class="logo">  <a href="<?=SERVNAME;?>"><img src="<?=SERVNAME;?>images/logo2.png" alt="лого" /></a></div>
	<? if (strstr($_SERVER['REQUEST_URI'], "gallery")){} else {?><div class="bell"><img src="<?=SERVNAME;?>images/bell.png" class="redhlp_button"/></div><?}?>
</div> 