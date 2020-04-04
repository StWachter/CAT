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
    'changelog' => 'Redactor 2.3.6-pl
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
      'guid' => '24026ad839b7dd7cc26b4d83e6afb3f5',
      'native_key' => 'redactor',
      'filename' => 'modNamespace/895b11741b27b8391297bfdbc1e08a48.vehicle',
      'namespace' => 'redactor',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '4c019e02a36fac4d30d5bc9cffbfd88d',
      'native_key' => '4c019e02a36fac4d30d5bc9cffbfd88d',
      'filename' => 'xPDOFileVehicle/7f6f63aca0d5fd657b4bc276323d2e24.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'modmoreVehicle',
      'class' => 'modPlugin',
      'guid' => '927c4b1749850b8e7f5d9fc881812798',
      'native_key' => NULL,
      'filename' => 'modPlugin/c5899f28b93e97783a9cd7acadcfce80.vehicle',
      'namespace' => 'redactor',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dcbfe2795ea7e000497d97ae9b8df2bd',
      'native_key' => 'redactor.lang',
      'filename' => 'modSystemSetting/ecc1feac5da6945c301f41a403e3124f.vehicle',
      'namespace' => 'redactor',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4a60d967dae99b5e3d28c4c82b15b5a7',
      'native_key' => 'redactor.direction',
      'filename' => 'modSystemSetting/4b0cf75b5902ad0c259ecccee958000a.vehicle',
      'namespace' => 'redactor',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7070064dd8a6bc5f5f106d747e2d0149',
      'native_key' => 'redactor.buttons',
      'filename' => 'modSystemSetting/1a7aee39dabf9a678f85373a74e1c88c.vehicle',
      'namespace' => 'redactor',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '37dc55e61cd55e1dd822822fb1962e00',
      'native_key' => 'redactor.activeButtons',
      'filename' => 'modSystemSetting/a833e9f31d0ec061e32c8e5b1707c3df.vehicle',
      'namespace' => 'redactor',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f06f1ed1a7395e089ee4fe2053aeef2a',
      'native_key' => 'redactor.activeButtonsStates',
      'filename' => 'modSystemSetting/4a43af3dd6d9f16f1fa194d1d656d505.vehicle',
      'namespace' => 'redactor',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2810556542fa333077eae787fac8a61f',
      'native_key' => 'redactor.formattingTags',
      'filename' => 'modSystemSetting/fa8fde3da52b3188e3c0f72f9efd53ab.vehicle',
      'namespace' => 'redactor',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7b3f6d562b7f3160e277eb2acb7d294f',
      'native_key' => 'redactor.buttonSource',
      'filename' => 'modSystemSetting/2806cfb6364300e2c5b50420ee7023d7.vehicle',
      'namespace' => 'redactor',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '20c626db14b4de1932be9340d4864342',
      'native_key' => 'redactor.buttonFullScreen',
      'filename' => 'modSystemSetting/6f75451d2d8cd92097b85d2ca6b2a2cc.vehicle',
      'namespace' => 'redactor',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7825629aa9ce9e6346460d0d7cab6d72',
      'native_key' => 'redactor.css',
      'filename' => 'modSystemSetting/e81dbad9b753547e9476bddc33b653e0.vehicle',
      'namespace' => 'redactor',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a15c1cacdcfd382c7b858b1c42b59fc0',
      'native_key' => 'redactor.shortcuts',
      'filename' => 'modSystemSetting/1101200d44099934efe8d0c8fd0306fc.vehicle',
      'namespace' => 'redactor',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1eac1c01f7d6a513fbaf27233fb4c9f3',
      'native_key' => 'redactor.cleanup',
      'filename' => 'modSystemSetting/1e02e4c35a40fadabef4ba4a28cea8e4.vehicle',
      'namespace' => 'redactor',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '18ee1f4b9add07d038eb141d98fa429f',
      'native_key' => 'redactor.convertLinks',
      'filename' => 'modSystemSetting/f07a010810b82fc8b09db3d259e5a491.vehicle',
      'namespace' => 'redactor',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '564a1a85b2d969ec336eaccdd991abf6',
      'native_key' => 'redactor.tabindex',
      'filename' => 'modSystemSetting/f109ef3b413f2a1d875b2717810b1dbc.vehicle',
      'namespace' => 'redactor',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3e6a59c5d90b3c4543da2ff4d0f177c5',
      'native_key' => 'redactor.minHeight',
      'filename' => 'modSystemSetting/d3928858424fccb598da8d596d3766d5.vehicle',
      'namespace' => 'redactor',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e9eb44114e09b9de4902f051602cd271',
      'native_key' => 'redactor.colors',
      'filename' => 'modSystemSetting/a23d1e0cf3daf9c84913d5bf57341904.vehicle',
      'namespace' => 'redactor',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b2214dc88a37aec041c03d6052bd1783',
      'native_key' => 'redactor.wym',
      'filename' => 'modSystemSetting/6cca71f153312869b6c80bceb2f1f880.vehicle',
      'namespace' => 'redactor',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fce9f9de22817bbcd0f9114c7a3543ed',
      'native_key' => 'redactor.linkProtocol',
      'filename' => 'modSystemSetting/db933cc7cfc6cc6ae5aacf85d65716e5.vehicle',
      'namespace' => 'redactor',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '90fe10a75d70550390bfc328ed53c8d3',
      'native_key' => 'redactor.placeholder',
      'filename' => 'modSystemSetting/452fe9f415c01c1586947fab64ea3ab6.vehicle',
      'namespace' => 'redactor',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '678464f4bebb3ae167ef1528ec667024',
      'native_key' => 'redactor.linebreaks',
      'filename' => 'modSystemSetting/1ef5cc72a810f9a35dcd06665437cd86.vehicle',
      'namespace' => 'redactor',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '96bf384a9c0bf8ee11393d59a2212783',
      'native_key' => 'redactor.allowedTags',
      'filename' => 'modSystemSetting/1f31e39402bbf81805da584542bf530b.vehicle',
      'namespace' => 'redactor',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4eac916fab4fa338f976e56d10955bea',
      'native_key' => 'redactor.deniedTags',
      'filename' => 'modSystemSetting/bee6da8481ec904b75bc7b5f332971fa.vehicle',
      'namespace' => 'redactor',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a5cbc733712443f92c615ef9afd2c132',
      'native_key' => 'redactor.linkEmail',
      'filename' => 'modSystemSetting/2d86207947802996f7f68f2af75828e3.vehicle',
      'namespace' => 'redactor',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bb3712ce263a783d2bb21f1dabb620e5',
      'native_key' => 'redactor.linkAnchor',
      'filename' => 'modSystemSetting/46f5d69ee8cd815f188a96def9a8bb08.vehicle',
      'namespace' => 'redactor',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a59288d21b4dad4b406e7e8f740b3e10',
      'native_key' => 'redactor.pastePlainText',
      'filename' => 'modSystemSetting/864b442cbc6fd885fa00d0c6fea65105.vehicle',
      'namespace' => 'redactor',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '70f9c0d36192d3a0daac41da6920c999',
      'native_key' => 'redactor.paragraphize',
      'filename' => 'modSystemSetting/1254a41595c487fd6cf9964ec37d55c4.vehicle',
      'namespace' => 'redactor',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cb9adf0f26864b30deb9eaeeeb12401a',
      'native_key' => 'redactor.removeComments',
      'filename' => 'modSystemSetting/7c99c7e87f5058d4bc0b302b5ea68000.vehicle',
      'namespace' => 'redactor',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2fda036dfe4643a2cdc064500435a04e',
      'native_key' => 'redactor.visual',
      'filename' => 'modSystemSetting/fdd81e667973c575206b01c5c3c4dbfe.vehicle',
      'namespace' => 'redactor',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7192eca1784f30e416429f64ff6f6f9e',
      'native_key' => 'redactor.marginFloatLeft',
      'filename' => 'modSystemSetting/c9db84a31591a09323c1763c7ac724c5.vehicle',
      'namespace' => 'redactor',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '55f7122cc28620f0f48dd696590844bd',
      'native_key' => 'redactor.marginFloatRight',
      'filename' => 'modSystemSetting/2f469cf2a1ed74630db8a32e3828f426.vehicle',
      'namespace' => 'redactor',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '61d2fbd0885b468351e82cf35ea01a34',
      'native_key' => 'redactor.mediasource',
      'filename' => 'modSystemSetting/628c1502edc44b9234545c660343b6ee.vehicle',
      'namespace' => 'redactor',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2a657571e655751c78ae7f4c122340db',
      'native_key' => 'redactor.file_mediasource',
      'filename' => 'modSystemSetting/5572feda3e81f5da20049fdb1d096c01.vehicle',
      'namespace' => 'redactor',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3be18d0dc32e1f112df833491a1e8140',
      'native_key' => 'redactor.image_upload_path',
      'filename' => 'modSystemSetting/3136a78d82a82696d75c7bf975381a70.vehicle',
      'namespace' => 'redactor',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dfd16071fc83b30ab1c84db2f4f1ad77',
      'native_key' => 'redactor.image_browse_path',
      'filename' => 'modSystemSetting/53b72bafd7588d2e0e5d7b1864f90216.vehicle',
      'namespace' => 'redactor',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '69411d41f4efd0e92dad01bd8742c4b0',
      'native_key' => 'redactor.file_upload_path',
      'filename' => 'modSystemSetting/bb14dce6f4aa44c6e54f31dcb9de5388.vehicle',
      'namespace' => 'redactor',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '00d1b9ceed530426f4d81e2480200fa7',
      'native_key' => 'redactor.file_browse_path',
      'filename' => 'modSystemSetting/47a842af5e5ad2e8b53cad73a7403d60.vehicle',
      'namespace' => 'redactor',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '20b9079cd69c7309f2c59bf446417fef',
      'native_key' => 'redactor.browse_files',
      'filename' => 'modSystemSetting/d883b4c064ddbd5a72e6ca7209c6f988.vehicle',
      'namespace' => 'redactor',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '50008bc81fbe31694c3f9dc73b896af3',
      'native_key' => 'redactor.date_images',
      'filename' => 'modSystemSetting/ca3727e9ac651141d9cf07782a3a3ff9.vehicle',
      'namespace' => 'redactor',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9d749fa283a1889435f56060c2f63d32',
      'native_key' => 'redactor.date_files',
      'filename' => 'modSystemSetting/a042ca831add7b924ee353211659614d.vehicle',
      'namespace' => 'redactor',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9f03318501afc6565940265105f8066a',
      'native_key' => 'redactor.typeahead.include_introtext',
      'filename' => 'modSystemSetting/43546a0c437ac8feed1fa2f9617a5cf1.vehicle',
      'namespace' => 'redactor',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1199b23913cca5dabbc944389abff257',
      'native_key' => 'redactor.prefetch_ttl',
      'filename' => 'modSystemSetting/f2efaeee244933b6613d6452bc22866f.vehicle',
      'namespace' => 'redactor',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '02d1fc31b72020e8788bf939f2b3d579',
      'native_key' => 'redactor.linkResource',
      'filename' => 'modSystemSetting/5307db7df5604fde839ca98b14632963.vehicle',
      'namespace' => 'redactor',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a637e97053802f43b6620981790d7c25',
      'native_key' => 'redactor.cleanFileNames',
      'filename' => 'modSystemSetting/c2a263d7663f85842f90adab97f73a2a.vehicle',
      'namespace' => 'redactor',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '85a39ab7e8d99186ec4c07ee3cb85a9f',
      'native_key' => 'redactor.dynamicThumbs',
      'filename' => 'modSystemSetting/9305fe3f2bcfa9778fccfc4f4ea12818.vehicle',
      'namespace' => 'redactor',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5d6b79be6e6a3367173253b68068a6b8',
      'native_key' => 'redactor.clipsJson',
      'filename' => 'modSystemSetting/9254340850fdb8648060994202929341.vehicle',
      'namespace' => 'redactor',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ac820bc68d6486f63aa12bc804cc0950',
      'native_key' => 'redactor.additionalPlugins',
      'filename' => 'modSystemSetting/424e80dcafa008212fedc6b8c19af515.vehicle',
      'namespace' => 'redactor',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b7c24b726a6c25d3471b7b71cc1eb8bb',
      'native_key' => 'redactor.dragUpload',
      'filename' => 'modSystemSetting/258b232829e0b2d8cec2f241b302d904.vehicle',
      'namespace' => 'redactor',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '17ae08ced36835aa8c887a2447af0f0a',
      'native_key' => 'redactor.convertImageLinks',
      'filename' => 'modSystemSetting/09923baf6484de26e42f8a3a7ef406ac.vehicle',
      'namespace' => 'redactor',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cccbb33c6474f5e76ef12361bc3655bd',
      'native_key' => 'redactor.convertVideoLinks',
      'filename' => 'modSystemSetting/b598bde591fe114ff9eedf55031eafc4.vehicle',
      'namespace' => 'redactor',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6244d964b02af64d961fc89e9a098d81',
      'native_key' => 'redactor.tabAsSpaces',
      'filename' => 'modSystemSetting/f605b70637a8666eece5e35ed36c1381.vehicle',
      'namespace' => 'redactor',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '41831aa665d40c8e582fe24bcbcf9ac0',
      'native_key' => 'redactor.removeEmptyTags',
      'filename' => 'modSystemSetting/51fada913d1f57262a1d8b7bdfa6e4e8.vehicle',
      'namespace' => 'redactor',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '765bcaa73f75974c5e34ed834840326f',
      'native_key' => 'redactor.sanitizePattern',
      'filename' => 'modSystemSetting/3214d8d80ae2da06dfc52873ca11b4d0.vehicle',
      'namespace' => 'redactor',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '24f40e7eb74ab5096fa6c25343df56f1',
      'native_key' => 'redactor.sanitizeReplace',
      'filename' => 'modSystemSetting/93096d2581e47f63d9f2436d0ba9cfe0.vehicle',
      'namespace' => 'redactor',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b63000f5e6e87fc98a1100c24453602a',
      'native_key' => 'redactor.linkSize',
      'filename' => 'modSystemSetting/05b9eb12f7961c025697c412fc217131.vehicle',
      'namespace' => 'redactor',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c22530f60deb84a5c919dead736a4f13',
      'native_key' => 'redactor.advAttrib',
      'filename' => 'modSystemSetting/bb2b7441411cf6933fb5ff317901c603.vehicle',
      'namespace' => 'redactor',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f9faad1e6e83276aab05bebc4561aec8',
      'native_key' => 'redactor.linkNofollow',
      'filename' => 'modSystemSetting/f988a9b706454770c2c529f0dc6dce41.vehicle',
      'namespace' => 'redactor',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9b6fa8829adcf93523341b36ac2f331a',
      'native_key' => 'redactor.typewriter',
      'filename' => 'modSystemSetting/7df415d65bbab272a1c559b8a9948b2a.vehicle',
      'namespace' => 'redactor',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1f5cdcfa24f918774c544cd01948c2d0',
      'native_key' => 'redactor.buttonsHideOnMobile',
      'filename' => 'modSystemSetting/a79eaf89f2064741007669b7593cb17d.vehicle',
      'namespace' => 'redactor',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4bdbccd0e2c12e67eb2eb50cbad918fe',
      'native_key' => 'redactor.toolbarOverflow',
      'filename' => 'modSystemSetting/04b52f64d5b82f426590f1855fa0d757.vehicle',
      'namespace' => 'redactor',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a83c897b582861df1e0371db6c0d9884',
      'native_key' => 'redactor.imageTabLink',
      'filename' => 'modSystemSetting/3cf41aec9fefd85b4d685a925a847c56.vehicle',
      'namespace' => 'redactor',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '82163400b744f97b22dadae3a33bf8ae',
      'native_key' => 'redactor.cleanSpaces',
      'filename' => 'modSystemSetting/82a1c37f41b0c24d643347fb23ca207d.vehicle',
      'namespace' => 'redactor',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '905f8c9bd5180aed73463532572e9149',
      'native_key' => 'redactor.predefinedLinks',
      'filename' => 'modSystemSetting/e183099208ff10bbeec27767d638f66b.vehicle',
      'namespace' => 'redactor',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '43c516e9107f55c9ffd68405a2587d8b',
      'native_key' => 'redactor.shortcutsAdd',
      'filename' => 'modSystemSetting/e1a825a75099bc6884a50c0ad1ad03f0.vehicle',
      'namespace' => 'redactor',
    ),
    65 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b1d88498c8e60893eb83b9967be14b42',
      'native_key' => 'redactor.commemorateRebecca',
      'filename' => 'modSystemSetting/de796c365e35ffb8a89fe825a8f76a55.vehicle',
      'namespace' => 'redactor',
    ),
    66 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7f9f6063cd2e54a8b3587b456c961bce',
      'native_key' => 'redactor.toolbarFixed',
      'filename' => 'modSystemSetting/00b5a4eee028fb740b7cf1bdbf52688a.vehicle',
      'namespace' => 'redactor',
    ),
    67 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '77dcc73baeb3d779f97f6dfa20258482',
      'native_key' => 'redactor.focus',
      'filename' => 'modSystemSetting/20331e38becaf062823c79f64145a55b.vehicle',
      'namespace' => 'redactor',
    ),
    68 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e9983992579ca423e0f90153843abded',
      'native_key' => 'redactor.focusEnd',
      'filename' => 'modSystemSetting/7f88df4a9a3cba429d24bbf74a84a200.vehicle',
      'namespace' => 'redactor',
    ),
    69 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '619a181c12956f9ffb66d723265ff40d',
      'native_key' => 'redactor.scrollTarget',
      'filename' => 'modSystemSetting/43324441ffe88e7148ef90b2a144375e.vehicle',
      'namespace' => 'redactor',
    ),
    70 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '11073edb57d9e1de91a7b190b844e4e1',
      'native_key' => 'redactor.enterKey',
      'filename' => 'modSystemSetting/f29acad76d4b4b1c5086a9f81f5ae198.vehicle',
      'namespace' => 'redactor',
    ),
    71 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '347afc26dd23260766cc9b5f225f9178',
      'native_key' => 'redactor.cleanStyleOnEnter',
      'filename' => 'modSystemSetting/43faf5a9444d1a7cd32e322776c34dda.vehicle',
      'namespace' => 'redactor',
    ),
    72 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4320c9587bea7a2a0affcc0459f1dcf9',
      'native_key' => 'redactor.linkTooltip',
      'filename' => 'modSystemSetting/98b9e786d48c92f7f78a935e3dcb00d8.vehicle',
      'namespace' => 'redactor',
    ),
    73 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7a4120d53f64529dccb55dce064c00c1',
      'native_key' => 'redactor.imageEditable',
      'filename' => 'modSystemSetting/c7e01fd0947ab38e207e663ade2f3d38.vehicle',
      'namespace' => 'redactor',
    ),
    74 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0e7f255592d2c47a4c680bba35afb5d8',
      'native_key' => 'redactor.imageResizable',
      'filename' => 'modSystemSetting/2def2b70bb8c2ad17c9ec9f25fb65734.vehicle',
      'namespace' => 'redactor',
    ),
    75 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c48cba83134fbc23b7496d8c702874be',
      'native_key' => 'redactor.imageLink',
      'filename' => 'modSystemSetting/7185bc5b4a4ebfa5fa20e949fc8b3ece.vehicle',
      'namespace' => 'redactor',
    ),
    76 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8c9650d314e99cb7758555c84b98e934',
      'native_key' => 'redactor.imagePosition',
      'filename' => 'modSystemSetting/9eebdde1265f735b0f6bf36f70980723.vehicle',
      'namespace' => 'redactor',
    ),
    77 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '922c1aa612c0566cc50fc41d8fdae087',
      'native_key' => 'redactor.buttonsHide',
      'filename' => 'modSystemSetting/5a78ffd3d9ea2582d1ee6759b285796b.vehicle',
      'namespace' => 'redactor',
    ),
    78 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a9d073d5ad2429be8e1262c85f444e8b',
      'native_key' => 'redactor.formattingAdd',
      'filename' => 'modSystemSetting/b2136ebf292b608b0932dd62fda86f7f.vehicle',
      'namespace' => 'redactor',
    ),
    79 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3512c1d37def661e4687d9d0f7c278f9',
      'native_key' => 'redactor.tabifier',
      'filename' => 'modSystemSetting/2f7f56b0fae0c58d7c47885e1926f170.vehicle',
      'namespace' => 'redactor',
    ),
    80 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a2760e8fdbd2d59d462a51d8f9858d0b',
      'native_key' => 'redactor.replaceTags',
      'filename' => 'modSystemSetting/ebb9278b06dd5756da42c2b80276f3ca.vehicle',
      'namespace' => 'redactor',
    ),
    81 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ed1ef5606ddd558965e78c3dc42ee305',
      'native_key' => 'redactor.replaceStyles',
      'filename' => 'modSystemSetting/3798011a10438ff85919d4f37e2a51be.vehicle',
      'namespace' => 'redactor',
    ),
    82 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1021aad2919eaa119b3401c2f746f4ec',
      'native_key' => 'redactor.removeDataAttr',
      'filename' => 'modSystemSetting/4144080ca838a121cb066be48e4767df.vehicle',
      'namespace' => 'redactor',
    ),
    83 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6b8970c11f509e70c1c7411dc85dc3ea',
      'native_key' => 'redactor.removeAttr',
      'filename' => 'modSystemSetting/97171984a45d37b2ad661fb35c4047d8.vehicle',
      'namespace' => 'redactor',
    ),
    84 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ba1edfe506f682ad975515f37860988a',
      'native_key' => 'redactor.allowedAttr',
      'filename' => 'modSystemSetting/931867916ef3428c96d94f3507ec38db.vehicle',
      'namespace' => 'redactor',
    ),
    85 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4b0e2fdad2cb32347c70b5000b62fbb9',
      'native_key' => 'redactor.dragImageUpload',
      'filename' => 'modSystemSetting/d95595f3abd6cb0822582455f11510b0.vehicle',
      'namespace' => 'redactor',
    ),
    86 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3bcc33d908df544f9013620b521e63f1',
      'native_key' => 'redactor.dragFileUpload',
      'filename' => 'modSystemSetting/57d05c8753ea3a4bd3be56519ba556bd.vehicle',
      'namespace' => 'redactor',
    ),
    87 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '605069d48317336d17ed9f68464d465b',
      'native_key' => 'redactor.replaceDivs',
      'filename' => 'modSystemSetting/17977dda1bc9dd7d874be17b96a7053a.vehicle',
      'namespace' => 'redactor',
    ),
    88 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '992693de5c833502e0ec002ff13c6c22',
      'native_key' => 'redactor.preSpaces',
      'filename' => 'modSystemSetting/3e723cf89331eb1602a0fddebf90b414.vehicle',
      'namespace' => 'redactor',
    ),
    89 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '624ad720ca217cfd67ab83a80ae45e3d',
      'native_key' => 'redactor.parse_parent_path',
      'filename' => 'modSystemSetting/758f2b357aabbfd20b859f3f875cb546.vehicle',
      'namespace' => 'redactor',
    ),
    90 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ceb2e0ee64e44b3fe662f2e6e74eaa13',
      'native_key' => 'redactor.increment_file_names',
      'filename' => 'modSystemSetting/67e456bd49fa13fdb4675987102f5645.vehicle',
      'namespace' => 'redactor',
    ),
    91 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7e9029141c9b3813175a018baa9a0eac',
      'native_key' => 'redactor.parse_parent_path_height',
      'filename' => 'modSystemSetting/e558abc593b45757103a37ea101a59ce.vehicle',
      'namespace' => 'redactor',
    ),
    92 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bbfe1d6c7cf5ef92bce6b62b5f821c4a',
      'native_key' => 'redactor.baseurls_mode',
      'filename' => 'modSystemSetting/a36eb50c7687665f858e538d65a19ebf.vehicle',
      'namespace' => 'redactor',
    ),
    93 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '00051ed99e36325bb1fa1ada49e2ca5b',
      'native_key' => 'redactor.showDimensionsOnResize',
      'filename' => 'modSystemSetting/6b85ba44d88f3b130679ca6e03c70b92.vehicle',
      'namespace' => 'redactor',
    ),
    94 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd9151927941395545ee52ab9a83aa802',
      'native_key' => 'redactor.plugin_counter',
      'filename' => 'modSystemSetting/206acb4c950717b316435253209753ea.vehicle',
      'namespace' => 'redactor',
    ),
    95 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e9fd70e34e89f5ae007d553df387baf7',
      'native_key' => 'redactor.plugin_fontcolor',
      'filename' => 'modSystemSetting/ee84f56b6eb51beb420595dbfa48c2b2.vehicle',
      'namespace' => 'redactor',
    ),
    96 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '78fa25cd89965d983f1a2d50af89b751',
      'native_key' => 'redactor.plugin_fontfamily',
      'filename' => 'modSystemSetting/50ada7d56fd458908cae27e472536651.vehicle',
      'namespace' => 'redactor',
    ),
    97 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1f5c6b563d4f8fef01556d8d1e1c0d8c',
      'native_key' => 'redactor.plugin_fontsize',
      'filename' => 'modSystemSetting/d227289613763b46cf74cea0e3c71f8d.vehicle',
      'namespace' => 'redactor',
    ),
    98 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8682be84afebc86a252e7b8311b898d7',
      'native_key' => 'redactor.plugin_limiter',
      'filename' => 'modSystemSetting/73ecad3f79961663eaa5c89992432fb7.vehicle',
      'namespace' => 'redactor',
    ),
    99 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '835ec82476125fb92a4ed4ba9ee69b16',
      'native_key' => 'redactor.plugin_table',
      'filename' => 'modSystemSetting/2501f703bf52845664d73d8e76155089.vehicle',
      'namespace' => 'redactor',
    ),
    100 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3988ec7a303ddfb653e7610745bbf5ad',
      'native_key' => 'redactor.plugin_textdirection',
      'filename' => 'modSystemSetting/c86d8cf5675c52b5ca9b654c349ec309.vehicle',
      'namespace' => 'redactor',
    ),
    101 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0e5af28c86c7590b9b1b75c68e87b7ba',
      'native_key' => 'redactor.plugin_video',
      'filename' => 'modSystemSetting/22fca3d80528865abc061222086afca8.vehicle',
      'namespace' => 'redactor',
    ),
    102 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'db95c61ab3a7fa119ba7273c2cfc8cfa',
      'native_key' => 'redactor.plugin_replacer',
      'filename' => 'modSystemSetting/f22892e85ff387fcc70b7a77365e8e58.vehicle',
      'namespace' => 'redactor',
    ),
    103 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a6e57d1fd5237114bc19db825a9304ac',
      'native_key' => 'redactor.plugin_syntax',
      'filename' => 'modSystemSetting/0e686208ac404b80a5e2d71fb6e8e864.vehicle',
      'namespace' => 'redactor',
    ),
    104 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f82da5a9c5e3cba6735e648c2f55b992',
      'native_key' => 'redactor.plugin_speek',
      'filename' => 'modSystemSetting/91ab496c229f71a8e40e6e7fea5f6d0e.vehicle',
      'namespace' => 'redactor',
    ),
    105 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a2f1cb1e7d6d88c41c814e7c9d3bdb9b',
      'native_key' => 'redactor.plugin_contrast',
      'filename' => 'modSystemSetting/a8aa875d22af379787e7cbae72c67688.vehicle',
      'namespace' => 'redactor',
    ),
    106 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dcb19c2bf12914244bdb276df6df965b',
      'native_key' => 'redactor.plugin_eureka',
      'filename' => 'modSystemSetting/a8e9a47607659d845746f57130fd040d.vehicle',
      'namespace' => 'redactor',
    ),
    107 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a84de7f65f12c31b957f24cfcde77aa4',
      'native_key' => 'redactor.plugin_eureka_shivie9',
      'filename' => 'modSystemSetting/87e7738e604241cc193f8a931e9c47dc.vehicle',
      'namespace' => 'redactor',
    ),
    108 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5e531d661b7d34aa2dafce168fbe945c',
      'native_key' => 'redactor.eurekaUpload',
      'filename' => 'modSystemSetting/306aba03abab231637a1099ffc1be273.vehicle',
      'namespace' => 'redactor',
    ),
    109 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5d514ad89ef1051b24d12eb03d284545',
      'native_key' => 'redactor.initial_directory_depth',
      'filename' => 'modSystemSetting/1620335b523ccb55fc5441fc481bcda7.vehicle',
      'namespace' => 'redactor',
    ),
    110 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '363d14466141a9a050a265273afad7b9',
      'native_key' => 'redactor.plugin_zoom',
      'filename' => 'modSystemSetting/801144df9ce76b81efe4b31a5bed0165.vehicle',
      'namespace' => 'redactor',
    ),
    111 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4e0a0e8cda6a48929a9e105f6996aada',
      'native_key' => 'redactor.plugin_download',
      'filename' => 'modSystemSetting/445dcfe3fbd7fcfbd47a53e8ea19ff9d.vehicle',
      'namespace' => 'redactor',
    ),
    112 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '83b6ba23c7d8af4161710785d57bfde7',
      'native_key' => 'redactor.plugin_imagepx',
      'filename' => 'modSystemSetting/60ba0f60d669b43dc72b9ad148436595.vehicle',
      'namespace' => 'redactor',
    ),
    113 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5e9959abfe0de381463e64fc49d8b94f',
      'native_key' => 'redactor.plugin_imageurl',
      'filename' => 'modSystemSetting/f5b08480099fab6f91d69e6fa46cd4e4.vehicle',
      'namespace' => 'redactor',
    ),
    114 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ce7521ac7ab1bf39975f632b527059f2',
      'native_key' => 'redactor.plugin_breadcrumb',
      'filename' => 'modSystemSetting/5c545cf39ab21a1974c7de1ae0fe854a.vehicle',
      'namespace' => 'redactor',
    ),
    115 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '79ddb07e9940f34798406be8595edf08',
      'native_key' => 'redactor.plugin_norphan',
      'filename' => 'modSystemSetting/086f30d74947b19e67af00e2afd85edc.vehicle',
      'namespace' => 'redactor',
    ),
    116 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '37f9a7a7ed1b4a4416417d5745d61bf9',
      'native_key' => 'redactor.plugin_baseurls',
      'filename' => 'modSystemSetting/3a7c1064a3ee09936f76f05aed68de86.vehicle',
      'namespace' => 'redactor',
    ),
    117 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7e09071199d5ae58af1920097a324ce2',
      'native_key' => 'redactor.textexpander',
      'filename' => 'modSystemSetting/dfd66e7e4aa3c82404d5a788f1b697c3.vehicle',
      'namespace' => 'redactor',
    ),
    118 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '618d61f40d72856c9962b4b45b363c23',
      'native_key' => 'redactor.speechPitch',
      'filename' => 'modSystemSetting/aac997890dcbf93b754e9bf92c90bb88.vehicle',
      'namespace' => 'redactor',
    ),
    119 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e4abee40ad1c6699d05290e65c31d7de',
      'native_key' => 'redactor.speechRate',
      'filename' => 'modSystemSetting/95b881e4dcbc41fa091eb5fd69533475.vehicle',
      'namespace' => 'redactor',
    ),
    120 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '43046bb2e288bf06631cd381be1723bd',
      'native_key' => 'redactor.speechVolume',
      'filename' => 'modSystemSetting/131212a45a74eaf8f83a9df4f42effd3.vehicle',
      'namespace' => 'redactor',
    ),
    121 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0f1c8d084e3ce602399103c695558b36',
      'native_key' => 'redactor.speechVoice',
      'filename' => 'modSystemSetting/7be11859e2d2daafd253565de3cd6cdb.vehicle',
      'namespace' => 'redactor',
    ),
    122 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f709adca8e39747ec50d62b3f0182020',
      'native_key' => 'redactor.counterWPM',
      'filename' => 'modSystemSetting/2da516afddd8258540c66efcdfe1e727.vehicle',
      'namespace' => 'redactor',
    ),
    123 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a220b3c2e77608c68f789d390c8ca20d',
      'native_key' => 'redactor.codemirror',
      'filename' => 'modSystemSetting/961911c3a585e466e7c822772c4eb438.vehicle',
      'namespace' => 'redactor',
    ),
    124 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '77bbfac118cf590112703278710052e7',
      'native_key' => 'redactor.plugin_uploadcare',
      'filename' => 'modSystemSetting/458511710c8f7ae68cfeb576adafaffb.vehicle',
      'namespace' => 'redactor',
    ),
    125 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '38965d1e0976af99e9c251a05a797d82',
      'native_key' => 'redactor.uploadcare_pub_key',
      'filename' => 'modSystemSetting/0eedf1d946078620f6a181c123f5af42.vehicle',
      'namespace' => 'redactor',
    ),
    126 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '10e51581a12a23a07bce525a8f645ff8',
      'native_key' => 'redactor.uploadcare_locale',
      'filename' => 'modSystemSetting/43c55b3644a13cbd0b1effb9bcae2859.vehicle',
      'namespace' => 'redactor',
    ),
    127 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b6999f41943888e9dc75f2c85d2ef1b2',
      'native_key' => 'redactor.uploadcare_crop',
      'filename' => 'modSystemSetting/bece5f6ec3db3780e333da192f4f759c.vehicle',
      'namespace' => 'redactor',
    ),
    128 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a38c37a987d0a24958bca5e5cff521e7',
      'native_key' => 'redactor.uploadcare_tabs',
      'filename' => 'modSystemSetting/0c43b30eefc146f2c39cc6fcbd6f4344.vehicle',
      'namespace' => 'redactor',
    ),
    129 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3d4266630cc05b0e5810dedd598f675c',
      'native_key' => 'redactor.loadIntrotext',
      'filename' => 'modSystemSetting/f38b345b35f53c3790dd7cbe178cd0e7.vehicle',
      'namespace' => 'redactor',
    ),
    130 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0cbbb983fe3c70df42fe441e91670627',
      'native_key' => 'redactor.limiter',
      'filename' => 'modSystemSetting/ebdb2ef4300e243044b65f4f250b99fa.vehicle',
      'namespace' => 'redactor',
    ),
    131 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => '541ba4645f3676a620173174ba9aee59',
      'native_key' => '541ba4645f3676a620173174ba9aee59',
      'filename' => 'xPDOScriptVehicle/e4b348b289411eac175b75820398328d.vehicle',
      'namespace' => 'redactor',
    ),
  ),
);