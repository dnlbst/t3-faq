<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

(static function ($table = 'tt_content'): void {
    $extKey = Dbest\DbestFaq\Extension::KEY;
    $locallang = 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_db.xlf';
    $tca = &$GLOBALS['TCA'][$table];

    /**
     * Faq List
     */
    $pluginName = 'Faq';
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'Dbest.' . $extKey,
        $pluginName,
        $locallang . ':tx_dbestfaq_plugin_' . strtolower($pluginName),
        'dbest-faq-plugin-faq'
    );

    /**
     * Faq Show
     */
    $pluginName = 'FaqShow';
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'Dbest.' . $extKey,
        $pluginName,
        $locallang . ':tx_dbestfaq_plugin_' . strtolower($pluginName),
        'dbest-faq-plugin-faqshow'
    );

    /**
     * Faq Teaser
     */
    $pluginName = 'FaqTeaser';
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'Dbest.' . $extKey,
        $pluginName,
        $locallang . ':tx_dbestfaq_plugin_' . strtolower($pluginName),
        'dbest-faq-plugin-faqteaser'
    );
    $pluginSignature = str_replace('_', '', $extKey) . '_' . strtolower($pluginName);
    $tca['types']['list']['subtypes_excludelist'][$pluginSignature] =
        'pages,recursive,select_key';

    //add Flexforms for Faqplugin
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        $pluginSignature,
        'FILE:EXT:' . $extKey . '/Configuration/FlexForms/' . $pluginName . '.xml'
    );

})();

