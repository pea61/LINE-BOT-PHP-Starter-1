[code] <?php
//require(“vendor/autoload.php”);
use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot;

require(“phpMQTT.php”);

# username of anto.io account
user = "ZEEZA"
# key of permission, generated on control panel anto.io
key = "TLmlVU2Dk1oQIyt0ffFFwJcub5Yhr5ZCX0QgSQ2p"
# your default thing.
thing = "myyChannel1"

anto = antolib.Anto(user, key, thing)

$token = “IrN10smd9lGZGp0JtOOoBJpAvSvDPFVNnDbTdxVbnU2Xv9YNaABrfKI2LxXxRH59XxerqJx3otWj0OqohFtMLiwSJy6fEEYarDN9KVKol7CqHo1GzqPST1DJI4hvg04yIDQiNwa2M1UD8K4SRn4XawdB04t89/1O/w1cDnyilFU=”; //นำ token ที่มาจาก line developer account ของเรามาใส่ครับ


$httpClient = new CurlHTTPClient($token);
$bot = new LINEBot($httpClient, [‘fb78ff3825406ec91a010e7a55e0af6c’ => $token]);
// webhook
$jsonStr = file_get_contents(‘php://input’);
$jsonObj = json_decode($jsonStr);
print_r($jsonStr);
foreach ($jsonObj->events as $event) {
if(‘message’ == $event->type){
// debug
//file_put_contents(“message.json”, json_encode($event));
$text = $event->message->text;

if(message == 'channel1 on'):
        anto.pub('myChannel1', 1)
        line_bot_api.reply_message(
            event.reply_token,
            TextSendMessage(text="Turn On channel1"))
    elif(message == 'channel1 off'):
        anto.pub('myChannel1', 0)
        line_bot_api.reply_message(
            event.reply_token,
            TextSendMessage(text="Turn Off channel1"))
   
            
}

?>
[/code]
