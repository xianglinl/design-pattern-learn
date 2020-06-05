<?php
/**
 * Created by YupaoWang
 * User：liubo
 * Date：2020/6/4
 * Time：21:45
 */

namespace DesignPatterns\Composite;

/**
 * TextElement类
 */
class TextElement extends FormElement
{
    /**
     * 渲染文本元素
     *
     * @param int $indent
     *
     * @return mixed|string
     */
    public function render($indent = 0)
    {
        return str_repeat('  ', $indent) . 'this is a text element';
    }
}