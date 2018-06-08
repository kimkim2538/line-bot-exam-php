<?php


$access_token = 'Gz/nx7SzHos6HoyKACidnbYqBDr6VWixmHB7b2/W420S/ejt9kQ+wZNHju4TCoSzbsIFAR1VuIaJWi6COeKC80zNNwIWgIepFbFccZQEFiwQNNI13PJKL7WOAwqHgj0VLTKa5NYmthqZVlZEjmfxKQdB04t89/1O/w1cDnyilFU=';

$userId = 'U5ecb2b26e689cfe62f65a751698606ea';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

