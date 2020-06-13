<?php
/**
 * Created by YupaoWang
 * User：liubo
 * Date：2020/6/4
 * Time：21:47
 */

use DesignPatterns\Composite\Form;
use DesignPatterns\Composite\TextElement;
use DesignPatterns\Composite\InputElement;

require_once(__DIR__ . '/../../vendor/autoload.php');

function testRender()
{
    $form = new Form();//3
    $form->addElement(new TextElement());//4
    $form->addElement(new InputElement());//5
    $embed = new Form();
    $embed->addElement(new TextElement()); // 1
    $embed->addElement(new InputElement());// 2
    $embed->addElement($form);
    return $embed->render();
//    $form->addElement($embed);  // 这里我们添加一个嵌套树到表单
//    return $form->render();
}

/**
 * 打印结果
 * text
 * input
 *  text
 *  input
 */


$form = testRender();
print_r($form);