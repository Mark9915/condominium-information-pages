<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
	 <title>Jó levélküldő</title>
	<meta name="Author" content="Óbuda23 Röhling Béla">
  </head>
 <body bgcolor=#bebebe>
		<?php 
		if (isset ($_POST['neved']) && isset($_POST['email']) && isset($_POST['szoveg'])) 
		{ 
		$kuldo_neve = $_POST['neved']; 
		$kuldo_email = $_POST['email']; 
		$kuldo_comment = $_POST['szoveg']; 
		mail ('obuda23@gmail.com', 'Üzenet a honlapról', "Név: $kuldo_neve \r\nEmail: $kuldo_email \r\nÜzenet: $kuldo_comment \r\n" . date('Y/m/d H:i:s'), "FROM: $kuldo_email "); } 
		else 
		{ 
		echo ('Nem toltotted ki az osszes mezot'); 
		} 
		?> 
		
		<?php 
		if (isset ($_POST['neved']) && isset($_POST['email']) && isset($_POST['szoveg'])) 
		{ 
		$kuldo_neve = $_POST['neved']; 
		$kuldo_email = $_POST['email']; 
		$kuldo_comment = $_POST['szoveg']; 
		mail ($kuldo_email, 'Üzenet Óbuda 23 Lakásszövetkezetnek', "Név: $kuldo_neve \r\nEmail: $kuldo_email \r\nÜzenet: $kuldo_comment \r\n" . date('Y/m/d H:i:s'), "FROM: obuda23@gmail.com  "); } 
		else 
		{ 
		echo ('Nem toltotted ki az osszes mezot'); 
		} 
		?>	
     <br><br><br><br><br><br><br><br> 
	 
   <p style="font:italic 12 verdana;text-align:center"><a href="javascript:history.back()">Üzenetét elküldtük, visszaigazolást a megadot e-mail címre küldünk.....</a></p>
 </body>
 </body>
</html>