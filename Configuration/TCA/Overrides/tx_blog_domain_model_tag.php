<?php
defined('TYPO3') or die();

$ll = 'LLL:EXT:mobile_company/Resources/Private/Language/locallang_db.xlf:';

$fields = [
    'meta_keywords' => [
        'exclude' => 1,
        'label' => $ll . 'tx_blog_domain_model_tag.meta_keywords',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_blog_domain_model_tag', $fields);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tx_blog_domain_model_tag',
    'seo',
    'meta_keywords',
    ''
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_blog_domain_model_tag',
    '--palette--;LLL:EXT:mobile_company/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_tag.palette.seo;seo',
    '',
    'after:content'
);