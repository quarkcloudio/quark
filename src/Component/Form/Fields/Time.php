<?php

namespace QuarkCMS\Quark\Component\Form\Fields;

use QuarkCMS\Quark\Component\Form\Fields\Item;
use Exception;

class Time extends Item
{
    /**
     * 时间显示格式
     *
     * @var string
     */
    public $format = 'HH:mm';

    /**
     * 初始化组件
     *
     * @param  string  $name
     * @param  string  $label
     * @return void
     */
    public function __construct($name,$label = '') {
        $this->type = 'time';
        $this->name = $name;

        if(empty($label) || !count($label)) {
            $this->label = $name;
        } else {
            $this->label = $label[0];
        }

        $this->value = null;
    }

    /**
     * 设置时间显示格式
     *
     * @param  string $format
     * @return $this
     */
    public function format($format)
    {
        $this->format = $format;
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
            'format' => $this->format
        ], parent::jsonSerialize());
    }
}
