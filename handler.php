<?php 
 
$user_name=htmlspecialchars($_POST["username"]);
$user_phone=htmlspecialchars($_POST['userphone']);

$token ="6776624760:AAHA0XIFxigkeNlmh_sPJjTCXmMK9X6oOxk";
$chat_id ="-4000224597";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone,
);

foreach($formData as $key => $value) {
  $text .= $key ."<b>" . urlencode($value) ."</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=HTML", "r");

if ($sendToTelegram) {
  echo "Success";
}else {
  echo "Error";
}


?>