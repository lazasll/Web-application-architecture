<?php

use Pay;
use QiwiPay;
use YandexPay;
use WebmoneyPay;

$sum = 5000;
$phone = '88001112233';

$pay = new Pay();

$payQiwi = $pay->pay(new QiwiPay(), $sum, $phone);
echo $payQiwi;

$payYandex = $pay->pay(new YandexPay(), $sum, $phone);
echo $payYandex;

$payWebMoney = $pay->pay(new WebmoneyPay(), $sum, $phone);
echo $payWebMoney;