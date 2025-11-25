<?php
defined('TYPO3_MODE') or die();

$tempColumns = [
    'meta_keywords' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:mobile_company/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_tag.meta_keywords',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_blog_domain_model_tag', $tempColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToPalette(
    'tx_blog_domain_model_tag',
    'seo',
    'meta_keywords',
    ''
);

if (!isset($GLOBALS['TCA']['tx_blog_domain_model_tag']['palettes']['seo'])) {
    $GLOBALS['TCA']['tx_blog_domain_model_tag']['palettes']['seo'] = ['showitem' => 'meta_keywords'];
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_blog_domain_model_tag',
    '--palette--;SEO;seo',
    '',
    'after:content'
);
