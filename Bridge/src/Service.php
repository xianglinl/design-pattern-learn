<?php
/**
 * Created by YupaoWang
 * User：liubo
 * Date：2020/6/2
 * Time：21:08
 */

namespace DesignPatterns\Bridge;

/**
 * 创建抽象类
 * Class Service
 * @package DesignPatterns\Bridge
 */
abstract class Service
{
    /**
     * @var JobQueryInterface
     * 定义实现属性的类
     */
    protected $implementation;

    /**
     * @param JobQueryInterface $queryClass
     * 传入 FormatterInterface 实现类对象。
     */
    public function __construct(JobQueryInterface $queryClass)
    {
        $this->implementation = $queryClass;
    }

    /**
     * @param JobQueryInterface $queryClass
     * 和构造方法的作用相同。设置执行query的类
     */
    public function setImplementation(JobQueryInterface $queryClass)
    {
        $this->implementation = $queryClass;
    }

    /**
     * 创建抽象方法 get() 。
     * @param $string *需要进行格式化的数据
     */
    abstract public function get($string);

}