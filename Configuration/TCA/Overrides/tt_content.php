<?php
defined('TYPO3') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

// --- Main Plugin ---
$pluginSignatureMain = ExtensionUtility::registerPlugin(
    'MobileCompany',
    'Mobilecompanyplugin',
    'Mobile Company Plugin',
    'mobile_company-plugin-mobilecompanyplugin',
    'plugins',
    'This is default plugin from MobileCompany extention'
);

// --- Mobile List Plugin ---
$pluginSignatureList = ExtensionUtility::registerPlugin(
    'MobileCompany',
    'Mobilecompanylistplugin',
    'Mobile List Plugin',
    'mobile_company-plugin-mobilecompanylistplugin',
    'plugins',
    'This element for show mobiles and companies data',
    'FILE:EXT:mobile_company/Configuration/FlexForms/MobileList.xml',
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--div--;Configuration,pi_flexform,pages,recursive',
    $pluginSignatureList,
    'after:subheader'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '',
    'FILE:EXT:mobile_company/Configuration/FlexForms/MobileList.xml',
    $pluginSignatureList
);

// --- Mobile Detail Plugin ---
$pluginSignatureDetail = ExtensionUtility::registerPlugin(
    'MobileCompany',
    'Mobilecompanydetailplugin',
    'Mobile Detail Plugin',
    'mobile_company-plugin-mobilecompanydetailplugin',
    'plugins',
    'This element for show perticular mobiles and companies data in detail.',
    'FILE:EXT:mobile_company/Configuration/FlexForms/MobileDetail.xml',
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--div--;Configuration,pi_flexform,',
    $pluginSignatureDetail,
    'after:subheader'
);
ExtensionManagementUtility::addPiFlexFormValue(
    '',
    'FILE:EXT:mobile_company/Configuration/FlexForms/MobileDetail.xml',
    $pluginSignatureDetail
);