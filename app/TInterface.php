<?php
/**
 * Created by YupaoWang
 * User：liubo
 * Date：2021/1/5
 * Time：00:08
 */

namespace app;


interface TInterface
{
    public function hasNext();

    public function next();

    public function remove();
}