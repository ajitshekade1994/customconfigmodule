CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Configuration
 * Maintainers
 
INTRODUCTION
------------

This module needs to alter the existing Drupal "Site Information" form. Specifics:

* A new form text field named "Site API Key" needs to be added to the "Site Information" form with the default value of “No API Key yet”.
* When this form is submitted, the value that the user entered for this field should be saved as the system variable named "siteapikey".
* A Drupal message should inform the user that the Site API Key has been saved with that value.
* When this form is visited after the "Site API Key" is saved, the field should be populated with the correct value.
* The text of the "Save configuration" button should change to "Update Configuration".

 
REQUIREMENTS
------------

This module requires no modules outside of Drupal core. 

 
INSTALLATION
------------

 * Install as you would normally install a contributed Drupal module. Visit
   https://www.drupal.org/node/1897420 for further information. 
 
 CONFIGURATION
-------------

The module has no menu or modifiable settings. When enabled, the module will give Site Api Key on Site Configuration Site-Information page field. To disable the links back, disable the module and clear caches.

The top-level administration categories require this permission to be accessible. The administration menu will be empty unless this permission is granted.
 
 Current maintainers:
 -------------
Ajit Shekade