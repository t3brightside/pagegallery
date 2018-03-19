<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "pagegallery".
 *
 * Auto generated | Identifier: 8bb019d1b3ba02220fa69ebdf2c26a82
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Page Gallery',
	'description' => 'Content element for page lists. Easy to configure galleries, teasers, newslists, products...',
	'category' => 'fe',
	'version' => '0.1.0',
	'state' => 'stable',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Tanel Põld',
	'author_email' => 'tanel@brightside.ee',
	'author_company' => 'Brightside OÜ / t3brightside.com',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '8.7.0 - 8.7.99',
			'fluid_styled_content' => '',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:78:{s:14:"Configuration/";s:4:"d41d";s:18:"Configuration/TCA/";s:4:"d41d";s:28:"Configuration/TCA/Overrides/";s:4:"d41d";s:44:"Configuration/TCA/Overrides/sys_template.php";s:4:"1cf4";s:9:"__MACOSX/";s:4:"d41d";s:23:"__MACOSX/Configuration/";s:4:"d41d";s:27:"__MACOSX/Configuration/TCA/";s:4:"d41d";s:37:"__MACOSX/Configuration/TCA/Overrides/";s:4:"d41d";s:55:"__MACOSX/Configuration/TCA/Overrides/._sys_template.php";s:4:"b973";s:42:"Configuration/TCA/Overrides/tt_content.php";s:4:"fd9f";s:53:"__MACOSX/Configuration/TCA/Overrides/._tt_content.php";s:4:"b973";s:38:"__MACOSX/Configuration/TCA/._Overrides";s:4:"b973";s:28:"__MACOSX/Configuration/._TCA";s:4:"b973";s:25:"Configuration/TypoScript/";s:4:"d41d";s:33:"Configuration/TypoScript/setup.ts";s:4:"ceed";s:34:"__MACOSX/Configuration/TypoScript/";s:4:"d41d";s:44:"__MACOSX/Configuration/TypoScript/._setup.ts";s:4:"b973";s:35:"__MACOSX/Configuration/._TypoScript";s:4:"b973";s:21:"Configuration/PageTS/";s:4:"d41d";s:29:"Configuration/PageTS/setup.ts";s:4:"bd50";s:30:"__MACOSX/Configuration/PageTS/";s:4:"d41d";s:40:"__MACOSX/Configuration/PageTS/._setup.ts";s:4:"b973";s:31:"__MACOSX/Configuration/._PageTS";s:4:"b973";s:24:"__MACOSX/._Configuration";s:4:"b973";s:8:"Classes/";s:4:"d41d";s:14:"Classes/Hooks/";s:4:"d41d";s:29:"Classes/Hooks/PageLayoutView/";s:4:"d41d";s:66:"Classes/Hooks/PageLayoutView/PagegalleryElementPreviewRenderer.php";s:4:"5d05";s:17:"__MACOSX/Classes/";s:4:"d41d";s:23:"__MACOSX/Classes/Hooks/";s:4:"d41d";s:38:"__MACOSX/Classes/Hooks/PageLayoutView/";s:4:"d41d";s:77:"__MACOSX/Classes/Hooks/PageLayoutView/._PagegalleryElementPreviewRenderer.php";s:4:"b973";s:39:"__MACOSX/Classes/Hooks/._PageLayoutView";s:4:"b973";s:24:"__MACOSX/Classes/._Hooks";s:4:"b973";s:18:"__MACOSX/._Classes";s:4:"b973";s:10:"Resources/";s:4:"d41d";s:17:"Resources/Public/";s:4:"d41d";s:24:"Resources/Public/Images/";s:4:"d41d";s:30:"Resources/Public/Images/Icons/";s:4:"d41d";s:65:"Resources/Public/Images/Icons/mimetypes-x-content-pagegallery.svg";s:4:"e588";s:19:"__MACOSX/Resources/";s:4:"d41d";s:26:"__MACOSX/Resources/Public/";s:4:"d41d";s:33:"__MACOSX/Resources/Public/Images/";s:4:"d41d";s:39:"__MACOSX/Resources/Public/Images/Icons/";s:4:"d41d";s:76:"__MACOSX/Resources/Public/Images/Icons/._mimetypes-x-content-pagegallery.svg";s:4:"b973";s:40:"__MACOSX/Resources/Public/Images/._Icons";s:4:"b973";s:37:"Resources/Public/Images/typo3Logo.svg";s:4:"82ad";s:48:"__MACOSX/Resources/Public/Images/._typo3Logo.svg";s:4:"b973";s:34:"__MACOSX/Resources/Public/._Images";s:4:"b973";s:24:"Resources/Public/Styles/";s:4:"d41d";s:39:"Resources/Public/Styles/pagegallery.css";s:4:"e0b4";s:33:"__MACOSX/Resources/Public/Styles/";s:4:"d41d";s:50:"__MACOSX/Resources/Public/Styles/._pagegallery.css";s:4:"b973";s:34:"__MACOSX/Resources/Public/._Styles";s:4:"b973";s:27:"__MACOSX/Resources/._Public";s:4:"b973";s:18:"Resources/Private/";s:4:"d41d";s:27:"Resources/Private/Language/";s:4:"d41d";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"7245";s:27:"__MACOSX/Resources/Private/";s:4:"d41d";s:36:"__MACOSX/Resources/Private/Language/";s:4:"d41d";s:54:"__MACOSX/Resources/Private/Language/._locallang_db.xml";s:4:"b973";s:37:"__MACOSX/Resources/Private/._Language";s:4:"b973";s:28:"Resources/Private/Templates/";s:4:"d41d";s:44:"Resources/Private/Templates/Pagegallery.html";s:4:"d10c";s:37:"__MACOSX/Resources/Private/Templates/";s:4:"d41d";s:55:"__MACOSX/Resources/Private/Templates/._Pagegallery.html";s:4:"b973";s:38:"__MACOSX/Resources/Private/._Templates";s:4:"b973";s:28:"__MACOSX/Resources/._Private";s:4:"b973";s:20:"__MACOSX/._Resources";s:4:"b973";s:12:"ext_icon.png";s:4:"5a71";s:23:"__MACOSX/._ext_icon.png";s:4:"b973";s:25:"__MACOSX/._ext_emconf.php";s:4:"b973";s:14:"ext_tables.sql";s:4:"3002";s:25:"__MACOSX/._ext_tables.sql";s:4:"b973";s:17:"ext_localconf.php";s:4:"0cb2";s:28:"__MACOSX/._ext_localconf.php";s:4:"b973";s:10:"README.txt";s:4:"55aa";s:21:"__MACOSX/._README.txt";s:4:"b973";}',
);

?>