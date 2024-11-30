<?php
$array = [1, 2, 3, 4, 5];

// 最初の形式
foreach ($array as $value) {
    echo "値: $value\n";
}

// 2番目の形式
foreach ($array as $key => $value) {
    echo "キー: $key, 値: $value\n";
}
