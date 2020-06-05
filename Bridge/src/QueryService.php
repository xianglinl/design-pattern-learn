<?php
/**
 * Created by YupaoWang
 * User：liubo
 * Date：2020/6/2
 * Time：21:11
 */

namespace DesignPatterns\Bridge;

/**
 * 测试类
 * Class TestService
 * @package DesignPatterns\Bridge
 */
class QueryService extends Service
{

    public function get($string)
    {
        return $this->implementation->query($string);
    }
}