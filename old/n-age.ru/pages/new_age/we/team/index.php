<!DOCTYPE html>
<html>
<? require_once  '../../../../head.php'; headpagepages ();  //����������� head?>
<title><? $titles = title ($title); echo $titles[7]; ?></title>
<script type="text/javascript">
$(document).ready(function () { 
	var lavampObject = $('.menu-new').lavaLamp({ fx: "backout", speed: 700 });
});
</script>
<script>
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
</head>
	<body>
	
<div class="page-wrapper">	
<? require_once $url.'top-menu.php'; //����������� �������� ����?>
<div class="content2">

<div class="menupage">
	<h1>�������</h1>



<div id="menu-new">
	<ul id="comand" class="menu-new">
		<li id="je"><img src="<?=SERVNAME;?>images/circle.png" alt="" /><br /><strong>������ ����� ��������������</strong><br />����������� ��������</li>
		<li id="jei"><img src="<?=SERVNAME;?>images/li.png" alt="" /><br /><strong>������� ���������</strong><br />�������� ��������</li>
		<li id="sm"><img src="<?=SERVNAME;?>images/sm.png" alt="" /><br /><strong>�������� �����</strong><br />��������</li>
		<li id="bm"><img src="<?=SERVNAME;?>images/bm.png" alt="" /><br /><strong>�������� �����</strong><br />��������</li>
		<li id="mi"><img src="<?=SERVNAME;?>images/im.png" alt="" /><br /><strong>�������� ����</strong><br />�����������</li>
	</ul>
</div>
<div class="hrdiv"></div>

<div id="contsdiv">
	�� ������, �� �� ������!<br />
	<img src="<?=SERVNAME;?>images/ang2.png" alt="" />
</div>

<div id="smdiv">
	<div class="conimg">
		<img src="<?=SERVNAME;?>images/sm2.png" alt="" />
	</div>
	
	<div class="context">
		<span class="fio">�������� ����� </span><br />�������� <br /> <br /><span class="tez">����� - �� ����� �� ������ � ����� �����, � ��������� �����. ����� ��� ������� �� ������ ����.</span><br /><br />
		<img src="<?=SERVNAME;?>images/angl1.png" alt="" />
	</div> 
</div>

<div id="bmdiv">
	<div class="conimg">
		<img src="<?=SERVNAME;?>images/bm1.png" alt="" />
	</div>
	
	<div class="context">
		<span class="fio">�������� ����� </span><br />�������� <br /> <br /><span class="tez">80% ����� �������, ��� ����� ������� � ������, ����� �� ��� �� ���� - ��� ������ �������� �� �����.</span><br /><br />
			<img src="<?=SERVNAME;?>images/ang-ma.png" alt="" />
	</div> 
</div>

<div id="jediv">
	<div class="conimg">
		<img src="<?=SERVNAME;?>images/circle2.png" alt="" />
	</div>
	
	<div class="context">
		<span class="fio">������ ����� ��������������</span><br />����������� �������� <br /> 
	</div>  
</div>

<div id="jeidiv">
	<div class="conimg">
		<img src="<?=SERVNAME;?>images/li2.png" alt="" />
	</div>
	
	<div class="context">
		<span class="fio">������� ���������</span><br />�������� �������� <br /> <br /><span class="tez">����, ������ � �� ����� ������� ��� ������ ��� ����� ���� �����, �� ��� ���������� ��� ���� �� ��������.</span><br /><br /><img src="<?=SERVNAME;?>images/ang-li.png" alt="" />
	</div>   
</div>

<div id="midiv">
	<div class="conimg">
		<img src="<?=SERVNAME;?>images/im2.png" alt="" />
	</div>
	
	<div class="context">
		<span class="fio">�������� ����</span><br />����������� <br /> <br /><span class="tez">������� �� ������ ������, ����� �������� ���������� �� ������. � ������ �����������. ����� ����� �� ������������.</span><br /><br /><img src="<?=SERVNAME;?>images/ang-va.png" alt="" />
	</div>    
</div>

</div>





</div>


<div class="page-bufferco"></div>
</div> 

<? require_once $url.'footer.php'; //����������� footer?>
	</body>
</html>
