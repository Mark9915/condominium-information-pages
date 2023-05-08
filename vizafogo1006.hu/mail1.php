<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
	 <title>Vízóra küldő</title>
	<meta name="Author" content="víz">
  </head>
 <body bgcolor=#e1e1e1>
		<?php 
		if (isset ($_POST['neved']) && isset($_POST['email']) && isset($_POST['haz']) && isset($_POST['emelet'])&& isset($_POST['ajto']) && isset($_POST['gyhideg']) && isset($_POST['hideg'])
		&& isset($_POST['mashideg']) && isset($_POST['allhideg'])
		&& isset($_POST['gymeleg']) && isset($_POST['meleg']) 
        && isset($_POST['masmeleg']) && isset($_POST['allmeleg']))
		{ 
		$kuldo_neve = $_POST['neved']; 
		$kuldo_email = $_POST['email']; 
		$kuldo_haz = $_POST['haz'];
		$kuldo_emelet = $_POST['emelet'];
		$kuldo_ajto = $_POST['ajto'];
		$kuldo_gyhideg = $_POST['gyhideg'];
		$kuldo_hideg = $_POST['hideg'];
		$kuldo_mashideg = $_POST['mashideg'];
		$kuldo_allhideg = $_POST['allhideg'];
		$kuldo_gymeleg = $_POST['gymeleg'];
		$kuldo_meleg = $_POST['meleg'];
		$kuldo_masmeleg = $_POST['masmeleg'];
		$kuldo_allmeleg = $_POST['allmeleg'];
		mail ('vizafogo1006@gmail.com', 'Vízóra állás leadás', "Név: $kuldo_neve\r\nEmail: $kuldo_email \r\nHázszám: $kuldo_haz Emelet: $kuldo_emelet Ajtó: $kuldo_ajto \r\nHideg vízóra 1 gyári szám: $kuldo_gyhideg \r\nHideg vízóra 1 állás: $kuldo_hideg \r\nHideg vízóra 2 gyári szám: $kuldo_mashideg \r\nHideg vízóra 2 állás: $kuldo_allhideg\r\nMeleg vízóra  1 gyári szám: $kuldo_gymeleg \r\nMeleg vízóra 1 állás: $kuldo_meleg  r\nMeleg vízóra 2 gyári szám: $kuldo_masmeleg \r\nMeleg vízóra 2 állás: $kuldo_allmeleg  \n" . date('Y/m/d H:i:s'), "FROM: $kuldo_email "); }
		else 
		{ 
		echo ('Nem toltotted ki az osszes mezot'); 
		} 
		?> 

		<?php 
		if (isset ($_POST['neved']) && isset($_POST['email']) && isset($_POST['haz']) && isset($_POST['emelet'])&& isset($_POST['ajto']) && isset($_POST['gyhideg']) && isset($_POST['hideg'])
		&& isset($_POST['mashideg']) && isset($_POST['allhideg'])
		&& isset($_POST['gymeleg']) && isset($_POST['meleg']) 
        && isset($_POST['masmeleg']) && isset($_POST['allmeleg']))
		{ 
		$kuldo_neve = $_POST['neved']; 
		$kuldo_email = $_POST['email']; 
		$kuldo_haz = $_POST['haz'];
		$kuldo_emelet = $_POST['emelet'];
		$kuldo_ajto = $_POST['ajto'];
		$kuldo_gyhideg = $_POST['gyhideg'];
		$kuldo_hideg = $_POST['hideg'];
		$kuldo_mashideg = $_POST['mashideg'];
		$kuldo_allhideg = $_POST['allhideg'];
		$kuldo_gymeleg = $_POST['gymeleg'];
		$kuldo_meleg = $_POST['meleg'];
		$kuldo_masmeleg = $_POST['masmeleg'];
		$kuldo_allmeleg = $_POST['allmeleg'];
		mail ($kuldo_email, 'Vízóra állás visszaigazolás', "Név: $kuldo_neve\r\nEmail: $kuldo_email \r\nHázszám: $kuldo_haz Emelet: $kuldo_emelet Ajtó: $kuldo_ajto \r\nHideg vízóra 1 gyári szám: $kuldo_gyhideg \r\nHideg vízóra 1 állás: $kuldo_hideg \r\nHideg vízóra 2 gyári szám: $kuldo_mashideg \r\nHideg vízóra 2 állás: $kuldo_allhideg\r\nMeleg vízóra  1 gyári szám: $kuldo_gymeleg \r\nMeleg vízóra 1 állás: $kuldo_meleg  r\nMeleg vízóra 2 gyári szám: $kuldo_masmeleg \r\nMeleg vízóra 2 állás: $kuldo_allmeleg  \n" . date('Y/m/d H:i:s'), "FROM: vizafogo1006@gmail.com "); }
		else 
		{ 
		echo ('Nem toltotted ki az osszes mezot'); 
		} 
		?>
     <br><br><br><br><br><br><br><br><br><br><br><br>
   <p style="font:italic 12 verdana;text-align:center">
     <a href="javascript:history.back()">Vízóra állását  elküldtük..... <BR><BR>visszaigazolást a megadott e-mail címre küldjük.....<br><br>Tovább</a></p>
 </body>
 
</html>
