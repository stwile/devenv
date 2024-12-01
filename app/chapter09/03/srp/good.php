<?php

// 商品クラスの例
class Item
{
    public function __construct(private int $price) { }

    public function getPrice(): int
    {
        return $this->price;
    }
}

// 商品コレクションクラス
class ItemCollection
{
    /** @var Item[] $items */
    private array $items = [];

    public function addItem(Item $item): void
    {
        $this->items[] = $item;
    }

    public function removeItem(Item $item): void
    {
        $this->items = array_filter($this->items, fn(Item $i) => $i !== $item);
    }

    public function getItems(): array
    {
        return $this->items;
    }
}

// 価格計算クラス
class PriceCalculator
{
    public function calculateTotal(ItemCollection $itemCollection): int
    {
        return array_reduce(
            $itemCollection->getItems(),
            fn(int $total, Item $item) => $total + $item->getPrice(),
            0
        );
    }
}

// ショッピングカートクラス
class ShoppingCart
{
    private ItemCollection $items;
    private PriceCalculator $calculator;

    public function __construct()
    {
        $this->items = new ItemCollection();
        $this->calculator = new PriceCalculator();
    }

    public function addItem(Item $item): void
    {
        $this->items->addItem($item);
    }

    public function removeItem(Item $item): void
    {
        $this->items->removeItem($item);
    }

    public function getTotal(): int
    {
        return $this->calculator->calculateTotal($this->items);
    }
}

// 支払い処理クラス
class PaymentProcessor
{
    public function processPayment(int $total, string $paymentDetails): void
    {
        echo "合計：{$total}円、{$paymentDetails} を使用して処理します。\n";
        // 実際の支払い処理ロジック...
    }
}

// 使用例
$item1 = new Item(100);
$item2 = new Item(50);

$cart = new ShoppingCart();

$cart->addItem($item1);
$cart->addItem($item2);

$total = $cart->getTotal();

$paymentProcessor = new PaymentProcessor();
$paymentProcessor->processPayment($total, '現金');
