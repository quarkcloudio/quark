<?php

namespace QuarkCMS\Quark\Component\Action;

use QuarkCMS\Quark\Component\Element;

class Tpl extends Element
{
    /**
     * 初始化容器
     *
     * @param  string  $body
     * @return void
     */
    public function __construct($body = '')
    {
        $this->type = 'tpl';
        $this->body = $body;

        return $this;
    }

    /**
     * 组件json序列化
     *
     * @return array
     */
    public function jsonSerialize()
    {
        if(empty($this->key)) {
            $this->key($this->type.$this->body, true);
        }

        return array_merge([
        ], parent::jsonSerialize());
    }
}
