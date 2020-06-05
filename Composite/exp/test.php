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
    $form->addElement(new TextElement());
    $form->addElement(new InputElement());
    $embed = new Form();
    $embed->addElement(new TextElement());
    $embed->addElement(new InputElement());
    $embed->addElement($form);
    return $embed->render();
//    $form->addElement($embed);  // 这里我们添加一个嵌套树到表单
//    return $form->render();

}

$form = testRender();
var_dump($form);