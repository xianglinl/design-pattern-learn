<?php
/**
 * Created by YupaoWang
 * User：liubo
 * Date：2021/1/6
 * Time：21:14
 */

use app\bird\Qie;
use app\bird\WuYa;

require_once '../../vendor/autoload.php';

(new WuYa())->name();
(new WuYa())->fly();
(new Qie())->name();


