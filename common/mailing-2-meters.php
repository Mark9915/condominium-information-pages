<?php
header('Content-Type: text/html; charset=iso-8859-2');

$message = 'Internal error: jelezzen az oldal adminisztrátorának a hibáról';
$is_success = false;

function post_captcha($user_response) {
    $fields_string = '';
    $fields = array(
        'secret' => '6Ldy8BAmAAAAAJp3NHJ9NLn5WhEiS9a8z5HBSXJs',
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

    if (isset($_POST['neved']) && preg_match("/^.{1,40}$/", $_POST['neved']) &&
        isset($_POST['email']) && preg_match("/^.{1,40}$/", $_POST['email']) &&
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

        mail ($send_to_email, 'Vízóra állás leadás', "N\xE9v: $kuldo_neve\r\nEmail: $kuldo_email \r\nH\xE1zsz\xE1m: $kuldo_haz Emelet: $kuldo_emelet Ajt\xF3: $kuldo_ajto \r\nHideg v\xEDz\xF3ra gy\xE1ri sz\xE1m: $kuldo_gyhideg \r\nHideg v\xEDz\xF3ra \xE1ll\xE1s: $kuldo_hideg \r\nMeleg v\xEDz\xF3ra gy\xE1ri sz\xE1m: $kuldo_gymeleg \r\nMeleg v\xEDz\xF3ra \xE1ll\xE1s: $kuldo_meleg  \n" . date('Y/m/d H:i:s'), "FROM: $kuldo_email ");

        mail ($kuldo_email, 'Vízóra állás visszaigazolás', "N\xE9v: $kuldo_neve\r\nEmail: $kuldo_email \r\nH\xE1zsz\xE1m: $kuldo_haz Emelet: $kuldo_emelet Ajt\xF3: $kuldo_ajto \r\nHideg v\xEDz\xF3ra gy\xE1ri sz\xE1m: $kuldo_gyhideg \r\nHideg v\xEDz\xF3ra \xE1ll\xE1s: $kuldo_hideg \r\nMeleg v\xEDz\xF3ra gy\xE1ri sz\xE1m: $kuldo_gymeleg \r\nMeleg v\xEDz\xF3ra \xE1ll\xE1s: $kuldo_meleg  \n" . date('Y/m/d H:i:s'), "FROM: $send_to_email ");

        echo "N\xE9v: $kuldo_neve\r\nEmail: $kuldo_email \r\nH\xE1zsz\xE1m: $kuldo_haz Emelet: $kuldo_emelet Ajt\xF3: $kuldo_ajto \r\nHideg v\xEDz\xF3ra gy\xE1ri sz\xE1m: $kuldo_gyhideg \r\nHideg v\xEDz\xF3ra \xE1ll\xE1s: $kuldo_hideg \r\nMeleg v\xEDz\xF3ra gy\xE1ri sz\xE1m: $kuldo_gymeleg \r\nMeleg v\xEDz\xF3ra \xE1ll\xE1s: $kuldo_meleg  \n" . date('Y/m/d H:i:s');

        $message = 'Vízóra állás visszaigazolást a megadott e-mail címre megküldtük...';
		$is_success = true;

    } else {
        $message = 'Nem megengedett karakterek szerepelnek egy vagy több mezőben.';
    }
}

if ($is_success == true) {

    echo '<br><br><br><br><br><br><br><br><br><br><br><br>
   <p style="font:italic 12 verdana;text-align:center">
   <a href="vizora.html">' . $message .'<br><br>Vissza</a></p>';

} else {

    echo '<br><br><br><br><br><br><br><br><br><br><br><br>
   <p style="font:italic 12 verdana;text-align:center">
   <a href="vizora.html" style="color: red; font-weight:bold; font-size: 20px;">' . $message .'<br><br>Vissza</a></p>';
}
?>
