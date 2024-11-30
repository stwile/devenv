<?php

class ExampleClass {
    // Privateメンバー
    private $privateValue = 'これはprivateメンバーです';

    // Protectedメンバー
    protected $protectedValue = 'これはprotectedメンバーです';

    // 同じクラス内でprivateおよびprotectedメンバーに直接アクセス
    public function showValues(ExampleClass $obj) {
        echo 'Private: ' . $obj->privateValue . "\n"; // 直接アクセス
        echo 'Protected: ' . $obj->protectedValue . "\n"; // 直接アクセス
    }
}

$example = new ExampleClass();
$obj = new ExampleClass();
$example->showValues($obj);
