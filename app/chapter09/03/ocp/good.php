<?php

// PaymentInterface: 支払い方法の共通インターフェース
interface PaymentInterface
{
    public function pay(int $amount): void;
}

// CreditCardPaymentクラス: PaymentInterfaceを実装
class CreditCardPayment implements PaymentInterface
{
    public function pay(int $amount): void
    {
        echo "Paid $amount using Credit Card\n";
    }
}

// PayPalPaymentクラス: PaymentInterfaceを実装
class PayPalPayment implements PaymentInterface
{
    public function pay(int $amount): void
    {
        echo "Paid $amount using PayPal\n";
    }
}

// PaymentProcessorクラス: 支払い処理
class PaymentProcessor
{
    public function processPayment(PaymentInterface $payment, int $amount): void
    {
        // 各支払い方法のクラスが自身のpayメソッドを実装しているため、条件分岐が不要
        $payment->pay($amount);

        // その他の処理
    }
}

// 使用例
$creditCard = new CreditCardPayment();
$paypal = new PayPalPayment();

$processor = new PaymentProcessor();
$processor->processPayment($creditCard, 100);
$processor->processPayment($paypal, 150);
