<?php

class MyClass {
    public $publicProperty = 'これはpublicプロパティ';  // public アクセス権
    private $privateProperty = 'これはprivateプロパティ';  // private アクセス権
    protected $protectedProperty = 'これはprotectedプロパティ';  // protected アクセス権

    public function showProperties() {
        // 同じクラス内ではすべてのプロパティにアクセス可能
        echo $this->publicProperty . "\n";
        echo $this->privateProperty . "\n";
        echo $this->protectedProperty . "\n";
    }

    // Publicメソッド
    public function publicMethod() {
        echo "これはpublicメソッドです。\n";
    }

    // Privateメソッド
    private function privateMethod() {
        echo "これはprivateメソッドです。\n";
    }

    // Protectedメソッド
    protected function protectedMethod() {
        echo "これはprotectedメソッドです。\n";
    }

    // アクセス権を指定しないメソッド（デフォルトでpublic）
    function defaultPublicMethod() {
        echo "これはデフォルトでpublicメソッドです。\n";
    }

    // Public定数
    public const PUBLIC_CONST = 'これはpublic定数です';

    // Private定数
    private const PRIVATE_CONST = 'これはprivate定数です';

    // Protected定数
    protected const PROTECTED_CONST = 'これはprotected定数です';

    // アクセス権を指定しない定数（デフォルトでpublic）
    const DEFAULT_PUBLIC_CONST = 'これはデフォルトでpublic定数です';
}

class ChildClass extends MyClass {
    // Protectedメソッドを呼び出すメソッド
    public function callProtectedMethod() {
        $this->protectedMethod();
    }
}

$instance = new MyClass();
$instance->showProperties();
$instance->publicMethod();
$instance->defaultPublicMethod();

echo $instance->publicProperty . "\n";
echo MyClass::PUBLIC_CONST . "\n";
echo MyClass::DEFAULT_PUBLIC_CONST . "\n";

// Childクラスのインスタンスを作成し、protectedメソッドを呼び出す
$child = new ChildClass();
$child->callProtectedMethod();

// private と protected プロパティ、メソッド、定数にはアクセスできない
// echo $instance->privateProperty;
// echo $instance->protectedProperty;
// echo $instance->privateMethod();
// echo $instance->protectedMethod();
// echo MyClass::PRIVATE_CONST;
// echo MyClass::PROTECTED_CONST;
