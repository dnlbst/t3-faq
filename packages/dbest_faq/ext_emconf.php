<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Dbest FAQ',
    'description' => 'An extension to manage FAQs.',
    'category' => 'plugin',
    'author' => 'Daniel Best',
    'author_company' => 'This is a way',
    'author_email' => 'dnlbst@pm.me',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
    ],
];
