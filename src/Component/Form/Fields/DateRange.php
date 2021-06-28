<?php

namespace QuarkCMS\Quark\Component\Form\Fields;

use QuarkCMS\Quark\Component\Form\Fields\Item;

class DateRange extends Item
{
    /**
     * 组件类型
     *
     * @var string
     */
    public $component = 'dateRange';

    /**
     * 默认值
     *
     * @var string
     */
    public $value = [null,null];
}
