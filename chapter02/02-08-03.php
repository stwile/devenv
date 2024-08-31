<?php

namespace MyApp;

require_once __DIR__ . "02-08-01_Utilities.php";
require_once __DIR__ . "02-08-01_StringHelper.php";

use Utilities\Logger;
use Utilities\Logger as Log;
use function Utilities\Functions\formatDate as fd;
use function Utilities\Functions\formatDate;
use const Utilities\DEFAULT_VALUE;
use Utilities\{MathHelper, StringHelper};


// 使用例
$logger = new Logger();
$log = new Log();
$result = fd();  // エイリアスを使って呼び出す
$date = formatDate();
$math = new MathHelper();
$strHelper = new StringHelper();
$constant = DEFAULT_VALUE;

echo "結果: $result\n";
echo "定数: $constant\n";