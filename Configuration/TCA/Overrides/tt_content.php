<?php
	$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['pagegallery_sub'] =  'mimetypes-x-content-pagegallery';
	$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['pagegallery_selected'] =  'mimetypes-x-content-pagegallery';
	$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['pagegallery_category'] =  'mimetypes-x-content-pagegallery';

	array_splice(
		$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'],
		6,
		0,
		array(
			array(
				'Gallery of Pages',
				'pagegallery_selected',
				'mimetypes-x-content-pagegallery'
			)
		)
	);
	array_splice(
		$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'],
		6,
		0,
		array(
			array(
				'Gallery of Subpages',
				'pagegallery_sub',
				'mimetypes-x-content-pagegallery'
			)
		)
	);
	array_splice(
		$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'],
		6,
		0,
		array(
			array(
				'Gallery of Categorized Pages',
				'pagegallery_category',
				'mimetypes-x-content-pagegallery'
			)
		)
	);
		
	$tempColumns = array(
		'tx_pagegallery_template' => array(
	        'exclude' => 1,
	        'label'   => 'Template',
	        'config'  => array(
	            'type'     => 'select',
	            'renderType' => 'selectSingle',
				'default' => 0,
	            'items'    => array(), /* items set in page TsConfig */
	        ),
	    ),
		'tx_pagegallery_orderby' => array(
	        'exclude' => 1,
	        'label'   => 'Sort by',
	        'config'  => array(
	            'type'     => 'select',
	            'renderType' => 'selectSingle',
				'default' => 0,
	            'items' => array(
                    array('Page tree (default)', '0'),
				    array('Page title (a → z)', 'title ASC'),
				    array('Page title (z → a)', 'title DESC'),
				    array('Last updated (now → past)', 'lastUpdated DESC'),
				    array('Last updated (past → now)', 'lastUpdated ASC'),
				    array('Publish date (now → past)', 'starttime DESC'),
				    array('Publish date (past → now)', 'starttime ASC'),
                ),
            ),
	    ),
		'tx_pagegallery_startfrom' => array(
			'exclude' => 0,
			'label' => 'Start showing from number',
			'config' => array(
				'type' => 'input',
				'size' => '1',
			),
		),
		'tx_pagegallery_limit' => array(
			'exclude' => 0,
			'label' => 'Number of pages shown',
			'config' => array(
				'type' => 'input',
				'size' => '1',
			),
		),
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
//	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:pagegallery/Resources/Private/Language/locallang_db.xml');

	
	$GLOBALS['TCA']['tt_content']['types']['pagegallery_sub'] = array(
		'showitem' => '
			--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --palette--;;pagegallerySettings,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns
        '
	);
	$GLOBALS['TCA']['tt_content']['types']['pagegallery_selected'] = $GLOBALS['TCA']['tt_content']['types']['pagegallery_sub'];
		
	$GLOBALS['TCA']['tt_content']['palettes']['pagegallerySettings']['showitem'] = '
		tx_pagegallery_template,
		tx_pagegallery_orderby,
		tx_pagegallery_startfrom,
		tx_pagegallery_limit,
	';
	
	$GLOBALS['TCA']['tt_content']['types']['pagegallery_category'] = array(
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                    selected_categories,
                    category_field,
					--palette--;;pagegallerySettingsCat,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
                --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns
            ',
            'columnsOverrides' => [
                'category_field' => [
                    'config' => [
                        'itemsProcConfig' => [
                            'table' => 'pages'
                        ]
                    ]
                ]
            ]
        
        );
        $GLOBALS['TCA']['tt_content']['palettes']['pagegallerySettingsCat']['showitem'] = '
		tx_pagegallery_template,
		tx_pagegallery_startfrom,
		tx_pagegallery_limit,
	';