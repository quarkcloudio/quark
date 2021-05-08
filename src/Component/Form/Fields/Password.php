<?php

namespace QuarkCMS\Quark\Component\Form\Fields;

use Exception;

class Password extends Text
{
    /**
     * 是否显示切换按钮
     *
     * @var bool
     */
    public $visibilityToggle = true;

    /**
     * 初始化组件
     *
     * @param  string  $name
     * @param  string  $label
     * @return void
     */ 
    public function __construct($name,$label = '') {
        $this->type = 'password';
        $this->name = $name;

        if(empty($label) || !count($label)) {
            $this->label = $name;
        } else {
            $this->label = $label[0];
        }
        
        $this->style['width'] = 200;
        $this->placeholder = '请输入'.$this->label;
    }

    /**
     * 是否显示切换按钮
     *
     * @param  bool $visibilityToggle
     * @return $this
     */
    public function visibilityToggle($visibilityToggle)
    {
        $this->visibilityToggle = $visibilityToggle;

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
            'visibilityToggle' => $this->visibilityToggle
        ], parent::jsonSerialize());
    }
}
