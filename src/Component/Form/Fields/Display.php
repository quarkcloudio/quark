<?php

namespace QuarkCMS\Quark\Component\Form\Fields;

use QuarkCMS\Quark\Component\Form\Item;
use Exception;

class Display extends Item
{
    /**
     * 初始化组件
     *
     * @param  string  $label
     * @return void
     */
    public function __construct($label = '') {
        $this->component = 'display';
        $this->label = $label;
    }
}
