<? function menuWWW () { ?>
		<li></li>
		<li><a href="pages/www/development/">���������� ������</a></li>
		<li><a href="pages/www/web_style/">Web style</a></li>
		<li class="end"><a href="pages/www/apps/">����������</a></li>
<?	return;} ?>	

<? function menuArtPhoto () { ?>
		<li></li>
		<li><a href="pages/art/photoshoot/">����������</a></li>
		<li><a href="pages/art/gallery/">�������</a></li>
		<li><a href="pages/art/vernissage/">���� �������</a></li>
		<li class="end"><a href="pages/art/graphics/">�������</a></li>
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
			"name" => "��",
			"nameen" => "We",
			"link" => "pages/new_age/we/"
		),
		array (
			"name" => "���������",
			"nameen" => "Portfolio",
			"link" => "pages/new_age/portfolio/"
		),
		array (
			"name" => "���� �������",
			"nameen" => "Our projects",
			"link" => "pages/new_age/our_projects/"
		),
		array (
			"name" => "�������",
			"nameen" => "News",
			"link" => "pages/new_age/news/"
		),
		array (
			"name" => "������",
			"nameen" => "Articles",
			"link" => "pages/new_age/articles/"
		),
		array (
			"name" => "��������",
			"nameen" => "Contacts",
			"link" => "pages/new_age/contacts/",
			"class" => "end"
		) 		
	);
	return $menuNewAge;
}
?> 