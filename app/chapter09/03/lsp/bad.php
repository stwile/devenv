<?php

// 親クラス: 長方形
class Rectangle
{
    public function __construct(protected int $width, protected int $height)
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

// サブクラス: 正方形
class Square extends Rectangle
{
    public function setWidth(int $width): void
    {
        parent::setWidth($width);
        $this->height = $width; // 事後条件の違反: 高さも変更している
    }

    public function setHeight(int $height): void
    {
        parent::setHeight($height);
        $this->width = $height; // 事後条件の違反: 幅も変更している
    }
}

// Rectangleクラスのインスタンスを受け取り、幅と高さを固定値で変更して面積を出力
function printArea(Rectangle $rectangle): void
{
    $rectangle->setWidth(5);
    $rectangle->setHeight(10);
    echo '面積: ' . $rectangle->getArea() . PHP_EOL;
}

// 使用例
$rectangle = new Rectangle(4, 5);
$square = new Square(4, 4);

printArea($rectangle);
printArea($square);
