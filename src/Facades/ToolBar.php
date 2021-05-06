<?php

namespace QuarkCMS\Quark\Facades;

use QuarkCMS\Quark\Facades\Facade;

class ToolBar extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'toolBar';
    }
}
