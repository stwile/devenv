<?php
// 文字列の場合
$str1 = 'A';
$str2 = 'B';

// & 演算子
$result_and = $str1 & $str2; // "ASCII 65 & ASCII 66 = 64, 64の文字は '@'
echo '文字列で & 演算子を使った結果: ' . $result_and . "\n"; // 出力：@

// | 演算子
$result_or = $str1 | $str2; // ASCII 65 | ASCII 66 = 67, 67の文字は 'C'
echo '文字列で | 演算子を使った結果: ' . $result_or . "\n"; // 出力：C

// ^ 演算子
$result_xor = $str1 ^ $str2; // "ASCII 65 ^ ASCII 66 = 3
echo '文字列で ^ 演算子を使った結果: ' . $result_xor . "\n"; // 出力：（ASCII 3なので不可視）

// ~ 演算子
$result_not = ~$str1; // "~ASCII 65(01000001) = 190(10111110)
echo '文字列で ~ 演算子を使った結果: ' . $result_not . "\n"; // 出力：（ASCII 190）
var_dump(decbin(ord($result_not)));

// 整数の場合
$int1 = 0b0101;  // 5 (二進数表現)
$int2 = 0b0011;  // 3 (二進数表現)

// & 演算子
$result_and_int = $int1 & $int2; // 1 (0101 & 0011 = 0001)
echo '整数で & 演算子を使った結果: ' . $result_and_int . "\n"; // 出力：1

// | 演算子
$result_or_int = $int1 | $int2; // 7 (0101 | 0011 = 0111)
echo '整数で | 演算子を使った結果: ' . $result_or_int . "\n"; // 出力：7

// ^ 演算子
$result_xor_int = $int1 ^ $int2; // 6 (0101 ^ 0011 = 0110)
echo '整数で ^ 演算子を使った結果: ' . $result_xor_int . "\n"; // 出力：6

// ~ 演算子
$result_not_int = ~$int1; // -6 (~0101 = 1111111111111111111111111111111111111111111111111111111111111010)
echo '整数で ~ 演算子を使った結果: ' . $result_not_int . "\n"; // 出力：-6
