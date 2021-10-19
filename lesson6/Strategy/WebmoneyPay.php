<?php

use IPayment;

class WebmoneyPay implements IPayment
{

    public function requestPay(float $sum, string $phone): void
    {
        // отправка запроса для WebMoney
    }

    public function responsePay(): string
    {
        return 'Пришел ответ... от WebMoney'
    }
}