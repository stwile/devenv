<?php

class Example {
    // プロパティの宣言
    public int $value = 10; // 型付きプロパティ、初期値として定数を指定
    private static string $name = 'example'; // static プロパティ

    // メソッドでプロパティにアクセス
    public function showValues() {
        echo '値: ' . $this->value . "\n"; // オブジェクトプロパティへのアクセス
        echo '静的な名前: ' . self::$name . "\n"; // static プロパティへのアクセス
    }
}

$example = new Example();
$example->value = 100; // publicプロパティへのアクセス
