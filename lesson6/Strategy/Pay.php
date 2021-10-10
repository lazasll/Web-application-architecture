<?php

use IPayment;

class Pay
{
    public function pay(IPayment $payment, float $sum, string $phone): string
    {
        $payment->requestPay($sum, $phone);
        return $payment->responsePay();
    }
}