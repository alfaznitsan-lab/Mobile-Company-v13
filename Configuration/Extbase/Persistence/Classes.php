<?php
declare(strict_types=1);

use Nitsan\MobileCompany\Domain\Model\ExtendedPost;
use Nitsan\MobileCompany\Domain\Model\ExtendedAuthor;
use Nitsan\MobileCompany\Domain\Model\ExtendedTag;

return [
    ExtendedPost::class => [
        'tableName' => 'pages',
    ],
    ExtendedAuthor::class => [
        'tableName' => 'tx_blog_domain_model_author',
    ],
    ExtendedTag::class => [
        'tableName' => 'tx_blog_domain_model_tag',
    ],
];
