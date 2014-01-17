<!DOCTYPE html>
<html>
<? require_once  '../../../head.php'; headpagepage ();  //подключение head?>
<title><? $titles = title ($title); echo $titles[13]; ?></title>
</head>

<script>


$(document).ready(function() {
<? $col=1; $c1=1; $c2=2; $c5=5; $c6=6; $ca=2;
while ($col <=2) {?>  
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
<? $col++; $ca--; $c1+=2;$c2+=2;$c5+=2;$c6+=2;} ?>		

		
		 

   }); 
</script>   
<body>
	
<div class="page-wrapper">	
<? require_once '../../../top-menu.php'; //подключение верхнего меню?>
<div class="content3">

<div class="menupage">

<div class="gallery">	
	<div class="g1" id="c1"><img  src="<?=SERVNAME;?>images/gallery/c1.jpg" alt="" /></div>	
	<div class="g1" id="c2"><img  src="<?=SERVNAME;?>images/gallery/c2.jpg" alt="" /></div>	
	<div class="g1" id="c3"><img  src="<?=SERVNAME;?>images/gallery/c3.jpg" alt="" /></div>		
	<div class="g1" id="c4"><img  src="<?=SERVNAME;?>images/gallery/c4.jpg" alt="" /></div>		
	
	<div class="g1" id="c5"><img src="<?=SERVNAME;?>images/gallery/c5.jpg" alt="" /></div>	
	<div class="g1" id="c6"><img src="<?=SERVNAME;?>images/gallery/c6.jpg" alt="" /></div>	
	<div class="g1" id="c7"><img src="<?=SERVNAME;?>images/gallery/c7.jpg" alt="" /></div>	
	<div class="g1" id="c8"><img src="<?=SERVNAME;?>images/gallery/c8.jpg" alt="" /></div>	
	
	<div class="g1" id="c9"><img src="<?=SERVNAME;?>images/gallery/c9.jpg" alt="" /></div>	
	<div class="g1" id="c10"><img src="<?=SERVNAME;?>images/gallery/c10.jpg" alt="" /></div>	
	<div class="g1" id="c11"><img src="<?=SERVNAME;?>images/gallery/c11.jpg" alt="" /></div>	
	<div class="g1" id="c12"><img src="<?=SERVNAME;?>images/gallery/c12.jpg" alt="" /></div> 
	
	<div class="g1" id="c13"><img src="<?=SERVNAME;?>images/gallery/c13.jpg" alt="" /></div>	
	<div class="g1" id="c14"><img src="<?=SERVNAME;?>images/gallery/c14.jpg" alt="" /></div>	
	<div class="g1" id="c15"><img src="<?=SERVNAME;?>images/gallery/c15.jpg" alt="" /></div>	
	<div class="g1" id="c16"><img src="<?=SERVNAME;?>images/gallery/c16.jpg" alt="" /></div> 
	
<div class="artproj1">
	<img src="<?=SERVNAME;?>images/gallery/ar.png" alt="" />
</div>

<div class="artproj2">
	<img src="<?=SERVNAME;?>images/gallery/gl.png" alt="" />
</div>	

<div class="artproj3">
	<img src="<?=SERVNAME;?>images/gallery/ph.png" alt="" />
</div>	
<div class="artproj4">
	<img src="<?=SERVNAME;?>images/gallery/cl.png" alt="" />
</div>	
</div>	



</div>
</div>



</div>


<div class="page-buffer2"></div>
</div> 

<? require_once '../../../footer.php'; //подключение footer?>
	</body>
</html>
