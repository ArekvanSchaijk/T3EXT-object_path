<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Typoscript Object Path'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_' . pi1;
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_' .pi1. '.xml');

// t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Typoscript Object Path from Content Element');

?>