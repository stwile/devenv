<?php
$grade = 1;

switch ($grade) {
    case '1':
        echo '成績が1です！';
        continue; // Warning: "continue" targeting switch is equivalent to "break"
    case 2:
        echo '成績が2です！';
        break;
    default:
        echo '無効な成績です。';
}
