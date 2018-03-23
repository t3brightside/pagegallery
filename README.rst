Pagegallery
=============

**TYPO3 CMS extension for easy to configure page lists, galleries, teasers etc.**

System requirements
-------------------

- TYPO3 8.7 LTS
- fluid_styled_content

Features
--------

- Page list of sub pages
- Page list of selected pages
- Page list of categories

Installation
------------
-  Install from TER (**pagegallery**) or Composer (**t3brightside/pagegallery**)
-  Include static template

Usage
-----

Add as any other content element. Select desired template in content element.

Admin
-----

**Add new and/or overwrite templates in PageTS:**

>>>
  TCEFORM.tt_content.tx_pagegallery_template.addItems {
    5 = Rename the template
    6 = My Custom Template
  }
<<<

**Removing templates from backend drop down list:**

>>>
 TCEFORM.tt_content.tx_pagegallery_template.removeItems = 1,2
<<<

**For customizing template take a look at:**

- *pagegallery/Configuration/TypoScript/setup.ts* – how to change the location of the Fluid template and CSS file
- *pagegallery/Resources/Private/Templates/Pagegallery.html* – how to change the actual HTML template regarding the tx_pagegallery_template number

Sources
-------

-  `GitHub`_
-  `Packagist`_
-  `TER`_

Development and maintenance
---------------------------

`Brightside OÜ`_ – TYPO3 specialized web agency

.. _GitHub: https://github.com/t3brightside/pagegallery
.. _Packagist: https://packagist.org/packages/t3brightside/pagegallery
.. _TER: https://extensions.typo3.org/extension/pagegallery/
.. _Brightside OÜ: https://t3brightside.com/