<?php
/**
 * Created by YupaoWang
 * User：liubo
 * Date：2020/6/4
 * Time：21:45
 */


namespace DesignPatterns\Composite;

/**
 * InputElement类
 */
class InputElement extends FormElement
{
    /**
     * 渲染input元素HTML
     * @param int $indent
     * @return mixed|string
     */
    public function render($indent = 0)
    {
        return str_repeat('  ', $indent) . '<input type="text" />';
    }
}