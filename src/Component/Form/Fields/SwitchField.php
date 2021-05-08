<?php

namespace QuarkCMS\Quark\Component\Form\Fields;

use QuarkCMS\Quark\Component\Form\Fields\Item;
use Exception;

class SwitchField extends Item
{
    /**
     * switch控件的属性。
     *
     * @var array
     */
    public $options;

    /**
     * 初始化开关组件
     *
     * @param  string  $name
     * @param  string  $label
     * @return void
     */ 
    public function __construct($name,$label = '') {
        $this->type = 'switch';
        $this->name = $name;

        if(empty($label) || !count($label)) {
            $this->label = $name;
        } else {
            $this->label = $label[0];
        }
    }

    /**
     * 设置开关属性
     *
     * @param  array $options
     * @return $this
     */
    public function options($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * 组件json序列化
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge([
            'options' => $this->options,
        ], parent::jsonSerialize());
    }
}
