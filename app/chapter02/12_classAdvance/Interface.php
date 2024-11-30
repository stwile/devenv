<?php
// インターフェイスの定義
interface AnimalInterface {
    // メソッドの宣言（実装なし）
    public function sound();
    public function sleep();
}

// インターフェイスを実装するクラス
class Dog implements AnimalInterface {
    // インターフェイスで宣言されたメソッドを実装
    public function sound() {
        echo "ワンワン\n";
    }

    public function sleep() {
        echo "ぐーぐー\n";
    }
}

// インターフェイスを実装する別のクラス
class Cat implements AnimalInterface {
    // インターフェイスで宣言されたメソッドを実装
    public function sound() {
        echo "ニャーニャー\n";
    }

    public function sleep() {
        echo "むにゃむにゃ\n";
    }
}

// クラスのインスタンス化とメソッドの呼び出し
$dog = new Dog();
$cat = new Cat();

$dog->sound();  // 出力: ワンワン
$dog->sleep();  // 出力: ぐーぐー

$cat->sound();  // 出力: ニャーニャー
$cat->sleep();  // 出力: むにゃむにゃ
