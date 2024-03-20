<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$boot = static function (): void {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        Dbest\DbestFaq\Extension::KEY_EXTBASE,
        'FaqList',
        [
            Dbest\DbestFaq\Controller\FaqController::class => 'list',
        ],
        // non-cacheable actions
        [
            Dbest\DbestFaq\Controller\FaqController::class => 'list',
        ]
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        Dbest\DbestFaq\Extension::KEY_EXTBASE,
        'FaqShow',
        [
            Dbest\DbestFaq\Controller\FaqController::class => 'show',
        ],
        // non-cacheable actions
        [
            Dbest\DbestFaq\Controller\FaqController::class => 'show',
        ]
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        Dbest\DbestFaq\Extension::KEY_EXTBASE,
        'FaqTeaser',
        [
            Dbest\DbestFaq\Controller\FaqController::class => 'teaser',
        ],
        // non-cacheable actions
        [
            Dbest\DbestFaq\Controller\FaqController::class => 'teaser',
        ]
    );
};

$boot();
unset($boot);
