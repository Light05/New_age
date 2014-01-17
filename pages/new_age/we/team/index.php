<!DOCTYPE html>
<html>
<? require_once  '../../../../head.php'; headmain ();  //подключение head?>
<body>
	
<div class="page-wrapper">	
<? require_once $url.'top-menu.php'; //подключение верхнего меню?>
<div class="content2">

<div class="menupage">
	<h1>КОМАНДА</h1>
<div id="menu-new">
	<ul id="comand" class="menu-new">
		<li id="je"><img src="<?=SERVNAME;?>images/circle.png" alt="" /><br /><strong>Жукова Елена Константиновна</strong><br />Генеральный директор</li>
		<li id="jei"><img src="<?=SERVNAME;?>images/li.png" alt="" /><br /><strong>Даценко Елизавета</strong><br />Менеджер проектов</li>
		<li id="sm"><img src="<?=SERVNAME;?>images/sm.png" alt="" /><br /><strong>Свитнева Мария</strong><br />Дизайнер</li>
		<li id="bm"><img src="<?=SERVNAME;?>images/bm.png" alt="" /><br /><strong>Бабахина Мария</strong><br />Дизайнер</li>
		<li id="mi"><img src="<?=SERVNAME;?>images/im.png" alt="" /><br /><strong>Михайлов Иван</strong><br />Программист</li>
	</ul>
</div>
<div class="hrdiv"></div>

<div id="contsdiv">
	Мы разные, но мы вместе!<br />
	<img src="<?=SERVNAME;?>images/ang2.png" alt="" />
</div>

<div id="smdiv">
	<div class="conimg">
		<img src="<?=SERVNAME;?>images/sm2.png" alt="" />
	</div>
	
	<div class="context">
		<span class="fio">Свитнева Мария </span><br />Дизайнер <br /> <br /><span class="tez">Жизнь - не зебра из черных и белых полос, а шахматная доска. Здесь все зависит от твоего хода.</span><br /><br />
		<img src="<?=SERVNAME;?>images/angl1.png" alt="" />
	</div> 
</div>

<div id="bmdiv">
	<div class="conimg">
		<img src="<?=SERVNAME;?>images/bm1.png" alt="" />
	</div>
	
	<div class="context">
		<span class="fio">Бабахина Мария </span><br />Дизайнер <br /> <br /><span class="tez">80% людей считают, что самое сложное в работе, какой бы она ни была - это просто вставать по утрам.</span><br /><br />
			<img src="<?=SERVNAME;?>images/ang-ma.png" alt="" />
	</div> 
</div>

<div id="jediv">
	<div class="conimg">
		<img src="<?=SERVNAME;?>images/circle2.png" alt="" />
	</div>
	
	<div class="context">
		<span class="fio">Жукова Елена Константиновна</span><br />Генеральный директор <br /> 
	</div>  
</div>

<div id="jeidiv">
	<div class="conimg">
		<img src="<?=SERVNAME;?>images/li2.png" alt="" />
	</div>
	
	<div class="context">
		<span class="fio">Даценко Елизавета</span><br />Менеджер проектов <br /> <br /><span class="tez">Хотя, камера и не может сказать нам больше чем видят наши глаза, но она показывает как мало мы замечаем.</span><br /><br /><img src="<?=SERVNAME;?>images/ang-li.png" alt="" />
	</div>   
</div>

<div id="midiv">
	<div class="conimg">
		<img src="<?=SERVNAME;?>images/im2.png" alt="" />
	</div>
	
	<div class="context">
		<span class="fio">Михайлов Иван</span><br />Программист <br /> <br /><span class="tez">Ленивые всё делают быстро, чтобы поскорее отделаться от работы. И делают качественно. Чтобы потом не переделывать.</span><br /><br /><img src="<?=SERVNAME;?>images/ang-va.png" alt="" />
	</div>    
</div>

</div>
</div>

<div class="page-bufferco"></div>
</div> 

<? require_once $url.'footer.php'; //подключение footer?>
</body>
</html>
