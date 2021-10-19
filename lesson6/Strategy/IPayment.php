<?php

interface IPayment
{
    public function requestPay(float $sum, string $phone): void;
    public function responsePay(): string;
}