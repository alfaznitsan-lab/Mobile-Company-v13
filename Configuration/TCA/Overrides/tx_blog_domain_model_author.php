<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tx_blog_domain_model_author']['columns']['bio']['config'] = [
    'type' => 'text',
    'enableRichtext' => true,
    'richtextConfiguration' => 'default',
    'cols' => 40,
    'rows' => 10,
    'softref' => 'typolink_tag,images,email[subst],url',
];

$tempColumns = [
    'company_name' => [
        'exclude' => 1,
        'label' => 'Company name',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_blog_domain_model_author', $tempColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToPalette(
    'tx_blog_domain_model_author',
    'palette_contact',
    'company_name',
    'after:email'
);