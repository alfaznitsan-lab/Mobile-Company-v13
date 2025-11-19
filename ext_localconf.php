<?php
defined('TYPO3') or die();

(static function() {
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
