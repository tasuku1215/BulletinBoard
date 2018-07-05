<?php

?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>php</title>
  <meta name="description" content="ページの内容を記述">
  <meta name="keywords" content="キーワード,カンマで区切り,指定">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/jquery.js" charset="utf-8"></script>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <script src="sample.js"></script>
  </head>
  <body>
    
  </body>
</html>
<?php 
// $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('Qkruef4kkzjF0IkCF9oSUH0ATCMfVY2+S1Urb/e1iUPJ5KWk5aTRUPBCDEw5c8WmKfiSAptwtP958dvC0p+0Ir6V6gcz7iq9klXZ05EcFu/7C+kf5GN66F+4qFJrZeuozgjlBY+JQU8IB+rDQtT3yQdB04t89/1O/w1cDnyilFU=');
// $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'edc63b90fc31e6c00fd5979e9ab12d64']);

// $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
// $response = $bot->pushMessage('<to>', $textMessageBuilder);

// echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
namespace LINE\LINEBot\EchoBot;
use LINE\LINEBot\Constant\HTTPHeader;
use LINE\LINEBot\Event\MessageEvent;
use LINE\LINEBot\Event\MessageEvent\TextMessage;
use LINE\LINEBot\Exception\InvalidEventRequestException;
use LINE\LINEBot\Exception\InvalidSignatureException;

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('Qkruef4kkzjF0IkCF9oSUH0ATCMfVY2+S1Urb/e1iUPJ5KWk5aTRUPBCDEw5c8WmKfiSAptwtP958dvC0p+0Ir6V6gcz7iq9klXZ05EcFu/7C+kf5GN66F+4qFJrZeuozgjlBY+JQU8IB+rDQtT3yQdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<edc63b90fc31e6c00fd5979e9ab12d64>']);
?>