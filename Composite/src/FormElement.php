<?php
/**
 * Created by xianglinl
 * User：liubo
 * Date：2020/6/4
 * Time：21:44
 */

namespace DesignPatterns\Composite;

abstract class FormElement
{
    /**
     * renders the elements' code
     * @param int $indent
     * @return mixed
     */
    abstract public function render($indent = 0);
}