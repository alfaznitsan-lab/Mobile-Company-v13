<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Mobile Company',
    'description' => 'Extension for managing mobiles and companies data.',
    'category' => 'plugin',
    'author' => 'Nitsan',
    'author_email' => 'nitsan@example.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
