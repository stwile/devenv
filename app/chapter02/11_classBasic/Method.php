<?php

class Person {
    private string $name;
    private int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo 'こんにちは。私の名前は ' . $this->name . ' で、年齢は ' . $this->age . " 歳です。\n";
        echo AgeValidate::isAdult($this->age) ? "私は成人です。\n" : "私は未成年です。\n";
    }
}

class AgeValidate {
    public static function isAdult(int $age): bool {
        return $age >= 18;
    }
}

// クラスのインスタンスを作成
$person = new Person('太郎', 20);

// メソッドを呼び出す
$person->introduce();

// staticメソッドを呼び出す
$result = AgeValidate::isAdult(17);
