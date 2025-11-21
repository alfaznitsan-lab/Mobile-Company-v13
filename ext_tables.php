<?php
defined('TYPO3') || die();

(static function() {
    $GLOBALS['TCA']['tx_mobilecompany_domain_model_mobile']['columns']['Mobile']['config'] = [
        'description' => 'EXT:mobile_company/Resources/Private/Language/locallang_csh_tx_mobilecompany_domain_model_mobile.xlf',
    ];

    $GLOBALS['TCA']['tx_mobilecompany_domain_model_company']['columns']['Company']['config'] = [
        'description' => 'EXT:mobile_company/Resources/Private/Language/locallang_csh_tx_mobilecompany_domain_model_mobile.xlf',
    ];

     // Mobile List Plugin
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'MobileCompany',
        'Mobilecompanylistplugin',
        'Mobile List Plugin'
    );

    // Mobile Detail Plugin
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'MobileCompany',
        'Mobilecompanydetailsplugin',
        'Mobile Details Plugin'
    );
})();
