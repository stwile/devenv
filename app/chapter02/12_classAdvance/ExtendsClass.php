<?php
// 親クラス（基本クラス）
class Animal {
    // 公開メソッド
    public function sound() {
        echo "動物の声\n";
    }

    // 保護されたメソッド
    protected function sleep() {
        echo "ぐーぐー\n";
    }
}

// サブクラス（継承したクラス）
class Dog extends Animal {
    // メソッドをオーバーライド
    public function sound() {
        echo "ワンワン\n";
    }

    // 親クラスの保護されたメソッドを呼び出す
    public function callSleep() {
        $this->sleep();
    }
}

// クラスのインスタンス化
$dog = new Dog();
$dog->sound();  // 出力: ワンワン
$dog->callSleep();  // 出力: ぐーぐー
