<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'modmore is a valid license holder of the Redactor OEM license by Imperavi.

This license is a legal agreement between you and modmore for the use of the Redactor for MODX Extra. By downloading or installing Redactor, you agree to the terms and conditions of this license. modmore reservers the right to alter this agreement at any time, for any reason, without notice.

This license is valid for a single MODX installation and may not be redistributed, changed or removed of its license.

===== Included for reference, the Redactor OEM License ====

This license is a legal agreement between you and Imperavi for the use of Redactor (*all versions*) Software (the “Software”). By downloading any version of redactor you agree to be bound by the terms and conditions of this license. Imperavi reserves the right to alter this agreement at any time, for any reason, without notice.

Restrictions
Unless you have been granted prior, written consent from Imperavi, you may not:
Reproduce, distribute, or transfer the Software as a sole product, or portions thereof, to any third party.
Sell, rent, lease, assign, or sublet the Software as a sole product or portions thereof.
Grant rights to any other person.
Use the software in violation of any Canadian or international laws or regulations.
Display of Copyright Notices
All copyright and proprietary notices and logos (if any) of Redactor/Imperavi and within the Software files must remain intact.

Making Copies
You may make copies of the Software for back-up purposes, provided that you reproduce the Software in its original form and with all proprietary notices on the back-up copy. You may include copies of the Software as an integral part of your product (according to Permitted Use stated above).

Software Modification
You may alter, modify, or extend the Software for your own use or for use in as an integral part of your product or service, or commission a third-party to perform modifications for you, but you may not resell, redistribute or transfer the modified or derivative version of the Software as a sole product without prior written consent from Imperavi. Components from the Software may not be extracted and used in other programs without prior written consent from Imperavi.

Technical Support
Technical support is provided by email. No representations or guarantees are made regarding the response itself or response time in which support questions are answered. For the Support License holders response is guaranteed and the response time is no more than 1 (one) business day (Friday requests are answered on Monday; afternoon requests are answered next day).

Refund Policy
We offer a 30 day money back. If for any reason Redactor doesn’t work out for your project, simply email us within 30 days of purchase for a full refund.

Indemnity
You agree to indemnify and hold harmless Imperavi for any third-party claims, actions or suits, as well as any related expenses, liabilities, damages, settlements or fees arising from your use or misuse of the Software, or a violation of any terms of this license.

Disclaimer Of Warranty
THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, WARRANTIES OF QUALITY, PERFORMANCE, NON-INFRINGEMENT, MERCHANTABILITY, OR FITNESS FOR A PARTICULAR PURPOSE. FURTHER, IMPERAVI DOES NOT WARRANT THAT THE SOFTWARE OR ANY RELATED SERVICE WILL ALWAYS BE AVAILABLE.

Limitations Of Liability
YOU ASSUME ALL RISK ASSOCIATED WITH THE INSTALLATION AND USE OF THE SOFTWARE. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS OF THE SOFTWARE BE LIABLE FOR CLAIMS, DAMAGES OR OTHER LIABILITY ARISING FROM, OUT OF, OR IN CONNECTION WITH THE SOFTWARE. LICENSE HOLDERS ARE SOLELY RESPONSIBLE FOR DETERMINING THE APPROPRIATENESS OF USE AND ASSUME ALL RISKS ASSOCIATED WITH ITS USE, INCLUDING BUT NOT LIMITED TO THE RISKS OF PROGRAM ERRORS, DAMAGE TO EQUIPMENT, LOSS OF DATA OR SOFTWARE PROGRAMS, OR UNAVAILABILITY OR INTERRUPTION OF OPERATIONS.
',
    'readme' => '------------------------------------------------------
Redactor - Sexy RTE/WYSIWYG Editor for MODX Revolution
------------------------------------------------------
Author: JP DeVries, Mark Hamstra - support@modmore.com
------------------------------------------------------

Redactor is a commercial-grade Rich Text Editor developed by Imperavi, tightly integrated into MODX by modmore. Redactor for MODX has all the features you would expect in a rich text editor with all the flexibility you expect from MODX and modmore.

The media management in Redactor is optimized for client use, providing the site builder with lots of power to enforce upload and selection rules.

For a full list of features and configuration, please check the website: https://www.modmore.com/extras/redactor/
',
    'changelog' => 'Redactor 2.3.4-pl
-----------------
Released on 2019-02-19

- Fix missing translation for aligning images in the center, by re-using alignment strings for text alignment [S17648]
- Fix E_NOTICE undefined index "style" when the style is not defined on custom formatting [S19277]
- When using multiple classes in a formattingAdd style, the styles now apply in the dropdown too [S19277]
- Fix replaceTags setting not working [F1733]
- Fix plugin for linking to resources missing from Redactor TVs [F1723]
- Fix redactor.linkResource setting not having any effect; it now toggles the custom linking tabs (resource, email, etc) [F1732]

Redactor 2.3.3-pl
-----------------
Released on 2018-07-04

- Fix package installation on MODX3
- Fix broken editor in MODX3 due to missing language (stored in session instead of setting)

Redactor 2.3.2-pl
-----------------
Released on 2018-02-06

- Add Ukrainian language file [S14393]
- Fix license check running daily instead of weekly

Redactor 2.3.1-pl
-----------------
Released on 2017-08-10

- Fix incorrect falling back to default media source instead of redactor-specific settings [S12760]

Redactor 2.3.0-pl
-----------------
Released on 2017-07-10

- Allow custom (inline) formatting to be applied to headers

Redactor 2.2.3-pl
-----------------
Released on 2017-05-04

- Revert change to Fix buttonsHide settings which caused a breaking change

Redactor 2.2.2-pl
-----------------
Released on 2017-05-02

- Fix Bold/italic/underline etc don\'t work in Chrome [#456]
- Fix buttonsHide settings, set these as comma separated lists

Redactor 2.2.1-pl
-----------------
Released on 2017-04-07

