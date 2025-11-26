<?php
defined('TYPO3') or die();

$ll = 'LLL:EXT:mobile_company/Resources/Private/Language/locallang_db.xlf:';

$fields = [
    'cover_image' => [
        'exclude' => 1,
        'label' => $ll . 'tx_mobilecompany_domain_model_blog.cover_image',
        'config' => [
            'type' => 'file',
            'appearance' => [
                'collapseAll' => true,
                'showPossibleLocalizationRecords' => true, 
                'showRemovedLocalizationRecords' => true,
                'showAllLocalizationLink' => true,
                'showSynchronizationLink' => true,
            ],
            'maxitems' => 1,
            'allowed' => 'common-image-types',
        ],
    ],
    'is_featured' => [
        'exclude' => 1,
        'label' => $ll . 'tx_mobilecompany_domain_model_blog.is_featured',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => [
                [
                    0 => '',
                    1 => '',
                    'invertStateAndDBValue' => true
                ]
            ],
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $fields);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--div--;LLL:EXT:mobile_company/Resources/Private/Language/locallang_db.xlf:pages.tab.blog_enhancements, is_featured, cover_image',
    '',
    'after:description'
);