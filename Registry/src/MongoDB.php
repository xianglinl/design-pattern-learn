<?php
/**
 * Created by YupaoWang
 * User：liubo
 * Date：2020/6/5
 * Time：21:20
 */

namespace DesignPatterns\Registry;


class MongoDB extends Registry
{
    public static function createMongo()
    {
        $db = [
            'host' => '127.0.0.1',
            'user' => 'mongo',
            'pwd' => 'mongo',
        ];
        // 注册模式之注册
        self::set('mongo', $db);
        return $db;
    }
}