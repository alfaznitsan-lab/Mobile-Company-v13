<?php
defined('TYPO3') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

$extensionKey = 'mobile_company';

// --- Main Plugin ---
$pluginSignatureMain = ExtensionUtility::registerPlugin(
    $extensionKey,
    'Mobilecompanyplugin',
    'Mobile Company Plugin',
    'LLL:EXT:mobile_company/Resources/Private/Language/locallang_db.xlf: tx_mobile_company_mobilecompanylistplugin.name'
);

// --- Mobile List Plugin ---
$pluginSignatureList = ExtensionUtility::registerPlugin(
    $extensionKey,
    'Mobilecompanylistplugin',
    'Mobile List Plugin',
    'LLL:EXT:mobile_company/Resources/Private/Language/locallang_db.xlf: tx_mobile_company_mobilecompanylistplugin.name'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--div--;Configuration,pi_flexform,pages,recursive',
    $pluginSignatureList,
    'after:subheader'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:mobile_company/Configuration/FlexForms/MobileList.xml',
    $pluginSignatureList
);

// --- Mobile Detail Plugin ---
$pluginSignatureDetail = ExtensionUtility::registerPlugin(
    $extensionKey,
    'Mobilecompanydetailplugin',
    'Mobile Detail Plugin',
    'LLL:EXT:mobile_company/Resources/Private/Language/locallang_db.xlf: tx_mobile_company_mobilecompanydetailplugin.name'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--div--;Configuration,pi_flexform',
    $pluginSignatureDetail,
    'after:subheader'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:mobile_company/Configuration/FlexForms/MobileDetail.xml',
    $pluginSignatureDetail
);
