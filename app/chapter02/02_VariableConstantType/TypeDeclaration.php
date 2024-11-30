<?php

function add(int $a, int $b): int{
    return $a + $b;
}

// OK
echo add(1, 5);

// NG: TypeErrorが発生する
echo add('aa', 10);
