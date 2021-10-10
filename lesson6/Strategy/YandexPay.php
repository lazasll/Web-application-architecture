<?php

use IPayment;

class YandexPay implements IPayment
{

    public function requestPay(float $sum, string $phone): void
    {
        // логика отправки запроса для Yandex
    }

    public function responsePay(): string
    {
        return 'Пришел ответ... от Yandex'
    }
}