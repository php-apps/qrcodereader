<?php

require_once './MGQrCodeReader.php';

$path = __DIR__ . DIRECTORY_SEPARATOR;

$MGQrCodeReader = new \MGQrCodeReader\MGQrCodeReader($path);

#$file = __DIR__ . DIRECTORY_SEPARATOR . 'test.jpg';
#echo $MGQrCodeReader->read($file);

$url = 'https://pri.cia.niubit.com/FnaAho1L9VfXgBb4-MCG7vlwzuG9?e=1541425627&token=gN_4dxEB1GKQQqBAWyKb0v6bdZopdTIXjWQTxSxR:iUgOyZBDK14pAedH9sMEAcIPvhs=';
echo $MGQrCodeReader->read($url);
