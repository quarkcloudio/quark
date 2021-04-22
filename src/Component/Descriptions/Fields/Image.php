<?php

namespace QuarkCMS\Quark\Component\Descriptions\Fields;

use QuarkCMS\Quark\Component\Descriptions\Fields\Item;
use Exception;

class Image extends Item
{
    /**
     * 宽度
     *
     * @var string
     */
    public $width = null;

    /**
     * 高度
     *
     * @var string
     */
    public $height = null;

    /**
     * 初始化Input组件
     *
     * @param  string  $dataIndex
     * @param  string  $label
     * @return void
     */ 
    public function __construct($dataIndex,$label = '')
    {
        $this->type = 'image';
        $this->dataIndex = $dataIndex;
    }

    /**
     * 组件json序列化
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge([
            'type' => $this->type,
            'width' => $this->width,
            'height' => $this->height
        ], parent::jsonSerialize());
    }
}
