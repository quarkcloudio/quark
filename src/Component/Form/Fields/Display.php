<?php

namespace QuarkCMS\Quark\Component\Form\Fields;

use QuarkCMS\Quark\Component\Form\Fields\Item;

class Display extends Item
{
    /**
     * 组件类型
     *
     * @var string
     */
    public $component = 'display';

    /**
     * 初始化组件
     *
     * @param  string  $label
     * @return void
     */
    public function __construct($label) {
        $this->label = $label;
    }
}
