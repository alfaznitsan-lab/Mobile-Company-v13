<?php
use T3G\AgencyPack\Blog\Domain\Model\PostRepository;
use Nitsan\MobileCompany\Domain\Model\ExtendedPostRepository;
use T3G\AgencyPack\Blog\Domain\Model\Post;
use Nitsan\MobileCompany\Domain\Model\ExtendedPost;

use T3G\AgencyPack\Blog\Domain\Model\AuthorRepository;
use Nitsan\MobileCompany\Domain\Model\ExtendedAuthorRepository;
use Nitsan\MobileCompany\Domain\Model\ExtendedAuthor;
use T3G\AgencyPack\Blog\Domain\Model\Author;

use T3G\AgencyPack\Blog\Domain\Model\TagRepository;
use Nitsan\MobileCompany\Domain\Model\ExtendedTagRepository;
use Nitsan\MobileCompany\Domain\Model\ExtendedTag;
use T3G\AgencyPack\Blog\Domain\Model\Tag;


defined('TYPO3') or die();

(static function() {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][Post::class] = [
        'className' => ExtendedPost::class,
    ];
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][PostRepository::class] = [
        'className' => ExtendedPostRepository::class,
    ];

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][Author::class] = [
        'className' => ExtendedAuthor::class,
    ];
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][AuthorRepository::class] = [
        'className' => ExtendedAuthorRepository::class,
    ];

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][TagRepository::class] = [
        'className' => ExtendedTagRepository::class,
    ];
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][Tag::class] = [
        'className' => ExtendedTag::class,
    ];

    TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'MobileCompany',
        'Mobilecompanyplugin',
        [
            \Nitsan\MobileCompany\Controller\MobileController::class => 'list, show, new, create, edit, update, delete',
            \Nitsan\MobileCompany\Controller\CompanyController::class => 'list, show, new, create, edit, update, delete'
        ],
        [
            \Nitsan\MobileCompany\Controller\MobileController::class => 'list, create, update, delete',
            \Nitsan\MobileCompany\Controller\CompanyController::class => 'list, create, update, delete'
        ],
        TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'MobileCompany',
        'Mobilecompanylistplugin',
        [
            \Nitsan\MobileCompany\Controller\MobileController::class => 'list, show, new, create, edit, update, delete',
            \Nitsan\MobileCompany\Controller\CompanyController::class => 'list, show, new, create, edit, update, delete'
        ],
        [
            \Nitsan\MobileCompany\Controller\MobileController::class => 'list, create, update, delete',
            \Nitsan\MobileCompany\Controller\CompanyController::class => 'list,create, update, delete'
        ],
        TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'MobileCompany',
        'Mobilecompanydetailplugin',
        [
            \Nitsan\MobileCompany\Controller\MobileController::class => 'list, show, new, create, edit, update, delete',
            \Nitsan\MobileCompany\Controller\CompanyController::class => 'list, show, new, create, edit, update, delete'
        ],
        [
            \Nitsan\MobileCompany\Controller\MobileController::class => 'create, update, delete',
            \Nitsan\MobileCompany\Controller\CompanyController::class => 'create, update, delete'
        ],
        TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
    );
}
)();
