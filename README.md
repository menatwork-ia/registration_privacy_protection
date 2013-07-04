registration_privacy_protection
===============================

Contao Extension :: Add privacy protection checkbox to the registration form 

Installation & Configuration
----------------------------

* Unpack the archive on your server
* Open the installation directory in your web browser
* Update the database

Set link to privacy protection page
-----------------------------------

Set following code in system/config/langconfig.php

```php
$GLOBALS['TL_LANG']['tl_member']['privacy_protection'] = array('Datenschutz', 'Ich habe die <a href="{{link_url::id}}" data-lightbox>Datenschutzerklärung</a> zur Kenntnis genommen.');
```