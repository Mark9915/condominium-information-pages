<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
	 <title>V�z�ra k�ld�</title>
	<meta name="Author" content="�buda23 R�hling B�la">
  </head>
 <body bgcolor=#dddddd>
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
		mail ('viz23obuda@gmail.com', 'V�z�ra �ll�s lead�s', "N�v: $kuldo_neve\r\nEmail: $kuldo_email \r\nH�zsz�m: $kuldo_haz Emelet: $kuldo_emelet Ajt�: $kuldo_ajto \r\nHideg v�z�ra gy�ri sz�m: $kuldo_gyhideg \r\nHideg v�z�ra �ll�s: $kuldo_hideg \r\nMeleg v�z�ra gy�ri sz�m: $kuldo_gymeleg \r\nMeleg v�z�ra �ll�s: $kuldo_meleg  \n" . date('Y/m/d H:i:s'), "FROM: $kuldo_email "); } 
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
		mail ($kuldo_email, 'V�z�ra �ll�s visszaigazol�s', "N�v: $kuldo_neve\r\nEmail: $kuldo_email \r\nH�zsz�m: $kuldo_haz Emelet: $kuldo_emelet Ajt�: $kuldo_ajto \r\nHideg v�z�ra gy�ri sz�m: $kuldo_gyhideg \r\nHideg v�z�ra �ll�s: $kuldo_hideg \r\nMeleg v�z�ra gy�ri sz�m: $kuldo_gymeleg \r\nMeleg v�z�ra �ll�s: $kuldo_meleg  \n" . date('Y/m/d H:i:s'), "FROM: viz23obuda@gmail.com "); }
		else
		{
		echo ('Nem toltotted ki az osszes mezot');
		}
		?>

     <br><br><br><br><br><br><br><br><br><br><br><br>
   <p style="font:italic 12 verdana;text-align:center">
     <a href="javascript:history.back()">V�z�ra �ll�s visszaigazol�st a megadott e-mail c�mre megk�ldt�k.....<br><br>Tov�bb</a></p>
 </body>
 
</html>