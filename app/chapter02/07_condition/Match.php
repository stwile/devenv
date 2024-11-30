<?php
$grade = 1; // 整数の1

$message = match ($grade) {
    '1' => '成績が1です！',
    2 => '成績が2です！',
    default => '無効な成績です。',
};

echo $message; // 出力：無効な成績です。
