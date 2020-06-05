<?php
/**
 * Created by YupaoWang
 * User：liubo
 * Date：2020/6/2
 * Time：21:02
 */

namespace DesignPatterns\Bridge;


class MysqlQuery implements JobQueryInterface
{

    public function query($params)
    {
        return sprintf('这里将执行sql查询 . 参数 %s', implode(':', $params));
    }
}