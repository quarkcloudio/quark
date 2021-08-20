<?php

namespace QuarkCMS\Quark\Component\Chart;

use QuarkCMS\Quark\Component\Element;

abstract class Chart extends Element
{
    /**
     * 设置图表宽度
     *
     * @var number
     */
    public $width = 400;

    /**
     * 设置图表高度
     *
     * @var number
     */
    public $height = 400;

    /**
     * 图表是否自适应容器宽高。当 autoFit 设置为 true 时，width 和 height 的设置将失效。
     *
     * @var bool
     */
    public $autoFit = true;

    /**
     * 画布的 padding 值，代表图表在上右下左的间距，可以为单个数字 16，或者数组 [16, 8, 16, 8] 代表四个方向，或者开启 auto，由底层自动计算间距。
     *
     * @var string|number|array
     */
    public $padding = 'auto';
    
    /**
     * 额外增加的 appendPadding 值，在 padding 的基础上，设置额外的 padding 数值，可以是单个数字 16，或者数组 [16, 8, 16, 8] 代表四个方向。
     *
     * @var number|array
     */
    public $appendPadding = 'auto';

    /**
     * 设置图表渲染方式为 canvas 或 svg。
     *
     * @var string
     */
    public $renderer = 'canvas';

    /**
     * 是否对超出坐标系范围的 Geometry 进行剪切。
     *
     * @var bool
     */
    public $limitInPlot = false;

    /**
     * 指定具体语言，目前内置 'zh-CN' and 'en-US' 两个语言，你也可以使用 G2Plot.registerLocale 方法注册新的语言。语言包格式参考：src/locales/en_US.ts
     *
     * @var string
     */
    public $locale = 'zh-CN';

    /**
     * 数据
     *
     * @var array
     */
    public $data = [];

    /**
     * X轴字段
     *
     * @var string
     */
    public $xField = null;

    /**
     * y轴字段
     *
     * @var string
     */
    public $yField = null;

    /**
     * 初始化组件
     *
     * @return void
     */
    public function __construct() {
        $this->component = 'chart';

        return $this;
    }

    /**
     * 设置小数点
     *
     * @param  string  $decimalSeparator
     * @return $this
     */
    public function decimalSeparator($decimalSeparator)
    {
        $this->decimalSeparator = $decimalSeparator;
        return $this;
    }

    /**
     * 设置千分位标识符
     *
     * @param  string  $groupSeparator
     * @return $this
     */
    public function groupSeparator($groupSeparator)
    {
        $this->groupSeparator = $groupSeparator;
        return $this;
    }

    /**
     * 数值精度
     *
     * @param  string  $precision
     * @return $this
     */
    public function precision($precision)
    {
        $this->precision = $precision;
        return $this;
    }

    /**
     * 设置数值的前缀
     *
     * @param  string|array  $prefix
     * @return $this
     */
    public function prefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * 设置数值的后缀
     *
     * @param  string|array  $suffix
     * @return $this
     */
    public function suffix($suffix)
    {
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * 设置标题
     *
     * @param  string  $title
     * @return $this
     */
    public function title($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 数值内容
     *
     * @param  string|number  $value
     * @return $this
     */
    public function value($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * 设置数值的样式
     *
     * @param  array  $valueStyle
     * @return $this
     */
    public function valueStyle($valueStyle)
    {
        $this->valueStyle = $valueStyle;
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
            $this->key(json_encode($this->title), true);
        }

        return array_merge([
            'decimalSeparator' => $this->decimalSeparator,
            'groupSeparator' => $this->groupSeparator,
            'precision' => $this->precision,
            'prefix' => $this->prefix,
            'suffix' => $this->suffix,
            'title' => $this->title,
            'value' => $this->value,
            'valueStyle' => $this->valueStyle,
        ], parent::jsonSerialize());
    }
}