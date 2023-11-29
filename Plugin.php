<?php

namespace sitiosagenciadigital\subscribe;

use Backend;
use System\Classes\PluginBase;
use Event;
use sitiosagenciadigital\subscribe\Components\SubscriptionForm;

/**
 * UserConnect Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = [
        'Rainlab.Translate'
    ];

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            SubscriptionForm::class => 'subscriptionForm'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'sitiosagenciadigital.subscribe.manage_settings' => [
                'tab' => 'sitiosagenciadigital.subscribe::lang.plugin.name',
                'label' => 'sitiosagenciadigital.subscribe::lang.permissions.manage_settings'
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'sitiosagenciadigital.subscribe::lang.settings.label',
                'description' => 'sitiosagenciadigital.subscribe::lang.settings.description',
                'icon'        => 'icon-cog',
                'class'       => 'sitiosagenciadigital\subscribe\Models\Settings',
                'order'       => 500,
                'keywords'    => 'subscriptions'
            ]
        ];
    }


    public function registerNavigation()
    {
        return [
            'userconnect' => [
                'label'       => 'sitiosagenciadigital.subscribe::lang.plugin.name',
                'url'         => Backend::url('sitiosagenciadigital\subscribe/subscriptions'),
                'permissions' => ['sitiosagenciadigital.subscribe.manage_settings'],
                'icon'        => 'icon-rss-square',
                'sideMenu' => [
                    'subscriptions' => [
                        'label'       => 'sitiosagenciadigital.subscribe::lang.subscriptions.menu_label',
                        'icon'        => 'icon-volume-up',
                        'url'         => Backend::url('sitiosagenciadigital\subscribe/subscriptions'),
                    ],
                    'subscribers' => [
                        'label'       => 'sitiosagenciadigital.subscribe::lang.subscribers.menu_label',
                        'icon'        => 'icon-users',
                        'url'         => Backend::url('sitiosagenciadigital\subscribe/subscribers'),
                    ],
                    // 'categories' => [
                    //     'label'       => 'sitiosagenciadigital.subscribe::lang.categories.menu_label',
                    //     'icon'        => 'icon-list',
                    //     'url'         => Backend::url('sitiosagenciadigital\subscribe/categories'),
                    // ],
                    'settings' => [
                        'label'       => 'sitiosagenciadigital.subscribe::lang.settings.menu_label',
                        'icon'        => 'icon-cog',
                        'url'         => Backend::url('system/settings/update/sitiosagenciadigital\subscribe/settings'),
                        'permissions' => ['sitiosagenciadigital.subscribe.manage_settings'],
                    ]
                ]
            ]
        ];
    }

    public function registerMailTemplates()
    {
        return [
            'sitiosagenciadigital.subscribe::mail.verify_subscriber',
        ];
    }
}
