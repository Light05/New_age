<!DOCTYPE html>
<html>
<? require_once 'head.php'; headmain ();  //подключение меню?>
	<body>
<div class="page-wrapper">

	<div class="slider">
	
	<div class="logo"><a href="index.php"><img src="images/logo.png" alt="лого" /></a></div>
		<ul class="ul"> 
		   <li><img src="images/NA.png" alt="" /></li> 
		   <li><img src="images/MA.png" alt="" /></li> 
		   <li><img src="images/WW.png" alt="" /></li> 
		   <li><img src="images/PR.png" alt="" /></li> 
		   <li><img src="images/FT.png" alt="" /></li>  
		</ul>
	</div> 
<script>
   $(document).ready(function() {
      $('.ul').roundabout({
         shape: "lazySusan"  
      });
   }); 

    $(document).ready(function() {  
    $('.hc').hide(); 
    $('.we').hide();  
    $('.pr').hide();   
    $('.ha').hide();   
    $('.hm').hide();   
	
	
   
	$('.roundabout-moveable-item1').click(function(){
		$('.pr').fadeOut(); 
		$('.ha').fadeOut(); 
		$('.hm').fadeOut(); 
		$('.hc').fadeOut(); 
		$('.we').fadeIn();  
		
		$('.ul').roundabout("stopAutoplay");
	});
	
	$('.roundabout-moveable-item2').click(function(){
		$('.we').fadeOut(); 
		$('.ha').fadeOut(); 
		$('.hm').fadeOut(); 
		$('.hc').fadeOut(); 
		$('.pr').fadeIn();  
	
		$('.ul').roundabout("stopAutoplay");
	});
	
	$('.roundabout-moveable-item3').click(function(){ 
		$('.we').fadeOut(); 
		$('.hm').fadeOut(); 
		$('.hc').fadeOut(); 
		$('.pr').fadeOut(); 
		$('.ha').fadeIn(); 
		
		$('.ul').roundabout("stopAutoplay");
	});
	
	$('.roundabout-moveable-item4').click(function(){ 
		$('.we').fadeOut(); 
		$('.hm').fadeOut(); 
		$('.ha').fadeOut(); 
		$('.pr').fadeOut(); 
		$('.hc').fadeIn(); 		 
		
		$('.ul').roundabout("stopAutoplay");
	});
	
	$('.roundabout-moveable-item5').click(function(){ 
		$('.we').fadeOut(); 
		$('.hc').fadeOut(); 
		$('.ha').fadeOut(); 
		$('.pr').fadeOut(); 
		$('.hm').fadeIn(); 		

		$('.ul').roundabout("stopAutoplay");		
	});
   });   
   
</script>

<script type="text/javascript">
$(document).ready(function () { 
	var lavampObject = $('.menu-new').lavaLamp({ fx: "backout", speed: 700 });
});
</script>


<? require_once 'menu.php';  //подключение меню?>
<div class="menumain">
	<div class="we">
		<img src="images/HNA.png" alt="New age" />  
		<div class="namain">
			 <div id="menu-new">
					<ul id="nav" class="menu-new">
						<? $menuNewAgem = menuNewAge ($menuNewAge); foreach ($menuNewAgem as $NewAgem){ if (isset($NewAgem['link'])){?>
							<? if (!strstr($_SERVER['REQUEST_URI'], "?en")){ ?><li class="<?=$NewAgem['class'];?>"><a class="mycursor" href="<?=$NewAgem['link'];?>"><?=$NewAgem['name'];?></a></li><? }//русский?>
							<? if (strstr($_SERVER['REQUEST_URI'], "?en")){ ?><li class="<?=$NewAgem['class'];?>"><a href="<?=$NewAgem['link'];?>"><?=$NewAgem['nameen'];?></a></li><? }//английский?>
						<? }} ?>
					</ul> 
			</div> 	
		</div>
	</div> 
	<div class="pr">
		<img src="images/HWW.png" alt="New age" /> 
	<div class="wwmain">
		<div id="menu-new">
			<ul id="nav" class="menu-new">
				<? menuWWW ();?>
			</ul> 
		</div> 					
	</div>
	</div>
	
	<div class="ha">
		<img src="images/HAP.png" alt="New age" /> 
	<div class="armain"> 
		<div id="menu-new">
			<ul id="nav" class="menu-new">
				<? menuArtPhoto ();?>
			</ul> 
		</div> 	
	</div>
	</div>
	
	<div class="hm">
		<img src="images/HCO.png" alt="New age" /> 
		<div class="hmmain">Раздел находится в разработке.</div>
	</div>
	
	<div class="hc">
		<img src="images/HMA.png" alt="New age" /> <br />
		<div class="hmmain">Раздел находится в разработке.</div>
	</div>
	
	

</div>
<div class="page-buffer"></div>
</div>
<? require_once 'footer.php'; //подключение footer?>


	</body>
</html>

 