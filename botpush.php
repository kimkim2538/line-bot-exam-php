<?php



require "vendor/autoload.php";

$access_token = 'Gz/nx7SzHos6HoyKACidnbYqBDr6VWixmHB7b2/W420S/ejt9kQ+wZNHju4TCoSzbsIFAR1VuIaJWi6COeKC80zNNwIWgIepFbFccZQEFiwQNNI13PJKL7WOAwqHgj0VLTKa5NYmthqZVlZEjmfxKQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '7290beaf23b93a4e99771139a620e2e9';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







