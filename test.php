<?php
/**
 * Created by xianglinl
 * User：liubo
 * Date：2021/1/5
 * Time：00:00
 */

require_once './vendor/autoload.php';

use app\GetData;
use app\Test;

//$model = new Test();
//$model->index();

$res = GetData::create()->index();
var_dump($res);