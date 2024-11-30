<?php

namespace Utilities;

require_once __DIR__ . "/Utilities.php";
require_once __DIR__ . "/StringHelper.php";

// 要素名だけで使用する
$logger = new Logger();
echo DEFAULT_VALUE . "\n";

// 名前空間の一部を含めて使用する
$strDate = Functions\formatDate();
echo $strDate . "\n";

// 完全修飾名を指定して使用する
$logger2 = new \Utilities\Logger();
echo \Utilities\DEFAULT_VALUE . "\n";
\globalfunction();