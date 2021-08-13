<?php

namespace QuarkCMS\Quark\Component\Form\Fields;

use QuarkCMS\Quark\Component\Form\Fields\Item;

class Hidden extends Item
{
    /**
     * 组件类型
     *
     * @var string
     */
    public $component = 'hiddenField';

    /**
     * 组件json序列化
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return parent::jsonSerialize();
    }
}
