<?php

// 無名関数を変数に代入する
$sayHello = function() {
    echo "こんにちは\n";
};
$sayHello(); // こんにちはと表示

// 親のスコープから変数を引き継ぐ
$greeting = 'こんにちは';
$greet = function() use ($greeting) {
    echo $greeting . "\n"; // こんにちはと表示
};
$greet();

// クラス内で無名関数を使う
class MyClass {
    public $message = 'クラスのメッセージ';

    public function createClosure() {
        // 無名関数を使う
        $closure = function() {
            echo $this->message . "\n"; // クラスのメッセージと表示
        };
        return $closure;
    }

    public function createStaticClosure() {
        // static 無名関数
        $staticClosure = static function() {
            // $this はバインドされない
            echo "静的無名関数\n";
        };
        return $staticClosure;
    }
}

// クラスのインスタンスを作成し、無名関数を呼び出す
$obj = new MyClass();
$closure = $obj->createClosure();
$closure(); // クラスのメッセージと表示

$staticClosure = $obj->createStaticClosure();
$staticClosure(); // 静的無名関数と表示
