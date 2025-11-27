<?php
defined('TYPO3') or die();

$ll = 'LLL:EXT:mobile_company/Resources/Private/Language/locallang_db.xlf:';

$fields = [
    'cover_image' => [
        'exclude' => 1,
        'label' => $ll . 'tx_mobilecompany_domain_model_blog.cover_image',
        'config' => [
            'type' => 'file',
            'minitems' => 0,
            'maxitems' => 1,
            'allowed' => 'common-image-types',
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ]
        ],
    ],
    'is_featured' => [
        'exclude' => 1,
        'label' => $ll . 'tx_mobilecompany_domain_model_blog.is_featured',
        'config' => [
            'type' => 'check',
            'items' => [
                [
                    'label' => 'Enable',
                ]
            ],
            'default' => 0,
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $fields);

if (class_exists(\T3G\AgencyPack\Blog\Constants::class)) {
    $DOKTYPE_BLOG_POST = (string) \T3G\AgencyPack\Blog\Constants::DOKTYPE_BLOG_POST;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        'cover_image, is_featured',
        $DOKTYPE_BLOG_POST, 
        'before:featured_image'
    );
}