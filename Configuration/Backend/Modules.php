<?php
declare(strict_types=1);

return [
    'mobile_company_module' => [
        'parent' => 'web', 
        'position' => ['after' => 'web_layout'],
        'access' => 'admin',
        'iconIdentifier' => 'MobileCompany-module-icon',
        'labels' => 'LLL:EXT:mobile_company/Resources/Private/Language/locallang_mod.xlf:tx_mobilecompany_domain_module',
        'extensionName' => 'MobileCompany',
        'controllerActions' => [
            Nitsan\MobileCompany\Controller\BackendModuleController::class => [
                'list', 'show'
            ],
        ],
    ],
];

