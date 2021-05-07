<?php

namespace QuarkCMS\Quark\Component\Form\Fields;

use QuarkCMS\Quark\Component\Form\Item;
use QuarkCMS\Quark\Component\Form;
use Exception;

class ListField extends Item
{
    /**
     * 表单项
     *
     * @var array
     */
    public $items = null;

    /**
     * 按钮名称
     *
     * @var string
     */
    public $button = '添加字段';

    /**
     * 初始化组件
     *
     * @param  string  $name
     * @param  string  $label
     * @return void
     */
    public function __construct($name,$label = '') {
        $this->component = 'list';
        $this->name = $name;
        if(empty($label) || !count($label)) {
            $this->label = $name;
        } else {
            $label = Arr::get($label, 0, ''); //[0];
            $this->label = $label;
        }
    }

    /**
     * 按钮名称
     *
     * @param  string  $text
     * @return $this
     */
    public function button($text)
    {
        $this->button = $text;
        return $this;
    }

    /**
     * 表单项
     *
     * @param  Closure  $callback
     * @return $this
     */
    public function item(Closure $callback = null)
    {
        $form = new Form();
        $callback($form);
        $this->items = $form->items;

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
            'button' => $this->button,
            'items' => $this->items
        ], parent::jsonSerialize());
    }
}
