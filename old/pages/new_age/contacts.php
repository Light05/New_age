<!DOCTYPE html>
<html>
<? require_once  '../../head.php'; headpage ();  //����������� head?>
<title><? $titles = title ($title); echo $titles[1]; ?></title>
</head>
	<body>
	
<div class="page-wrapper">	
<? require_once '../../top-menu.php'; //����������� �������� ����?>
<div class="content">

<div class="menupage">
 
	<h1>��������</h1>
 
<table class="contacts">
	<tr>
		<td class="contactsz">��������:</td>
		<td>+7 (499) 267-04-31, +7 (499) 753-06-21</td>
	</tr>
	<tr>
		<td></td>
		<td>+7 (499) 753-06-22, +7 (499) 267-51-59</td>
	</tr>
	<tr>
		<td class="contactsz">E-mail:</td>
		<td>info@n-age.ru</td>
	</tr>
	<tr>
		<td class="contactsz">�����:</td>
		<td>105005, �.������, ��. ����������, ��� 43/1, ���.1</td>
	</tr>
</table>
<br /><br />

<img src="<?=SERVNAME;?>images/cart.png" alt="" />
 
</div>



</div>


<div class="page-buffer"></div>
</div> 

<? require_once '../../footer.php'; //����������� footer?>
	</body>
</html>
