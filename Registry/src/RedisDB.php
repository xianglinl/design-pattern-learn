<?php
/**
 * Created by xianglinl
 * User：liubo
 * Date：2020/6/5
 * Time：21:13
 */

namespace DesignPatterns\Registry;


use Redis;

class RedisDB extends Registry
{
    public static function setDatabase1()
    {
        $redis = new Redis();
        $redis->pconnect('127.0.0.1', 6379);
        $redis->select(1);
        self::set('redis_1', $redis);
        return $redis;
    }

    public static function setDatabase2()
    {
        $redis = new Redis();
        $redis->pconnect('127.0.0.1', 6379);
        $redis->select(2);
        self::set('redis_2', $redis);
        return $redis;
    }
}