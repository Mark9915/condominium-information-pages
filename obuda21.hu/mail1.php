<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
	 <title>Vízóra küldő</title>
	<meta name="Author" content="Óbuda21 Röhling Béla">
  </head>
 <body bgcolor=#eaeaea>
		<?php 
		if (isset ($_POST['neved']) && isset($_POST['email']) && isset($_POST['haz']) && isset($_POST['emelet'])&& isset($_POST['ajto']) && isset($_POST['gyhideg']) && isset($_POST['hideg']) && isset($_POST['gymeleg']) && isset($_POST['meleg'])) 
		{ 
		$kuldo_neve = $_POST['neved']; 
		$kuldo_email = $_POST['email']; 
		$kuldo_haz = $_POST['haz'];
		$kuldo_emelet = $_POST['emelet'];
		$kuldo_ajto = $_POST['ajto'];
		$kuldo_gyhideg = $_POST['gyhideg'];
		$kuldo_hideg = $_POST['hideg'];
		$kuldo_gymeleg = $_POST['gymeleg'];
		$kuldo_meleg = $_POST['meleg'];
		mail ('viz21obuda@gmail.com', 'Vízóra állás leadás', "Név: $kuldo_neve\r\nEmail: $kuldo_email \r\nHázszám: $kuldo_haz Emelet: $kuldo_emelet Ajtó: $kuldo_ajto \r\nHideg vízóra gyári szám: $kuldo_gyhideg \r\nHideg vízóra állás: $kuldo_hideg \r\nMeleg vízóra gyári szám: $kuldo_gymeleg \r\nMeleg vízóra állás: $kuldo_meleg  \n" . date('Y/m/d H:i:s'), "FROM: $kuldo_email "); } 
		else 
		{ 
		echo ('Nem toltotted ki az osszes mezot'); 
		} 
		?> 

		<?php
		if (isset ($_POST['neved']) && isset($_POST['email']) && isset($_POST['haz']) && isset($_POST['emelet'])&& isset($_POST['ajto']) && isset($_POST['gyhideg']) && isset($_POST['hideg']) && isset($_POST['gymeleg']) && isset($_POST['meleg']))
		{
		$kuldo_neve = $_POST['neved'];
		$kuldo_email = $_POST['email'];
		$kuldo_haz = $_POST['haz'];
		$kuldo_emelet = $_POST['emelet'];
		$kuldo_ajto = $_POST['ajto'];
		$kuldo_gyhideg = $_POST['gyhideg'];
		$kuldo_hideg = $_POST['hideg'];
		$kuldo_gymeleg = $_POST['gymeleg'];
		$kuldo_meleg = $_POST['meleg'];
		mail ($kuldo_email, 'Vízóra állás visszaigazolás', "Név: $kuldo_neve\r\nEmail: $kuldo_email \r\nHázszám: $kuldo_haz Emelet: $kuldo_emelet Ajtó: $kuldo_ajto \r\nHideg vízóra gyári szám: $kuldo_gyhideg \r\nHideg vízóra állás: $kuldo_hideg \r\nMeleg vízóra gyári szám: $kuldo_gymeleg \r\nMeleg vízóra állás: $kuldo_meleg  \n" . date('Y/m/d H:i:s'), "FROM: viz21obuda@gmail.com "); }
		else
		{
		echo ('Nem toltotted ki az osszes mezot');
		}
		?>
		
     <br><br><br><br><br><br><br><br><br><br><br><br>
   <p style="font:italic 12 verdana;text-align:center"><a href="javascript:history.back()"color=#FFFF66>Vízóra állás visszaigazolását a megadott e-mail címre elküldtük.....<br><br> Tovább</a></p>
 </body>
  
</html>