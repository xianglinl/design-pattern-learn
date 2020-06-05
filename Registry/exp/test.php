<?php
/**
 * Created by YupaoWang
 * User：liubo
 * Date：2020/6/4
 * Time：21:47
 */

use DesignPatterns\Registry\RedisDB;
use DesignPatterns\Registry\Registry;
use DesignPatterns\Registry\MongoDB;

require_once(__DIR__ . '/../../vendor/autoload.php');


RedisDB::setDatabase1();
RedisDB::setDatabase2();
MongoDB::createMongo();

$dd = (new Registry());
var_dump($dd);

function redisOne()
{
    /** @var Redis $redis */
    $redis = Registry::get('redis_1');
    $redis->set('time', date('Y-m-d H:i:s'), 50);
    var_dump($redis->get('time'));
}

function redisTwo()
{
    /** @var Redis $redis */
    $redis = Registry::get('redis_2');
    $redis->set('time', date('Y-m-d H:i:s', time() + 30), 50);
    var_dump($redis->get('time'));
}

var_dump(Registry::get('redis_1'));
var_dump(Registry::get('redis_2'));
var_dump(Registry::get('mongo'));


redisOne();
redisTwo();