- Add new `root-relative` baseurls mode value for subdirectory-based contexts with shared assets in the site root [S11174]
- Fix potential jQuery conflicts affecting Redactor template variables [S11205]
- Fix context-specific redactor.css setting not being recognized [#443]
- Fix Rich Text TVs on symlinks/weblinks/static resources not getting enhanced [#449]
- Add missing video plugin control on Redactor TVs [#441]
- Fix Dutch translation of "paragraph" [#413]
- Fix for redactor.removeAttr and redactor.allowedAttr syntax
- Fix Search/Replace plugin [#447]
- Fix unintentional typeahead in Edit Image > Alt Text field [#453]

Redactor 2.2.0-pl
-----------------
Released on 2016-05-19

- Fix predefinedLinks plugin
- Hacked redactor.js to add support for multiple modal callbacks

Redactor 2.2.0-rc2
------------------
Released on 2016-05-03

- Fix file path issue with dom4 and no-flexbox polyfills which broke the browser in certain browsers
- Fix issue causing file browser to not open to redactor.file_browse_path
- Fix uncaught type error in Eureka Media Browser when media source is not yet set

Redactor 2.2.0-rc1
------------------
Released on 2016-04-29

- All new Full Screen view in Eureka media browser model
- Eureka: New messaging "no files found" messaging
- Eureka: Separate Storage Prefix for Files and Images [#417]
- Eureka: Setting to disable localStorage via hidden eurekaUseLocalStorage setting [#418]
- Eureka: Control whether of not fullscreen mode is available via hidden eurekaAllowFullScreen System Setting
- Image Title Renamed to Alternative Text [#401]
- Removing references to autoresize [#394]
- Exposed redactor.initial_directory_depth Setting with a default value of 3. This means the Eureka Media Browser connectors will now attempt to recursively list directories three depths deep.

Redactor 2.1.1-pl
-----------------
Released on 2016-04-14

- Fix Broken Link Anchor Tab
- Image and File Browsers now use separate local storage cache keys
- Eureka: Separate Storage Prefix for Files and Images [#417]
- Eureka: Setting to disable localStorage via hidden eurekaUseLocalStorage setting [#418]
- Removing references to autoresize [#394]

Redactor 2.1.0-pl
-----------------
Released on 2016-03-29

- All new "List" View in Eureka Media Browser
- Fix Eureka upload button in Firefox [#405]
- Fix some buttons not available for TV usage [#416]
- Eureka: Option to disable enlarging of focused rows by creating an enlargeFocusRows System Setting set to false
- Fix compatibility with FileSluggy and similar extras [#398]
- Fix some buttons not available for TV usage [#416]
- Fix issue preventing images with uppercase extensions from showing [#404]

Redactor 2.0.7-pl
-----------------
Released on 2016-02-02

- Fix Eureka Media Browser Layout flips out completely on Chrome 48 [#399]

Redactor 2.0.6-pl
-----------------
Released on 2016-01-15

- plugin_uploadcare System Setting now defaults to false
- Respect Selected Text When Inserting Files [#384]
- Fix Weird Clips Behavior [#388]

Redactor 2.0.5-pl
-----------------
Released on 2015-12-23

- Restore the resource typeahead on image links [#372]
- Switching redactor.pastePlainText System Setting to default to false [#375]
- Fix Advanced Attributes don\'t persist in modal [#392]
- Insert Images by URL (See plugin_imageurl Setting)
- Fix issues with Formatting and Custom Formatting options not being used on Redactor TVs [S7400]
- Fix persistence of plugin-related Redactor TV options [S7400]
- Fix disabling plugins on specific Redactor TVs if they\'re enabled globally [S7400]
- Make sure Redactor TV options use the setting lexicons for better and translated descriptions [#109]

Redactor 2.0.4-pl
-----------------
Released on 2015-11-04

- Fix broken flexbox layout on touch devices [#387]
- Fix incorrect choose title when eureka upload is enabled [#386]
- Fix layout when Eureka sidebar is collapsed [#385]

Redactor 2.0.3-pl
-----------------
Released on 2015-10-27

- Fix incorrect link text on convertLink [#374]
- Fix issue with Clips not inserting inline HTML [#378]
- Fix incorrect check causing E_NOTICE errors in upload
- Fix bug with some upload path placeholders not working

Redactor 2.0.2-pl
-----------------
Released on 2015-10-01

- Update Redactor.js to 10.2.5 with several bug fixes
- Fix Eureka growing beyond available size with lots of directories [#367]
- Fix email links adding double mailto: [#368]
- Fix Eureka breaking out of the modal [#370]
- Improve consistency in modal styling [#371]

Redactor 2.0.1-pl
-----------------
Released on 2015-09-16

- Fix thumbnails not showing in certain environments [S6479]
- Fix Broken Image Edit Window [#366]
- Fix various z-index issues when used in MIGX and other components [S6480]

Redactor 2.0.0-pl
-----------------
Released on 2015-09-08

Redactor 2 is here! For the full details of the 2.0 release, please check the changelog for Redactor 2.0.0-rc2 below,
or visit https://www.modmore.com/blog/2015/announcing-redactor-2.0/ for the official announcement.

Fixes in 2.0.0-pl since 2.0.0-rc8:
- Fix loading of Eureka with js compression enabled [#354]
- Fix loadIntrotext not working in certain edge cases

Redactor 2.0.0-rc8
------------------
Released on 2015-09-05

- Show size of image while resizing [#95]
- Fix potential E_NOTICE error when dealing with ultimate parent [#353]
- Fix redactor.date_files not being respected on file uploads [#350]
- Fix dynamic thumbnail being missing from Eureka [#349]
- Fix switching back to visual mode with ace editor on TVs [#355]
- Prevent loading Ace multiple times when used on TVs
- Load Ace from CDN with fallback
- Fix missing limiter setting and incorrect format
- Fix Ace Editor In TVs (and not main content)
- Ensure un-ordered lists are bulleted with list-style-type:disc
- Breakout Media Source TV Input into File/Image [#362]
- Fix marginFloatLeft and marginFloatRight [#360]
- set redactor.linkTooltip to default to true

Redactor 2.0.0-rc7
------------------
Released on 2015-08-15

- Fix bug introduced in rc6 that prevented editing chunks

Redactor 2.0.0-rc6
------------------
Released on 2015-08-15

- Remove searchImages Setting
- ImagePX Plugin Fix (thanks for the Pull Request YvonneYu)
- Fix No Eureka on RedactorTVs [#351]
- Updated Eureka Media Browser localStorage keys to be more specific
- Allot Media Browser Stage more pixels [#328]
- Updated Redactor.js to 10.2.3

Redactor 2.0.0-rc5
------------------
Released on 2015-08-03

- Fix issue where saving a resource duplicated Redactor TVs [#344]
- Fix issue with Clips plugin causing fatal JavaScript error [#346]

Redactor 2.0.0-rc4
------------------
Released on 2015-07-30

- Added ability to use different media sources for uploading and browsing files vs images (does not effect Eureka browser) [#331]
- Fix issue with path placeholders not working as expected [#333]
- Fix issue where uploading files used the configured image path [#334]
- Fix issue with opening eureka for inserting files [#335]
- Fix issue where disabling eureka did not fallback to the legacy browsers [#336]
- Fix browse issue when using legacy (non-eureka) browser [#338]
- Fix broken source mode when using CodeMirror and a Redactor TV [#330]
- Only show images when browsing images in Eureka [S6009]
- Fix dropdown position when toolbar is fixed [S6009]
- Improve compatibility with dynamic media source paths using snippets relying on $modx->resource [#322]
- Fix issue where in some cases TVs that are moved to a new tab with form customizations have no toolbar

Redactor 2.0.0-rc3
------------------
Released on 2015-07-24

- Fix issue with right-side of the manager not loading after update to 2.0 on certain environments
- Fix issue with incorrect media source being initially chosen
- Fix issue where toolbars on TVs were hidden until scrolling [#321]
- Fix issue with fixed toolbars getting stuck when going to fullscreen mode [#324]
- Fix Root Directories not Expanding when selected [#326]

Redactor 2.0.0-rc2
------------------
Released on 2015-07-20

Redactor for MODX v2 is here! Our second major release of Redactor is based on v10.2.2 and ships with a lot of new features and improvements.
For upgrade notes, please visit https://www.modmore.com/redactor/documentation/upgrading-1.x-to-2.0/

Redactor.js v10 highlights:
- Largely rewritten with a modular design with 36 core modules and over a dozen plugins
- Dozens of new settings, callbacks and APIs
- Fixed 60+ formatting issues and 100+ other core editor bugs
- See http://imperavi.com/redactor/docs/whats-new-10/ and http://imperavi.com/redactor/log/ for more Imperavi updates

New Features:
- New, more powerful and better looking Media Browser for inserting images or files
- Syntax Highlighter Support for the source mode powered by Ace or CodeMirror (#262)
- Path placeholders now include Template Variables (with [[+tv.name_of_tv]]), parent alias, ultimate parent alias and all resource fields (#199)
- All settings are now context-aware, allowing per-context overrides on Redactor configuration (#146, #275)
- New custom formatting baked into the core (#260)
- Tagging for Clips plugin allows to find specific clips quicker (#250)
- Ability to set images dimensions in pixels
- Add subject, CC and BCC field to the Insert Link > Email tab as advanced attributes (#203)
- Optionally add a Redactor editor to the introtext (#243)
- Also see the list of Plugins below for more exciting new or improved optional features.

Improvements:
- Uploading images and files now requires the file_upload permission (#159)
- Boolean setting values are now properly recognized (#266)
- Improved handling of image urls, which are now relative to the site base url by default (#288)
- Updated jQuery to 1.11.3
- Show context on hover in Insert Link > Resource typeahead (#204)
- Prevent overwriting existing files by adding an incremental index to filenames instead (file sources only, #198)
- Better abstraction of MODX/modmore-specific overrides for faster Imperavi updates
- Fix issue with using typeahead on third party components (#248)
- Fix issue with attempting to create thumbnails of .svg images (#246)

Includes plugins as of Redactor 2.0:
- Base URLs: normalizes image src attributes to ensure clean output
- Breadcrumbs: shows the markup hierarchy from the cursor
- Clips: easily insert configurable snippets of code or special characters
- Contrast: hit f5 to inverse the editor colors for high contrast mode, works best in full screen
- Counter: shows the length of your content, and approximately how long it will take to read
- Defined Links: allows setting up predefined links that are available in a dropdown when adding a link
- Download: downloads the html source of what\'s in the editor to file
- Eureka: shiny new accessible media browser
- File manager: upload files or browse existing one with Eureka
- Font color: change the color of part of the text
- Font family: change the font family of the text
- Font size: change the size of the text
- Fullscreen: make the editor full screen for more immersive writing
- ImagePX: provides extra options in the image window to specify the size of an image in pixels
- Limiter: makes sure the content does not exceed a certain limit
- Norphan: prevents orphaned words at the end of sentences by adding a   between the last and second last word
- Replace: simple find and replace utility (#254)
- Speek: listen to your written words being spoken with the power of HTML5 speech APIs
- Syntax: use the Ace syntax editor for the source view; codemirror is also available
- Table: the table features that were available before are now available as separate plugin
- Text Direction: set the text direction of a block-level element
- Text Expander: expend small pieces of text into a larger one
- UploadCare: as alternative to locally hosting images, UploadCare lets you upload directly to their service from Redactor

Removed features and breaking changes:
- Please see the upgrade notes at https://www.modmore.com/redactor/documentation/upgrading-1.x-to-2.0/

Redactor 1.5.3-pl
-----------------
Released on 2014-12-30

- Fix issue browsing images when there is only one image in the browse folder.

Redactor 1.5.2-pl
-----------------
Released on 2014-11-07

- Load the current resource more definitively to cover some edge cases where the resource is not in the modX scope
- Loosens Patch 11291 Conditional which caused asset paths to break in Revolution 2.3.2+
- Lexicon Updates

Redactor 1.5.1-pl
-----------------
Released on 2014-10-29

- Fix z-index issue when used with MIGX
- #244 Fixes Adding Classes via Custom Formats

Redactor 1.5.0-pl
-----------------
Released on 2014-08-14

- Several all new features!!! See Redactor 1.5.0-rc1 release notes below for more info https://www.modmore.com/blog/2014/announcing-redactor-1.5/
- Added Hidden Mobile Buttons to TV Level
- Lexicon Updates

Redactor 1.5.0-rc2
------------------
Released on 2014-08-08

- Some more design tweaks in modals and fields for better consistency
- Fix "undefined" placeholder for linking to resources
- #235 Fixed toolbar offset height in MODX 2.2.x
- #237 Fix Linking issue when editing images
- #238 Fixed underlapping toolbar issue
- Added toolbarFixed and toolbarFixedBox settings
- Fix setting lexicon keys for predefinedLinks and shortcutsAdd

Redactor 1.5.0-rc1
------------------
Released on 2014-08-05

- ALL NEW Custom Toolbars Feature!!! https://www.modmore.com/redactor/toolbar
- New Custom Formats WYSIWYG Widget https://www.modmore.com/extras/redactor/documentation/creating-custom-formats#/custom-formats
- Now easier to link image to resources with new typeahead feature
- New Predefined Links Feature for quicker editing
- Added rebeccapurple support to all color settings
- Fix the toolbar within the editor box so it\'s always in screen
- #100 Properly report error to user if upload failed for whatever reason
- Make tweaks to the CSS to make Redactor blend in with 2.3 even better
- Use proper dependency injection model in plugins
- Prevent excessive error logging in 2.3.0
- Added $redactor->versions support for third party packages to determine Redactor\'s version
- Updated fontcolor plugin
- #224 Fixed Editing Link URLs in Firefox
- #219 Fixed Broken Modal in Fullscreen mode
- #194 Fix clearing margins when un-floating images
- #184 Fixed tab inserts "1" bug
- #214 Table pasting issue
- #202 Open in New tab when linking to a file
- Updated redactor.js to 9.2.6
- - New Typewriter mode
- - Hidden Mobile Buttons
- - Toolbar Overflow
- - Image Tab Link Setting
- - Clean Spaces Setting
- - Additional Shortcuts
- - Many bug fixes. See more at http://imperavi.com/redactor/log/


Redactor 1.4.3-pl
-----------------
Released on 2014-07-28

- #227 Enables a patch for broken asset paths. If running MODX 2.2.15 - 2.3.1, Redactor will attempt to patch broken asset URLs caused by modxcms/revolution#11291. To disable create a redactor.patch_11291 System Setting and set to \'No\'.

Redactor 1.4.2-pl
-----------------
Released on 2014-07-07

- #217 Fixes broken image thumbnails when inserting images from a search result
- #221 Loosen image search sensitivity
- Fix typo causing OnRichTextEditorInit event from not getting checked.

Redactor 1.4.1-pl
-----------------
Released on 2014-04-11

- Ensure Redactor TVs have access to the Resource data for upload/browse path placeholders
- Fix loading the proper RTE based on context settings
- #153 Fix E_NOTICE error in redactor class because of check for pre-2.2.9 S3 issue
- Fix lexicon entries for new settings in 1.4.0
- Ensure that the English language set is used as default to prevent undefined issues.

Redactor 1.4.0-pl
-----------------
Released on 2014-02-13

- New Advanced Attributes feature for WYSIWYG editing of classes and ids on images and links!
- 25 New Languages
- Update to Redactor 9.1.9 with several bug fixes!
- Update to jQuery 1.11.0
- #175 Prevent Images from loading until Choose tab is selected
- #176 Fix issue when loading Redactor on non-CMP pages
- #171 Fix undesired base path appended on Edit Link window (set linkProtocol to empty)
- #169 Fix colors in FontColor plugin
- #168 Add Anchors to Links (via Advanced Attributes)
- #94 Add optional class field to images (via Advanced Attributes)
- #163 Add extra placeholder for upload paths (pagetitle, alias, context_key)
- #160 Add linkNoFollow System Setting
- #155 Fix choose file/image when there is only 1 result
- #80 Fix View Source overlapping save buttons

Redactor 1.3.5-pl
-----------------
Released on 2013-11-18

- Fix problem with redactor loading in the content area (reverts #140)

Redactor 1.3.4-pl
-----------------
Released on 2013-11-18

- #143 Fix issues with link* settings
- #140 Ensure Redactor loads in MIGX DB

Redactor 1.3.3-pl
-----------------
Released on 2013-11-14

- Updating to Redactor 9.1.7
- Update to jQuery 1.10.2
- Add [[+day]] tag for dynamic file and image upload paths
- #150 Fix bug with unordered lists in Clips JSON
- #136 Default observeLinks to true

Redactor 1.3.2-pl
-----------------
Released on 2013-10-18

- Add sanitizePattern and sanitizeReplace settings to tweak upload file name sanitization
- Fix issue with page not reloading when creating resources that have a Redactor TV.
- Improve loading in custom components that are built with modManagerControllerDeprecated
- Fix bug with incorrect paths when using the Choose files functionality.
- Update to Redactor 9.1.5:
- - Fix several issues with outdent, video links and uploading
- - new image and file parameter configuration
- - new xhtml setting making code produced by Redactor more XHTML-compatible
- - new linkSize setting to allow links to be truncated
- - improves parsing of Vimeo links
- - improves performance on large texts
- - improves compatibility with IE 7.
- Update to Redactor 9.1.4:
- - fix observeLinks tooltip compatibility when in fullscreen mode
- - fix IE9-10 issues with clipboard paste.

Redactor 1.3.1-pl
-----------------
Released on 2013-09-17

- Ensure linkProtocol can be disabled.
- #52 Ensure floated images stay in their WYM container
- #91 Changing image position improperly unset margins/classes from the former position
- #127 Default to editor_css_path setting if redactor.css is empty
- #128 Fix description of file browse path setting
- Update to Redactor 9.1.4, which fixes observeLinks functionality in iframe and fullscreen and IE9-10 issues with clipboard paste. http://imperavi.com/redactor/log/
- #135 Restore missing CSS since 1.3.0.
- #134 Fix resource search with Redactor TVs
- #133 Fix missing styles for list items

Redactor 1.3.0-pl
-----------------
Released on 2013-09-09

- Update to Redactor 9.1.3 which fixes many formatting and pasting issues and adds copy-paste image support for uploads! Pasting images to S3 Media Sources requires MODX 2.2.9 or later. Thanks to Jan Peca for the MODX 2.2.9 fix!
- Added drag and drop for images support. Just drag images right into the content area!
- Images can be moved/dragged across text.
- Rewritten and improved image resizing.
- Link parsing for images and videos. Paste URLs to images YouTube or Vimeo videos to auto embed.
- Option to open links in new tab.
- Paste as plain text.
- Removed toolbar color selector
- Added color selector plugin
- New tidyHtml setting - allows to turn off nice output code formatting.
- New observeLinks feature allows to follow/edit links by putting cursor to the link
- #130 Add system setting for removeEmptyTags
- #131 Fix for missing styles in iFrame mode

Redactor 1.2.8-pl
-----------------
Released on 2013-09-05

- Fix Redactor TVs when the language is set to something other than English.

Redactor 1.2.7-pl
-----------------
Released on 2013-08-22

- #121 Add [[+id]] placeholder to paths to insert resource IDs.
- Only load clips and styles plugin on TVs when necessary.

Redactor 1.2.6-pl
-----------------
Pre-Released on 2013-08-15
--------------------------

- #123 Mail to tab on insert link modal now is available by default
- #124 Fix issue when displaying image subfolders when choosing images
- #125 Add browse configurations for images and files to Redactor Template Variables
- #118 Fixes issue with remote media sources

Redactor 1.2.5-pl
-----------------
Released on 2013-08-06

- Fix issues with MIGX ("$ is undefined" errors)
- Fix odd issue on PHP 5.3 with not loading the scripts.

Redactor 1.2.4-pl
-----------------
Released on 2013-08-05

- Fix issues with redactor.additionalPlugins.
- Fix issue with regular richtext TVs not loading Redactor.

Redactor 1.2.3-pl
-----------------
Released on 2013-08-04

- #117 Add Custom CSS stylesheet in non-iframe mode
- #113 Add insert advanced option to Styles JSON (set "advanced":"1") to use insertHTMLAdvanced
- Renamed Iframe CSS Setting to Stylesheet

Redactor 1.2.2-pl
-----------------
Released on 2013-08-02

- #112 Improve Styles JSON compatibility
- #113 Consider code tag text-level semantic element (not block)
- #114 Add forceBlock option to JSON

Redactor 1.2.1-pl
-----------------
Released on 2013-08-02

- #110 Fix console error with Clips plugin
- #111 Custom Formatting: wrap inline for text-level semantic tags

Redactor 1.2.0-pl
-----------------
Released on 2013-08-02

- #99 Fix air toolbar not showing in fullscreen mode
- #107 Default media source for Redactor to value of default_media_source setting
- #16 Add ability to load custom plugins through a system setting definition.
- #108 Slightly change text to indicate you need to start typing to find resources.
- #48 Refactor to make use of OnRichTextEditorInit plugin event to allow using Redactor in other components.
- Update to Redactor 9.0.4 to fix amoung other things issue when switching between visual and source code mode in Firefox, pasting in iOS and inline styles. http://imperavi.com/redactor/log/
- #44 Add custom formats like TinyMCE
- #69 Add Clips Plugin
- #105 Add base tag when in iFrame mode (for TinyMCE and CKEditor compatibility)
- Fix for TVs when which_editor != Redactor
- #103 Open in New Tab option when linking to Resources
- #20 Add MIGX Support
- #16 System Setting to load custom plugins


Redactor 1.1.2-pl
-----------------
Released on 2013-07-03

- Add missing cachebust from 1.1.1-pl.

Redactor 1.1.1-pl
-----------------
Released on 2013-07-03

- Update to Redactor 9.0.3, fixing among other things firefox issues with typing after selecting text, various cleanup bugs, switching between ul/ol tags. http://imperavi.com/redactor/log/
- Fix further issues with link editing.
- #46 Fix issues with iframe mode.

Redactor 1.1.0-pl
-----------------
Released on 2013-07-01

- Update to Redactor 9.0.2 fixing among other things pasting lists from Google Docs, inactive buttons, pasting in Chrome, link pasting and undo. http://imperavi.com/redactor/log/
- #40 Add browse feature for adding/linking to files + redactor.browse_files Setting to enable it
- #33 Add fullscreen plugin + redactor.buttonFullScreen Setting to enable it
- #55 Add redactor.displayImageNames Setting to display file names under images in Choose window
- #66 Add redactor.dynamicThumbs Setting to disable dynamic thumbnail (phpthumb)
- #50 Properly change/escape unsafe characters in uploads
- #56 Fix typeahead initialization on non-link modals
- #41 Show warning if no file exist in browsing location.
- #60 Add redactor.browse_path Setting to allow browsing elsewhere than uploads directory.
- #38 Add redactor.linkResource Setting to hide Resource tab in Link window
- #65 Fix Incorrect Link Options bug.
- #58 Combine and Minify JavaScript on frontend.
- #61 Cache Bust JavaScript.
- #62 Fixed broken manager pages with RedactorTV bug.
- #63 Moved Resource Tab to second position in insert link window
- French lexicon updated, partial Dutch and Czech added.

Redactor 1.0.3-pl
-----------------
Released on 2013-06-17

- Update to Redactor 9.0.1, fixing among other things backspace issues, link adding/editing. http://imperavi.com/redactor/log/
- #49 Make sure to use jQuery noConflict mode to make sure it plays nice with other possible jQuery instances.
- Fix wrong method (process instead of render) in TV Input Type.
- #53 Fix undefined on file upload bug.
- #51 Fixed broken links on dated files bug.
- #34 Moved Resource tab to first position.

Redactor 1.0.2-pl
-----------------
Released on 2013-06-05

- Fix additional issue with loading translations in non-English managers due to 9.0.0 changes.

Redactor 1.0.1-pl
-----------------
Released on 2013-06-05

- Fix issue with loading translations in non-English managers due to 9.0.0 changes.

Redactor 1.0.0-pl
-----------------
Released on 2013-06-05

- Fix ability to uninstall the package.
- #35, #36, #45 Update setting descriptions for Redactor 9.0.0 and to be more useful.
- #37 Change insert link text to "Insert/Edit link"
- #42 Add ability to disable the introtext displaying in resource typeahead.
- #43 Add ability to scroll in the resource type ahead
- Upgrade to Imperavi\'s Redactor 9.0.0

Redactor 0.9.3-pl
-----------------
Released on 2013-05-27

- Add French lexicon. Thanks @rtripault!
- #32 Add HTML5 tags to the default allowedTags setting.

Redactor 0.9.2-pl
-----------------
Released on 2013-05-27

- Fix bug where settings and other configuration were not properly passed to Redactor.
- Change default buttons to include separators.

Redactor 0.9.1-pl
-----------------
Released on 2013-05-24

- First released version of Redactor through modmore.
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '0703c947b607ad1e11a8ef74bf5b81b0',
      'native_key' => 'redactor',
      'filename' => 'modNamespace/bba3ed3ec73180d0a44ac3cfe0d774cc.vehicle',
      'namespace' => 'redactor',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '2b153b47c364166c462ddc000fc2358d',
      'native_key' => '2b153b47c364166c462ddc000fc2358d',
      'filename' => 'xPDOFileVehicle/8c8527a510541992847d83887696c79b.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'modmoreVehicle',
      'class' => 'modPlugin',
      'guid' => '905b8119bb3724b6025777888be3275f',
      'native_key' => NULL,
      'filename' => 'modPlugin/dfa9f040b1ddd3b598f261c4145d0e8c.vehicle',
      'namespace' => 'redactor',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e8bd144894932c1d31dbb9576acc9ac0',
      'native_key' => 'redactor.lang',
      'filename' => 'modSystemSetting/a87a861fd403ded00298a3928168ea27.vehicle',
      'namespace' => 'redactor',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4db9faefa0bbc68539040fa5b357a4f5',
      'native_key' => 'redactor.direction',
      'filename' => 'modSystemSetting/82129dc47cba8c1b457d663f33efcace.vehicle',
      'namespace' => 'redactor',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5ba9df3f2c6c7756863461c9aee10e1a',
      'native_key' => 'redactor.buttons',
      'filename' => 'modSystemSetting/105ebbd183ad9286953c0a4f7e451c73.vehicle',
      'namespace' => 'redactor',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ccb8815b85009e60514b44bac3ce020c',
      'native_key' => 'redactor.activeButtons',
      'filename' => 'modSystemSetting/13d15a389e1a7a41106547e78581317b.vehicle',
      'namespace' => 'redactor',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2b3d583515016bae4b2585e8075fd8ea',
      'native_key' => 'redactor.activeButtonsStates',
      'filename' => 'modSystemSetting/6901f0b90349b7bce64783abe5021420.vehicle',
      'namespace' => 'redactor',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1cf4c7ad9925ac51c875392b195a90f5',
      'native_key' => 'redactor.formattingTags',
      'filename' => 'modSystemSetting/2260d1f88cbeffe0062fd643552630fb.vehicle',
      'namespace' => 'redactor',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8cc809b5b8b143ff9e95444dd60be388',
      'native_key' => 'redactor.buttonSource',
      'filename' => 'modSystemSetting/58353c1cacc5ee4ee0d98205841e2dee.vehicle',
      'namespace' => 'redactor',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fcf501f2ad7c30f10f74f534cb265ea5',
      'native_key' => 'redactor.buttonFullScreen',
      'filename' => 'modSystemSetting/e6934f58e4c10085df92799112fc1f3a.vehicle',
      'namespace' => 'redactor',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ad5580d4fc167cbd68c6884809ba6813',
      'native_key' => 'redactor.css',
      'filename' => 'modSystemSetting/0ec713fd0b2c96d0be1897b1a3bb108e.vehicle',
      'namespace' => 'redactor',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5c7860b457f6af20d51929d6153dbadd',
      'native_key' => 'redactor.shortcuts',
      'filename' => 'modSystemSetting/7e029bb1a6ffd54dd53efa64a1d43407.vehicle',
      'namespace' => 'redactor',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'da18971f67e9ce72602b867e0a6d4dda',
      'native_key' => 'redactor.cleanup',
      'filename' => 'modSystemSetting/7391e6146fe1aaf63675e158721c5372.vehicle',
      'namespace' => 'redactor',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7a20f970d48ffa6db3b6a394fce394e0',
      'native_key' => 'redactor.convertLinks',
      'filename' => 'modSystemSetting/68266d6886ba67e411118ca25b17bb8a.vehicle',
      'namespace' => 'redactor',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ecb97338f2deba1c86441e0fa393f753',
      'native_key' => 'redactor.tabindex',
      'filename' => 'modSystemSetting/95aef2f627fcb5ae568bc378c145dda2.vehicle',
      'namespace' => 'redactor',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5d96c3a0f35ff488f3a8ed32894c03aa',
      'native_key' => 'redactor.minHeight',
      'filename' => 'modSystemSetting/59604c8e2f711f79118351687da83593.vehicle',
      'namespace' => 'redactor',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '00e5cafe825e0bc8b95f4ba345b74766',
      'native_key' => 'redactor.colors',
      'filename' => 'modSystemSetting/d929a468f4f83c74c76712a6d24a38c4.vehicle',
      'namespace' => 'redactor',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '247abc2a3a0c9d03f95c22577515822d',
      'native_key' => 'redactor.wym',
      'filename' => 'modSystemSetting/8bf1ae8d5d11b580b8480ec77434b8f9.vehicle',
      'namespace' => 'redactor',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5edc864a0743a576de6dcd60e823d260',
      'native_key' => 'redactor.linkProtocol',
      'filename' => 'modSystemSetting/0686064795826eccff855576ac07d5c3.vehicle',
      'namespace' => 'redactor',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7f241a3f23f4805feaba16d5dfd73ed2',
      'native_key' => 'redactor.placeholder',
      'filename' => 'modSystemSetting/193e248095f23456ebbe30fe2cca88c9.vehicle',
      'namespace' => 'redactor',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4b04f85421dbfb47882066c3917c271d',
      'native_key' => 'redactor.linebreaks',
      'filename' => 'modSystemSetting/4e1fe4f4879e3d1a10485105d68ba287.vehicle',
      'namespace' => 'redactor',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '61df761cfd321f521de25f9131bbda25',
      'native_key' => 'redactor.allowedTags',
      'filename' => 'modSystemSetting/378e888bc8a3147d3e89ac5b5cfc74b1.vehicle',
      'namespace' => 'redactor',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4fa3266d7513e5867c35f3bdb0a069a4',
      'native_key' => 'redactor.deniedTags',
      'filename' => 'modSystemSetting/d6c9bb12b886b7238b86b1dc876eec65.vehicle',
      'namespace' => 'redactor',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9bb73722fa3db33bd58769acf378a0fc',
      'native_key' => 'redactor.linkEmail',
      'filename' => 'modSystemSetting/d43b2542593ebdb2254ed23425413621.vehicle',
      'namespace' => 'redactor',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '29d12813756a3227b25d1aee23488780',
      'native_key' => 'redactor.linkAnchor',
      'filename' => 'modSystemSetting/4bc299b1c1ba36e0b0b7a366eb8b2b15.vehicle',
      'namespace' => 'redactor',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7ba7e4f32c58b9d815b5688cc57d8b48',
      'native_key' => 'redactor.pastePlainText',
      'filename' => 'modSystemSetting/e44191000ec16ac5ac90887412b31708.vehicle',
      'namespace' => 'redactor',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3367d09e29dffff6e7d5f881171d8fe9',
      'native_key' => 'redactor.paragraphize',
      'filename' => 'modSystemSetting/4b11ee754175f8b1d1356162d8f95280.vehicle',
      'namespace' => 'redactor',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b20a0591a38200c780c324deba52aca2',
      'native_key' => 'redactor.removeComments',
      'filename' => 'modSystemSetting/c1dbf0e6a92a4ca312a2e72c6e823f5d.vehicle',
      'namespace' => 'redactor',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4a073d8cb5a6b0cb5f3680d183b9be9b',
      'native_key' => 'redactor.visual',
      'filename' => 'modSystemSetting/1ef707adfc563d387843f3d00f2cfb96.vehicle',
      'namespace' => 'redactor',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd29ac7a66d2bf2d0a5f6a977796f658c',
      'native_key' => 'redactor.marginFloatLeft',
      'filename' => 'modSystemSetting/a967cdb41a6963225947dd8d6eda2bd7.vehicle',
      'namespace' => 'redactor',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8e10ece82979aeb74a7e6822fe994f25',
      'native_key' => 'redactor.marginFloatRight',
      'filename' => 'modSystemSetting/7e3599090cdc4a43cb73ad7ccd02f4f3.vehicle',
      'namespace' => 'redactor',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7ce2589998d175cb6b62e7d2cb1b1ab6',
      'native_key' => 'redactor.mediasource',
      'filename' => 'modSystemSetting/d1916ef85557ac8a265566daa34428cc.vehicle',
      'namespace' => 'redactor',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '30b4aef181be04f5dfc734624903b0a7',
      'native_key' => 'redactor.file_mediasource',
      'filename' => 'modSystemSetting/d795277b179b2ebce4d8d3f61fda57de.vehicle',
      'namespace' => 'redactor',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8ba521eb47397e4e5fbbcbb48479633d',
      'native_key' => 'redactor.image_upload_path',
      'filename' => 'modSystemSetting/c3c469782faadeced444065e2f0e8507.vehicle',
      'namespace' => 'redactor',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '329e5be7bc50edfb0cbc5247d3ed788a',
      'native_key' => 'redactor.image_browse_path',
      'filename' => 'modSystemSetting/54eb83848f3ace45f4c21743395c5e70.vehicle',
      'namespace' => 'redactor',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2339cdb5504e5d875af02a2125f29257',
      'native_key' => 'redactor.file_upload_path',
      'filename' => 'modSystemSetting/98bef8b155dab7db15281e1e44f7788a.vehicle',
      'namespace' => 'redactor',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9384bf70b7fb63a02624d792fd224e15',
      'native_key' => 'redactor.file_browse_path',
      'filename' => 'modSystemSetting/22d486c294f363c2986ddd10ef3c2532.vehicle',
      'namespace' => 'redactor',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a9e78d27c38e9df8646f17b4ac5bd0d7',
      'native_key' => 'redactor.browse_files',
      'filename' => 'modSystemSetting/774732348292e4b17788aefd52257689.vehicle',
      'namespace' => 'redactor',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ad68c7ce25ce7fd3fe9011f0734efdda',
      'native_key' => 'redactor.date_images',
      'filename' => 'modSystemSetting/c0dc1e566ffba1b8f2bec76b09349855.vehicle',
      'namespace' => 'redactor',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c91b17aa56ddd1b4b8e15f3eb609d0c4',
      'native_key' => 'redactor.date_files',
      'filename' => 'modSystemSetting/35b812cf8e824d505b00cd69c4fc8867.vehicle',
      'namespace' => 'redactor',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e4c4d295ec951258753e2684cf2ef0df',
      'native_key' => 'redactor.typeahead.include_introtext',
      'filename' => 'modSystemSetting/cea5f2296c2ad62f55ee1aad62a681a6.vehicle',
      'namespace' => 'redactor',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '65a12d759e29f130d40e58e48133a2ff',
      'native_key' => 'redactor.prefetch_ttl',
      'filename' => 'modSystemSetting/2aac07747738d8a0eadfd5b391405352.vehicle',
      'namespace' => 'redactor',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a896baeeba0b2a4bc1b488e673a10960',
      'native_key' => 'redactor.linkResource',
      'filename' => 'modSystemSetting/e4eed3aa514c430c89cd95cd45efac55.vehicle',
      'namespace' => 'redactor',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8c79d8a2a7bc33c2859ad9d0a3a6edc0',
      'native_key' => 'redactor.cleanFileNames',
      'filename' => 'modSystemSetting/37e76fd74cbf63b4082dc96b47cb1577.vehicle',
      'namespace' => 'redactor',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8f6cad64232f1b956333a029fd5971f7',
      'native_key' => 'redactor.dynamicThumbs',
      'filename' => 'modSystemSetting/57babca8d2ba721ebd44db12256b3419.vehicle',
      'namespace' => 'redactor',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8ab2fcf877e2e85d18b545638cb509ad',
      'native_key' => 'redactor.clipsJson',
      'filename' => 'modSystemSetting/c661827d212e02c49cfcc83f90b38648.vehicle',
      'namespace' => 'redactor',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'df4f1d831f4cbd70f2e4a6105215b365',
      'native_key' => 'redactor.additionalPlugins',
      'filename' => 'modSystemSetting/63e04aad09204f42e15351c757cf357f.vehicle',
      'namespace' => 'redactor',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'deee096cd6614da7db6d0a3103d98dd9',
      'native_key' => 'redactor.dragUpload',
      'filename' => 'modSystemSetting/abc46886f5d3bc5c208366753afec2e3.vehicle',
      'namespace' => 'redactor',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '643ee6e421564669b92f06a7059ec56d',
      'native_key' => 'redactor.convertImageLinks',
      'filename' => 'modSystemSetting/5c0d55b033a8f411a1c1b15db20cf894.vehicle',
      'namespace' => 'redactor',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c339d01e6a5ce2ba914fa2b44c6c625e',
      'native_key' => 'redactor.convertVideoLinks',
      'filename' => 'modSystemSetting/e7ec45727c79fd46cb99afa0bfb9bd4a.vehicle',
      'namespace' => 'redactor',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6735cc04491b0a3b78a3c0526f592d97',
      'native_key' => 'redactor.tabAsSpaces',
      'filename' => 'modSystemSetting/0d5469e3458f304145e9393d02973495.vehicle',
      'namespace' => 'redactor',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9cee4b6f8193db322c490ad096dc461f',
      'native_key' => 'redactor.removeEmptyTags',
      'filename' => 'modSystemSetting/61adef3d4528b098290f15ce0dc8712c.vehicle',
      'namespace' => 'redactor',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4e32e121d8d641501f41c445648127f2',
      'native_key' => 'redactor.sanitizePattern',
      'filename' => 'modSystemSetting/c83071c57fcbf02fbb26205dda14251c.vehicle',
      'namespace' => 'redactor',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0a8b42429233d3f982189fd7da4e6904',
      'native_key' => 'redactor.sanitizeReplace',
      'filename' => 'modSystemSetting/11a354cf7266b57d472f11ba684ccdbf.vehicle',
      'namespace' => 'redactor',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5ba4242b3a4fce7d2b940d98f7910346',
      'native_key' => 'redactor.linkSize',
      'filename' => 'modSystemSetting/b3ee66dcdedd7686cdb8ff64125b92b2.vehicle',
      'namespace' => 'redactor',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2559a15d0ea3b7a80719c842b35c46fd',
      'native_key' => 'redactor.advAttrib',
      'filename' => 'modSystemSetting/55492d3842cd98152dff6d7018d63091.vehicle',
      'namespace' => 'redactor',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b434c038482bb331d3ce945472790f71',
      'native_key' => 'redactor.linkNofollow',
      'filename' => 'modSystemSetting/829e37229e26b3cff8bb0555f71c5804.vehicle',
      'namespace' => 'redactor',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e5c4d52ac51456df0893aee70210a8f0',
      'native_key' => 'redactor.typewriter',
      'filename' => 'modSystemSetting/8b75578c7c06de85f48add723198afa5.vehicle',
      'namespace' => 'redactor',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5d56f5c61c8a865f4e36a84845a98e8f',
      'native_key' => 'redactor.buttonsHideOnMobile',
      'filename' => 'modSystemSetting/bb4849b477679633ac70d8f20ba6c9d7.vehicle',
      'namespace' => 'redactor',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6599c834d1474d51ca523856d9a4ce31',
      'native_key' => 'redactor.toolbarOverflow',
      'filename' => 'modSystemSetting/9c523c00fe73c790c2234be24c36f55f.vehicle',
      'namespace' => 'redactor',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f502925205f2a38b59ac8cd13574048a',
      'native_key' => 'redactor.imageTabLink',
      'filename' => 'modSystemSetting/fa35bbbcf3571427684b63510ceeda00.vehicle',
      'namespace' => 'redactor',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '657cb1faf7f9b05dd8d00fd0330a587a',
      'native_key' => 'redactor.cleanSpaces',
      'filename' => 'modSystemSetting/f1fd2ee95dfd6af253cd07470fd70727.vehicle',
      'namespace' => 'redactor',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6f02855223c380b2e3669dabd92d6d36',
      'native_key' => 'redactor.predefinedLinks',
      'filename' => 'modSystemSetting/77c951f4091f688c6cdb6a98dcaaa014.vehicle',
      'namespace' => 'redactor',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3d055ed5b61b270e19086d7e5f465656',
      'native_key' => 'redactor.shortcutsAdd',
      'filename' => 'modSystemSetting/cafa173b79e7fdae6368fd1a08b32a0d.vehicle',
      'namespace' => 'redactor',
    ),
    65 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'eaffdd46ec801073f786cdcdb6cb97fb',
      'native_key' => 'redactor.commemorateRebecca',
      'filename' => 'modSystemSetting/6818d9aa88deb59046b629a36adc8123.vehicle',
      'namespace' => 'redactor',
    ),
    66 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a79b91561f0a8eb533cca23cc6ce0fe9',
      'native_key' => 'redactor.toolbarFixed',
      'filename' => 'modSystemSetting/73d6cc8ca69989dd7f0d23c3497671d7.vehicle',
      'namespace' => 'redactor',
    ),
    67 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cb290f74ff5386a6e32c4790e0208f93',
      'native_key' => 'redactor.focus',
      'filename' => 'modSystemSetting/7c7307f7c1ced19fc0ce9c5131e35e42.vehicle',
      'namespace' => 'redactor',
    ),
    68 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ab98606dd8e07152b464949d31b11c08',
      'native_key' => 'redactor.focusEnd',
      'filename' => 'modSystemSetting/7c88319011dc2feaf540e3e87bda549f.vehicle',
      'namespace' => 'redactor',
    ),
    69 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7c4dda363dd3117f58901fdfa7bd5a52',
      'native_key' => 'redactor.scrollTarget',
      'filename' => 'modSystemSetting/a15301144bbbabd28d7be23a71452772.vehicle',
      'namespace' => 'redactor',
    ),
    70 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '691b6f2d5df3cd15d6a717d2e21d9be1',
      'native_key' => 'redactor.enterKey',
      'filename' => 'modSystemSetting/a6cb86bfe7bab2bc78e88ba71bfd9753.vehicle',
      'namespace' => 'redactor',
    ),
    71 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b18af4ed7bc5c0f288c389aee2170aad',
      'native_key' => 'redactor.cleanStyleOnEnter',
      'filename' => 'modSystemSetting/a96959a869fdc0ef7b03fae77eb2219c.vehicle',
      'namespace' => 'redactor',
    ),
    72 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '88b3281069fbca38b5d54d99886d2674',
      'native_key' => 'redactor.linkTooltip',
      'filename' => 'modSystemSetting/b2c512be3807a42a45ba1ca33163ebd0.vehicle',
      'namespace' => 'redactor',
    ),
    73 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2e1619db284176b24000b427dfca9de5',
      'native_key' => 'redactor.imageEditable',
      'filename' => 'modSystemSetting/c4884833bf1c051c7a64eb7b09a9b29c.vehicle',
      'namespace' => 'redactor',
    ),
    74 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e88c44c4afb3db5c8f49487c19c2910a',
      'native_key' => 'redactor.imageResizable',
      'filename' => 'modSystemSetting/bfcfd53b7dd9973550b0dbd0e94a2ae7.vehicle',
      'namespace' => 'redactor',
    ),
    75 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9067a99bfab618f6e08557534a03d3e6',
      'native_key' => 'redactor.imageLink',
      'filename' => 'modSystemSetting/b7609d08dcc3339b819d8d6ce6ff6a9b.vehicle',
      'namespace' => 'redactor',
    ),
    76 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2e32c7c6f4c3d7e8dd78c8553bd4d12e',
      'native_key' => 'redactor.imagePosition',
      'filename' => 'modSystemSetting/c385d994259910fe438cd05216ce4d18.vehicle',
      'namespace' => 'redactor',
    ),
    77 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a5817d5e9bea68ea171275ed47537a1a',
      'native_key' => 'redactor.buttonsHide',
      'filename' => 'modSystemSetting/b355bdcb17f17ac7dc45cb5f57f226e0.vehicle',
      'namespace' => 'redactor',
    ),
    78 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '04123d23122bb59674b40af4850ada93',
      'native_key' => 'redactor.formattingAdd',
      'filename' => 'modSystemSetting/05a99670eb36bbc627180397e7932b84.vehicle',
      'namespace' => 'redactor',
    ),
    79 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0e40fd9b85fe65182e75c50268b021d4',
      'native_key' => 'redactor.tabifier',
      'filename' => 'modSystemSetting/1330f13bd68645d30925c6da94f6d71f.vehicle',
      'namespace' => 'redactor',
    ),
    80 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd07c6b163ae28f7cfd51176c1bea3fb9',
      'native_key' => 'redactor.replaceTags',
      'filename' => 'modSystemSetting/8c5a5f98423add1dc499e7ab607e6395.vehicle',
      'namespace' => 'redactor',
    ),
    81 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '634dd201f37f3e6fcd151718792ab851',
      'native_key' => 'redactor.replaceStyles',
      'filename' => 'modSystemSetting/9db3664f04cda95351413119508776bc.vehicle',
      'namespace' => 'redactor',
    ),
    82 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '881438a433ae90f98b106ea5af2c6358',
      'native_key' => 'redactor.removeDataAttr',
      'filename' => 'modSystemSetting/9218fa26e9d251d995a84eeafedf6854.vehicle',
      'namespace' => 'redactor',
    ),
    83 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '52183b581e5fcd5dbd1200737ea992fa',
      'native_key' => 'redactor.removeAttr',
      'filename' => 'modSystemSetting/b65dab7675fff1ce38df31945ab94c3b.vehicle',
      'namespace' => 'redactor',
    ),
    84 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '09f3d100203f8ada5406182fd8911875',
      'native_key' => 'redactor.allowedAttr',
      'filename' => 'modSystemSetting/5b6c63d00ee2d4730dd3953543821561.vehicle',
      'namespace' => 'redactor',
    ),
    85 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6f116175860a04ac422445f984cdb795',
      'native_key' => 'redactor.dragImageUpload',
      'filename' => 'modSystemSetting/267b7804a407c02612cb15ba14ff0d06.vehicle',
      'namespace' => 'redactor',
    ),
    86 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5703be9ab7accac485d9be4a64b18acb',
      'native_key' => 'redactor.dragFileUpload',
      'filename' => 'modSystemSetting/121c9a61e0b0e5461b9271ddd8ac9b2f.vehicle',
      'namespace' => 'redactor',
    ),
    87 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ed7a2b02496f57fd17dc9eaff025d1fb',
      'native_key' => 'redactor.replaceDivs',
      'filename' => 'modSystemSetting/2072d29eaa0cc0981a7ea7195ab2129a.vehicle',
      'namespace' => 'redactor',
    ),
    88 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b2b873bed4ba61b2364b74fe71952a06',
      'native_key' => 'redactor.preSpaces',
      'filename' => 'modSystemSetting/dfb7a73e9f7c31255ae025c204d1c1ec.vehicle',
      'namespace' => 'redactor',
    ),
    89 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7a961bee2f4fc7ef710484373d40ac42',
      'native_key' => 'redactor.parse_parent_path',
      'filename' => 'modSystemSetting/ed43364bfd8c303dea35a677d126e233.vehicle',
      'namespace' => 'redactor',
    ),
    90 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd516c86e45246c72493b078f698d76c9',
      'native_key' => 'redactor.increment_file_names',
      'filename' => 'modSystemSetting/7b8f426abdcdbe64089c015906cf1bbc.vehicle',
      'namespace' => 'redactor',
    ),
    91 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '382475f0523266bf09d9c93f93c55943',
      'native_key' => 'redactor.parse_parent_path_height',
      'filename' => 'modSystemSetting/ecf5408f73c2de019a6205d6b0bfabe7.vehicle',
      'namespace' => 'redactor',
    ),
    92 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8787e551fc21806911662fbbd590849f',
      'native_key' => 'redactor.baseurls_mode',
      'filename' => 'modSystemSetting/01a70a7cc0f85ae7b54368ea492e009f.vehicle',
      'namespace' => 'redactor',
    ),
    93 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7698c49b49e3ce93dff47cf430c1d4a6',
      'native_key' => 'redactor.showDimensionsOnResize',
      'filename' => 'modSystemSetting/d45383d8a2500daf5aef9aef7a0bd417.vehicle',
      'namespace' => 'redactor',
    ),
    94 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2fa93f1330616aa286c5ee1673d5afcc',
      'native_key' => 'redactor.plugin_counter',
      'filename' => 'modSystemSetting/3b34291295df72d1a205cd10359e799c.vehicle',
      'namespace' => 'redactor',
    ),
    95 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0bc99df212aede66a97fe2db425494b1',
      'native_key' => 'redactor.plugin_fontcolor',
      'filename' => 'modSystemSetting/dd47aded4c796b09b98ccf1ad93e8aab.vehicle',
      'namespace' => 'redactor',
    ),
    96 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a14cf1440340fc38d5ca6a5043807351',
      'native_key' => 'redactor.plugin_fontfamily',
      'filename' => 'modSystemSetting/f7618b6bc9b2f3a6f5c0b518c763f81d.vehicle',
      'namespace' => 'redactor',
    ),
    97 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '79e5c65e4373a175538a3d489fc68acf',
      'native_key' => 'redactor.plugin_fontsize',
      'filename' => 'modSystemSetting/00618a36b4a1fc6520606c51fcfd789b.vehicle',
      'namespace' => 'redactor',
    ),
    98 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fc641668a3cacee942402163e39f7d98',
      'native_key' => 'redactor.plugin_limiter',
      'filename' => 'modSystemSetting/4e79b6aec74bb5c19053e167634f168e.vehicle',
      'namespace' => 'redactor',
    ),
    99 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7d58f5ff232dcb21ea551fb16bb55485',
      'native_key' => 'redactor.plugin_table',
      'filename' => 'modSystemSetting/ec56336f010c0b83eb63601fa5037e52.vehicle',
      'namespace' => 'redactor',
    ),
    100 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8d1ccd1f9dfff6019e2b0d3268780938',
      'native_key' => 'redactor.plugin_textdirection',
      'filename' => 'modSystemSetting/31b29c494c9198d32dfd4999469f532c.vehicle',
      'namespace' => 'redactor',
    ),
    101 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c7d9efc6bb44ff8724d8c6fd8d384325',
      'native_key' => 'redactor.plugin_video',
      'filename' => 'modSystemSetting/928919a82c416071726e35b32715e59e.vehicle',
      'namespace' => 'redactor',
    ),
    102 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b6495356b52d1526cfef7d702b34dad3',
      'native_key' => 'redactor.plugin_replacer',
      'filename' => 'modSystemSetting/5d04b53ea0844d2b2c52a1398dc87578.vehicle',
      'namespace' => 'redactor',
    ),
    103 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b1640399a954f308326a88cd8c0e1845',
      'native_key' => 'redactor.plugin_syntax',
      'filename' => 'modSystemSetting/bf97e375df6442eea2d203b3608f987b.vehicle',
      'namespace' => 'redactor',
    ),
    104 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '34ca08ff711bbd7b9a566f9f44f4e18d',
      'native_key' => 'redactor.plugin_speek',
      'filename' => 'modSystemSetting/b6e02db6f0f8fa7c06f2607d5860c257.vehicle',
      'namespace' => 'redactor',
    ),
    105 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd623215bcb638cd0bbc829820ff86c92',
      'native_key' => 'redactor.plugin_contrast',
      'filename' => 'modSystemSetting/ac0ec60fc017afee80d0766013a444b0.vehicle',
      'namespace' => 'redactor',
    ),
    106 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a438b04f79b373fcf925e1ae266343f0',
      'native_key' => 'redactor.plugin_eureka',
      'filename' => 'modSystemSetting/35c96553dd1d5796207846d9737f09f3.vehicle',
      'namespace' => 'redactor',
    ),
    107 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '43ad5905280f574ab55863b205dccf2d',
      'native_key' => 'redactor.plugin_eureka_shivie9',
      'filename' => 'modSystemSetting/c26f6d319565351e497e0c1629b54ef5.vehicle',
      'namespace' => 'redactor',
    ),
    108 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'eb8aace0e6083df466f97051dd4bf779',
      'native_key' => 'redactor.eurekaUpload',
      'filename' => 'modSystemSetting/1b7c03669c0f3d1cdf56283c62fbb676.vehicle',
      'namespace' => 'redactor',
    ),
    109 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5b6d09a2e816f9bba10d06a051e32eef',
      'native_key' => 'redactor.initial_directory_depth',
      'filename' => 'modSystemSetting/61a84b16aa20ed9ee99030cff820c005.vehicle',
      'namespace' => 'redactor',
    ),
    110 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ec9383627b22d99cbebf0a92ef782265',
      'native_key' => 'redactor.plugin_zoom',
      'filename' => 'modSystemSetting/43ebe0cf6c382d497c47751b77068229.vehicle',
      'namespace' => 'redactor',
    ),
    111 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '973e233798ca7fc089706c0e8a197aec',
      'native_key' => 'redactor.plugin_download',
      'filename' => 'modSystemSetting/9a392aea340c30aa61fbfd021eae1325.vehicle',
      'namespace' => 'redactor',
    ),
    112 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4b26851016d123e3404b0182429e72d3',
      'native_key' => 'redactor.plugin_imagepx',
      'filename' => 'modSystemSetting/3d54077895a0f2845ca4fe670d551169.vehicle',
      'namespace' => 'redactor',
    ),
    113 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '37f7c1a5ce7fb7ea72d2454652929a2a',
      'native_key' => 'redactor.plugin_imageurl',
      'filename' => 'modSystemSetting/34f0b26eac484007ff366021f8980f68.vehicle',
      'namespace' => 'redactor',
    ),
    114 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '438618c87d5ea2e179d42bdc6bdc47ea',
      'native_key' => 'redactor.plugin_breadcrumb',
      'filename' => 'modSystemSetting/5d9945ef87fbac6bfa21e9065dfaa7c6.vehicle',
      'namespace' => 'redactor',
    ),
    115 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd2a04edf9cab739c012dc5d056c0f0b9',
      'native_key' => 'redactor.plugin_norphan',
      'filename' => 'modSystemSetting/c4ff62af845d9f84923ab2064821a839.vehicle',
      'namespace' => 'redactor',
    ),
    116 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a867c49c382921365aebc5574f96ca01',
      'native_key' => 'redactor.plugin_baseurls',
      'filename' => 'modSystemSetting/ae4360ec4397aab5ae244adfd2e1a391.vehicle',
      'namespace' => 'redactor',
    ),
    117 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '026dbf7a8a4005c04faaeb28a8783f67',
      'native_key' => 'redactor.textexpander',
      'filename' => 'modSystemSetting/93831932c4ab6dc878bd057c5a33cb88.vehicle',
      'namespace' => 'redactor',
    ),
    118 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bbb07a81454e1aad8fcea60c0b8e3950',
      'native_key' => 'redactor.speechPitch',
      'filename' => 'modSystemSetting/46348a5207997f5bd98d09a7e123f05e.vehicle',
      'namespace' => 'redactor',
    ),
    119 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a61660e56b77977f8a299139e1c85940',
      'native_key' => 'redactor.speechRate',
      'filename' => 'modSystemSetting/97b0120e3b5fbcbb9b1ae22b2de9ca17.vehicle',
      'namespace' => 'redactor',
    ),
    120 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1759acf028fae91e3bb548354a2c6a1e',
      'native_key' => 'redactor.speechVolume',
      'filename' => 'modSystemSetting/018ce955b1e456a05d0c4f806a345d27.vehicle',
      'namespace' => 'redactor',
    ),
    121 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '779e8745243af5e8df4c073699430553',
      'native_key' => 'redactor.speechVoice',
      'filename' => 'modSystemSetting/3f6357d1500efc7b64f23705a625213b.vehicle',
      'namespace' => 'redactor',
    ),
    122 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '046de6c5ed252b4fb3e275baf1381263',
      'native_key' => 'redactor.counterWPM',
      'filename' => 'modSystemSetting/f384f7d471b4e1741c622489129f0680.vehicle',
      'namespace' => 'redactor',
    ),
    123 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5afa059ad003c6402a78c67ea9943dc8',
      'native_key' => 'redactor.codemirror',
      'filename' => 'modSystemSetting/611bb7e0517a9df4389f0163d8a0a8a9.vehicle',
      'namespace' => 'redactor',
    ),
    124 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1cecf5992656a6e64bb206bd57fe7e4b',
      'native_key' => 'redactor.plugin_uploadcare',
      'filename' => 'modSystemSetting/5e77e9bb9f8921217ab6bb2f69128ee4.vehicle',
      'namespace' => 'redactor',
    ),
    125 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '74d9f5017cfeb55cc73a1e700d4e5383',
      'native_key' => 'redactor.uploadcare_pub_key',
      'filename' => 'modSystemSetting/312fff314e1b62e9e92f2fbaa2281a22.vehicle',
      'namespace' => 'redactor',
    ),
    126 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a7c70778d6a58a35aae4ed4215447eda',
      'native_key' => 'redactor.uploadcare_locale',
      'filename' => 'modSystemSetting/27098d06ae3bf0f328509803f35bddfc.vehicle',
      'namespace' => 'redactor',
    ),
    127 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '47a4ed3c61596217a53c3bc49b14a069',
      'native_key' => 'redactor.uploadcare_crop',
      'filename' => 'modSystemSetting/6f14765b476f030a40c63ecb48de6558.vehicle',
      'namespace' => 'redactor',
    ),
    128 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ba16255854e57fa7f438c29bbceff04d',
      'native_key' => 'redactor.uploadcare_tabs',
      'filename' => 'modSystemSetting/b5731ea37df37e42f5b0bfe696aad634.vehicle',
      'namespace' => 'redactor',
    ),
    129 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a85cb3e605d290f06c74958f357f6527',
      'native_key' => 'redactor.loadIntrotext',
      'filename' => 'modSystemSetting/ba30991484c805ede04819e5bb6eab5c.vehicle',
      'namespace' => 'redactor',
    ),
    130 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f3854ca9aaf1c7afd2b9e347c933c85e',
      'native_key' => 'redactor.limiter',
      'filename' => 'modSystemSetting/c3e72bfea442e4b8dd55cb8bf145c7e4.vehicle',
      'namespace' => 'redactor',
    ),
    131 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => 'e0f21a87636970d780295aef04179b75',
      'native_key' => 'e0f21a87636970d780295aef04179b75',
      'filename' => 'xPDOScriptVehicle/b0fb721b3c2d22e3f8b7fd52a5eb3404.vehicle',
      'namespace' => 'redactor',
    ),
  ),
);