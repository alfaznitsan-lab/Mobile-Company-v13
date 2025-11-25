<?php
defined('TYPO3_MODE') or die();

$fields = [
    'cover_image' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:mobile_company/Resources/Private/Language/locallang_db.xlf:pages.cover_image',
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
        'displayCond' => 'FIELD:is_featured:REQ:true',
    ],
    'is_featured' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:mobile_company/Resources/Private/Language/locallang_db.xlf:pages.is_featured',
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

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', '--div--;Blog Enhancements, is_featured, cover_image');
