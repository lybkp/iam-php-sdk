<?php
/*
 * TencentBlueKing is pleased to support the open source community by making
 * 蓝鲸智云-权限中心PHP SDK(iam-php-sdk) available.
 * Copyright (C) 2017-2021 THL A29 Limited, a Tencent company. All rights reserved.
 * Licensed under the MIT License (the "License"); you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at http://opensource.org/licenses/MIT
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
 * an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use IAM\IAM;
use IAM\Model\Action;
use IAM\Model\ActionWithoutResources;
use IAM\Model\ActionWithResources;
use IAM\Model\MultiActionRequest;
use IAM\Model\Subject;
use IAM\Model\Resource;
use IAM\Model\ResourceNode;
use Monolog\Handler\ErrorLogHandler;
use Monolog\Logger;

// 1. create a logger
$log = new Logger('debug');
$log->pushHandler(new ErrorLogHandler());

// 2. new IAM instance
$i = new IAM(
    "demo",
    "c2cfbc92-28a2-420c-b567-cf7dc33cf29f",
    "http://127.0.0.1:9000",
    "http://paas.example.com",
    "",
    $log,
    false
);


// 3. call
//    3.1 build the request
$system = "demo";

//    3.2 call the functions and echo result
echo "begin:\n";

echo "getToken: " . $i->getToken($system) . "\n";

echo "done!\n";
