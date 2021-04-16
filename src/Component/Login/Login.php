<?php

namespace QuarkCMS\Quark\Component\Login;

use QuarkCMS\Quark\Component\Element;

class Login extends Element
{
    /**
     * 登录接口
     *
     * @var string
     */
    public $api = '';

    /**
     * 登录后跳转地址
     *
     * @var string
     */
    public $redirect = '';

    /**
     * 初始化容器
     *
     * @param  void
     * @return object
     */
    public function __construct()
    {
        $this->type = 'login';

        return $this;
    }

    /**
     * 设置登录接口
     *
     * @param  bool  $api
     * @return $this
     */
    public function api($api)
    {
        $this->api = $api;

        return $this;
    }

    /**
     * 组件json序列化
     *
     * @return array
     */
    public function jsonSerialize()
    {
        $this->key(__CLASS__.$this->api);

        return array_merge([
            'api' => $this->api,
            'redirect' => $this->redirect
        ], parent::jsonSerialize());
    }
}
