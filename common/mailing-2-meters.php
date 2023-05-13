<?php
header('Content-Type: text/html; charset=utf-8');

$message = 'Internal error: jelezzen az oldal adminisztrátorának a hibáról';

function post_captcha($user_response) {
    $fields_string = '';
    $fields = array(
        'secret' => '6LfTtPAlAAAAANAorUfVgyaBDGvk8S18QMydmXA6',
        'response' => $user_response
    );

    foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
    $fields_string = rtrim($fields_string, '&');

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

    $result = curl_exec($ch);
    curl_close($ch);

    return json_decode($result, true);
}

// Call the function post_captcha
$res = post_captcha($_POST['g-recaptcha-response']);

if (!$res['success']) {
    $message = 'Az email sikeres kiküldéséhez lépjen vissza és próbálja meg újra kitölteni a mezőket.';
} else {

    if (isset($_POST['neved']) && preg_match("/^([\w\s\.\-äÄáÁéÉíÍóÓöÖőŐúÚüÜűŰ]){1,40}$/", $_POST['neved']) &&
        isset($_POST['email']) && preg_match("/^([\w\s\.\-äÄáÁéÉíÍóÓöÖőŐúÚüÜűŰ0-90!#\$%&'\*\+\/=\?\^_`\{\|\}~@]){1,40}$/", $_POST['email']) &&
        isset($_POST['haz']) && preg_match("/^[\w\/]{1,4}$/", $_POST['haz']) &&
        isset($_POST['emelet']) && preg_match("/^[\w]{1,4}$/", $_POST['emelet']) &&
        isset($_POST['ajto']) && preg_match("/^[0-9]{1,3}$/", $_POST['ajto']) &&
        isset($_POST['gyhideg']) && preg_match("/^[\w]{1,20}$/", $_POST['gyhideg']) &&
        isset($_POST['hideg']) && preg_match("/^[0-9]{1,20}$/", $_POST['hideg']) &&
        isset($_POST['gymeleg']) && preg_match("/^[\w]{1,20}$/", $_POST['gymeleg']) &&
        isset($_POST['meleg']) && preg_match("/^[0-9]{1,20}$/", $_POST['meleg'])) {
        $kuldo_neve = $_POST['neved'];
        $kuldo_email = $_POST['email'];
        $kuldo_haz = $_POST['haz'];
        $kuldo_emelet = $_POST['emelet'];
        $kuldo_ajto = $_POST['ajto'];
        $kuldo_gyhideg = $_POST['gyhideg'];
        $kuldo_hideg = $_POST['hideg'];
        $kuldo_gymeleg = $_POST['gymeleg'];
        $kuldo_meleg = $_POST['meleg'];

        mail ($send_to_email, 'Vízóra állás leadás', "Név: $kuldo_neve\r\nEmail: $kuldo_email \r\nHázszám: $kuldo_haz Emelet: $kuldo_emelet Ajtó: $kuldo_ajto \r\nHideg vízóra gyári szám: $kuldo_gyhideg \r\nHideg vízóra állás: $kuldo_hideg \r\nMeleg vízóra gyári szám: $kuldo_gymeleg \r\nMeleg vízóra állás: $kuldo_meleg  \n" . date('Y/m/d H:i:s'), "FROM: $kuldo_email ");

        mail ($kuldo_email, 'Vízóra állás visszaigazolás', "Név: $kuldo_neve\r\nEmail: $kuldo_email \r\nHázszám: $kuldo_haz Emelet: $kuldo_emelet Ajtó: $kuldo_ajto \r\nHideg vízóra gyári szám: $kuldo_gyhideg \r\nHideg vízóra állás: $kuldo_hideg \r\nMeleg vízóra gyári szám: $kuldo_gymeleg \r\nMeleg vízóra állás: $kuldo_meleg  \n" . date('Y/m/d H:i:s'), "FROM: $send_to_email ");

        $message = 'Vízóra állás visszaigazolást a megadott e-mail címre megküldtük...';

    } else {
        $message = 'Nem megengedett karakterek szerepelnek egy vagy több mezőben.';
    }
}

echo '<br><br><br><br><br><br><br><br><br><br><br><br>
   <p style="font:italic 12 verdana;text-align:center">
   <a href="vizora.html">' . $message .'<br><br>Vissza</a></p>'
?>
