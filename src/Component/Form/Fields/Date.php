<?php

namespace QuarkCMS\Quark\Component\Form\Fields;

use QuarkCMS\Quark\Component\Form\Fields\Item;

class Date extends Item
{
    /**
     * 组件类型
     *
     * @var string
     */
    public $component = 'dateField';

    /**
     * 设置选择器类型,date | week | month | quarter | year
     *
     * @var string
     */
    public $picker = 'date';

    /**
     * 设置选择器类型,date | week | month | quarter | year
     *
     * @param  string $picker
     * @return $this
     */
    public function picker($picker)
    {
        if(!in_array($picker,['date', 'week', 'month', 'quarter', 'year'])) {
            throw new Exception("argument must be in 'date', 'week', 'month', 'quarter', 'year'!");
        }

        $this->picker = $picker;
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
            'picker' => $this->picker
        ], parent::jsonSerialize());
    }
}
