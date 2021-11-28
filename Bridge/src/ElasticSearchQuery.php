<?php
/**
 * Created by xianglinl
 * User：liubo
 * Date：2020/6/2
 * Time：21:03
 */

namespace DesignPatterns\Bridge;


class ElasticSearchQuery implements JobQueryInterface
{

    /**
     * @param $params array
     * @return string
     * @author liubo 2020-06-02 21:32:54
     */
    public function query($params)
    {
        return sprintf('这里将执行elasticSearch查询 . 参数 %s', implode(':', $params));
    }
}