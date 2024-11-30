<?php

function add(int $a, int $b): int {
    return $a + $b;
}
$result = add(1, 3);
echo 'result: ' . $result . "\n";

// returnしない関数
function notReturn(){
    // returnしない
}

$not = notReturn();
var_dump($not); // 出力: NULL

// 配列を返す関数
function getArray(): array {
    return [1, 2, 3, 4, 5];
}

// 配列を展開して受け取る
[$a, $b, $c, $d, $e] = getArray();
echo "展開された配列の値: $a, $b, $c, $d, $e\n";
