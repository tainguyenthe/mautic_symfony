<?php
// plugins/HelloWorldBundle/Config/config.php

return [
    'name'        => 'Hello World',
    'description' => 'This is an example config file for a simple Hellow World plugin.',
    'author'      => 'Marty Mautibot',
    'version'     => '1.0.0',
    
    'routes'   => [
        'main' => [
            'plugin_helloworld_world' => [
                'path'       => '/hello/{world}',
                'controller' => 'HelloWorldBundle:Default:world',
                'defaults'    => [
                    'world' => 'earth'
                ],
                'requirements' => [
                    'world' => 'earth|mars'
            ]
            ],
            'plugin_helloworld_list'  => [
                'path'       => '/hello/{page}',
                'controller' => 'HelloWorldBundle:Default:index'
             ],
            'plugin_helloworld_admin' => [
                'path'       => '/hello/admin',
                'controller' => 'HelloWorldBundle:Default:admin'
            ],
        ],
        'public' => [
            'plugin_helloworld_goodbye' => [
                'path'       => '/hello/goodbye',
                'controller' => 'HelloWorldBundle:Default:goodbye'
            ],
            'plugin_helloworld_contact' => [
                'path'       => '/hello/contact',
                'controller' => 'HelloWorldBundle:Default:contact'
            ]
        ],
        'api' => [
            'plugin_helloworld_api' => [
                'path'       => '/hello',
                'controller' => 'HelloWorldBundle:Api:howdy',
                'method'     => 'GET'
            ]
        ]
    ],

    'menu'     => [
        'main' => [
            'priority' => 4,
            'items'    => [
                'plugin.helloworld.index' => [
                    'id'        => 'plugin_helloworld_index',
                    'iconClass' => 'fa-globe',
                    'access'    => 'plugin:helloworld:worlds:view',
                    'parent'    => 'mautic.core.channels',
                    'children'  => [
                        'plugin.helloworld.manage_worlds'     => [
                            'route' => 'plugin_helloworld_list'
                        ],
                        'mautic.category.menu.index' => [
                            'bundle' => 'plugin:helloWorld'
                        ]
                    ]
                ]
            ]
        ],
        'admin' => [
            'plugin.helloworld.admin' => [
                'route'     => 'plugin_helloworld_admin',
                'iconClass' => 'fa-gears',
                'access'    => 'admin',
                'checks'    => [
                    'parameters' => [
                        'helloworld_api_enabled' => true
                    ]
                ],
                'priority'  => 60
            ]
        ]
    ],

    'services'    => [
        'events' => [
            'plugin.helloworld.leadbundle.subscriber' => [
                'class' => 'MauticPlugin\HelloWorldBundle\EventListener\LeadSubscriber'
            ]
        ],
        'forms'  => [
            'plugin.helloworld.form' => [
                'class' => 'MauticPlugin\HelloWorldBundle\Form\Type\HelloWorldType',
                'alias' => 'helloworld'
            ]
        ],
        'helpers' => [
            'mautic.helper.helloworld' => [
                'class'     => 'MauticPlugin\HelloWorldBundle\Helper\HelloWorldHelper',
                'alias'     => 'helloworld'
            ]
        ],
        'other'   => [
            'plugin.helloworld.mars.validator' => [
                'class'     => 'MauticPlugin\HelloWorldBundle\Form\Validator\Constraints\MarsValidator',
                'arguments' => 'mautic.factory',
                'tag'       => 'validator.constraint_validator',
                'alias'     => 'helloworld_mars'
            ]
        ]
    ],

    'categories' => [
        'plugin:helloWorld' => 'mautic.helloworld.world.categories'
    ],

    'parameters' => [
        'helloworld_api_enabled' => false
    ]
];