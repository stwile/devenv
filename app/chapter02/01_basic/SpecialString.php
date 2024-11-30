<?php

$name = "太郎";

echo "私の名前は$name\n";

echo "あなたの名前は{$name}ですね\n";

class SomeClass{
    public string $name;
}

$some = new SomeClass;

$some->name = "花子";

echo "私の名前は$some->name\n";

echo "あなたの名前は{$some->name}ですね\n";
