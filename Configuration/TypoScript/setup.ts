# by t3brightside.com

page.includeCSS.pagegallery = EXT:pagegallery/Resources/Public/Styles/pagegallery.css

###
# gallery list of subpages or selected pages as a special menu item
###

tt_content.defaultpagegallery =< lib.fluidContent
tt_content.defaultpagegallery.templateRootPaths.200 = EXT:pagegallery/Resources/Private/Templates/
tt_content.defaultpagegallery.partialRootPaths.200 = EXT:pagegallery/Resources/Private/Partials
tt_content.pagegallery_sub =< tt_content.defaultpagegallery
tt_content.pagegallery_sub {
    templateName = Pagegallery
    dataProcessing {
        10 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
        10 {
            special = directory
			special.value.field = pages
			alternativeSortingField.field = tx_pagegallery_orderby
			maxItems.field = tx_pagegallery_limit
			begin.field = tx_pagegallery_startfrom
            dataProcessing {
                10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
                10 {
                    references.fieldName = media
                }
            }
        }
    }
    stdWrap {
        editIcons = tt_content: header [header_layout], pages
        editIcons {
            iconTitle.data = LLL:EXT:fluid_styled_content/Resources/Private/Language/FrontendEditing.xlf:editIcon.menu
        }
    }
}
tt_content.pagegallery_selected < tt_content.pagegallery_sub
tt_content.pagegallery_selected.dataProcessing.10.special = list

tt_content.pagegallery_category < tt_content.pagegallery_sub
tt_content.pagegallery_category.dataProcessing.10.special = categories
tt_content.pagegallery_category.dataProcessing.10.special.value.field = selected_categories
tt_content.pagegallery_category.dataProcessing.10.special.relation.field = category_field
tt_content.pagegallery_category.dataProcessing.10.special.sorting = sorting
