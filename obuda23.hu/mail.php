<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
	 <title>J� lev�lk�ld�</title>
	<meta name="Author" content="�buda23 R�hling B�la">
  </head>
 <body bgcolor=#bebebe>
		<?php 
		if (isset ($_POST['neved']) && isset($_POST['email']) && isset($_POST['szoveg'])) 
		{ 
		$kuldo_neve = $_POST['neved']; 
		$kuldo_email = $_POST['email']; 
		$kuldo_comment = $_POST['szoveg']; 
		mail ('obuda23@gmail.com', '�zenet a honlapr�l', "N�v: $kuldo_neve \r\nEmail: $kuldo_email \r\n�zenet: $kuldo_comment \r\n" . date('Y/m/d H:i:s'), "FROM: $kuldo_email "); } 
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
		mail ($kuldo_email, '�zenet �buda 23 Lak�ssz�vetkezetnek', "N�v: $kuldo_neve \r\nEmail: $kuldo_email \r\n�zenet: $kuldo_comment \r\n" . date('Y/m/d H:i:s'), "FROM: obuda23@gmail.com  "); } 
		else 
		{ 
		echo ('Nem toltotted ki az osszes mezot'); 
		} 
		?>	
     <br><br><br><br><br><br><br><br> 
	 
   <p style="font:italic 12 verdana;text-align:center"><a href="javascript:history.back()">�zenet�t elk�ldt�k, visszaigazol�st a megadot e-mail c�mre k�ld�nk.....</a></p>
 </body>
 </body>
</html>