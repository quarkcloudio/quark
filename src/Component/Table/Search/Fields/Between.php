<?php

namespace QuarkCMS\Quark\Component\Table\Search\Fields;

use QuarkCMS\Quark\Component\Table\Search\Item;

class Between extends Item
{
    /**
     * 初始化between条件
     *
     * @param  string  $name
     * @param  string  $label
     * @return void
     */
    public function __construct($name,$label = '') {
        $this->component = 'input';
        $this->name = $name;
        $this->operator = 'between';

        if(empty($label) || !count($label)) {
            $this->label = $name;
        } else {
            $this->label = $label[0];
        }

        $placeholder[0] = '开始'.$this->label;
        $placeholder[1] = '结束'.$this->label;
        $this->placeholder = $placeholder;
    }
}
