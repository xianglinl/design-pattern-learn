<?php
/**
 * Created by xianglinl
 * User：liubo
 * Date：2020/6/5
 * Time：21:09
 */

namespace DesignPatterns\Registry;

class Registry
{
    protected static $obj = [];

    public static function set($alias, $object)
    {
        self::$obj[$alias] = $object;
    }

    public static function get($alias)
    {
        return self::$obj[$alias];
    }
}