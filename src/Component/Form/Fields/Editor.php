<?php

namespace QuarkCMS\Quark\Component\Form\Fields;

use QuarkCMS\Quark\Component\Form\Fields\Item;
use Exception;

class Editor extends Item
{
    /**
     * 初始化组件
     *
     * @param  string  $name
     * @param  string  $label
     * @return void
     */
    public function __construct($name,$label = '') {
        $this->type = 'editor';
        $this->name = $name;

        if(empty($label) || !count($label)) {
            $this->label = $name;
        } else {
            $this->label = $label[0];
        }

        $this->placeholder = '请输入'.$this->label;

        $style = ['height' => 500,'width' => 800];

        $this->style = $style;
    }

    /**
     * 宽度
     * 
     * @param  number|string $value
     * @return $this
     */
    public function width($value = '100%')
    {
        $this->style['width'] = $value;
        return $this;
    }

    /**
     * 高度
     * 
     * @param  number|string $value
     * @return $this
     */
    public function height($value = 500)
    {
        $this->style['height'] = $value;
        return $this;
    }
}
