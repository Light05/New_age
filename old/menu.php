<? function menuWWW () { ?>
		<li><a href="pages/www/development.php">���������� ������</a></li>
		<li><a href="pages/www/web_style.php">Web style</a></li>
		<li class="end"><a href="pages/www/apps.php">����������</a></li>
<?	return;} ?>	

<? function menuArtPhoto () { ?>
		<li><a href="pages/art/photoshoot.php">����������</a></li>
		<li><a href="pages/art/gallery.php">�������</a></li>
		<li><a href="pages/art/vernissage.php">���� �������</a></li>
		<li class="end"><a href="pages/art/graphics.php">�������</a></li>
<?	return;} ?>			
<?
function menuNewAge () {
	$menuNewAge = array (
		array (
			"name" => "��",
			"nameen" => "We",
			"link" => "pages/new_age/index.php"
		),
		array (
			"name" => "���������",
			"nameen" => "Portfolio",
			"link" => "pages/new_age/portfolio.php"
		),
		array (
			"name" => "���� �������",
			"nameen" => "Our projects",
			"link" => "pages/new_age/our_projects.php"
		),
		array (
			"name" => "�������",
			"nameen" => "News",
			"link" => "pages/new_age/news.php"
		),
		array (
			"name" => "������",
			"nameen" => "Articles",
			"link" => "pages/new_age/articles.php"
		),
		array (
			"name" => "��������",
			"nameen" => "Contacts",
			"link" => "pages/new_age/contacts.php",
			"class" => "end"
		) 		
	);
	return $menuNewAge;
}
?> 