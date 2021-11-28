<?php
/**
 * Created by xianglinl
 * User：liubo
 * Date：2020/6/2
 * Time：21:16
 */

use DesignPatterns\Bridge\ElasticSearchQuery;
use DesignPatterns\Bridge\MysqlQuery;
use DesignPatterns\Bridge\QueryService;

require_once(__DIR__ . '/../../vendor/autoload.php');

$params = [
    'province_id' => 26,
    'keywords' => '成都架子工',
];
$service = (new QueryService(new MysqlQuery()));
var_dump($service->get($params));

$service->setImplementation(new ElasticSearchQuery());
var_dump($service->get($params));
