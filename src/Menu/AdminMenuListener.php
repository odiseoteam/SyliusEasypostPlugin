<?php

namespace Odiseo\SyliusEasyPostPlugin\Menu;

use Knp\Menu\ItemInterface;
use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

class AdminMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        /** @var ItemInterface $item */
        $item = $menu->getChild('configuration');
        if (null == $item) {
            $item = $menu;
        }

        $item->addChild('easyPostConfig', ['route' => 'odiseo_sylius_easy_post_plugin_admin_easy_post_configuration_index'])
            ->setLabel('odiseo_sylius_easy_post_plugin.menu.admin.easy_post_configurations')
            ->setLabelAttribute('icon', 'trademark')
        ;
    }
}
