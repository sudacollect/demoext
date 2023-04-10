<?php
/*
|--------------------------------------------------------------------------
| 菜单扩展
|--------------------------------------------------------------------------
|
| 目前支持扩展菜单项
| 1. 支持对当前已存在菜单的扩展
| 2. 支持扩展新的菜单项
|
*/

return [
    
    'demo_menu'=>[
        'single'    => true,
        'title'     => 'Demo',
        'slug'      => 'demo_menu',
        'url'       => 'index',
        'icon_class'=> 'ion-apps',
        'icon_bg_color'=> '#000000',
        'font_color'=> '#ff0000',
        'group'     => 'demo_menu',
        'target'     => '_self',
        'order'     => 0,
        
        'children' => [
            [
                'title'     => 'Index',
                'slug'      => 'index',
                'url'       => 'index',
                'icon_class'=> 'ion-home',
                'target'     => '_self',
                'order'     => 0,
                
            ],
            [
                'title'     => 'Help',
                'slug'      => 'help',
                'url'       => 'help',
                'icon_class'=> 'ion-home',
                'target'     => '_self',
                'order'     => 0,
                
            ],
        ],
        
    ],
    
    
    
];