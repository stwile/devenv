<?php

// PaymentProcessorクラス: 支払い処理
class PaymentProcessor
{
    public function processPayment(string $payment, int $amount): void
    {
        // 支払い方法ごとに条件分岐して、各支払い処理をここで行う
        if ($payment === 'credit_card') {
            // クレジットカードでの支払い処理
            echo "Paid $amount using Credit Card\n";
        } elseif ($payment === 'paypal') {
            // PayPalでの支払い処理
            echo "Paid $amount using PayPal\n";
        }
        // 新しい支払い方法が追加されるたびに、ここに条件が増える
    }
}

// 使用例
$processor = new PaymentProcessor();
$processor->processPayment('credit_card', 100);
$processor->processPayment('paypal', 150);
