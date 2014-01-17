	<div class="topmenu">
			<? if (strstr($_SERVER['REQUEST_URI'], "gallery")){} else {?><div class="prew">
				<button class="back" onclick="history.go(-1)"></button>
			</div><?}?>
						
			<div class="logo">
				<a href="<?=SERVNAME;?>"><img src="<?=SERVNAME;?>images/logo2new.png" alt="лого" /></a>
			</div>			
			<? if (strstr($_SERVER['REQUEST_URI'], "gallery")){} else {?><div class="bell">
				<img src="<?=SERVNAME;?>images/bell.png" class="redhlp_button" alt="" />
			</div><?}?>
			
	</div> 
	