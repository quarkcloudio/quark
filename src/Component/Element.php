<?php

namespace QuarkCMS\Quark\Component;

use JsonSerializable;

abstract class Element implements JsonSerializable
{
    /**
     * The component's unique key.
     *
     * @var string
     */
    public $key = '';

    /**
     * The component's type.
     *
     * @var string
     */
    public $type;

    /**
     * The component's style.
     *
     * @var array
     */
    public $style = [];

    /**
     * Create a new component.
     *
     * @param  string|null  $type
     * @return void
     */
    public function __construct($type = null)
    {
        $this->type = $type ?? $this->type;
    }

    /**
     * Create a new component.
     * 
     * @param  string|null|array  $arguments
     * @return object
     */
    public static function make(...$arguments)
    {
        return new static(...$arguments);
    }

    /**
     * Get the key for the component.
     *
     * @param  string $key
     * @return $this
     */
    public function key($key = null)
    {
        if(empty($key)) {
            $key = uniqid(mt_rand(), true);
        }
        $this->key = md5($key);

        return $this;
    }

    /**
     * Get the type for the component.
     *
     * @return string
     */
    public function type()
    {
        return $this->type;
    }

    /**
     * Set the component style.
     *
     * @param  array  $style
     * @return string
     */
    public function style($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * 转换为数组
     *
     * @return array
     */
    public function toArray()
    {
        return $this->jsonSerialize();
    }

    /**
     * 转换为数组
     *
     * @return array
     */
    public function render()
    {
        return $this->jsonSerialize();
    }

    /**
     * 组件json序列化
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge([
            'key' => $this->key,
            'type' => $this->type(),
            'style' => $this->style
        ]);
    }
}
