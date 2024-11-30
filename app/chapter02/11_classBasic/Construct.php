<?php

class Person {
    public function __construct(
        public string $name,
        public int $age
    ) {
        // コンストラクタの中身は空でもOK
    }
}

$person = new Person('太郎', 35);

echo 'こんにちは、私の名前は ' . $person->name . ' で、年齢は ' . $person->age . " 歳です。\n";

$person->name = '花子';

echo 'こんにちは、私の名前は ' . $person->name . ' で、年齢は ' . $person->age . " 歳です。\n";
