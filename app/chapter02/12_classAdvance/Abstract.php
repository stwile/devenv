<?php
// 抽象クラスの定義
abstract class Animal {
    // 抽象メソッド（実装はなし）
    abstract public function sound();
    // 通常のメソッド
    public function sleep() {
        echo "眠っている...\n";
    }
}
// 抽象クラスを継承したクラス
class Dog extends Animal {
    // 抽象メソッドを実装
    public function sound() {
        echo "ワンワン\n";
    }
}
// 抽象クラスを継承した別のクラス
class Cat extends Animal {
    // 抽象メソッドを実装
    public function sound() {
        echo "ニャーニャー\n";
    }
}
// クラスのインスタンス化とメソッドの呼び出し
$dog = new Dog();
$cat = new Cat();
$dog->sound(); // 出力: ワンワン
$dog->sleep(); // 出力: 眠っている...
$cat->sound(); // 出力: ニャーニャー
$cat->sleep(); // 出力: 眠っている...