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
    $form = new Form();
    $form->addElement(new TextElement());//1
    $form->addElement(new InputElement());//2
    $embed = new Form();//3
    $embed->addElement(new InputElement());// 4
    $embed->addElement(new TextElement()); // 5
//    $embed->addElement($form);
//    return $embed->render();
    $form->addElement($embed);  // 这里我们添加一个嵌套树到表单
    return $form->render();
}

/**
 * 打印结果
 * text
 * input
 *  input
 *  text
 */


$form = testRender();
print_r($form);