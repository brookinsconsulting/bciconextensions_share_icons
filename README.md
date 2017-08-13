BC Icon Extensions Share Icons
===================

This extension is a simple eZ Publish Platform (Legacy) share icons extension which uses the kernel override extension bciconextensions which provides a basic but time tested kernel override class modified to offer flexible solution for storing share/icon theme icons within eZ Publish extensions instead of kernel hacking your eZ Publish installation. This extension provides an example of how to make actual use of the kernel override icon system provided by bciconextensions. Great for smart developers!

This is helpful and useful for overriding or customizing the default share/icon theme(s) icon image files. With this solution you can finally add your own custom icons which match your custom content classes within an extension and prevent kernel hacking your eZ Publish Platform (Legacy) installation!


Version
=======

* The current version of BC Icon Extensions Share Icons is 0.1.0

* Last Major update: August 12, 2017


Copyright
=========

* BC Icon Extensions Share Icons is copyright 1999 - 2017 Brookins Consulting

* See: [COPYRIGHT.md](COPYRIGHT.md) for more information on the terms of the copyright and license


License
=======

BC Icon Extensions Share Icons is licensed under the GNU General Public License.

The complete license agreement is included in the [LICENSE](LICENSE.md) file.

BC Icon Extensions Share Icons is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License or at your
option a later version.

BC Icon Extensions Share Icons is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

The GNU GPL gives you the right to use, modify and redistribute
BC Icon Extensions Share Icons under certain conditions. The GNU GPL license
is distributed with the software, see the file LICENSE.

It is also available at [http://www.gnu.org/licenses/gpl.txt](http://www.gnu.org/licenses/gpl.txt)

You should have received a copy of the GNU General Public License
along with BC Icon Extensions Share Icons in LICENSE.

If not, see [http://www.gnu.org/licenses/](http://www.gnu.org/licenses/).

Using BC Icon Extensions Share Icons under the terms of the GNU GPL is free (as in freedom).

For more information or questions please contact: license@brookinsconsulting.com


Requirements
============

The following requirements exists for using BC Icon Extensions Share Icons extension:


### eZ Publish version

* Make sure you use eZ Publish version 4.x (required) or higher.

* Designed and tested with eZ Publish Community Project 2014.11


### PHP version

* Make sure you have PHP 5.x or higher.


Features
========

This solution provides the following features:

* Extension Share Icon Overrides

* Custom settings/icon.ini settings overrides: settings/icon.ini.append.php


### Dependencies

* This solution depends on eZ Publish Legacy and kernel class overrides enabled in config.php

* bciconextensions extensions


Installation
============

### Bundle Installation via Composer

Run the following command from your project root to install the bundle:

    bash$ composer require brookinsconsulting/bciconextensions_share_icons dev-master;


### Extension Activation

Required. Activate this extension by adding the following to your `settings/override/site.ini.append.php`:

    [ExtensionSettings]
    # <snip existing active extensions list />
    ActiveExtensions[]=bciconextensions_share_icons

Kernel class override extensions are **not** activated via ini settings. Normal site.ini extension activation settings are still required to use this extension and it's solution's custom settings.


### Enable eZ Publish Kernel Overrides

Kernel class overrides are only able to be used if you add the following to your eZ Publish Legacy config.php configuration file.

    cp -va config.php-RECOMMENDED config.php;
    # Edit config.php to set 'EZP_AUTOLOAD_ALLOW_KERNEL_OVERRIDE' to true. It should look like this:
    define( 'EZP_AUTOLOAD_ALLOW_KERNEL_OVERRIDE', true );


### Regenerate kernel class override autoloads

Regenerate kernel class override autoloads (Required).

    php ./bin/php/ezpgenerateautoloads.php --kernel-override;


### Clear the caches

Optional. Clear eZ Publish Platform / eZ Publish Legacy caches (Required).

    php ./bin/php/ezcache.php --clear-all;


### Install Rewrite Rules

#### Apache Rewrite Rules

Required. To be able to access the image files provided by an icon extension you must install the following apache mod_rewrite rule into your webserver's virtual host configuration.

    # bciconextensions required mod_rewrite rules to allow access to icon extension icon image files
    RewriteRule ^/extension/[^/]+/icons/[^/]+/[^/]+/[^/]+/.* - [L]

#### Nginx Rewrite Rules

Required. To be able to access the image files provided by an icon extension you must install the following nginx rewrite rule into your webserver's virtual host configuration.

    # bciconextensions required rewrite rules to allow access to icon extension icon image files
    rewrite "^/extension/([^/]+)/icons/([^/]+)/([^/]+)/([^/]+)/(.*)" "/extension/$1/design/$2/$3/$4" break;


Usage
=====

The solution is configured to work virtually by default once properly installed.

This solution allows you have to icon themes in extensions.

This means you install, activate and configure this extension in your installation and then create your own custom share/icon themes in your own custom extension.

History
=======

Icons are always bound to one single repository. This makes the hole icon-engine in eZ publish uncomfortable, especially in mulit-site environments.

It is much easier to have an icon engine, behaving similar to the template engine, which is capable of loading templates out of different designs, using a fallback design and even can load things from extensions.

This solution implements the following features:

1. Load icon themes via a extensions

2. Have a standard theme on which the engine falls back if an icon can't be found in the current theme

3. Have a list of additional themes, where the engine looks for icons before falling back to the standard theme


Usage - Creating your own icon extension
========================================

Sample configuration: To have icon themes in an extension, place them in /extensions/YOUREXTENSION/icons/YOURTHEME,
where YOUREXTENSION is the name of one of your extensions and YOURTHEME is a new theme.

Then set in [ExtensionSettings] the setting IconExtensions[] to:
IconExtensions[]=YOUREXTENSION

To make use of additional themes, name them using
AdditionalThemeList[], eg.:
AdditionalThemeList[]=blue
AdditionalThemeList[]=exotic

And make shure they exists either in an extension or in the default repository.

*Please note:* The directory structure of your icon extension (and it's themes) must match the directory structure conventions of the eZ Publish Legacy share/icons content provided in a default installation. The more you match the defaults expected the less ini setting configuration settings override you will require.


Troubleshooting
===============

### Read the FAQ

Some problems are more common than others. The most common ones are listed in the the [doc/FAQ.md](doc/FAQ.md)


### Support

If you have find any problems not handled by this document or the FAQ you can contact Brookins Consulting through the support system: [http://brookinsconsulting.com/contact](http://brookinsconsulting.com/contact)

