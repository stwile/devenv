<?php
class SampleClass
{
    // プロパティの宣言
    private string $name;

    // コンストラクタ
    public function __construct(string $name) {
        $this->name = $name;
    }
}

// newによるインスタンス化
$sample = new SampleClass('sample1');

// 変数によるインスタンス化
$className = 'SampleClass';
$sample2 = new $className('sample2');
