TCEFORM.tt_content.tx_pagegallery_template.addItems {
	0 = Image and title (default)
	1 = Image, title and subtitle
	2 = Image, title and abstract
	3 = Image only
	4 = Title only
}

mod.wizards.newContentElement.wizardItems.common {
   elements {
      pagegallery_selected {
         iconIdentifier = mimetypes-x-content-pagegallery
         title = Gallery of Pages
         description = Shows selected pages.
         tt_content_defValues {
            CType = pagegallery_selected
         }
      }
      pagegallery_sub {
         iconIdentifier = mimetypes-x-content-pagegallery
         title = Gallery of Subpages
         description = Shows subpages of selected pages.
         tt_content_defValues {
            CType = pagegallery_sub
         }
      }
      pagegallery_category {
         iconIdentifier = mimetypes-x-content-pagegallery
         title = Gallery of Categorized Pages
         description = Shows pages that belong to selected category(s).
         tt_content_defValues {
            CType = pagegallery_category
         }
      }
   }
   show := addToList(pagegallery_selected,pagegallery_sub,pagegallery_category)
}