<?php

// 本誌とは構成が異なるため、書き方を変更しています
require_once __DIR__ . '/app/Bar.php';
require_once __DIR__ . '/app/Foo.php';

use App\Bar;
use App\Foo;

// FooはBarに依存している
$bar = new Bar();
$foo = new Foo($bar);

echo $foo->useBar() . PHP_EOL; // 出力: Bar is doing something.