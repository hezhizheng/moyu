<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/7/2
 * Time: 16:59
 * Created by PhpStorm.
 */

require_once __DIR__.'../../vendor/autoload.php';
require_once __DIR__.'./config.php';
require_once  __DIR__.'./IntegralInterface.php';
require_once __DIR__.'./Http.php';
require_once __DIR__.'./Integral.php';

$c = new Integral();

$result = $c->action();

var_dump($result);