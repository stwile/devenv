<?php

// インターフェース: 図形
interface Shape
{
    // 振る舞い: 面積を返す
    public function getArea(): int;
}

// 長方形クラス
class Rectangle implements Shape
{
    public function __construct(private int $width, private int $height)
    {
        if ($width <= 0 || $height <= 0) {
            throw new InvalidArgumentException('幅と高さは正の整数である必要があります。');
        }
    }

    public function setWidth(int $width): void
    {
        if ($width <= 0) {
            throw new InvalidArgumentException('幅は正の整数である必要があります。');
        }
        $this->width = $width;
    }

    public function setHeight(int $height): void
    {
        if ($height <= 0) {
            throw new InvalidArgumentException('高さは正の整数である必要があります。');
        }
        $this->height = $height;
    }

    public function getArea(): int
    {
        return $this->width * $this->height;
    }
}

// 正方形クラス
class Square implements Shape
{
    public function __construct(private int $side)
    {
        if ($side <= 0) {
            throw new InvalidArgumentException('辺の長さは正の整数である必要があります。');
        }
    }

    public function setSide(int $side): void
    {
        if ($side <= 0) {
            throw new InvalidArgumentException('辺の長さは正の整数である必要があります。');
        }
        $this->side = $side;
    }

    public function getArea(): int
    {
        return $this->side * $this->side;
    }
}

// Shapeインスタンスを受け取り、面積を出力
function printArea(Shape $shape): void
{
    echo '面積: ' . $shape->getArea() . PHP_EOL;
}

// 使用例
$rectangle = new Rectangle(4, 5);
$rectangle->setWidth(5);
$rectangle->setHeight(10);

$square = new Square(4);
$square->setSide(5);

printArea($rectangle);
printArea($square);
