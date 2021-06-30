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
     * 初始化隐藏域组件
     *
     * @param  string  $name
     * @return void
     */ 
    function __construct($name)
    {
        $this->name = $name;
    }

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
