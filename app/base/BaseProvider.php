<?php
/**
 * Created by YupaoWang
 * User：liubo
 * Date：2021/1/5
 * Time：00:12
 */

namespace app\base;


class BaseProvider
{
    public static function create()
    {
        return new static();
    }
}