<?php

namespace QuarkCMS\Quark\Component\Chart;

use QuarkCMS\Quark\Component\Element;

class Line extends Item
{
    /**
     * 是否平滑
     *
     * @var bool
     */
    public $smooth = true;

    /**
     * 初始化组件
     *
     * @param  array  $data
     * @return void
     */
    public function __construct($data = null) {
        $this->component = 'line';
        $this->data = $data;

        return $this;
    }

    /**
     * 是否平滑
     *
     * @param  bool  $smooth
     * @return $this
     */
    public function smooth($smooth)
    {
        $this->smooth = $smooth;
        return $this;
    }

    /**
     * 组件json序列化
     *
     * @return array
     */
    public function jsonSerialize()
    {
        // 设置组件唯一标识
        $this->key();

        return array_merge([
            'smooth' => $this->smooth
        ], parent::jsonSerialize());
    }
}