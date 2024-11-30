<?php

for ($i = 0; $i < 5; $i++) {
    echo "iの値は: $i\n";
}
// 上下どちらのforも同じ内容
for ($i = 0;; $i++) {
    if ($i >= 5) {
        break;
    }
    echo "iの値は: $i\n";
}
