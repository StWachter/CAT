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
    'changelog' => '++ ClientConfig 1.4.2-pl
++ Released on 2017-07-22
+++++++++++++++++++++++++
- Restore PHP 5.3 compatibility in creating settings. Note: next release will require 5.5+!
- Fix issue saving settings on certain environments due to missing value for source [#129]
- Fix incorrect header/container alignment in both manager pages [#128]
- Fix (unused) namespace assets path (on new installs) [#126]

++ ClientConfig 1.4.1-pl
++ Released on 2017-02-02
+++++++++++++++++++++++++
- Fix bug where the new source dropdown does not appear for image field types

++ ClientConfig 1.4.0-pl
++ Released on 2017-01-31
+++++++++++++++++++++++++
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

++ ClientConfig 1.3.2-pl
++ Released on 2015-12-09
+++++++++++++++++++++++++
- Update French translation
- Make sure image field uses the MODX default media source
- Respect manager_date_format and manager_time_format settings

++ ClientConfig 1.3.1-pl
++ Released on 2014-07-20
+++++++++++++++++++++++++
- Update Dutch translation
- More weird border fixes
- Minor fix to when borders are added, specifically for 2.2.

++ ClientConfig 1.3.0-pl
++ Released on 2014-07-19
+++++++++++++++++++++++++
- #27 Ability to import/export groups and settings
- #16 Auto-select first group when adding a setting
- #15 Force admins to create a group before creating a setting, as settings need groups
- #76 Fix issue where unchecking a checkbox would fail if the setting was required
- #78 Make the is_required column show Yes/No instead of true/false
- #60 Get rid of an extra border
- #75 Update help link to point to modmore.com

++ ClientConfig 1.2.1-pl
++ Released on 2014-01-07
+++++++++++++++++++++++++
- #57 Add Google Font input type (Thanks @garryn)
- #63 Fix issue loading more than one rich text field

++ ClientConfig 1.2.0-pl
++ Released on 2013-08-16
+++++++++++++++++++++++++
- #38 Add setting (vertical_tabs) to allow stacking groups vertically instead of horizontal tabs
- #46 Add ability to duplicate a setting
- #45 Show field options field when editing a select box setting.
- #54 Add Rich Text input type.
- Improved width consistency of input items.
- #37 Added input type Image (thanks COEX!)
- #3 Fix/add colorpicker input type (thanks COEX!)

++ ClientConfig 1.1.2-pl
++ Released on 2013-03-07
+++++++++++++++++++++++++
- Add/update translations: Russian (thx @Alroniks!), German (thx @enigmatic-user!), Swedish (thx @fractalwolfe!) and Dutch.
- #47 Show field descriptions under the fields. (Thanks @fractalwolfe!)
- #40 Add placeholder tooltips with the [[++key]] for admins. (Thanks @fractalwolfe!)

++ ClientConfig 1.1.1-pl
++ Released on 2012-12-31
+++++++++++++++++++++++++
- #35 Don\'t strip out tags when saving values (relies on allow_tags_in_post=true in mgr context).
- #39 Increase database field max sizes for longer descriptions and values.
- #33 Make sure to show message when no tabs are to be shown.
- #34 Prevent E_WARNING when there are no settings configured.

++ ClientConfig 1.1.0-pl
++ Released on 2012-12-16
+++++++++++++++++++++++++
- #26 Add ability to manually sort Settings within a Group
- #25 Add ability to manually sort Groups
- #21 Add Filter on Group for settings.
- #24 Remember last visited tab in both admin and client view.
- #22 Add "Help!" button on Admin panel linking to RTFM instructions.
- Improve checking if key exists on updating a setting.
- #30 Fix bug with incorrectly checking cgSetting.is_required checkbox
- Make controller a tad more portable.

++ ClientConfig 1.0.0-pl
++ Released on 2012-12-09
+++++++++++++++++++++++++
First release
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'ae5ab14b1712cb42d6eee9781ffe03f5',
      'native_key' => 'clientconfig',
      'filename' => 'modNamespace/692890634d93bcfec8538c9496012e0c.vehicle',
      'namespace' => 'clientconfig',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c74a14e493f839d7e640b5e5c935632c',
      'native_key' => 'clientconfig.admin_groups',
      'filename' => 'modSystemSetting/61206ed9b08316bb742edc233b7d6994.vehicle',
      'namespace' => 'clientconfig',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7f585c35e5e7cd159d932d9669cda010',
      'native_key' => 'clientconfig.clear_cache',
      'filename' => 'modSystemSetting/f6491284863b960d764f4113c4ee2309.vehicle',
      'namespace' => 'clientconfig',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a5fb661733d6188acf67662864895066',
      'native_key' => 'clientconfig.vertical_tabs',
      'filename' => 'modSystemSetting/66effe60890da6391125ea4a64bf7ae9.vehicle',
      'namespace' => 'clientconfig',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '70d4b70cdd0c4706322690d81d14fc82',
      'native_key' => 'clientconfig.google_fonts_api_key',
      'filename' => 'modSystemSetting/a3410d7581f7a6e6258ca18653e089ff.vehicle',
      'namespace' => 'clientconfig',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '427cd57983fe6e0c95b9e06ad174505d',
      'native_key' => 'ClientConfig_ConfigChange',
      'filename' => 'modEvent/187cde875efcc37bae2e4d11b7b06687.vehicle',
      'namespace' => 'clientconfig',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modPlugin',
      'guid' => 'cf0e10c07cb92cf1a4c0943cb4d4ff91',
      'native_key' => 1,
      'filename' => 'modPlugin/477a88a919729d0f0e7b8d647104d2de.vehicle',
      'namespace' => 'clientconfig',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '25af9465e09c1ab8b3712c9e2f810156',
      'native_key' => 'clientconfig',
      'filename' => 'modMenu/2dc1b1961619a5a3b478b3c67b137809.vehicle',
      'namespace' => 'clientconfig',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'ec5d8da87ac0514196d6a6d123dfc74e',
      'native_key' => 1,
      'filename' => 'modCategory/c389e9135654b5935b45efb95c3d8fe1.vehicle',
      'namespace' => 'clientconfig',
    ),
  ),
);