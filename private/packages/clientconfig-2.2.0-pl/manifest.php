<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2016 Mark Hamstra Web Development <hello@markhamstra.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
',
    'readme' => '-------------------------
ClientConfig
-------------------------
Author: Mark Hamstra
Contact: mark@modmore.com
-------------------------

ClientConfig is the by product of a workshop at MODXpo Europe 2012,
the "Developing Extras in MODX" one. See the session page at modxpo.eu
http://modxpo.eu/schedule/sessions/developing-extras-for-modx-hands-on
for more information and footage of the workshop.

ClientConfig gives your client a user-friendly interface for making site
wide changes, while you as the administrator set up the different options
available to the end-user.

Possible uses include:
- Regularly update a slogan or tag-line in header or footer
- Change call-to-action button colors based on the season
- Keep contact details updated in one central location
- Update the email-address a form sends notifications to.

Licensed under the MIT.',
    'changelog' => 'ClientConfig 2.2.0-pl
---------------------
Released on 2019-08-19

- Fix media source path being included for empty values [#152]
- When context values are empty, it will now fall back to the global value

ClientConfig 2.1.0-pl
---------------------
Released on 2018-12-05

- Update menu to no longer rely on modAction, instead using namespace routing [#158, #139]
- Fix image/file fields not refreshing when switching context [#147, #155]
- Adjust plugin to accept both OnMODXInit and OnHandleRequest so you can change the event it runs on, if needed [#140]
- Prevent events (i.e., priority) from being overwritten on upgrade [#148]

ClientConfig 2.0.0-pl
---------------------
Released on 2018-06-26

- Don\'t add _duplicate to the key when duplicating a setting [#142]
- Updated German [#141], Russian [#145] and Dutch translations

ClientConfig 2.0.0-rc1
----------------------
Released on 2017-10-04

- ClientConfig can now (optionally) manage settings for different contexts [#4/#112]
- Media fields (image/file) now prefix the media source url [#124]
- Allow snippet/chunk tags in options for the dropdown field [#104]
- Updated minimum requirements to PHP 5.5.0 and MODX 2.5.2.
- Added separate clientconfig.categories lexicon for the vertical tabs interface [#91]

ClientConfig 1.4.2-pl
---------------------
Released on 2017-07-22

- Restore PHP 5.3 compatibility in creating settings. Note: next release will require 5.5+!
- Fix issue saving settings on certain environments due to missing value for source [#129]
- Fix incorrect header/container alignment in both manager pages [#128]
- Fix (unused) namespace assets path (on new installs) [#126]

ClientConfig 1.4.1-pl
---------------------
Released on 2017-02-02

- Fix bug where the new source dropdown does not appear for image field types

ClientConfig 1.4.0-pl
---------------------
Released on 2017-01-31

- Fix loading of TinyMCE RTE, causing it to be initialised without configuration [#122]
- Add ClientConfig_ConfigChange event to be able of hooking into configuration changes [#117]
- Change plugin event from OnHandleRequest to OnMODXInit [#87, #109, #115]
- Enable inline editing in the admin component [#94, #95, #114]
- Fix field-required errors not being shown by adding a popup
- Accept 0 as valid required value on the number input [#119]
- Add a Password input type [#105]
- Add a File input type [#36]
- Don\'t show "Error adding field" errors during installation/upgrade [#92]
- Fix loading RTE if the field key contains a dot [#89]
- Add CMD/CTRL + S shortcut for saving the configuration [#80]
- Preserve linebreaks when editing a setting in the admin section by using a textarea for the value [#69]
- Relicense under the MIT license instead of GPL [#67]
- Allow specifying a media source for the image input type [#66]

ClientConfig 1.3.2-pl
---------------------
Released on 2015-12-09

- Update French translation
- Make sure image field uses the MODX default media source
- Respect manager_date_format and manager_time_format settings

ClientConfig 1.3.1-pl
---------------------
Released on 2014-07-20

- Update Dutch translation
- More weird border fixes
- Minor fix to when borders are added, specifically for 2.2.

ClientConfig 1.3.0-pl
---------------------
Released on 2014-07-19

- #27 Ability to import/export groups and settings
- #16 Auto-select first group when adding a setting
- #15 Force admins to create a group before creating a setting, as settings need groups
- #76 Fix issue where unchecking a checkbox would fail if the setting was required
- #78 Make the is_required column show Yes/No instead of true/false
- #60 Get rid of an extra border
- #75 Update help link to point to modmore.com

ClientConfig 1.2.1-pl
---------------------
Released on 2014-01-07

- #57 Add Google Font input type (Thanks @garryn)
- #63 Fix issue loading more than one rich text field

ClientConfig 1.2.0-pl
---------------------
Released on 2013-08-16

- #38 Add setting (vertical_tabs) to allow stacking groups vertically instead of horizontal tabs
- #46 Add ability to duplicate a setting
- #45 Show field options field when editing a select box setting.
- #54 Add Rich Text input type.
- Improved width consistency of input items.
- #37 Added input type Image (thanks COEX!)
- #3 Fix/add colorpicker input type (thanks COEX!)

ClientConfig 1.1.2-pl
---------------------
Released on 2013-03-07

- Add/update translations: Russian (thx @Alroniks!), German (thx @enigmatic-user!), Swedish (thx @fractalwolfe!) and Dutch.
- #47 Show field descriptions under the fields. (Thanks @fractalwolfe!)
- #40 Add placeholder tooltips with the  for admins. (Thanks @fractalwolfe!)

ClientConfig 1.1.1-pl
---------------------
Released on 2012-12-31

- #35 Don\'t strip out tags when saving values (relies on allow_tags_in_post=true in mgr context).
- #39 Increase database field max sizes for longer descriptions and values.
- #33 Make sure to show message when no tabs are to be shown.
- #34 Prevent E_WARNING when there are no settings configured.

ClientConfig 1.1.0-pl
---------------------
Released on 2012-12-16

- #26 Add ability to manually sort Settings within a Group
- #25 Add ability to manually sort Groups
- #21 Add Filter on Group for settings.
- #24 Remember last visited tab in both admin and client view.
- #22 Add "Help!" button on Admin panel linking to RTFM instructions.
- Improve checking if key exists on updating a setting.
- #30 Fix bug with incorrectly checking cgSetting.is_required checkbox
- Make controller a tad more portable.

ClientConfig 1.0.0-pl
---------------------
Released on 2012-12-09

First release
',
    'setup-options' => 'clientconfig-2.2.0-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'e6558199589c020fdf068d49add7b155',
      'native_key' => 'clientconfig',
      'filename' => 'modNamespace/d2a4a7e7a047c139f3c9f7338a02f396.vehicle',
      'namespace' => 'clientconfig',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '797200ffd1272c9cca9cce32cb7c5290',
      'native_key' => 'clientconfig.admin_groups',
      'filename' => 'modSystemSetting/fd40ac5b5a5a45e313458ea53820205d.vehicle',
      'namespace' => 'clientconfig',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '935a82ad64eb0b29ee86b9c0cf60ed17',
      'native_key' => 'clientconfig.clear_cache',
      'filename' => 'modSystemSetting/37f2c57cd5d10824b853b37dc2ed8763.vehicle',
      'namespace' => 'clientconfig',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'deb32bc76c8d227771e621eb02ecad5b',
      'native_key' => 'clientconfig.vertical_tabs',
      'filename' => 'modSystemSetting/0b5c72d879acb84a642b65744b1fe7c0.vehicle',
      'namespace' => 'clientconfig',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2b62491bfa7f51b99d83db78bf02616b',
      'native_key' => 'clientconfig.context_aware',
      'filename' => 'modSystemSetting/6347e634a776803abf4c3a196540c3b3.vehicle',
      'namespace' => 'clientconfig',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ed0eff82df77eb01084dc726d468934b',
      'native_key' => 'clientconfig.google_fonts_api_key',
      'filename' => 'modSystemSetting/c5d49145ab35bfd8da4dd15814ff3a06.vehicle',
      'namespace' => 'clientconfig',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '704508072bdcbc5fc7e03e8a80f0a14b',
      'native_key' => 'ClientConfig_ConfigChange',
      'filename' => 'modEvent/fb5ba90e32eaa0c407a1640d70edc2bf.vehicle',
      'namespace' => 'clientconfig',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modPlugin',
      'guid' => 'c4e240332e25e95b793feea6b11625d9',
      'native_key' => 1,
      'filename' => 'modPlugin/154ec54835590fe9bf11b4fb8af8e5a5.vehicle',
      'namespace' => 'clientconfig',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'b97c5e4497bc738da6dfd99ee8796a22',
      'native_key' => 'clientconfig',
      'filename' => 'modMenu/d221e27808376e772a503427671021e0.vehicle',
      'namespace' => 'clientconfig',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '94c61f5fac6da092c78ad9f366e788bb',
      'native_key' => 1,
      'filename' => 'modCategory/155df1f488b8d5478575eee16fd91614.vehicle',
      'namespace' => 'clientconfig',
    ),
  ),
);