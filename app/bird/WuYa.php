<?php
/**
 * Created by xianglinl
 * User：liubo
 * Date：2021/1/6
 * Time：21:12
 */

namespace app\bird;


class WuYa extends FlyBird
{

    /**
     * @inheritDoc
     */
    public function name()
    {
        echo '我是乌鸦！';
    }

    public function fly()
    {
        echo '我可以飞翔';
    }
}