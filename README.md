# nnopen
诺诺开放平台接口封装

依赖
curl扩展
composer

使用方法
composer require luckyhlq/nnopen

include "./vendor/autoload.php";

use \Nnuo\Open\Api;

$appKey = "your.appKey";

$appSecret = "your.appSecret";

$res = Api::getMerchantToken($appKey, $appSecret);

var_dump($res);

