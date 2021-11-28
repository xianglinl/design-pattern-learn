<?php
/**
 * Created by xianglinl
 * User：liubo
 * Date：2021/1/5
 * Time：00:11
 */

namespace app;


use app\base\BaseProvider;

class GetData extends BaseProvider
{
    public function index()
    {
        $model = new Demo();
        $this->printData($model);
        return self::class;
    }

    private function printData(TInterface $model)
    {
        $model->next();
    }
}