<?php 
  phpinfo();
  echo "PHP";
    $to      = 'loranth.imre@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: test@obuda21.hu'       . "\r\n" .
                 'Reply-To: webmaster@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    echo $headers;
    mail($to, $subject, $message, $headers);
    echo"done";
?>