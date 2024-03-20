<?php

defined('TYPO3_MODE') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:dbest_faq/Resources/Private/Language/locallang_db.xlf:tx_dbestfaq_domain_model_faq',
        'label' => 'question',
        'iconfile' => 'EXT:dbest_faq/Resources/Public/Icons/Faq.svg',
    ],
    'columns' => [
        'question' => [
            'label' => 'LLL:EXT:dbest_faq/Resources/Private/Language/locallang_db.xlf:tx_dbestfaq_domain_model_faq.faq_question',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
            ],
        ],
        'answer' => [
            'label' => 'LLL:EXT:dbest_faq/Resources/Private/Language/locallang_db.xlf:tx_dbestfaq_domain_model_faq.faq_answer',
            'config' => [
                'type' => 'text',
                'eval' => 'trim',
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'question, answer'],
    ],
];
