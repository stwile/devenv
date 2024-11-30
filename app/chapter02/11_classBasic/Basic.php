<?php

class SampleClass
{
    // プロパティの宣言
    public string $name;

    // コンストラクタ
    public function __construct(string $name) {
        $this->name = $name;
    }

    // メソッドの宣言
    public function displayName(): void {
        echo $this->name;
    }
}

// インスタンス化
$sample = new SampleClass('name');

// メソッド呼び出し
$sample->displayName();

// プロパティの参照
$sample->name = 'changed!';
