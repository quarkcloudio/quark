<?php

namespace QuarkCMS\Quark\Component\Table\Search\Fields;

use QuarkCMS\Quark\Component\Table\Search\Item;

class Gt extends Item
{
    /**
     * 初始化
     *
     * @param  string  $name
     * @param  string  $label
     * @return void
     */
    public function __construct($name,$label = '') {
        $this->component = 'input';
        $this->name = $name;
        $this->operator = 'gt';

        if(empty($label) || !count($label)) {
            $this->label = $name;
        } else {
            $this->label = $label[0];
        }

        $this->placeholder = '请输入'.$this->label;
    }
}
