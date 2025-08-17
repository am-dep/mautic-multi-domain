<?php

return [
    'name'        => 'Multidomain',
    'description' => 'User can add multiple tracking domains for emails.',
    'author'      => 'Abdullah Kiser / Friendly Automate',
    'version'     => '1.0.1',
    'routes'      => [
        'main' => [
            'mautic_multidomain_index' => [
                'path'       => '/multidomain/{page}',
                'controller' => 'MauticPlugin\MauticMultiDomainBundle\Controller\MultidomainController::indexAction',
            ],
            'mautic_multidomain_action' => [
                'path'       => '/multidomain/{objectAction}/{objectId}',
                'controller' => 'MauticPlugin\MauticMultiDomainBundle\Controller\MultidomainController::executeAction',
            ],
        ],
        'api' => [
            'mautic_api_multidomainstandard' => [
                'standard_entity' => true,
                'name'            => 'multidomain',
                'path'            => '/multidomain',
                'controller'      => 'MauticPlugin\MauticMultiDomainBundle\Controller\Api\MultidomainApiController',
            ],
        ],
    ],
    'menu' => [
        'main' => [
            'mautic.multidomain.menu' => [
                'route'     => 'mautic_multidomain_index',
                'priority'  => 10,
                'iconClass' => 'ri-globe-fill',
            ],
        ],
    ],
    'services' => [
        'forms'  => [],
        'models' => [],
        'events' => [],
    ],
];
