<?php
// オートローダー関数の定義
function myAutoloader($class) {
    include 'classes/' . $class . '.php';
}

// オートローダーの登録
spl_autoload_register('myAutoloader');

// クラスのインスタンス化（クラスファイルが自動で読み込まれる）
$myClass = new MyClass();
$someClass = new SomeClass();