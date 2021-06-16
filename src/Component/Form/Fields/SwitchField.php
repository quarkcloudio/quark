<?php

namespace QuarkCMS\Quark\Component\Form\Fields;

use QuarkCMS\Quark\Component\Form\Fields\Item;

class SwitchField extends Item
{
    /**
     * 组件类型
     *
     * @var string
     */
    public $type = 'switch';

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
