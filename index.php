<!DOCTYPE html>
<html><? require_once 'head.php'; headmain ();  //����������� ����?>
<body> 
<div class="container">
	<div class="logonew">
		<a href=""><img src="images/logo.png" alt="����" /></a>
	</div>
	
    <div class="box">  
		<div class="slideruk">
			<ul class="ul"> 
			   <li><a href="pages/new_age/we/"><img src="images/NA.svg" alt="" /></a></li> 
			   <li><a href="pages/www/development/"><img src="images/MA.svg" alt="" /></a></li> 
			   <li><a href="pages/art/gallery/"><img src="images/WW.svg" alt="" /></a></li> 
			   <li><img src="images/PR.svg" alt="" /></li> 
			   <li><img src="images/FT.svg" alt="" /></li>  
			</ul>
		</div>		
		<? require_once 'menu.php';  //����������� ����?>
		<div class="menumain"> 
		<div class="pr1">
			<img src="images/HNA.png" alt="New age" />  
			<span id="menu-new">
				<ul id="nav" class="menu-new">
					<? menuNewAge ();?>
				</ul> 
			</span> 
		</div> 
	
		<div class="pr2">
			<img src="images/HWW.png" alt="New age" /> 
			<span id="menu-new">
				<ul id="nav" class="menu-new">
					<? menuWWW ();?>
				</ul> 
			</span>
		</div>
		
		<div class="pr3">
			<img src="images/HAP.png" alt="New age" /> 
			<span id="menu-new">
				<ul id="nav" class="menu-new">
					<? menuArtPhoto ();?>
				</ul> 
			</span>  
		</div>	
	
		<div class="pr4">
			<img src="images/HMA.png" alt="New age" /> <br />
			<span id="menu-new">������ ��������� � ����������.</span>
		</div>
		
		<div class="pr5">
			<img src="images/HCO.png" alt="New age" />  <br />
			<span id="menu-new">������ ��������� � ����������.</span>
		</div>
		</div>	
	</div>
 
	<div class="page-buffer"></div>
</div>	 
<? require_once 'footer.php'; //����������� footer?>   
</body>
</html>

 