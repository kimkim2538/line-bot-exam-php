<?php
$access_token = 'Gz/nx7SzHos6HoyKACidnbYqBDr6VWixmHB7b2/W420S/ejt9kQ+wZNHju4TCoSzbsIFAR1VuIaJWi6COeKC80zNNwIWgIepFbFccZQEFiwQNNI13PJKL7WOAwqHgj0VLTKa5NYmthqZVlZEjmfxKQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
