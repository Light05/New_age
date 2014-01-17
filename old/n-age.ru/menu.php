<? function menuWWW () { ?>
		<li></li>
		<li><a href="pages/www/development/">Разработка сайтов</a></li>
		<li><a href="pages/www/web_style/">Web style</a></li>
		<li class="end"><a href="pages/www/apps/">Приложения</a></li>
<?	return;} ?>	

<? function menuArtPhoto () { ?>
		<li></li>
		<li><a href="pages/art/photoshoot/">Фотосессии</a></li>
		<li><a href="pages/art/gallery/">Галерея</a></li>
		<li><a href="pages/art/vernissage/">Фото проекты</a></li>
		<li class="end"><a href="pages/art/graphics/">Клипарт</a></li>
<?	return;} ?>			
<?
function menuNewAge () {
	$menuNewAge = array (
		array (
			"name" => "",
			"nameen" => "",
			"link" => ""
		),
		array (
			"name" => "Мы",
			"nameen" => "We",
			"link" => "pages/new_age/we/"
		),
		array (
			"name" => "Портфолио",
			"nameen" => "Portfolio",
			"link" => "pages/new_age/portfolio/"
		),
		array (
			"name" => "Наши проекты",
			"nameen" => "Our projects",
			"link" => "pages/new_age/our_projects/"
		),
		array (
			"name" => "Новости",
			"nameen" => "News",
			"link" => "pages/new_age/news/"
		),
		array (
			"name" => "Статьи",
			"nameen" => "Articles",
			"link" => "pages/new_age/articles/"
		),
		array (
			"name" => "Контакты",
			"nameen" => "Contacts",
			"link" => "pages/new_age/contacts/",
			"class" => "end"
		) 		
	);
	return $menuNewAge;
}
?> 