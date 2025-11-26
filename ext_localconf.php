<?php
defined('TYPO3') or die();

(static function() {
    /*$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][T3G\AgencyPack\Blog\Domain\Model\Post::class] = [
        'className' => \Nitsan\MobileCompany\Domain\Model\Post::class,
    ];

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][T3G\AgencyPack\Blog\Domain\Model\Author::class] = [
        'className' => \Nitsan\MobileCompany\Domain\Model\Author::class,
    ];

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][T3G\AgencyPack\Blog\Domain\Model\Tag::class] = [
        'className' => \Nitsan\MobileCompany\Domain\Model\Tag::class,
    ];*/

    TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'MobileCompany',
        'Mobilecompanyplugin',
        [
            \Nitsan\MobileCompany\Controller\MobileController::class => 'list, show, new, create, edit, update, delete',
            \Nitsan\MobileCompany\Controller\CompanyController::class => 'list, show, new, create, edit, update, delete'
        ],
        [
            \Nitsan\MobileCompany\Controller\MobileController::class => 'list, create, update, delete',
            \Nitsan\MobileCompany\Controller\CompanyController::class => 'list, create, update, delete'
        ],
        TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'MobileCompany',
        'Mobilecompanylistplugin',
        [
            \Nitsan\MobileCompany\Controller\MobileController::class => 'list, show, new, create, edit, update, delete',
            \Nitsan\MobileCompany\Controller\CompanyController::class => 'list, show, new, create, edit, update, delete'
        ],
        [
            \Nitsan\MobileCompany\Controller\MobileController::class => 'list, create, update, delete',
            \Nitsan\MobileCompany\Controller\CompanyController::class => 'list,create, update, delete'
        ],
        TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'MobileCompany',
        'Mobilecompanydetailplugin',
        [
            \Nitsan\MobileCompany\Controller\MobileController::class => 'list, show, new, create, edit, update, delete',
            \Nitsan\MobileCompany\Controller\CompanyController::class => 'list, show, new, create, edit, update, delete'
        ],
        [
            \Nitsan\MobileCompany\Controller\MobileController::class => 'create, update, delete',
            \Nitsan\MobileCompany\Controller\CompanyController::class => 'create, update, delete'
        ],
        TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
    );
}
)();
