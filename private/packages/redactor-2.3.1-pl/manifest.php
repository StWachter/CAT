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
    'changelog' => '++ Redactor 2.3.1-pl
++ Released on 2017-08-10
+++++++++++++++++++++++++
- Fix incorrect falling back to default media source instead of redactor-specific settings [S12760]

++ Redactor 2.3.0-pl
++ Released on 2017-07-10
+++++++++++++++++++++++++
- Allow custom (inline) formatting to be applied to headers

++ Redactor 2.2.3-pl
++ Released on 2017-05-04
+++++++++++++++++++++++++
- Revert change to Fix buttonsHide settings which caused a breaking change

++ Redactor 2.2.2-pl
++ Released on 2017-05-02
+++++++++++++++++++++++++
- Fix Bold/italic/underline etc don\'t work in Chrome [#456]
- Fix buttonsHide settings, set these as comma separated lists

++ Redactor 2.2.1-pl
++ Released on 2017-04-07
+++++++++++++++++++++++++
- Add new `root-relative` baseurls mode value for subdirectory-based contexts with shared assets in the site root [S11174]
- Fix potential jQuery conflicts affecting Redactor template variables [S11205]
- Fix context-specific redactor.css setting not being recognized [#443]
- Fix Rich Text TVs on symlinks/weblinks/static resources not getting enhanced [#449]
- Add missing video plugin control on Redactor TVs [#441]
- Fix Dutch translation of "paragraph" [#413]
- Fix for redactor.removeAttr and redactor.allowedAttr syntax
- Fix Search/Replace plugin [#447]
- Fix unintentional typeahead in Edit Image > Alt Text field [#453]

++ Redactor 2.2.0-pl
++ Released on 2016-05-19
+++++++++++++++++++++++++
- Fix predefinedLinks plugin
- Hacked redactor.js to add support for multiple modal callbacks

++ Redactor 2.2.0-rc2
++ Released on 2016-05-03
+++++++++++++++++++++++++
- Fix file path issue with dom4 and no-flexbox polyfills which broke the browser in certain browsers
- Fix issue causing file browser to not open to redactor.file_browse_path
- Fix uncaught type error in Eureka Media Browser when media source is not yet set

++ Redactor 2.2.0-rc1
++ Released on 2016-04-29
+++++++++++++++++++++++++
- All new Full Screen view in Eureka media browser model
- Eureka: New messaging "no files found" messaging
- Eureka: Separate Storage Prefix for Files and Images [#417]
- Eureka: Setting to disable localStorage via hidden eurekaUseLocalStorage setting [#418]
- Eureka: Control whether of not fullscreen mode is available via hidden eurekaAllowFullScreen System Setting
- Image Title Renamed to Alternative Text [#401]
- Removing references to autoresize [#394]
- Exposed redactor.initial_directory_depth Setting with a default value of 3. This means the Eureka Media Browser connectors will now attempt to recursively list directories three depths deep.

++ Redactor 2.1.1-pl
++ Released on 2016-04-14
+++++++++++++++++++++++++
- Fix Broken Link Anchor Tab
- Image and File Browsers now use separate local storage cache keys
- Eureka: Separate Storage Prefix for Files and Images [#417]
- Eureka: Setting to disable localStorage via hidden eurekaUseLocalStorage setting [#418]
- Removing references to autoresize [#394]

++ Redactor 2.1.0-pl
++ Released on 2016-03-29
+++++++++++++++++++++++++
- All new "List" View in Eureka Media Browser
- Fix Eureka upload button in Firefox [#405]
- Fix some buttons not available for TV usage [#416]
- Eureka: Option to disable enlarging of focused rows by creating an enlargeFocusRows System Setting set to false
- Fix compatibility with FileSluggy and similar extras [#398]
- Fix some buttons not available for TV usage [#416]
- Fix issue preventing images with uppercase extensions from showing [#404]

++ Redactor 2.0.7-pl
++ Released on 2016-02-02
+++++++++++++++++++++++++
- Fix Eureka Media Browser Layout flips out completely on Chrome 48 [#399]

++ Redactor 2.0.6-pl
++ Released on 2016-01-15
+++++++++++++++++++++++++
- plugin_uploadcare System Setting now defaults to false
- Respect Selected Text When Inserting Files [#384]
- Fix Weird Clips Behavior [#388]

++ Redactor 2.0.5-pl
++ Released on 2015-12-23
+++++++++++++++++++++++++
- Restore the resource typeahead on image links [#372]
- Switching redactor.pastePlainText System Setting to default to false [#375]
- Fix Advanced Attributes don\'t persist in modal [#392]
- Insert Images by URL (See plugin_imageurl Setting)
- Fix issues with Formatting and Custom Formatting options not being used on Redactor TVs [S7400]
- Fix persistence of plugin-related Redactor TV options [S7400]
- Fix disabling plugins on specific Redactor TVs if they\'re enabled globally [S7400]
- Make sure Redactor TV options use the setting lexicons for better and translated descriptions [#109]

++ Redactor 2.0.4-pl
++ Released on 2015-11-04
+++++++++++++++++++++++++
- Fix broken flexbox layout on touch devices [#387]
- Fix incorrect choose title when eureka upload is enabled [#386]
- Fix layout when Eureka sidebar is collapsed [#385]

++ Redactor 2.0.3-pl
++ Released on 2015-10-27
+++++++++++++++++++++++++
- Fix incorrect link text on convertLink [#374]
- Fix issue with Clips not inserting inline HTML [#378]
- Fix incorrect check causing E_NOTICE errors in upload
- Fix bug with some upload path placeholders not working

++ Redactor 2.0.2-pl
++ Released on 2015-10-01
+++++++++++++++++++++++++
- Update Redactor.js to 10.2.5 with several bug fixes
- Fix Eureka growing beyond available size with lots of directories [#367]
- Fix email links adding double mailto: [#368]
- Fix Eureka breaking out of the modal [#370]
- Improve consistency in modal styling [#371]

++ Redactor 2.0.1-pl
++ Released on 2015-09-16
+++++++++++++++++++++++++
- Fix thumbnails not showing in certain environments [S6479]
- Fix Broken Image Edit Window [#366]
- Fix various z-index issues when used in MIGX and other components [S6480]

++ Redactor 2.0.0-pl
++ Released on 2015-09-08
+++++++++++++++++++++++++
Redactor 2 is here! For the full details of the 2.0 release, please check the changelog for Redactor 2.0.0-rc2 below,
or visit https://www.modmore.com/blog/2015/announcing-redactor-2.0/ for the official announcement.

Fixes in 2.0.0-pl since 2.0.0-rc8:
- Fix loading of Eureka with js compression enabled [#354]
- Fix loadIntrotext not working in certain edge cases

++ Redactor 2.0.0-rc8
++ Released on 2015-09-05
+++++++++++++++++++++++++
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

++ Redactor 2.0.0-rc7
++ Released on 2015-08-15
+++++++++++++++++++++++++
- Fix bug introduced in rc6 that prevented editing chunks

++ Redactor 2.0.0-rc6
++ Released on 2015-08-15
+++++++++++++++++++++++++
- Remove searchImages Setting
- ImagePX Plugin Fix (thanks for the Pull Request YvonneYu)
- Fix No Eureka on RedactorTVs [#351]
- Updated Eureka Media Browser localStorage keys to be more specific
- Allot Media Browser Stage more pixels [#328]
- Updated Redactor.js to 10.2.3

++ Redactor 2.0.0-rc5
++ Released on 2015-08-03
+++++++++++++++++++++++++
- Fix issue where saving a resource duplicated Redactor TVs [#344]
- Fix issue with Clips plugin causing fatal JavaScript error [#346]

++ Redactor 2.0.0-rc4
++ Released on 2015-07-30
+++++++++++++++++++++++++
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

++ Redactor 2.0.0-rc3
++ Released on 2015-07-24
+++++++++++++++++++++++++
- Fix issue with right-side of the manager not loading after update to 2.0 on certain environments
- Fix issue with incorrect media source being initially chosen
- Fix issue where toolbars on TVs were hidden until scrolling [#321]
- Fix issue with fixed toolbars getting stuck when going to fullscreen mode [#324]
- Fix Root Directories not Expanding when selected [#326]

++ Redactor 2.0.0-rc2
++ Released on 2015-07-20
+++++++++++++++++++++++++
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
- Norphan: prevents orphaned words at the end of sentences by adding a &nbsp; between the last and second last word
- Replace: simple find and replace utility (#254)
- Speek: listen to your written words being spoken with the power of HTML5 speech APIs
- Syntax: use the Ace syntax editor for the source view; codemirror is also available
- Table: the table features that were available before are now available as separate plugin
- Text Direction: set the text direction of a block-level element
- Text Expander: expend small pieces of text into a larger one
- UploadCare: as alternative to locally hosting images, UploadCare lets you upload directly to their service from Redactor

Removed features and breaking changes:
- Please see the upgrade notes at https://www.modmore.com/redactor/documentation/upgrading-1.x-to-2.0/

++ Redactor 1.5.3-pl
++ Released on 2014-12-30
++++++++++++++++++++++++++
- Fix issue browsing images when there is only one image in the browse folder.

++ Redactor 1.5.2-pl
++ Released on 2014-11-07
++++++++++++++++++++++++++
- Load the current resource more definitively to cover some edge cases where the resource is not in the modX scope
- Loosens Patch 11291 Conditional which caused asset paths to break in Revolution 2.3.2+
- Lexicon Updates

++ Redactor 1.5.1-pl
++ Released on 2014-10-29
++++++++++++++++++++++++++
- Fix z-index issue when used with MIGX
- #244 Fixes Adding Classes via Custom Formats

++ Redactor 1.5.0-pl
++ Released on 2014-08-14
++++++++++++++++++++++++++
- Several all new features!!! See Redactor 1.5.0-rc1 release notes below for more info https://www.modmore.com/blog/2014/announcing-redactor-1.5/
- Added Hidden Mobile Buttons to TV Level
- Lexicon Updates

++ Redactor 1.5.0-rc2
++ Released on 2014-08-08
++++++++++++++++++++++++++
- Some more design tweaks in modals and fields for better consistency
- Fix "undefined" placeholder for linking to resources
- #235 Fixed toolbar offset height in MODX 2.2.x
- #237 Fix Linking issue when editing images
- #238 Fixed underlapping toolbar issue
- Added toolbarFixed and toolbarFixedBox settings
- Fix setting lexicon keys for predefinedLinks and shortcutsAdd

++ Redactor 1.5.0-rc1
++ Released on 2014-08-05
++++++++++++++++++++++++++
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


++ Redactor 1.4.3-pl
++ Released on 2014-07-28
++++++++++++++++++++++++++
- #227 Enables a patch for broken asset paths. If running MODX 2.2.15 - 2.3.1, Redactor will attempt to patch broken asset URLs caused by modxcms/revolution#11291. To disable create a redactor.patch_11291 System Setting and set to \'No\'.

++ Redactor 1.4.2-pl
++ Released on 2014-07-07
++++++++++++++++++++++++++
- #217 Fixes broken image thumbnails when inserting images from a search result
- #221 Loosen image search sensitivity
- Fix typo causing OnRichTextEditorInit event from not getting checked.

++ Redactor 1.4.1-pl
++ Released on 2014-04-11
++++++++++++++++++++++++++
- Ensure Redactor TVs have access to the Resource data for upload/browse path placeholders
- Fix loading the proper RTE based on context settings
- #153 Fix E_NOTICE error in redactor class because of check for pre-2.2.9 S3 issue
- Fix lexicon entries for new settings in 1.4.0
- Ensure that the English language set is used as default to prevent undefined issues.

++ Redactor 1.4.0-pl
++ Released on 2014-02-13
++++++++++++++++++++++++++
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

++ Redactor 1.3.5-pl
++ Released on 2013-11-18
++++++++++++++++++++++++++
- Fix problem with redactor loading in the content area (reverts #140)

++ Redactor 1.3.4-pl
++ Released on 2013-11-18
++++++++++++++++++++++++++
- #143 Fix issues with link* settings
- #140 Ensure Redactor loads in MIGX DB

++ Redactor 1.3.3-pl
++ Released on 2013-11-14
++++++++++++++++++++++++++
- Updating to Redactor 9.1.7
- Update to jQuery 1.10.2
- Add [[+day]] tag for dynamic file and image upload paths
- #150 Fix bug with unordered lists in Clips JSON
- #136 Default observeLinks to true

++ Redactor 1.3.2-pl
++ Released on 2013-10-18
++++++++++++++++++++++++++
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

++ Redactor 1.3.1-pl
++ Released on 2013-09-17
++++++++++++++++++++++++++
- Ensure linkProtocol can be disabled.
- #52 Ensure floated images stay in their WYM container
- #91 Changing image position improperly unset margins/classes from the former position
- #127 Default to editor_css_path setting if redactor.css is empty
- #128 Fix description of file browse path setting
- Update to Redactor 9.1.4, which fixes observeLinks functionality in iframe and fullscreen and IE9-10 issues with clipboard paste. http://imperavi.com/redactor/log/
- #135 Restore missing CSS since 1.3.0.
- #134 Fix resource search with Redactor TVs
- #133 Fix missing styles for list items

++ Redactor 1.3.0-pl
++ Released on 2013-09-09
++++++++++++++++++++++++++
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

++ Redactor 1.2.8-pl
++ Released on 2013-09-05
++++++++++++++++++++++++++
- Fix Redactor TVs when the language is set to something other than English.

++ Redactor 1.2.7-pl
++ Released on 2013-08-22
++++++++++++++++++++++++++
- #121 Add [[+id]] placeholder to paths to insert resource IDs.
- Only load clips and styles plugin on TVs when necessary.

++ Redactor 1.2.6-pl
++ Pre-Released on 2013-08-15
++++++++++++++++++++++++++
- #123 Mail to tab on insert link modal now is available by default
- #124 Fix issue when displaying image subfolders when choosing images
- #125 Add browse configurations for images and files to Redactor Template Variables
- #118 Fixes issue with remote media sources

++ Redactor 1.2.5-pl
++ Released on 2013-08-06
++++++++++++++++++++++++++
- Fix issues with MIGX ("$ is undefined" errors)
- Fix odd issue on PHP 5.3 with not loading the scripts.

++ Redactor 1.2.4-pl
++ Released on 2013-08-05
++++++++++++++++++++++++++
- Fix issues with redactor.additionalPlugins.
- Fix issue with regular richtext TVs not loading Redactor.

++ Redactor 1.2.3-pl
++ Released on 2013-08-04
++++++++++++++++++++++++++
- #117 Add Custom CSS stylesheet in non-iframe mode
- #113 Add insert advanced option to Styles JSON (set "advanced":"1") to use insertHTMLAdvanced
- Renamed Iframe CSS Setting to Stylesheet

++ Redactor 1.2.2-pl
++ Released on 2013-08-02
++++++++++++++++++++++++++
- #112 Improve Styles JSON compatibility
- #113 Consider code tag text-level semantic element (not block)
- #114 Add forceBlock option to JSON

++ Redactor 1.2.1-pl
++ Released on 2013-08-02
++++++++++++++++++++++++++
- #110 Fix console error with Clips plugin
- #111 Custom Formatting: wrap inline for text-level semantic tags

++ Redactor 1.2.0-pl
++ Released on 2013-08-02
++++++++++++++++++++++++++
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


++ Redactor 1.1.2-pl
++ Released on 2013-07-03
++++++++++++++++++++++++++
- Add missing cachebust from 1.1.1-pl.

++ Redactor 1.1.1-pl
++ Released on 2013-07-03
++++++++++++++++++++++++++
- Update to Redactor 9.0.3, fixing among other things firefox issues with typing after selecting text, various cleanup bugs, switching between ul/ol tags. http://imperavi.com/redactor/log/
- Fix further issues with link editing.
- #46 Fix issues with iframe mode.

++ Redactor 1.1.0-pl
++ Released on 2013-07-01
++++++++++++++++++++++++++
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

++ Redactor 1.0.3-pl
++ Released on 2013-06-17
++++++++++++++++++++++++++
- Update to Redactor 9.0.1, fixing among other things backspace issues, link adding/editing. http://imperavi.com/redactor/log/
- #49 Make sure to use jQuery noConflict mode to make sure it plays nice with other possible jQuery instances.
- Fix wrong method (process instead of render) in TV Input Type.
- #53 Fix undefined on file upload bug.
- #51 Fixed broken links on dated files bug.
- #34 Moved Resource tab to first position.

++ Redactor 1.0.2-pl
++ Released on 2013-06-05
++++++++++++++++++++++++++
- Fix additional issue with loading translations in non-English managers due to 9.0.0 changes.

++ Redactor 1.0.1-pl
++ Released on 2013-06-05
++++++++++++++++++++++++++
- Fix issue with loading translations in non-English managers due to 9.0.0 changes.

++ Redactor 1.0.0-pl
++ Released on 2013-06-05
++++++++++++++++++++++++++
- Fix ability to uninstall the package.
- #35, #36, #45 Update setting descriptions for Redactor 9.0.0 and to be more useful.
- #37 Change insert link text to "Insert/Edit link"
- #42 Add ability to disable the introtext displaying in resource typeahead.
- #43 Add ability to scroll in the resource type ahead
- Upgrade to Imperavi\'s Redactor 9.0.0

++ Redactor 0.9.3-pl
++ Released on 2013-05-27
++++++++++++++++++++++++++
- Add French lexicon. Thanks @rtripault!
- #32 Add HTML5 tags to the default allowedTags setting.

++ Redactor 0.9.2-pl
++ Released on 2013-05-27
++++++++++++++++++++++++++
- Fix bug where settings and other configuration were not properly passed to Redactor.
- Change default buttons to include separators.

++ Redactor 0.9.1-pl
++ Released on 2013-05-24
++++++++++++++++++++++++++
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
      'guid' => '5636c94a9f24711455a1a0ac6a0ffa40',
      'native_key' => 'redactor',
      'filename' => 'modNamespace/fd7fadff618f715979ff01a80c56ff62.vehicle',
      'namespace' => 'redactor',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => 'cc09727cd27d32800f8c16a09ff7347d',
      'native_key' => 'cc09727cd27d32800f8c16a09ff7347d',
      'filename' => 'xPDOFileVehicle/0defd965bb3a84e92f00de1a1222bb48.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'modmoreVehicle',
      'class' => 'modPlugin',
      'guid' => '5655a89b74d0ab5de0638eadc3553033',
      'native_key' => NULL,
      'filename' => 'modPlugin/23dfecbfcf57d1cc0e02b21fa10828e2.vehicle',
      'namespace' => 'redactor',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0c873538c5d549fe817529e723b8ffdc',
      'native_key' => 'redactor.lang',
      'filename' => 'modSystemSetting/312d7aad595bd19a8910ea3e18aba56a.vehicle',
      'namespace' => 'redactor',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3093de6864733d5c744bff31d61408b2',
      'native_key' => 'redactor.direction',
      'filename' => 'modSystemSetting/42220746a847a6a6bf1839d6d8b55864.vehicle',
      'namespace' => 'redactor',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3da2c1650a4437baaab7941db2c5dc49',
      'native_key' => 'redactor.buttons',
      'filename' => 'modSystemSetting/a2676fc16d248f8152a50d66d24c927b.vehicle',
      'namespace' => 'redactor',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1dfe91cf1f08f66e15d8fe4f690b3308',
      'native_key' => 'redactor.activeButtons',
      'filename' => 'modSystemSetting/87f7de8f1963305de98322aeea86a106.vehicle',
      'namespace' => 'redactor',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e720776ee7110f540f1a2c44ba903829',
      'native_key' => 'redactor.activeButtonsStates',
      'filename' => 'modSystemSetting/5da3f4f6000d7c32de13bdefd38b399b.vehicle',
      'namespace' => 'redactor',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1e3cf2184c1284d9bee072cd1dac7242',
      'native_key' => 'redactor.formattingTags',
      'filename' => 'modSystemSetting/17ab40671bc8e1820af95b44af0dbdf5.vehicle',
      'namespace' => 'redactor',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '33fdb0f75379ae31ddcf784ccfdd9eb7',
      'native_key' => 'redactor.buttonSource',
      'filename' => 'modSystemSetting/5e887e436b7511ece75eba9432b5f9e1.vehicle',
      'namespace' => 'redactor',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '33c0dea233fd0326436d5decb894146e',
      'native_key' => 'redactor.buttonFullScreen',
      'filename' => 'modSystemSetting/22c7f7898626dbfce7f9ce9b9309f0c2.vehicle',
      'namespace' => 'redactor',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '789a493d540568a05876679b340c91fa',
      'native_key' => 'redactor.css',
      'filename' => 'modSystemSetting/205ab720d0c3de124ce48bc5953bf699.vehicle',
      'namespace' => 'redactor',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '99df055c08d6278db66c505cefd524a0',
      'native_key' => 'redactor.shortcuts',
      'filename' => 'modSystemSetting/3945add4bf6988d22d1c367984904624.vehicle',
      'namespace' => 'redactor',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7573b122c580b57c662314eda8e2ac9b',
      'native_key' => 'redactor.cleanup',
      'filename' => 'modSystemSetting/40bc907d2e357315932b994f9975fb32.vehicle',
      'namespace' => 'redactor',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9d971b4c56ce013d80f648bfe70c3d4e',
      'native_key' => 'redactor.convertLinks',
      'filename' => 'modSystemSetting/8abd8b0d01102bef5fe3c10f83264296.vehicle',
      'namespace' => 'redactor',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5a8244f7eac541491de5e911b5beba3d',
      'native_key' => 'redactor.tabindex',
      'filename' => 'modSystemSetting/504c400aeafa88d796096116712c64b2.vehicle',
      'namespace' => 'redactor',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7aa94572e7b40b998c8d926a6f83aabd',
      'native_key' => 'redactor.minHeight',
      'filename' => 'modSystemSetting/4e944b18481e544cdd76755ebc28a5af.vehicle',
      'namespace' => 'redactor',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4923c185d10292fd2fa56e596256140e',
      'native_key' => 'redactor.colors',
      'filename' => 'modSystemSetting/c1a1c3a4c614f8bd8cf0652dd1fbd8b4.vehicle',
      'namespace' => 'redactor',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '350b8a29812a3e990ddfa545358c8257',
      'native_key' => 'redactor.wym',
      'filename' => 'modSystemSetting/e0809e45a044d5a681c84a20c40969fe.vehicle',
      'namespace' => 'redactor',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1d87b45609da7bd7bea92efcba854fdb',
      'native_key' => 'redactor.linkProtocol',
      'filename' => 'modSystemSetting/264605a08841f599a16393ff2e66668b.vehicle',
      'namespace' => 'redactor',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '72478f31f3f7596465f31eb4de5198f5',
      'native_key' => 'redactor.placeholder',
      'filename' => 'modSystemSetting/93110835f66fa8f3bb3ca3eb68624f2a.vehicle',
      'namespace' => 'redactor',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b6fb777622ef69d83770b4d1a1876fc7',
      'native_key' => 'redactor.linebreaks',
      'filename' => 'modSystemSetting/78e88f6cd0430f572f71047dd6ec7d24.vehicle',
      'namespace' => 'redactor',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8094da81394ad841c23d4d865206937a',
      'native_key' => 'redactor.allowedTags',
      'filename' => 'modSystemSetting/e295fd32b305b3c7de1a7e7a75a59110.vehicle',
      'namespace' => 'redactor',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4d762c871cc9bd47afe028fabb5b1dab',
      'native_key' => 'redactor.deniedTags',
      'filename' => 'modSystemSetting/8866b70768f2617fa4312b8370cacf8e.vehicle',
      'namespace' => 'redactor',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'da12a7ad18ee32d3e8df9879cfa5f496',
      'native_key' => 'redactor.linkEmail',
      'filename' => 'modSystemSetting/f3e2118634c6685878f56e54012833cf.vehicle',
      'namespace' => 'redactor',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3c87f7b327336c386e844bc20768c149',
      'native_key' => 'redactor.linkAnchor',
      'filename' => 'modSystemSetting/cadc996d913180ffe1762d1acf3d60f5.vehicle',
      'namespace' => 'redactor',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '440ce8476a90401aaab7a665067863b3',
      'native_key' => 'redactor.pastePlainText',
      'filename' => 'modSystemSetting/95d2e768fdc9b1448ecd38c2d88a7ae3.vehicle',
      'namespace' => 'redactor',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '878de24e2f68968bb8be5e95b5a2b992',
      'native_key' => 'redactor.paragraphize',
      'filename' => 'modSystemSetting/c9fb0f409e52f7cee5d0b44a7272e0a9.vehicle',
      'namespace' => 'redactor',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '92da10998b7de90892a31f63c4e8b4bd',
      'native_key' => 'redactor.removeComments',
      'filename' => 'modSystemSetting/5d76754d856e1885e9d8150ef2b173f3.vehicle',
      'namespace' => 'redactor',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5b00b825392b9d8527f472c44c918029',
      'native_key' => 'redactor.visual',
      'filename' => 'modSystemSetting/5d604233f76ff414c7489b357d1ab6ec.vehicle',
      'namespace' => 'redactor',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c60a4da91960c135b8723fa88359d829',
      'native_key' => 'redactor.marginFloatLeft',
      'filename' => 'modSystemSetting/5eb6126c0789f34eda6b38cf0d3710b2.vehicle',
      'namespace' => 'redactor',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4b1fa69aa65b50d47949427c69339022',
      'native_key' => 'redactor.marginFloatRight',
      'filename' => 'modSystemSetting/36d2591d368060ad6a27ad4f6e6f4778.vehicle',
      'namespace' => 'redactor',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '90eb1a59b073607cf44afac5e6be6904',
      'native_key' => 'redactor.mediasource',
      'filename' => 'modSystemSetting/c61124719c9abc1e47d0dab379cbd765.vehicle',
      'namespace' => 'redactor',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c1727857dffd898bc039cce0897cb2c4',
      'native_key' => 'redactor.file_mediasource',
      'filename' => 'modSystemSetting/d25dc97edac09c4bd658f4bb4e51e24b.vehicle',
      'namespace' => 'redactor',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '87013afcf1684971f2865611883a1248',
      'native_key' => 'redactor.image_upload_path',
      'filename' => 'modSystemSetting/2e61c1a8d909106ef591ddd43bcfdebe.vehicle',
      'namespace' => 'redactor',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'aeade804e5914c8e2f811a729e327fda',
      'native_key' => 'redactor.image_browse_path',
      'filename' => 'modSystemSetting/e39e4a59b3eb7a28bfb60250fac34481.vehicle',
      'namespace' => 'redactor',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e1ef1f9d52885654ffe94d6707a505ee',
      'native_key' => 'redactor.file_upload_path',
      'filename' => 'modSystemSetting/240ba80b7bbded786048616e7b823348.vehicle',
      'namespace' => 'redactor',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c388c11f961922304815e11209681564',
      'native_key' => 'redactor.file_browse_path',
      'filename' => 'modSystemSetting/ecbc4e8b22c6bf6cb8e8c8f4cdbd944b.vehicle',
      'namespace' => 'redactor',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e143ba65e94ce5d39ebc028fd16453dd',
      'native_key' => 'redactor.browse_files',
      'filename' => 'modSystemSetting/9c70f15cad992738c6fb578fda877bfa.vehicle',
      'namespace' => 'redactor',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a009bb2aa01e5555867d41acb542bcce',
      'native_key' => 'redactor.date_images',
      'filename' => 'modSystemSetting/6e1e30afc6ab8b9c01b56bffa425ff29.vehicle',
      'namespace' => 'redactor',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '43a9791d4f3a0c9fdd72b321bc3e93db',
      'native_key' => 'redactor.date_files',
      'filename' => 'modSystemSetting/78c9948086dcb04ae275a489da42b563.vehicle',
      'namespace' => 'redactor',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0a64a8adf4e126398b7cba872c5a4417',
      'native_key' => 'redactor.typeahead.include_introtext',
      'filename' => 'modSystemSetting/00d0fce09075e641ffe4dd71a5008485.vehicle',
      'namespace' => 'redactor',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6d40fba2b97441f87b886b7ec4b27dfd',
      'native_key' => 'redactor.prefetch_ttl',
      'filename' => 'modSystemSetting/cc5323070ad89bd27a2ea178fd7d8806.vehicle',
      'namespace' => 'redactor',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '850c80622e8ed830999c739acb3b2a6a',
      'native_key' => 'redactor.linkResource',
      'filename' => 'modSystemSetting/08d3495e20246f413ee5ad8e0c9fcfc0.vehicle',
      'namespace' => 'redactor',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c5384e7c37adbef9c04e7f4c6dae158f',
      'native_key' => 'redactor.cleanFileNames',
      'filename' => 'modSystemSetting/ba0c1d172f054ef4d04f406bd8b4e063.vehicle',
      'namespace' => 'redactor',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ac228a3ff77cd9c5eee0da943b7129e2',
      'native_key' => 'redactor.dynamicThumbs',
      'filename' => 'modSystemSetting/e124ef704747edd56c20c502dc51f110.vehicle',
      'namespace' => 'redactor',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '75c75e64a2ddf4d3d4fe8de3191498fa',
      'native_key' => 'redactor.clipsJson',
      'filename' => 'modSystemSetting/98df649930788698a1bb6d9eb7cc8250.vehicle',
      'namespace' => 'redactor',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fc696ff6ca41286c1447d076c8717ff5',
      'native_key' => 'redactor.additionalPlugins',
      'filename' => 'modSystemSetting/63d76adc21515df555b274f6536e4607.vehicle',
      'namespace' => 'redactor',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a7b38361993574e70d5002872c1182d1',
      'native_key' => 'redactor.dragUpload',
      'filename' => 'modSystemSetting/6698498135966cb9da0957c5d8418042.vehicle',
      'namespace' => 'redactor',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '964b6c5ba943c004f4cf7a6afc16d00e',
      'native_key' => 'redactor.convertImageLinks',
      'filename' => 'modSystemSetting/d39c257dfae30352185ff89df588c029.vehicle',
      'namespace' => 'redactor',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3eebf7b556a1a67fcd3d9cdd3d0a3150',
      'native_key' => 'redactor.convertVideoLinks',
      'filename' => 'modSystemSetting/2fcac3f7795f3df676dd2faeee89191f.vehicle',
      'namespace' => 'redactor',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '91e109ada42b2b66d4722b152b2726b0',
      'native_key' => 'redactor.tabAsSpaces',
      'filename' => 'modSystemSetting/e1cb93d91c37b1f2761332b44f464f82.vehicle',
      'namespace' => 'redactor',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '801422e4db1d93cb24cff5aa43f72132',
      'native_key' => 'redactor.removeEmptyTags',
      'filename' => 'modSystemSetting/e65b8a0a3601843433d0c0d4f22bbeea.vehicle',
      'namespace' => 'redactor',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '51e23f281728269a83e23f84931fe798',
      'native_key' => 'redactor.sanitizePattern',
      'filename' => 'modSystemSetting/41c44858e2eed9781290e686848c6176.vehicle',
      'namespace' => 'redactor',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b4de16da218cdff4d162be032c401614',
      'native_key' => 'redactor.sanitizeReplace',
      'filename' => 'modSystemSetting/af9cd0f14809061c23e1f89f0e3d0e95.vehicle',
      'namespace' => 'redactor',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '12179ff51c639a2aa779f511dde2a17e',
      'native_key' => 'redactor.linkSize',
      'filename' => 'modSystemSetting/b55f7d63a8b3375228e81f5fd7b87c38.vehicle',
      'namespace' => 'redactor',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '53a5d9eb83a55e74f78a50b936584708',
      'native_key' => 'redactor.advAttrib',
      'filename' => 'modSystemSetting/0c4090731beeee1d2cd6147fedad7ecf.vehicle',
      'namespace' => 'redactor',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ed3470d7f4ef15b0ff267fd9189329cd',
      'native_key' => 'redactor.linkNofollow',
      'filename' => 'modSystemSetting/ecfef1f7c3d7d80b28a41e04e33eef19.vehicle',
      'namespace' => 'redactor',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f134c5540d979d650da10278e6703660',
      'native_key' => 'redactor.typewriter',
      'filename' => 'modSystemSetting/5f0a6833c59aa745c4d9cef5b20ff2ac.vehicle',
      'namespace' => 'redactor',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '652876cef96d8919150fef7f6e3c9e66',
      'native_key' => 'redactor.buttonsHideOnMobile',
      'filename' => 'modSystemSetting/115ba1b7324e368dc69ec2b5ae39044c.vehicle',
      'namespace' => 'redactor',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5c7e035a9de56b63b66dbfd1000893c4',
      'native_key' => 'redactor.toolbarOverflow',
      'filename' => 'modSystemSetting/634a93f5b9347bdb545fca4d6809883d.vehicle',
      'namespace' => 'redactor',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8f4979f327ec9f3fd2b985b3b36486a1',
      'native_key' => 'redactor.imageTabLink',
      'filename' => 'modSystemSetting/de1f3d2c974989b61e85e41c8331404e.vehicle',
      'namespace' => 'redactor',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2ac6e05ad2b4c7c285b9fb8fe2b70ad7',
      'native_key' => 'redactor.cleanSpaces',
      'filename' => 'modSystemSetting/66a0d0ee69136407b661d710200d06fa.vehicle',
      'namespace' => 'redactor',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd345d69a0634254ad19e060d156a504d',
      'native_key' => 'redactor.predefinedLinks',
      'filename' => 'modSystemSetting/5a00bfae224a6ff51aae6b432ccf6754.vehicle',
      'namespace' => 'redactor',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '294f6d6020ba3259707cefd9751072a5',
      'native_key' => 'redactor.shortcutsAdd',
      'filename' => 'modSystemSetting/340611ee5722986c1e49539df741f639.vehicle',
      'namespace' => 'redactor',
    ),
    65 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '862b5320c15142187cd4baddb9d1763f',
      'native_key' => 'redactor.commemorateRebecca',
      'filename' => 'modSystemSetting/523a77bc782f20d916ad2caf8cb59cd8.vehicle',
      'namespace' => 'redactor',
    ),
    66 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2fd097643c80de6a79e384b2db8b5d7c',
      'native_key' => 'redactor.toolbarFixed',
      'filename' => 'modSystemSetting/1c7b884ad214ac50d0e0cec5a2abb49c.vehicle',
      'namespace' => 'redactor',
    ),
    67 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4d411c25ee4d3472148c26c9bf7f41a9',
      'native_key' => 'redactor.focus',
      'filename' => 'modSystemSetting/afe542c8501d0e90444333976d5b1c7b.vehicle',
      'namespace' => 'redactor',
    ),
    68 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2ff23012a0b0ed7cb2f105bf807134d6',
      'native_key' => 'redactor.focusEnd',
      'filename' => 'modSystemSetting/89d3409377345654d09b4de83fa9afa5.vehicle',
      'namespace' => 'redactor',
    ),
    69 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5c0c0e3e8df496e413cd14d238655157',
      'native_key' => 'redactor.scrollTarget',
      'filename' => 'modSystemSetting/ed25c3f89a9d8e6a6ccee452219d9e14.vehicle',
      'namespace' => 'redactor',
    ),
    70 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a715ff0c062eaf71ca162ac83ca0a719',
      'native_key' => 'redactor.enterKey',
      'filename' => 'modSystemSetting/964c6a0479cf6a66c8432aadec9b5abe.vehicle',
      'namespace' => 'redactor',
    ),
    71 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1d87e20f16e918c0a9d230f029230886',
      'native_key' => 'redactor.cleanStyleOnEnter',
      'filename' => 'modSystemSetting/101c0ecae3cd1b9966bf2c97dcd9234c.vehicle',
      'namespace' => 'redactor',
    ),
    72 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6e6266b05e86d4b30f901ccf7bb6dff3',
      'native_key' => 'redactor.linkTooltip',
      'filename' => 'modSystemSetting/5b1c74e009a27929c186a87ec5fc3274.vehicle',
      'namespace' => 'redactor',
    ),
    73 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8db31067a0d75190ed74de821e2f9de1',
      'native_key' => 'redactor.imageEditable',
      'filename' => 'modSystemSetting/38d80186ac8434fb4cca03c1c881a6ce.vehicle',
      'namespace' => 'redactor',
    ),
    74 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f0b706eed0ad60ba320a241b31cd5fb7',
      'native_key' => 'redactor.imageResizable',
      'filename' => 'modSystemSetting/2bba147ef12b37ea5035b4956c6a7de2.vehicle',
      'namespace' => 'redactor',
    ),
    75 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a23e6184fe6552ee8403ac9bb8ad482a',
      'native_key' => 'redactor.imageLink',
      'filename' => 'modSystemSetting/165b91751527721af7aa65140c5c8987.vehicle',
      'namespace' => 'redactor',
    ),
    76 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a7441ca18573215a0c705956e3177a1d',
      'native_key' => 'redactor.imagePosition',
      'filename' => 'modSystemSetting/ab1f1cbd8b75a9758d1c9701353d1782.vehicle',
      'namespace' => 'redactor',
    ),
    77 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '864938adcc813007f7f795c8a791fecc',
      'native_key' => 'redactor.buttonsHide',
      'filename' => 'modSystemSetting/da023e844181cb9aaef78cf5775ff2d3.vehicle',
      'namespace' => 'redactor',
    ),
    78 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9e47f4ba274075ae184d87176f2fbb0f',
      'native_key' => 'redactor.formattingAdd',
      'filename' => 'modSystemSetting/dad76d384d87438ba8238c9692323c74.vehicle',
      'namespace' => 'redactor',
    ),
    79 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'df38ba375e9b16ee948aee000be4abfd',
      'native_key' => 'redactor.tabifier',
      'filename' => 'modSystemSetting/55446523e2b8a9cdda5f50718c3c3d66.vehicle',
      'namespace' => 'redactor',
    ),
    80 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '257eaae2f39335edfda745e1f3f3b8a1',
      'native_key' => 'redactor.replaceTags',
      'filename' => 'modSystemSetting/74777525f6a4d001d8544dbd69119cf6.vehicle',
      'namespace' => 'redactor',
    ),
    81 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4901c3e9c60ee2e0a81b51e7cc2707f5',
      'native_key' => 'redactor.replaceStyles',
      'filename' => 'modSystemSetting/68c22489aec09a75cca20d890d57c40a.vehicle',
      'namespace' => 'redactor',
    ),
    82 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '511d1f00c992581ba2be5b75cdc0d085',
      'native_key' => 'redactor.removeDataAttr',
      'filename' => 'modSystemSetting/6ad48d57f380349eae21a3eb89dfee6b.vehicle',
      'namespace' => 'redactor',
    ),
    83 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '44175c29f7148dfff4820a4d2b8962f5',
      'native_key' => 'redactor.removeAttr',
      'filename' => 'modSystemSetting/214f17c711743352473b907dea6d68da.vehicle',
      'namespace' => 'redactor',
    ),
    84 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a0278f1ccb5da31cebec79ee5fc9e117',
      'native_key' => 'redactor.allowedAttr',
      'filename' => 'modSystemSetting/80d72754b725e7855d8fb142484dc7fd.vehicle',
      'namespace' => 'redactor',
    ),
    85 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '77539464f45993e29567721306e68f62',
      'native_key' => 'redactor.dragImageUpload',
      'filename' => 'modSystemSetting/c8004ee076c22d15a43b1a91294eb9a7.vehicle',
      'namespace' => 'redactor',
    ),
    86 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2d622746055d34618ff50a6675aab787',
      'native_key' => 'redactor.dragFileUpload',
      'filename' => 'modSystemSetting/e1945ab90269d28cb1fd86d9b7fcb6b4.vehicle',
      'namespace' => 'redactor',
    ),
    87 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '632004722a6067c23ee6cc2d9521252c',
      'native_key' => 'redactor.replaceDivs',
      'filename' => 'modSystemSetting/29a93fe2900916cceca83f9716355541.vehicle',
      'namespace' => 'redactor',
    ),
    88 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9def977973b61e3bc5d332cc964751ed',
      'native_key' => 'redactor.preSpaces',
      'filename' => 'modSystemSetting/39be747cc0903a4718028d4911196a09.vehicle',
      'namespace' => 'redactor',
    ),
    89 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9d021fe535b7dda9e96125fc3e3e75ea',
      'native_key' => 'redactor.parse_parent_path',
      'filename' => 'modSystemSetting/205a197c9a28195c823d9e8266d223d4.vehicle',
      'namespace' => 'redactor',
    ),
    90 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fbaa87b41a838ba635925997c202d217',
      'native_key' => 'redactor.increment_file_names',
      'filename' => 'modSystemSetting/9603eaf5197a4f9d71d79c1c3dfb57a0.vehicle',
      'namespace' => 'redactor',
    ),
    91 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '01410635f6ae1f9cf202b2dafbce5478',
      'native_key' => 'redactor.parse_parent_path_height',
      'filename' => 'modSystemSetting/500e74fe89b294e80ea57fa345a53078.vehicle',
      'namespace' => 'redactor',
    ),
    92 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1487292aaea6106e91ff9457beef0e35',
      'native_key' => 'redactor.baseurls_mode',
      'filename' => 'modSystemSetting/5135e1fe7be752c205edff04d9e9bcb1.vehicle',
      'namespace' => 'redactor',
    ),
    93 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a15a8539c8bda6cb9e8aa84b2fef1365',
      'native_key' => 'redactor.showDimensionsOnResize',
      'filename' => 'modSystemSetting/ad13bfd23953997ee1cc4fe3a698c154.vehicle',
      'namespace' => 'redactor',
    ),
    94 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd869a79c4aaee84e7e389e58327b8c86',
      'native_key' => 'redactor.plugin_counter',
      'filename' => 'modSystemSetting/74e2f610625496ef440507fc095d50d0.vehicle',
      'namespace' => 'redactor',
    ),
    95 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8f4aa76aa1713ffff0bb67f3a0750135',
      'native_key' => 'redactor.plugin_fontcolor',
      'filename' => 'modSystemSetting/2ce1fd7da3914c47a778cc923deac3a4.vehicle',
      'namespace' => 'redactor',
    ),
    96 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '21d2912040d681ab7a7f9b25cd24764a',
      'native_key' => 'redactor.plugin_fontfamily',
      'filename' => 'modSystemSetting/a9c07a9adced2b19f75f1d499ffd709c.vehicle',
      'namespace' => 'redactor',
    ),
    97 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '957c5db9d1365d69508fb5e665bdd5f0',
      'native_key' => 'redactor.plugin_fontsize',
      'filename' => 'modSystemSetting/bd8e4fac27e82252c09c59aa1af771e2.vehicle',
      'namespace' => 'redactor',
    ),
    98 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a25253d38c6e01422523e1539829c2a1',
      'native_key' => 'redactor.plugin_limiter',
      'filename' => 'modSystemSetting/70f85e8c51bdf0336350b798c4266b0f.vehicle',
      'namespace' => 'redactor',
    ),
    99 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6085668d1f1f3edd95eabd0e682c62c0',
      'native_key' => 'redactor.plugin_table',
      'filename' => 'modSystemSetting/fd15af564b79a249f5ae99ada52dd6c8.vehicle',
      'namespace' => 'redactor',
    ),
    100 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8a18442ab4b87950411e7de1df49f52f',
      'native_key' => 'redactor.plugin_textdirection',
      'filename' => 'modSystemSetting/46c03c8fe50dea627fd4db492180c4a5.vehicle',
      'namespace' => 'redactor',
    ),
    101 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dfb1eec15cab823bec19385184d0eceb',
      'native_key' => 'redactor.plugin_video',
      'filename' => 'modSystemSetting/e8ef95e3e3a09afcb740753dedbf8335.vehicle',
      'namespace' => 'redactor',
    ),
    102 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '69326df8f6749fabec6c74cdf1478c34',
      'native_key' => 'redactor.plugin_replacer',
      'filename' => 'modSystemSetting/d22d561ef4b5247b223320ab01ebc9c7.vehicle',
      'namespace' => 'redactor',
    ),
    103 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7b62ead17f627b2a12d97abcc67bcf55',
      'native_key' => 'redactor.plugin_syntax',
      'filename' => 'modSystemSetting/b313a93e4c1cb9bb4052d8c540e29554.vehicle',
      'namespace' => 'redactor',
    ),
    104 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a78aeed33e5d2cc3fdcf081834f74092',
      'native_key' => 'redactor.plugin_speek',
      'filename' => 'modSystemSetting/0302dceaca250ced82725235d7846b75.vehicle',
      'namespace' => 'redactor',
    ),
    105 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fba494007dc7f0047d41defc976c8413',
      'native_key' => 'redactor.plugin_contrast',
      'filename' => 'modSystemSetting/dde42893b5f15d4cabe55c33f1a97d5b.vehicle',
      'namespace' => 'redactor',
    ),
    106 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd656de9549cd909e7780dea7db1b9d87',
      'native_key' => 'redactor.plugin_eureka',
      'filename' => 'modSystemSetting/dd6da80a86213d6c1754c159481c9761.vehicle',
      'namespace' => 'redactor',
    ),
    107 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3030e126acc4584419888b8569cab88b',
      'native_key' => 'redactor.plugin_eureka_shivie9',
      'filename' => 'modSystemSetting/f53a13db7dbc38d96303495dc853a40d.vehicle',
      'namespace' => 'redactor',
    ),
    108 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '276581cf010ec279268ec6f56f4d2704',
      'native_key' => 'redactor.eurekaUpload',
      'filename' => 'modSystemSetting/aa784eb91bcd86813dbb8c476cbdb443.vehicle',
      'namespace' => 'redactor',
    ),
    109 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4ce95956ca10b6f5a38e46f99c5d7e34',
      'native_key' => 'redactor.initial_directory_depth',
      'filename' => 'modSystemSetting/7aa23a9d6fd3633e136b74bb5c546d1a.vehicle',
      'namespace' => 'redactor',
    ),
    110 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '27a4b3ae7d53d72dc8636df9567f1794',
      'native_key' => 'redactor.plugin_zoom',
      'filename' => 'modSystemSetting/27078063aa2e71b0e555ed896f45e2ca.vehicle',
      'namespace' => 'redactor',
    ),
    111 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '42f16ecc021fb43642b6387ace7e3fcd',
      'native_key' => 'redactor.plugin_download',
      'filename' => 'modSystemSetting/7a3c2898046f038cd1b1439769e15bb1.vehicle',
      'namespace' => 'redactor',
    ),
    112 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1a4058d72845a9cc52341ee40ef392cf',
      'native_key' => 'redactor.plugin_imagepx',
      'filename' => 'modSystemSetting/76ea83ed78b754012a20051d18e62f5e.vehicle',
      'namespace' => 'redactor',
    ),
    113 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4ade8d4a231fc5cfcd5886afb73ec8db',
      'native_key' => 'redactor.plugin_imageurl',
      'filename' => 'modSystemSetting/99e4d723870beb542a6ba8effc37aa0f.vehicle',
      'namespace' => 'redactor',
    ),
    114 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0ae3efeee6eab967f5ce7a9919ab1f32',
      'native_key' => 'redactor.plugin_breadcrumb',
      'filename' => 'modSystemSetting/6d77e2d0674f21d45735d1b24a7316b5.vehicle',
      'namespace' => 'redactor',
    ),
    115 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9f523627223da8ce8cd1036a2011ba22',
      'native_key' => 'redactor.plugin_norphan',
      'filename' => 'modSystemSetting/1801d7faa18234be25fdaed1ed61285e.vehicle',
      'namespace' => 'redactor',
    ),
    116 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '685d8778910e1229f370feccc48d841d',
      'native_key' => 'redactor.plugin_baseurls',
      'filename' => 'modSystemSetting/94b8ab7def1e6eec98436653195180c5.vehicle',
      'namespace' => 'redactor',
    ),
    117 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3b4d24b4dba757e2086a7492adae2707',
      'native_key' => 'redactor.textexpander',
      'filename' => 'modSystemSetting/57884ef6301e355adf741a8a32954810.vehicle',
      'namespace' => 'redactor',
    ),
    118 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '627b336aae494fd7e73d645fafa16088',
      'native_key' => 'redactor.speechPitch',
      'filename' => 'modSystemSetting/59d775825625932483658f302202f655.vehicle',
      'namespace' => 'redactor',
    ),
    119 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '18ee5a0cb0c6b0295aaa66873db9135d',
      'native_key' => 'redactor.speechRate',
      'filename' => 'modSystemSetting/8019023f6614d0a549fbe7e486d6d3b0.vehicle',
      'namespace' => 'redactor',
    ),
    120 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '87386d90a3e5b0a733cfbf1664684767',
      'native_key' => 'redactor.speechVolume',
      'filename' => 'modSystemSetting/216e3b66302163511bdfd85e3fdf7f94.vehicle',
      'namespace' => 'redactor',
    ),
    121 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '70c2ce2843ef875316f6b310eeb5d864',
      'native_key' => 'redactor.speechVoice',
      'filename' => 'modSystemSetting/9a8b8c71e840040255f07c741785b7ad.vehicle',
      'namespace' => 'redactor',
    ),
    122 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3a07170d171afdfb69d2652ef40361f8',
      'native_key' => 'redactor.counterWPM',
      'filename' => 'modSystemSetting/a3da3f0e4635a7612bfdb61355b858ab.vehicle',
      'namespace' => 'redactor',
    ),
    123 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3bb142d45a4aa31de44042f455d5c181',
      'native_key' => 'redactor.codemirror',
      'filename' => 'modSystemSetting/7b15797a05c12a11d759582532d3e13b.vehicle',
      'namespace' => 'redactor',
    ),
    124 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1a129f5bd3d36725f760116da4a4e7c3',
      'native_key' => 'redactor.plugin_uploadcare',
      'filename' => 'modSystemSetting/239ccefce54cee90877aeadcc1747e97.vehicle',
      'namespace' => 'redactor',
    ),
    125 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8ed6d80f04dff490eeea6f32dbaa7db0',
      'native_key' => 'redactor.uploadcare_pub_key',
      'filename' => 'modSystemSetting/61e1cb3ac227f9a01fbd08f7ba91b8ba.vehicle',
      'namespace' => 'redactor',
    ),
    126 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '28e1fe9ed6171729c6051bcf8c75032e',
      'native_key' => 'redactor.uploadcare_locale',
      'filename' => 'modSystemSetting/3cc25aa17e12796d49ad373244a5f087.vehicle',
      'namespace' => 'redactor',
    ),
    127 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5ae709858bca808d654097bbf3992a33',
      'native_key' => 'redactor.uploadcare_crop',
      'filename' => 'modSystemSetting/e8af93cb3897ec2cd88e0dcb675f02b9.vehicle',
      'namespace' => 'redactor',
    ),
    128 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a6ac64ee19fe4b9da336006fa65eff5a',
      'native_key' => 'redactor.uploadcare_tabs',
      'filename' => 'modSystemSetting/f61d613283566b43e3b3f3b6600d7e52.vehicle',
      'namespace' => 'redactor',
    ),
    129 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a51686359b0abb665426d6e7bc9108bd',
      'native_key' => 'redactor.loadIntrotext',
      'filename' => 'modSystemSetting/e14686d8b8d4ee17484b67e87b466b78.vehicle',
      'namespace' => 'redactor',
    ),
    130 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '488124e31be19e82dc4ad634ba083bd1',
      'native_key' => 'redactor.limiter',
      'filename' => 'modSystemSetting/6f811f1b9ebbfd4ab22e9011451e35d2.vehicle',
      'namespace' => 'redactor',
    ),
    131 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => '5b1c2a3ed70941dbf2587029337c8236',
      'native_key' => '5b1c2a3ed70941dbf2587029337c8236',
      'filename' => 'xPDOScriptVehicle/29c90a62b2bdb1e91c39dacd395f8674.vehicle',
      'namespace' => 'redactor',
    ),
  ),
);