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
    'changelog' => 'Redactor 2.3.7-pl
-----------------
Released on 2019-09-06

- Fix upload errors being returned in wrong format [S20839]
- Make sure errors are shown in a nice popup

Redactor 2.3.7-pl
-----------------
Released on 2019-08-06

- Prevent rendering the content field if ContentBlocks is used. This improves manager performance and prevents errors from getting triggered in the developer console (with ContentBlocks 1.8.12+).
- Fix hardcoded numbers in the replacer window (redactor-plugins@1.2)
- Add new plugin_replacer_button setting that lets you add a button for the find & replace functionality

Redactor 2.3.6-pl
-----------------
Released on 2019-07-11

- Prevent Codemirror plugin from breaking resource save in some cases due to JS error [S20434]

Redactor 2.3.5-pl
-----------------
Released on 2019-06-13

- Catch exceptions in media source when trying to list files or directories outside open_basedir [S19733]
- Prevent invalid HTML from breaking the baseurls plugin, which in turn would prevent content from being stored [S20288]
- Fix typing "a" with linebreaks mode and baseurls plugin breaking the manager

Redactor 2.3.4-pl
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
      'guid' => '0159b3df2ebcbb23ca515ac7a1b69dc7',
      'native_key' => 'redactor',
      'filename' => 'modNamespace/94419808ef7021c2a362e34d4cdf05db.vehicle',
      'namespace' => 'redactor',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => 'e150040891b80a45c6a3cc0f4c45a845',
      'native_key' => 'e150040891b80a45c6a3cc0f4c45a845',
      'filename' => 'xPDOFileVehicle/11dd2f577e8832d721e72389b4abd09e.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'modmoreVehicle',
      'class' => 'modPlugin',
      'guid' => 'a487483336f64272bac12fd39df22286',
      'native_key' => NULL,
      'filename' => 'modPlugin/5eeddb0c4f0bfefc86d7ac8df48c6866.vehicle',
      'namespace' => 'redactor',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9a20ba1078ff4a0bab147f42b513c353',
      'native_key' => 'redactor.lang',
      'filename' => 'modSystemSetting/6bdb4f00958c45e122eddcdb923ceb85.vehicle',
      'namespace' => 'redactor',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd9e4da92fb2100adb08309551ae72125',
      'native_key' => 'redactor.direction',
      'filename' => 'modSystemSetting/338f018098fb5a05fd6beaf10de44975.vehicle',
      'namespace' => 'redactor',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '53ad4208f05a98b81485b09fb3bb4f04',
      'native_key' => 'redactor.buttons',
      'filename' => 'modSystemSetting/89dea24ed4a5671c039e8205024a9f87.vehicle',
      'namespace' => 'redactor',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1c027c7e3f2eea20c8c9c01bdebcfbe8',
      'native_key' => 'redactor.activeButtons',
      'filename' => 'modSystemSetting/3dbd45c0bad5bb826ec4547a8d6036c2.vehicle',
      'namespace' => 'redactor',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '48c7dd5f6bef9a7f348ae11866710de8',
      'native_key' => 'redactor.activeButtonsStates',
      'filename' => 'modSystemSetting/8472a37187cb93dfad1149b012a9aa59.vehicle',
      'namespace' => 'redactor',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7ad73977f40197c6e253fcbe5e03c8d2',
      'native_key' => 'redactor.formattingTags',
      'filename' => 'modSystemSetting/f2f369edd2de2c212ec70ea4189f6640.vehicle',
      'namespace' => 'redactor',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd889b4150dcc6c03121692ae1023fc93',
      'native_key' => 'redactor.buttonSource',
      'filename' => 'modSystemSetting/46cc5dbb13abca21941fdd6d5e3fb65c.vehicle',
      'namespace' => 'redactor',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4ad891bac0738622d4f240cb960b2a87',
      'native_key' => 'redactor.buttonFullScreen',
      'filename' => 'modSystemSetting/17c5432766c3a9e58b77f320c596a5da.vehicle',
      'namespace' => 'redactor',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4ccdb35f38df5d8502734a1bf069af62',
      'native_key' => 'redactor.css',
      'filename' => 'modSystemSetting/d0084ca98763bff3d40193b9e716b4e7.vehicle',
      'namespace' => 'redactor',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9d9634e17fe8e513175330c6a2f5a6d6',
      'native_key' => 'redactor.shortcuts',
      'filename' => 'modSystemSetting/38fe489521d6d689cb1fce1ae0f57209.vehicle',
      'namespace' => 'redactor',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b13dcd87b443cc8172727ae8d004a3bc',
      'native_key' => 'redactor.cleanup',
      'filename' => 'modSystemSetting/c67c7da7f11ceddd06446f421be7cab5.vehicle',
      'namespace' => 'redactor',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '967fc9e749886fc81a769e5c54c6729b',
      'native_key' => 'redactor.convertLinks',
      'filename' => 'modSystemSetting/902176470f0a977d010fa34e5d7d699a.vehicle',
      'namespace' => 'redactor',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '69478d31bb92f697f919c9403bc96c74',
      'native_key' => 'redactor.tabindex',
      'filename' => 'modSystemSetting/28f760c86a24222ec476853514341ae8.vehicle',
      'namespace' => 'redactor',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cccc88a190d8e7223f7b0eddd54ee191',
      'native_key' => 'redactor.minHeight',
      'filename' => 'modSystemSetting/7b55ded6d89fdd4421fcfbe1831e3706.vehicle',
      'namespace' => 'redactor',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '27cbefbcbdae40268f36a8f6a6f84db3',
      'native_key' => 'redactor.colors',
      'filename' => 'modSystemSetting/9640856e161abe1e39e4572ea42d84a1.vehicle',
      'namespace' => 'redactor',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9d588be99a08ec71d5e57b1dcce139fe',
      'native_key' => 'redactor.wym',
      'filename' => 'modSystemSetting/df2422551a10444a2ceea53ffd9e234b.vehicle',
      'namespace' => 'redactor',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2a12bee6763f6695626e15c6b84b71b7',
      'native_key' => 'redactor.linkProtocol',
      'filename' => 'modSystemSetting/3c57a03b487e543fd1a6b14e7a08e8f5.vehicle',
      'namespace' => 'redactor',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8281a7a9540a8dfcfb9e1a737587390c',
      'native_key' => 'redactor.placeholder',
      'filename' => 'modSystemSetting/1ca0ed6e4820670bf6ea32933b7f328e.vehicle',
      'namespace' => 'redactor',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f90f4d747f0ec18e8845a946ab144614',
      'native_key' => 'redactor.linebreaks',
      'filename' => 'modSystemSetting/e64c6ee653f8d0cff27fe5a9fb0eff11.vehicle',
      'namespace' => 'redactor',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '04c6b08bc64f1c4bb15f90c64bbe730a',
      'native_key' => 'redactor.allowedTags',
      'filename' => 'modSystemSetting/c77c82dc47780f355fec25e25b4d6e14.vehicle',
      'namespace' => 'redactor',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b20854e83a4b1a9c4db8a3378571d447',
      'native_key' => 'redactor.deniedTags',
      'filename' => 'modSystemSetting/17ed4f18f5106c6402847d4349b69ef9.vehicle',
      'namespace' => 'redactor',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bbd97dec2f934f3c2298436701a87212',
      'native_key' => 'redactor.linkEmail',
      'filename' => 'modSystemSetting/65d83cfcbfc99ea138700f165ac76bd2.vehicle',
      'namespace' => 'redactor',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a9d80fe0e488f52fc6e68454a1eff9d2',
      'native_key' => 'redactor.linkAnchor',
      'filename' => 'modSystemSetting/3e180f2c05a53df72070585b748cc373.vehicle',
      'namespace' => 'redactor',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c70722b125181b907872a5991df3c140',
      'native_key' => 'redactor.pastePlainText',
      'filename' => 'modSystemSetting/253c5cf16a8ed7754ce8bd68c90601c1.vehicle',
      'namespace' => 'redactor',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a78a4b97f652c7c14fe2cb45dd98f53f',
      'native_key' => 'redactor.paragraphize',
      'filename' => 'modSystemSetting/5589d1e5808b15e37cdef1498f369824.vehicle',
      'namespace' => 'redactor',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6e82d36a9d20a4b8fec3e31c83ee1e4b',
      'native_key' => 'redactor.removeComments',
      'filename' => 'modSystemSetting/491d4a8c2a487bb6cf4e7bfc9414b3a1.vehicle',
      'namespace' => 'redactor',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9a23bdb00f26a02a64b09eaf38d598b8',
      'native_key' => 'redactor.visual',
      'filename' => 'modSystemSetting/9cdaa397def9da5ca0ff8a20df5d7885.vehicle',
      'namespace' => 'redactor',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '87b0c4d82259908b3cfd0b4d390764a7',
      'native_key' => 'redactor.marginFloatLeft',
      'filename' => 'modSystemSetting/c6eb51e22911aba8bc6efdc928c55e8b.vehicle',
      'namespace' => 'redactor',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '712cec8ef621040fedad66adc94bf727',
      'native_key' => 'redactor.marginFloatRight',
      'filename' => 'modSystemSetting/dcee74552845db939e10d9f9170f988e.vehicle',
      'namespace' => 'redactor',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2d694c5d26175a606b40418fb5942bbe',
      'native_key' => 'redactor.mediasource',
      'filename' => 'modSystemSetting/6d204bfa1ac814e636cba972fef9c08d.vehicle',
      'namespace' => 'redactor',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8f6597d37835a8e08b31267a6620121f',
      'native_key' => 'redactor.file_mediasource',
      'filename' => 'modSystemSetting/44cbf918de9132d026082afc7a87a4b4.vehicle',
      'namespace' => 'redactor',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7c8024e2dd381e890b666dbd85399b04',
      'native_key' => 'redactor.image_upload_path',
      'filename' => 'modSystemSetting/26d8c9d9711e5029ea915acbf6afe70b.vehicle',
      'namespace' => 'redactor',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e478f7ae7339849e3d549822f678f159',
      'native_key' => 'redactor.image_browse_path',
      'filename' => 'modSystemSetting/91a99469c6c8ec8344eb91fe30e0b49e.vehicle',
      'namespace' => 'redactor',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '65ce202252837a71eda1c535dac2ef47',
      'native_key' => 'redactor.file_upload_path',
      'filename' => 'modSystemSetting/fd6a54f79fac0e88cd84caffc4ddf532.vehicle',
      'namespace' => 'redactor',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '63a79ee10e6fb56fbd28334e1f0eda4b',
      'native_key' => 'redactor.file_browse_path',
      'filename' => 'modSystemSetting/71f8c98f78663ad91a76c33a74a86202.vehicle',
      'namespace' => 'redactor',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cbc24ae81eff97935018fa8afeb0c9b2',
      'native_key' => 'redactor.browse_files',
      'filename' => 'modSystemSetting/0c1fbddcee44889c7847fcb1e7ca72e7.vehicle',
      'namespace' => 'redactor',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a8adc16bdc2926b47c0ad91d6a2dae6d',
      'native_key' => 'redactor.date_images',
      'filename' => 'modSystemSetting/f91ccaf262d1965626bf4c2cde910102.vehicle',
      'namespace' => 'redactor',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4b0fd163eca379b07af92e4dc58750a3',
      'native_key' => 'redactor.date_files',
      'filename' => 'modSystemSetting/98317e8cc9a9c7b1d2465a3f7d5e9b68.vehicle',
      'namespace' => 'redactor',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b58175755d131576563c1b217e80c615',
      'native_key' => 'redactor.typeahead.include_introtext',
      'filename' => 'modSystemSetting/55ed350dc9ce3eb6ced1969b34a32a49.vehicle',
      'namespace' => 'redactor',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '841ead9070ac035f35c0969ba49351d6',
      'native_key' => 'redactor.prefetch_ttl',
      'filename' => 'modSystemSetting/10eefe3ed72e1483ced7c5242290554c.vehicle',
      'namespace' => 'redactor',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '49257a4727c9a45436382e1dbf237a4d',
      'native_key' => 'redactor.linkResource',
      'filename' => 'modSystemSetting/30ed3efb83d68bf7d3d5ecfc5c67e60d.vehicle',
      'namespace' => 'redactor',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a55867e4e263fc268d83d68c9327edad',
      'native_key' => 'redactor.cleanFileNames',
      'filename' => 'modSystemSetting/624525c6158be464c689147ed649c478.vehicle',
      'namespace' => 'redactor',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '44dc55c7aa96030ddef43e5c490c9e32',
      'native_key' => 'redactor.dynamicThumbs',
      'filename' => 'modSystemSetting/36abfe40b484b3fed50c5bc76d0c3714.vehicle',
      'namespace' => 'redactor',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b0903774ce4a5e1452e1ce625d51cb5e',
      'native_key' => 'redactor.clipsJson',
      'filename' => 'modSystemSetting/91039f5d5d78bb97d38d05532a90a7c6.vehicle',
      'namespace' => 'redactor',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '040e9152e14b6f2f6cca1d5d840ee95b',
      'native_key' => 'redactor.additionalPlugins',
      'filename' => 'modSystemSetting/6f659203c44bc6e609cbc47d1a168906.vehicle',
      'namespace' => 'redactor',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1459f6136d79f707f3928f063ea49427',
      'native_key' => 'redactor.dragUpload',
      'filename' => 'modSystemSetting/8648e214e19a166b4696247cb6a478c4.vehicle',
      'namespace' => 'redactor',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '30b56ec8d4fab0605f3442cfcf3910d2',
      'native_key' => 'redactor.convertImageLinks',
      'filename' => 'modSystemSetting/ec50332c1554feb7a9f892355562a503.vehicle',
      'namespace' => 'redactor',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ba8718ec820e05202a6b62d827d74861',
      'native_key' => 'redactor.convertVideoLinks',
      'filename' => 'modSystemSetting/27a784969e92f4239adeea7082b138e8.vehicle',
      'namespace' => 'redactor',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c79f8fe4517f2678bef3f6f93fcbf8d0',
      'native_key' => 'redactor.tabAsSpaces',
      'filename' => 'modSystemSetting/aff4c7b991c0ca8a322240757801e2fb.vehicle',
      'namespace' => 'redactor',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a5476b3248c47c07d162cfeac14c098c',
      'native_key' => 'redactor.removeEmptyTags',
      'filename' => 'modSystemSetting/29c831140a418dc77d3807fe0a5ce93c.vehicle',
      'namespace' => 'redactor',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6c22f86bf7b248d4bba45ae7dda90d46',
      'native_key' => 'redactor.sanitizePattern',
      'filename' => 'modSystemSetting/fc459276f860868289ae52e7b300fd24.vehicle',
      'namespace' => 'redactor',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'de7e14d27d9265e238ad37e62016a1c4',
      'native_key' => 'redactor.sanitizeReplace',
      'filename' => 'modSystemSetting/c7cb0977e4c8279b7bb580dbe02c56a3.vehicle',
      'namespace' => 'redactor',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '323a3e16467517a8b9f4866a10985838',
      'native_key' => 'redactor.linkSize',
      'filename' => 'modSystemSetting/6b269e3bfc326974208b852ed664cc42.vehicle',
      'namespace' => 'redactor',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f235af28575f299339c09b3dc84b0337',
      'native_key' => 'redactor.advAttrib',
      'filename' => 'modSystemSetting/0b1f67cc14270084a8137383539ae968.vehicle',
      'namespace' => 'redactor',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a3c815bc4f6a22a24ec0e4a798828a53',
      'native_key' => 'redactor.linkNofollow',
      'filename' => 'modSystemSetting/647127047ea2ae4333e5abb0b28b1f26.vehicle',
      'namespace' => 'redactor',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5ea4f8b1a00ef72ab75668a86fbbe28e',
      'native_key' => 'redactor.typewriter',
      'filename' => 'modSystemSetting/7736514e43673d23457f3b25edee70e7.vehicle',
      'namespace' => 'redactor',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '21b3c82f3baae7cb232c332eaa6c259a',
      'native_key' => 'redactor.buttonsHideOnMobile',
      'filename' => 'modSystemSetting/f1b7b85aa625d277de66b94ac4f44b93.vehicle',
      'namespace' => 'redactor',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7eea8c0e96f3ddcaebc1550bbaea797a',
      'native_key' => 'redactor.toolbarOverflow',
      'filename' => 'modSystemSetting/4984358c6234c4fba294ae931e3b11f2.vehicle',
      'namespace' => 'redactor',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '798580aea6557675cd14e6f32b09a313',
      'native_key' => 'redactor.imageTabLink',
      'filename' => 'modSystemSetting/3321415ffece79373d211ed48333d0c1.vehicle',
      'namespace' => 'redactor',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd28934ce326e53fb7a75590977b1dd2a',
      'native_key' => 'redactor.cleanSpaces',
      'filename' => 'modSystemSetting/8597028167dbe5bbfbdfc35cd58daacf.vehicle',
      'namespace' => 'redactor',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2cd4686559c5964ce1d616ca12a03c4d',
      'native_key' => 'redactor.predefinedLinks',
      'filename' => 'modSystemSetting/0fe90066ec3856689e9a39a52bc55f34.vehicle',
      'namespace' => 'redactor',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'aa6b55ce29e9717fe261a36adf21dd1b',
      'native_key' => 'redactor.shortcutsAdd',
      'filename' => 'modSystemSetting/c9e334615d7e916a7253171757b6f7aa.vehicle',
      'namespace' => 'redactor',
    ),
    65 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '876e6cd7c2eaeb2147982f61a5130430',
      'native_key' => 'redactor.commemorateRebecca',
      'filename' => 'modSystemSetting/b6629aea98f97181f96864833466b427.vehicle',
      'namespace' => 'redactor',
    ),
    66 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f2e53ebe915eb24965122ca9e686a5d2',
      'native_key' => 'redactor.toolbarFixed',
      'filename' => 'modSystemSetting/074274cb1a72298502cd3a9e358c3fe5.vehicle',
      'namespace' => 'redactor',
    ),
    67 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8b8552c538030bfb5862d1079428d2d9',
      'native_key' => 'redactor.focus',
      'filename' => 'modSystemSetting/0e8c436f17352819f4c7a34bb7719f31.vehicle',
      'namespace' => 'redactor',
    ),
    68 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '10eef7585739deeb6860729f4d13d01a',
      'native_key' => 'redactor.focusEnd',
      'filename' => 'modSystemSetting/74c7e33671a95da0450c8116f92a41fb.vehicle',
      'namespace' => 'redactor',
    ),
    69 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '503144129e951a564c33aa8a96b1c067',
      'native_key' => 'redactor.scrollTarget',
      'filename' => 'modSystemSetting/c93a1b5f1b4cf10791b2f2cc7806aaea.vehicle',
      'namespace' => 'redactor',
    ),
    70 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '86b6fac7bd830063cc6e07cea545c5b4',
      'native_key' => 'redactor.enterKey',
      'filename' => 'modSystemSetting/69b529ca2c750d5fe8799e5b9e56daf7.vehicle',
      'namespace' => 'redactor',
    ),
    71 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3067fd33a172780953d6f9310e405af3',
      'native_key' => 'redactor.cleanStyleOnEnter',
      'filename' => 'modSystemSetting/8ebcd3e5a78e5d5af158c930bfe2bb78.vehicle',
      'namespace' => 'redactor',
    ),
    72 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0644d9fc2922b9155294804dd3641085',
      'native_key' => 'redactor.linkTooltip',
      'filename' => 'modSystemSetting/a3d0659ff5103909e575ac515bba3173.vehicle',
      'namespace' => 'redactor',
    ),
    73 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '071fd7fdb0124a2defe885f7719ad84e',
      'native_key' => 'redactor.imageEditable',
      'filename' => 'modSystemSetting/80733a5bbdd9f0b85e31a71ae85526f9.vehicle',
      'namespace' => 'redactor',
    ),
    74 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f7dd9e566969f66d73f3f0347f5e5d19',
      'native_key' => 'redactor.imageResizable',
      'filename' => 'modSystemSetting/c2fa6ebe9cdb40d616f413fc9a3e023f.vehicle',
      'namespace' => 'redactor',
    ),
    75 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '147c11ae94a862b132f9a919c7ff3365',
      'native_key' => 'redactor.imageLink',
      'filename' => 'modSystemSetting/dd171eb0bba45b0f007a4e49f02d1696.vehicle',
      'namespace' => 'redactor',
    ),
    76 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '134ba0e107e3682c8fbf83c8f9527fd5',
      'native_key' => 'redactor.imagePosition',
      'filename' => 'modSystemSetting/bf871eee4aa167464dc82137c53332d2.vehicle',
      'namespace' => 'redactor',
    ),
    77 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ef7febbcd47bc16e3373d18f6ee00388',
      'native_key' => 'redactor.buttonsHide',
      'filename' => 'modSystemSetting/bd9408a0d436a73fc5ca7061c1b54b93.vehicle',
      'namespace' => 'redactor',
    ),
    78 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '826974e217341ffc8f26895c7203fe7e',
      'native_key' => 'redactor.formattingAdd',
      'filename' => 'modSystemSetting/43a5f361853ea6d20c96c6374bb2e9b2.vehicle',
      'namespace' => 'redactor',
    ),
    79 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a6652801b1d4a7b7d5091021bc5a4dce',
      'native_key' => 'redactor.tabifier',
      'filename' => 'modSystemSetting/80edce7287a5abb241a54f183e69ea37.vehicle',
      'namespace' => 'redactor',
    ),
    80 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e923087288f697e5575a8907a8f58049',
      'native_key' => 'redactor.replaceTags',
      'filename' => 'modSystemSetting/dfcdfa215cab726e3b5c75c318e06aa4.vehicle',
      'namespace' => 'redactor',
    ),
    81 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0d7a0348701c382f788363abdbfa487d',
      'native_key' => 'redactor.replaceStyles',
      'filename' => 'modSystemSetting/e0abcc9fd961ac3c12b1571a35795966.vehicle',
      'namespace' => 'redactor',
    ),
    82 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'adf15f9a64efa908035697c82c79a6e6',
      'native_key' => 'redactor.removeDataAttr',
      'filename' => 'modSystemSetting/f6f1744d55610ee70d7715a8517062ee.vehicle',
      'namespace' => 'redactor',
    ),
    83 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f91af21add8cc55918a956fed1301e67',
      'native_key' => 'redactor.removeAttr',
      'filename' => 'modSystemSetting/ba530dbe5e002054b86cc6e85d7cf050.vehicle',
      'namespace' => 'redactor',
    ),
    84 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '55f9192df2f43c6cf1880498b037d153',
      'native_key' => 'redactor.allowedAttr',
      'filename' => 'modSystemSetting/22cbb00339c1ea801557684192050e85.vehicle',
      'namespace' => 'redactor',
    ),
    85 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c888c6467f69a144f0b3ce83034cb31b',
      'native_key' => 'redactor.dragImageUpload',
      'filename' => 'modSystemSetting/307c93f838aa376c71d5e637bee7d694.vehicle',
      'namespace' => 'redactor',
    ),
    86 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a251c1f7520f7892b7f2c7183cc9f443',
      'native_key' => 'redactor.dragFileUpload',
      'filename' => 'modSystemSetting/3964cf3e8ef6d3cebe33ae8998177c19.vehicle',
      'namespace' => 'redactor',
    ),
    87 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '81af8d10844c92f44023e84153ac8054',
      'native_key' => 'redactor.replaceDivs',
      'filename' => 'modSystemSetting/e88e12aeb0c3f1122bc8f0b12a285d3e.vehicle',
      'namespace' => 'redactor',
    ),
    88 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5ef17ec41aa9ae78f22bf44737914c1c',
      'native_key' => 'redactor.preSpaces',
      'filename' => 'modSystemSetting/44acc0c90752a73d1c9587de87b5eae3.vehicle',
      'namespace' => 'redactor',
    ),
    89 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '30237193a3ad4a8a9529b50f0c8e3b78',
      'native_key' => 'redactor.parse_parent_path',
      'filename' => 'modSystemSetting/07e6a33bb221cc661f3b782a0194d428.vehicle',
      'namespace' => 'redactor',
    ),
    90 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0a8c208ae1aea45d4c38c82f3105d556',
      'native_key' => 'redactor.increment_file_names',
      'filename' => 'modSystemSetting/2e035f02b63e11c41585b8bdb43babe8.vehicle',
      'namespace' => 'redactor',
    ),
    91 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '54c0bf94cf9fd55e89d89e78f2331299',
      'native_key' => 'redactor.parse_parent_path_height',
      'filename' => 'modSystemSetting/098f5326f73c88a8995dc03d82af5965.vehicle',
      'namespace' => 'redactor',
    ),
    92 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5005129cd95064a7b555e779964e0af0',
      'native_key' => 'redactor.baseurls_mode',
      'filename' => 'modSystemSetting/e6045d7a2af13ddd06eb0fe66420c0d7.vehicle',
      'namespace' => 'redactor',
    ),
    93 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5f67859f38dfe3cb92237b3e84278810',
      'native_key' => 'redactor.showDimensionsOnResize',
      'filename' => 'modSystemSetting/88f1e329e90711254d2604eef7cc5ad6.vehicle',
      'namespace' => 'redactor',
    ),
    94 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1839783bd34bfa27fdd574298e5f23cd',
      'native_key' => 'redactor.plugin_counter',
      'filename' => 'modSystemSetting/1bd717b56eea9b0179958cb07039cad6.vehicle',
      'namespace' => 'redactor',
    ),
    95 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bd9cf691af5ccf9d0f6d69dc528fcbfe',
      'native_key' => 'redactor.plugin_fontcolor',
      'filename' => 'modSystemSetting/7c21788f13688dc6a3e482b776ddddd9.vehicle',
      'namespace' => 'redactor',
    ),
    96 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1d35acc5b9a30d4aa4838221fc83a7ab',
      'native_key' => 'redactor.plugin_fontfamily',
      'filename' => 'modSystemSetting/400062e1c45a3e5999b02199fb26dd01.vehicle',
      'namespace' => 'redactor',
    ),
    97 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b35160f548952a5b5997de1a685b3c34',
      'native_key' => 'redactor.plugin_fontsize',
      'filename' => 'modSystemSetting/846dee994720729702f827b50efd08b3.vehicle',
      'namespace' => 'redactor',
    ),
    98 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c975accf610e68daf5ac0e82b03937c3',
      'native_key' => 'redactor.plugin_limiter',
      'filename' => 'modSystemSetting/8c90eed04f5a1533ef6fc5fb75efcfbb.vehicle',
      'namespace' => 'redactor',
    ),
    99 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5b5288a7369e79d704255d71d45130ab',
      'native_key' => 'redactor.plugin_table',
      'filename' => 'modSystemSetting/fb9b629b92751eb881f14b5de81f8524.vehicle',
      'namespace' => 'redactor',
    ),
    100 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b54aaf53e38be47ce7d4a104aa68f9cf',
      'native_key' => 'redactor.plugin_textdirection',
      'filename' => 'modSystemSetting/bdd7f4cf1abaca8c139006aa97046963.vehicle',
      'namespace' => 'redactor',
    ),
    101 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '130303fcfc6de0ab3c6a8a61142d933a',
      'native_key' => 'redactor.plugin_video',
      'filename' => 'modSystemSetting/4df868021937259d15fe05c821b8ba1a.vehicle',
      'namespace' => 'redactor',
    ),
    102 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fe17404338cf8a6faefc746ae14a08fc',
      'native_key' => 'redactor.plugin_replacer',
      'filename' => 'modSystemSetting/51daf1e551f38bc77897fe24018994cf.vehicle',
      'namespace' => 'redactor',
    ),
    103 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2037e1fdded355cbde41fbc69217c3e2',
      'native_key' => 'redactor.plugin_replacer_button',
      'filename' => 'modSystemSetting/2d47bf290927859554c76fe85c890502.vehicle',
      'namespace' => 'redactor',
    ),
    104 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd7ad8d63da98373ab64124e403d71099',
      'native_key' => 'redactor.plugin_syntax',
      'filename' => 'modSystemSetting/21cca15aac5c6317cbaf732234b96264.vehicle',
      'namespace' => 'redactor',
    ),
    105 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bd260b3eef9a180d3cabae5c09ccda49',
      'native_key' => 'redactor.plugin_speek',
      'filename' => 'modSystemSetting/f1cb080ef1747c176ccd476d48bf575a.vehicle',
      'namespace' => 'redactor',
    ),
    106 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '51046d12717b3ef41313f837fcd63436',
      'native_key' => 'redactor.plugin_contrast',
      'filename' => 'modSystemSetting/c855e66d7f10d733fcb9bfad783c1bee.vehicle',
      'namespace' => 'redactor',
    ),
    107 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3de9a7b84bdc495e4376395aa6e4bbb0',
      'native_key' => 'redactor.plugin_eureka',
      'filename' => 'modSystemSetting/3b8729b4e60f907a2500cfed660aec39.vehicle',
      'namespace' => 'redactor',
    ),
    108 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '20a9c431ba5e51a944073deb9b5a433d',
      'native_key' => 'redactor.plugin_eureka_shivie9',
      'filename' => 'modSystemSetting/4024d08ec334c4113596113ad33090f1.vehicle',
      'namespace' => 'redactor',
    ),
    109 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dbd5696a7240e07252d8dc50c1600ef1',
      'native_key' => 'redactor.eurekaUpload',
      'filename' => 'modSystemSetting/2a5d1fa08534f3d1debb840644ecdd91.vehicle',
      'namespace' => 'redactor',
    ),
    110 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7786d9d86d0ae69014835377d093b7de',
      'native_key' => 'redactor.initial_directory_depth',
      'filename' => 'modSystemSetting/02ec39a1fc7413ee707820a943d2f178.vehicle',
      'namespace' => 'redactor',
    ),
    111 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd715a359f664b439824bf1990804b071',
      'native_key' => 'redactor.plugin_zoom',
      'filename' => 'modSystemSetting/d492b9d2f000343ddda5963c17119e0e.vehicle',
      'namespace' => 'redactor',
    ),
    112 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '02f81b867cd08674c2e2ac37959ae3dd',
      'native_key' => 'redactor.plugin_download',
      'filename' => 'modSystemSetting/6d5cd93bc65109cbbfce35a61966dc46.vehicle',
      'namespace' => 'redactor',
    ),
    113 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '61faf50d9e5904122fd520c242f6c3ca',
      'native_key' => 'redactor.plugin_imagepx',
      'filename' => 'modSystemSetting/a734e51f02ec2a7dc89309209aacfa8c.vehicle',
      'namespace' => 'redactor',
    ),
    114 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '08d08e9c237b5627414b10904c7ef43d',
      'native_key' => 'redactor.plugin_imageurl',
      'filename' => 'modSystemSetting/58b935a0533dfa226f12f7467ae31420.vehicle',
      'namespace' => 'redactor',
    ),
    115 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b7acf8c2487b99e09ff4578bc7e53840',
      'native_key' => 'redactor.plugin_breadcrumb',
      'filename' => 'modSystemSetting/5204e5bdb93424456b34e0b4b92261d3.vehicle',
      'namespace' => 'redactor',
    ),
    116 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7900674e55893fed871acfdea8f093dc',
      'native_key' => 'redactor.plugin_norphan',
      'filename' => 'modSystemSetting/929e947b70661d379bdd477eb933c274.vehicle',
      'namespace' => 'redactor',
    ),
    117 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a0315cacee1aa4fc879ef6f5a4db6e4c',
      'native_key' => 'redactor.plugin_baseurls',
      'filename' => 'modSystemSetting/ea53cd15ff501a9a992b6935dc7aae57.vehicle',
      'namespace' => 'redactor',
    ),
    118 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2d5efdb8db3d6d7e9312739c0fe431a1',
      'native_key' => 'redactor.textexpander',
      'filename' => 'modSystemSetting/bb753af1685c78733608d4ee36611c47.vehicle',
      'namespace' => 'redactor',
    ),
    119 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '76178eb011918fbb85c8d90bcaa29010',
      'native_key' => 'redactor.speechPitch',
      'filename' => 'modSystemSetting/ca3cef071143e86169106f6c92fc7d14.vehicle',
      'namespace' => 'redactor',
    ),
    120 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '48ef8c8e3107eeb613b31ba504976fb2',
      'native_key' => 'redactor.speechRate',
      'filename' => 'modSystemSetting/c84c0ac15c43622b197eae377a91fe83.vehicle',
      'namespace' => 'redactor',
    ),
    121 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '76ca15c7aea343d1f931b965cd25a62d',
      'native_key' => 'redactor.speechVolume',
      'filename' => 'modSystemSetting/e049517f6e8f6336e940e8d91c17fb10.vehicle',
      'namespace' => 'redactor',
    ),
    122 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '83ff163e0023af16c0a22604bdbc1d8c',
      'native_key' => 'redactor.speechVoice',
      'filename' => 'modSystemSetting/17fcc4119101dfc96d3fa9a891c7b4e1.vehicle',
      'namespace' => 'redactor',
    ),
    123 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9cec2eb071cc46ec6ca5f1d20e4a0276',
      'native_key' => 'redactor.counterWPM',
      'filename' => 'modSystemSetting/4b10169d15ecef49ede63a91f40b5237.vehicle',
      'namespace' => 'redactor',
    ),
    124 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fa997238f5ef4959ef4c83d86736bcb4',
      'native_key' => 'redactor.codemirror',
      'filename' => 'modSystemSetting/72c7346177bee365f209f7b7e61d9864.vehicle',
      'namespace' => 'redactor',
    ),
    125 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '68f42da33c3336e7becf56906fcbe84f',
      'native_key' => 'redactor.plugin_uploadcare',
      'filename' => 'modSystemSetting/459432db2cce81625890d8c5f494edbe.vehicle',
      'namespace' => 'redactor',
    ),
    126 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e85ae7e34b348ed2ad1377d463da4d12',
      'native_key' => 'redactor.uploadcare_pub_key',
      'filename' => 'modSystemSetting/3018540aae38a16b16f5fd4ac82637c7.vehicle',
      'namespace' => 'redactor',
    ),
    127 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2371bf8a63353af20cb2282b59ad8672',
      'native_key' => 'redactor.uploadcare_locale',
      'filename' => 'modSystemSetting/7d202fe2393024da0a14151a37ef08f8.vehicle',
      'namespace' => 'redactor',
    ),
    128 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7acd0395efe8c3e89698775def05d12a',
      'native_key' => 'redactor.uploadcare_crop',
      'filename' => 'modSystemSetting/717dcfdab8d8950d4703664ae053e661.vehicle',
      'namespace' => 'redactor',
    ),
    129 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f9a3819691929627a29cfed45ce4a93b',
      'native_key' => 'redactor.uploadcare_tabs',
      'filename' => 'modSystemSetting/dcc8ecd76d593275293d361dc2d78f4a.vehicle',
      'namespace' => 'redactor',
    ),
    130 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5a1d0f50e4a8202fdd12b3c3986773ad',
      'native_key' => 'redactor.loadIntrotext',
      'filename' => 'modSystemSetting/de961e8599f196a2f09e0416929fca73.vehicle',
      'namespace' => 'redactor',
    ),
    131 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9a801bdf89a1a03852d03c642cf80002',
      'native_key' => 'redactor.limiter',
      'filename' => 'modSystemSetting/1b1adcfcd9d36c122d559fe1055704f3.vehicle',
      'namespace' => 'redactor',
    ),
    132 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => '662be6b8ef5cb8f8d4913212ac986011',
      'native_key' => '662be6b8ef5cb8f8d4913212ac986011',
      'filename' => 'xPDOScriptVehicle/14fc1fa7314e236adb069268f2383b1e.vehicle',
      'namespace' => 'redactor',
    ),
  ),
);