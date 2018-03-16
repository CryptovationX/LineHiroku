<?php
$access_token = 'pToloaOV2TgYIOjrnWPWnsoBuVWrbIHsyGd0FygG902nwCXDrxE46Hx3c+tvNx1eiUpBDi1JNNH+sidjRAoTFbYPyCgmUCAQOTAYSdiEwCLHnMrMLEYOpNtv7F4lagtp8WJORXx0A8iYuEdmhTPEcwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;