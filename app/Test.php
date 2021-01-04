<?php
/**
 * Created by YupaoWang
 * User：liubo
 * Date：2021/1/5
 * Time：00:00
 */

namespace app;


class Test
{
    protected $integral = 1;

    public function index($test = null)
    {
        echo 1;
        var_dump($test);
    }
}