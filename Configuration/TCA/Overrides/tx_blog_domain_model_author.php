<?php
defined('TYPO3') or die();

use Nitsan\MobileCompany\Domain\Model\ExtendedAuthor;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

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

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tx_blog_domain_model_author',
    'palette_contact',
    'company_name',
    'before:website'
);