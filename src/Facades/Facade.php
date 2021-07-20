<?php

namespace QuarkCMS\Quark\Facades;

use RuntimeException;

class Facade
{
    /**
     * 注册组件类
     *
     * @var array
     */
    protected static $registerComponents = [
        'page' => \QuarkCMS\Quark\Component\Layout\Page::class,
        'pageContainer' => \QuarkCMS\Quark\Component\Layout\PageContainer::class,
        'layout' => \QuarkCMS\Quark\Component\Layout\Layout::class,
        'row' => \QuarkCMS\Quark\Component\Grid\Row::class,
        'col' => \QuarkCMS\Quark\Component\Grid\Col::class,
        'card' => \QuarkCMS\Quark\Component\Card\Card::class,
        'space' => \QuarkCMS\Quark\Component\Space\Space::class,
        'statistic' => \QuarkCMS\Quark\Component\Statistic\Statistic::class,
        'statisticCard' => \QuarkCMS\Quark\Component\Statistic\StatisticCard::class,
        'descriptions' => \QuarkCMS\Quark\Component\Descriptions\Descriptions::class,
        'descriptionField' => \QuarkCMS\Quark\Component\Descriptions\Field::class,
        'table' => \QuarkCMS\Quark\Component\Table\Table::class,
        'column' => \QuarkCMS\Quark\Component\Table\Column::class,
        'toolBar' => \QuarkCMS\Quark\Component\Table\ToolBar::class,
        'search' => \QuarkCMS\Quark\Component\Table\Search::class,
        'action' => \QuarkCMS\Quark\Component\Action\Action::class,
        'tpl' => \QuarkCMS\Quark\Component\Tpl\Tpl::class,
        'form' => \QuarkCMS\Quark\Component\Form\Form::class,
        'field' => \QuarkCMS\Quark\Component\Form\Field::class,
        'login' => \QuarkCMS\Quark\Component\Login\Login::class,
        'tabs' => \QuarkCMS\Quark\Component\Tabs\Tabs::class,
        'tabPane' => \QuarkCMS\Quark\Component\Tabs\TabPane::class,
    ];

    /**
     * 获取组件实例
     *
     * @return mixed
     */
    public static function getComponentInstance()
    {
        $className = static::getFacadeClass();

        return new static::$registerComponents[$className]();
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @param  string  $method
     * @param  array  $args
     * @return mixed
     *
     * @throws \RuntimeException
     */
    public static function __callStatic($method, $args)
    {
        $instance = static::getComponentInstance();

        if (! $instance) {
            throw new RuntimeException('A facade root has not been set.');
        }

        return $instance->$method(...$args);
    }
}
