<?php
defined('TYPO3') or die();

$ll = 'LLL:EXT:mobile_company/Resources/Private/Language/locallang_db.xlf:';

$GLOBALS['TCA']['tx_blog_domain_model_author']['columns']['bio']['config'] = [
    'type' => 'text',
    'enableRichtext' => true,
    'richtextConfiguration' => 'default',
    'cols' => 40,
    'rows' => 10,
];

$fields = [
    'company_name' => [
        'exclude' => 1,
        'label' => $ll . 'tx_blog_domain_model_author.company_name',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_blog_domain_model_author', $fields);

if (!isset($GLOBALS['TCA']['tx_blog_domain_model_author']['palettes']['palette_contact'])) {
    $GLOBALS['TCA']['tx_blog_domain_model_author']['palettes']['palette_contact'] = ['showitem' => ''];
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tx_blog_domain_model_author',
    'palette_contact',
    'company_name',
    'before:website'
);