# ext: pagegallery
### Installation
Install from TER and add static template to page template.

### In page TsConfig:
**Adding new and/or overwritinng templates**
`TCEFORM.tt_content.tx_pagegallery_template.addItems {`
`3 = Rename the template`
`4 = My Custom Template`
`}`

**Removing templates from backend drop down list**
`TCEFORM.tt_content.tx_pagegallery_template.removeItems = 1,2`

#### TypoScript / HTML templates:
For customizing layouts take a look at:
1. pagegallery/Configuration/TypoScript/setup.ts – how to change the location of the Fluid template and CSS file
2. pagegallery/Resources/Private/Templates/Pagegallery.html – how to change the actual HTML template regarding the tx_pagegallery_template number

### TODO
1. Adding multi language support for the backend
2. Back end configurable crop ratio
3. Show selected options in page module
4. Enable sort options in category mode?

## Development and maintenance
* **Tanel Põld**
[Brightside OÜ](https://t3brightside.com/) – TYPO3 development specialized web agency