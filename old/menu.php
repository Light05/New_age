<? function menuWWW () { ?>
		<li><a href="pages/www/development.php">Разработка сайтов</a></li>
		<li><a href="pages/www/web_style.php">Web style</a></li>
		<li class="end"><a href="pages/www/apps.php">Приложения</a></li>
<?	return;} ?>	

<? function menuArtPhoto () { ?>
		<li><a href="pages/art/photoshoot.php">Фотосессии</a></li>
		<li><a href="pages/art/gallery.php">Галерея</a></li>
		<li><a href="pages/art/vernissage.php">Фото проекты</a></li>
		<li class="end"><a href="pages/art/graphics.php">Клипарт</a></li>
<?	return;} ?>			
<?
function menuNewAge () {
	$menuNewAge = array (
		array (
			"name" => "Мы",
			"nameen" => "We",
			"link" => "pages/new_age/index.php"
		),
		array (
			"name" => "Портфолио",
			"nameen" => "Portfolio",
			"link" => "pages/new_age/portfolio.php"
		),
		array (
			"name" => "Наши проекты",
			"nameen" => "Our projects",
			"link" => "pages/new_age/our_projects.php"
		),
		array (
			"name" => "Новости",
			"nameen" => "News",
			"link" => "pages/new_age/news.php"
		),
		array (
			"name" => "Статьи",
			"nameen" => "Articles",
			"link" => "pages/new_age/articles.php"
		),
		array (
			"name" => "Контакты",
			"nameen" => "Contacts",
			"link" => "pages/new_age/contacts.php",
			"class" => "end"
		) 		
	);
	return $menuNewAge;
}
?> 