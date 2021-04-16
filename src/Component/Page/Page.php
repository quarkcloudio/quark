<?php

namespace QuarkCMS\Quark\Component\Login;

use QuarkCMS\Quark\Component\Element;

class Login extends Element
{
    /**
     * 内容
     *
     * @param  bool  $body
     * @return $this
     */
    public function body($body)
    {
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
        $this->key(__CLASS__.$this->body);

        return array_merge([
            'body' => $this->body
        ], parent::jsonSerialize());
    }
}
