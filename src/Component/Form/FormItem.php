<?php

namespace QuarkCMS\Quark\Component\Form;

use QuarkCMS\Quark\Component\Element;
use Closure;
use Exception;

class FormItem extends Element
{
    /**
     * 表单字段控件
     *
     * @var array
     */
    public static $formFields = [
        'hidden' => Component\Form\Fields\Hidden::class,
        'display' => Component\Form\Fields\Display::class,
        'text' => Component\Form\Fields\Text::class,
        'textarea' => Component\Form\Fields\TextArea::class,
        'textArea' => Component\Form\Fields\TextArea::class,
        'number' => Component\Form\Fields\Number::class,
        'radio' => Component\Form\Fields\Radio::class,
        'image' => Component\Form\Fields\Image::class,
        'file' => Component\Form\Fields\File::class,
        'tree' => Component\Form\Fields\Tree::class,
        'select' => Component\Form\Fields\Select::class,
        'checkbox' => Component\Form\Fields\Checkbox::class,
        'icon' => Component\Form\Fields\Icon::class,
        'switch' => Component\Form\Fields\SwitchField::class,
        'icon' => Component\Form\Fields\Icon::class,
        'date' => Component\Form\Fields\Date::class,
        'dateRange' => Component\Form\Fields\DateRange::class,
        'datetime' => Component\Form\Fields\Datetime::class,
        'datetimeRange' => Component\Form\Fields\DatetimeRange::class,
        'time' => Component\Form\Fields\Time::class,
        'timeRange' => Component\Form\Fields\TimeRange::class,
        'editor' => Component\Form\Fields\Editor::class,
        'map' => Component\Form\Fields\Map::class,
        'cascader' => Component\Form\Fields\Cascader::class,
        'search' => Component\Form\Fields\Search::class,
        'list' => Component\Form\Fields\ListField::class,
    ];

    /**
     * 初始化表单组件
     *
     * @param  string  $name
     * @return void
     */
    public function __construct()
    {
        $this->type = 'formItem';

        return $this;
    }

    /**
     * 获取行为类
     *
     * @param string $method
     * @return bool|mixed
     */
    public static function getCalledClass($method)
    {
        $class = static::$formFields[$method];

        if (class_exists($class)) {
            return $class;
        }

        return false;
    }

    /**
     * 动态调用行为类
     *
     * @param string $method
     * @return bool|mixed
     */
    public function __call($method, $parameters)
    {
        if ($className = static::getCalledClass($method)) {

            $column = $parameters[0]; //[0];
            $element = new $className($column, array_slice($parameters, 1));

            return $element;
        }
    }
}
