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
    'changelog' => '++ Redactor 2.3.0-pl
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
      'guid' => 'c3762ffb124a4c5db23fda753a78771b',
      'native_key' => 'redactor',
      'filename' => 'modNamespace/de20c7aad42e227ab5f543f95a4b5e99.vehicle',
      'namespace' => 'redactor',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '73dc744cbb77ca5fa334b2748300bbe6',
      'native_key' => '73dc744cbb77ca5fa334b2748300bbe6',
      'filename' => 'xPDOFileVehicle/392dbe4fedfdd135b700f4955c67db46.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'modmoreVehicle',
      'class' => 'modPlugin',
      'guid' => '2311f2320b73947e1b1cf7141a4a9d9a',
      'native_key' => NULL,
      'filename' => 'modPlugin/eadc99f4ebb7b6753427a385c56a43bf.vehicle',
      'namespace' => 'redactor',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b2bc1d666e2dc9f59e25365a6b3a7b86',
      'native_key' => 'redactor.lang',
      'filename' => 'modSystemSetting/b548799237a23cbf83e00a8143e8a87c.vehicle',
      'namespace' => 'redactor',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '53b42b990cad69e03a9985e80f9a539d',
      'native_key' => 'redactor.direction',
      'filename' => 'modSystemSetting/f86a129ba9298d7bf601039a4bbaa628.vehicle',
      'namespace' => 'redactor',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '273de4fe08bd22aed9de187b8ae989fd',
      'native_key' => 'redactor.buttons',
      'filename' => 'modSystemSetting/48c3abbd8aadf9019c96d949669c2b4e.vehicle',
      'namespace' => 'redactor',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '699a7568b8c7dbe9daed3e70e606153a',
      'native_key' => 'redactor.activeButtons',
      'filename' => 'modSystemSetting/f691a6cbfd010a2c0dd5519049cef04f.vehicle',
      'namespace' => 'redactor',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b2a51b9f65a94986c1adcd78460996dc',
      'native_key' => 'redactor.activeButtonsStates',
      'filename' => 'modSystemSetting/1d7590227efa805706df21c9ff822fc3.vehicle',
      'namespace' => 'redactor',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '199d52df94d92b8bd53fc56a315d82b9',
      'native_key' => 'redactor.formattingTags',
      'filename' => 'modSystemSetting/eed5c4945e4b19e8daa57efb957842d6.vehicle',
      'namespace' => 'redactor',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '87deb12f5249a944f1b873762c883a12',
      'native_key' => 'redactor.buttonSource',
      'filename' => 'modSystemSetting/cb192821ed7c0bc418130a163a15459d.vehicle',
      'namespace' => 'redactor',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bca88707c4d87f3915141c9977718ecb',
      'native_key' => 'redactor.buttonFullScreen',
      'filename' => 'modSystemSetting/1131eaeddcc414b54bd3c51caa1a9031.vehicle',
      'namespace' => 'redactor',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4577baa9db53398394735b9c6fc73354',
      'native_key' => 'redactor.css',
      'filename' => 'modSystemSetting/abb9b744afc1c4f99ede33d755903c75.vehicle',
      'namespace' => 'redactor',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a9c4c57a96f8598e7f63831678a1beeb',
      'native_key' => 'redactor.shortcuts',
      'filename' => 'modSystemSetting/07d7d628afd77774e4ea34431e6e028d.vehicle',
      'namespace' => 'redactor',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '42aee2068267bb3c459f072c0d2b6214',
      'native_key' => 'redactor.cleanup',
      'filename' => 'modSystemSetting/26dbb555de78c757cd896032d2a71a9e.vehicle',
      'namespace' => 'redactor',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '38426a30ab664d0a9b28ab32e8d0aa2f',
      'native_key' => 'redactor.convertLinks',
      'filename' => 'modSystemSetting/152ebdb8fdecf12bea8e164684771e7c.vehicle',
      'namespace' => 'redactor',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7fe31b2dccea03bdcf95bde093e33bed',
      'native_key' => 'redactor.tabindex',
      'filename' => 'modSystemSetting/a68fb075b524ec23e3630988371718cd.vehicle',
      'namespace' => 'redactor',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '53d15adc521c89fd602b0404dc171148',
      'native_key' => 'redactor.minHeight',
      'filename' => 'modSystemSetting/f8a84b03344cc5a22f0d821f01e1ebc2.vehicle',
      'namespace' => 'redactor',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e88cc294f03043c831b1314eae3079ad',
      'native_key' => 'redactor.colors',
      'filename' => 'modSystemSetting/5ae49c3f8b54a5833db6e20eeab5f6dc.vehicle',
      'namespace' => 'redactor',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'db90a4a7627cbc3d28a67372bd4ccfdf',
      'native_key' => 'redactor.wym',
      'filename' => 'modSystemSetting/4149a3c0bd01819df762a61f6835a807.vehicle',
      'namespace' => 'redactor',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'be0dad5f6c65b896bf6b7e0a9f91d95c',
      'native_key' => 'redactor.linkProtocol',
      'filename' => 'modSystemSetting/14d4dd12090a967f93e2c8daf9c72454.vehicle',
      'namespace' => 'redactor',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '224d5f0e2ec6712fc3586a23662c4ce7',
      'native_key' => 'redactor.placeholder',
      'filename' => 'modSystemSetting/03d864448afd444fc597cffae53af7db.vehicle',
      'namespace' => 'redactor',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a877edbd0554ff96dda2ba3b4445831b',
      'native_key' => 'redactor.linebreaks',
      'filename' => 'modSystemSetting/7bef265953fdff522ace8daf3e64cea8.vehicle',
      'namespace' => 'redactor',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fb03201f454461c20f6b5b8cd30d7695',
      'native_key' => 'redactor.allowedTags',
      'filename' => 'modSystemSetting/5ba7a1bb8a54b65ae260792de1c9870a.vehicle',
      'namespace' => 'redactor',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4647d23d93d642042822c6a2a4f2fe2a',
      'native_key' => 'redactor.deniedTags',
      'filename' => 'modSystemSetting/dc0eb5f7393c8bcd963e984cfcec050a.vehicle',
      'namespace' => 'redactor',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a8dd6903d6a2544c982ee9e58b0be0f5',
      'native_key' => 'redactor.linkEmail',
      'filename' => 'modSystemSetting/ea5668eb176364eb96087b64c5e8fe33.vehicle',
      'namespace' => 'redactor',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ffe0f5393e64be1fd6b4081b8e97a0d7',
      'native_key' => 'redactor.linkAnchor',
      'filename' => 'modSystemSetting/7f23aca11a2d8f03f35781de34e79189.vehicle',
      'namespace' => 'redactor',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '875e42e83498297e151a6702569a095c',
      'native_key' => 'redactor.pastePlainText',
      'filename' => 'modSystemSetting/7b978f2b0ef93a8fcf2902d471b9b212.vehicle',
      'namespace' => 'redactor',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '99849967315e459e3c6f9e321187fef5',
      'native_key' => 'redactor.paragraphize',
      'filename' => 'modSystemSetting/b41c2dad4c04105a273d268d5b23d3bd.vehicle',
      'namespace' => 'redactor',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8ca520d641a17e7be336d1949a7bfc0c',
      'native_key' => 'redactor.removeComments',
      'filename' => 'modSystemSetting/44c59a44f318e679bc26aa619dcbf233.vehicle',
      'namespace' => 'redactor',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '729f26d7e2b9620dabbc08931f8d6b3b',
      'native_key' => 'redactor.visual',
      'filename' => 'modSystemSetting/1c467eb82ea3e6abc57872533677a44d.vehicle',
      'namespace' => 'redactor',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'da0b1bb30d024396b9210629c841a428',
      'native_key' => 'redactor.marginFloatLeft',
      'filename' => 'modSystemSetting/b79c177cd041a2ad7e4e97c204d78077.vehicle',
      'namespace' => 'redactor',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e4466784558806543f9db64b7e0588ca',
      'native_key' => 'redactor.marginFloatRight',
      'filename' => 'modSystemSetting/bb72e74d6e1796dd64ae3c1e475528a0.vehicle',
      'namespace' => 'redactor',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '500817695b8c7ceeb890b47f8648ab17',
      'native_key' => 'redactor.mediasource',
      'filename' => 'modSystemSetting/2171f310170f45e0bad8ca539bd120aa.vehicle',
      'namespace' => 'redactor',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b6bdf71c43f126dd09de79eaed908e64',
      'native_key' => 'redactor.file_mediasource',
      'filename' => 'modSystemSetting/7f9d5c2d9521e71c687030bf34df25e5.vehicle',
      'namespace' => 'redactor',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7664e07eb112e76c01e42f8d31a728fe',
      'native_key' => 'redactor.image_upload_path',
      'filename' => 'modSystemSetting/6a7ad43235b129d680a7ea3582b60be1.vehicle',
      'namespace' => 'redactor',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e4f484ffe6d250abbe1ec71b26c91e92',
      'native_key' => 'redactor.image_browse_path',
      'filename' => 'modSystemSetting/db5179d9af688503a681cbb836703465.vehicle',
      'namespace' => 'redactor',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cff0d5f9fc9cdb4d39b1b9c99d252c9c',
      'native_key' => 'redactor.file_upload_path',
      'filename' => 'modSystemSetting/cd836b16d905884c8e88dea543b382be.vehicle',
      'namespace' => 'redactor',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f497aab7edfa82f7f9d47ac76f467e8a',
      'native_key' => 'redactor.file_browse_path',
      'filename' => 'modSystemSetting/6f78a9b5e5fa8deb7da6a20b97bfb29b.vehicle',
      'namespace' => 'redactor',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '49df79d591b71f6a1c0a65674ca0791c',
      'native_key' => 'redactor.browse_files',
      'filename' => 'modSystemSetting/d294b3ec84bb847bc9161aefe7734978.vehicle',
      'namespace' => 'redactor',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '42d4759c73aa8f0bddf6d4fc8ea922c5',
      'native_key' => 'redactor.date_images',
      'filename' => 'modSystemSetting/b56b55c190f0241d0d805ecad39bcb73.vehicle',
      'namespace' => 'redactor',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '68d8ca3d113a37a06cebf6614d3a9146',
      'native_key' => 'redactor.date_files',
      'filename' => 'modSystemSetting/398e36526d37687cfb8c522516c85c4c.vehicle',
      'namespace' => 'redactor',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd0fe43deb9f346fbb6e5ebfcb5d9ee15',
      'native_key' => 'redactor.typeahead.include_introtext',
      'filename' => 'modSystemSetting/d7b9241d93d4a3ad95d919762cc22d64.vehicle',
      'namespace' => 'redactor',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b6c3ead706c1b324abe612fb425ab468',
      'native_key' => 'redactor.prefetch_ttl',
      'filename' => 'modSystemSetting/2741113e72399af6b82bb3055716656b.vehicle',
      'namespace' => 'redactor',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '53da83f2679132ec32b626df72b7afea',
      'native_key' => 'redactor.linkResource',
      'filename' => 'modSystemSetting/4b9eddb7de1b8c5a259fe789f849841f.vehicle',
      'namespace' => 'redactor',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '49c4dd942888122da96922d769fb826d',
      'native_key' => 'redactor.cleanFileNames',
      'filename' => 'modSystemSetting/1618fbd1e3091739df8b75aed5ff4a1d.vehicle',
      'namespace' => 'redactor',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'be5396f527b0b127f4cc9ed33f6a6d8d',
      'native_key' => 'redactor.dynamicThumbs',
      'filename' => 'modSystemSetting/a27e02004b527caa3c3d2dba025e97a3.vehicle',
      'namespace' => 'redactor',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bd9901c2de2f78a0ffd5ed197dada9d4',
      'native_key' => 'redactor.clipsJson',
      'filename' => 'modSystemSetting/1f9bb88d4110465d229349283cbcad0c.vehicle',
      'namespace' => 'redactor',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'edfcee9818f0544180e7a10521a68eb6',
      'native_key' => 'redactor.additionalPlugins',
      'filename' => 'modSystemSetting/268c19dde145ab1a3bec2b2d6c5a6be8.vehicle',
      'namespace' => 'redactor',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b5f6675a7698de60eab6998043840eda',
      'native_key' => 'redactor.dragUpload',
      'filename' => 'modSystemSetting/4f929fef9bf24ad3fe2c180efb9a0f61.vehicle',
      'namespace' => 'redactor',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '66ac8da9a215494fc81c92255a773fcb',
      'native_key' => 'redactor.convertImageLinks',
      'filename' => 'modSystemSetting/7264f5204c33924c077e0cc3c3596534.vehicle',
      'namespace' => 'redactor',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7fb74d56f9fc720ae80b258d999ed066',
      'native_key' => 'redactor.convertVideoLinks',
      'filename' => 'modSystemSetting/1471cb77573b5d7b72cf1d12dfed743b.vehicle',
      'namespace' => 'redactor',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '96070e012d41b7e15c355d3a4b6bb180',
      'native_key' => 'redactor.tabAsSpaces',
      'filename' => 'modSystemSetting/8ce63aead4203149c212066c201b5a9c.vehicle',
      'namespace' => 'redactor',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0858641fcb866a990a190fb8ac9c0b88',
      'native_key' => 'redactor.removeEmptyTags',
      'filename' => 'modSystemSetting/62b4b1a57f59bdb8872a19fc379ec6ce.vehicle',
      'namespace' => 'redactor',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fdd96ae8849d0c0c548a8bbf2a88feb2',
      'native_key' => 'redactor.sanitizePattern',
      'filename' => 'modSystemSetting/50faecb889bc41b3ccf31410b0f90654.vehicle',
      'namespace' => 'redactor',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f9b2f14cf93698918075023c0fd8f9b9',
      'native_key' => 'redactor.sanitizeReplace',
      'filename' => 'modSystemSetting/423d3ca5d858a3d26c9c17e21a24ed6e.vehicle',
      'namespace' => 'redactor',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '091632b354f7fdcdb0839d0c11ba6417',
      'native_key' => 'redactor.linkSize',
      'filename' => 'modSystemSetting/b45064ceca7f2412ab4ac1e48bcd2df3.vehicle',
      'namespace' => 'redactor',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0e4a29d9c8b36fc616918044d237f186',
      'native_key' => 'redactor.advAttrib',
      'filename' => 'modSystemSetting/799ce6e86bb1cba3436f08ced6639dc9.vehicle',
      'namespace' => 'redactor',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '962d89b01c844295abcb631995434768',
      'native_key' => 'redactor.linkNofollow',
      'filename' => 'modSystemSetting/8cd3559b4cc1d566a2876b43ea7ca6fc.vehicle',
      'namespace' => 'redactor',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '57fedce8243af805c3313c921f8432b5',
      'native_key' => 'redactor.typewriter',
      'filename' => 'modSystemSetting/770be771230cb74c5908f0850ffd24dc.vehicle',
      'namespace' => 'redactor',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '53649830b8e9f16525b8b19542096192',
      'native_key' => 'redactor.buttonsHideOnMobile',
      'filename' => 'modSystemSetting/f1fcb125c3aa05e4f0c2d3dc34366056.vehicle',
      'namespace' => 'redactor',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ff90cc61af05f4751878f861b7ba341b',
      'native_key' => 'redactor.toolbarOverflow',
      'filename' => 'modSystemSetting/bf439347e1e167046a9e06f815926214.vehicle',
      'namespace' => 'redactor',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2aee26af49157a896417710ff668d29c',
      'native_key' => 'redactor.imageTabLink',
      'filename' => 'modSystemSetting/27a21d4dcb19405d56073613bd215a1c.vehicle',
      'namespace' => 'redactor',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '948f34025bafcd6bd7f8efefc726ed18',
      'native_key' => 'redactor.cleanSpaces',
      'filename' => 'modSystemSetting/6da95b0022af04d1a2717fde6362a9ed.vehicle',
      'namespace' => 'redactor',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ea952860a0d41d71c6f1334fa931fbe7',
      'native_key' => 'redactor.predefinedLinks',
      'filename' => 'modSystemSetting/184b563bbc10db03088c14d4950d4f99.vehicle',
      'namespace' => 'redactor',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6e2cfcb7989ba31b663e0762292312cb',
      'native_key' => 'redactor.shortcutsAdd',
      'filename' => 'modSystemSetting/1c81bc3af1047114c37d832e92aba752.vehicle',
      'namespace' => 'redactor',
    ),
    65 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f4cf4a55dcef38f5efa3b4c9c99d1b9b',
      'native_key' => 'redactor.commemorateRebecca',
      'filename' => 'modSystemSetting/5c1466c002471dd4899a6dec3a724ec0.vehicle',
      'namespace' => 'redactor',
    ),
    66 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '39be1ae3f61c43babe8cc080d2ca71d9',
      'native_key' => 'redactor.toolbarFixed',
      'filename' => 'modSystemSetting/e5eaf9b6edcbe7431049185e4dafa22e.vehicle',
      'namespace' => 'redactor',
    ),
    67 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3fbbb00ab2ec5ad22183d5da50dc6010',
      'native_key' => 'redactor.focus',
      'filename' => 'modSystemSetting/cba7d9c89a4b01d380b9d33fdd728886.vehicle',
      'namespace' => 'redactor',
    ),
    68 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e5a189317f670ea11b47a1c932416a6f',
      'native_key' => 'redactor.focusEnd',
      'filename' => 'modSystemSetting/91819e402e9d47c28bb43369b926145b.vehicle',
      'namespace' => 'redactor',
    ),
    69 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '63f9658db2a400696009d9ed297f0a9b',
      'native_key' => 'redactor.scrollTarget',
      'filename' => 'modSystemSetting/29e8b3802e72508f65e8c0544b4e19be.vehicle',
      'namespace' => 'redactor',
    ),
    70 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a0c05c8688fe3d31ba12410771622032',
      'native_key' => 'redactor.enterKey',
      'filename' => 'modSystemSetting/1c3b906932a5853cb0ba3885305f6da1.vehicle',
      'namespace' => 'redactor',
    ),
    71 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0952c4c1f08a52d3e377fcaee9a57eaa',
      'native_key' => 'redactor.cleanStyleOnEnter',
      'filename' => 'modSystemSetting/dfab41a8238a2f8b59a4b2f5a9db0624.vehicle',
      'namespace' => 'redactor',
    ),
    72 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e75c8c0bcebf244a35c48fd62831d203',
      'native_key' => 'redactor.linkTooltip',
      'filename' => 'modSystemSetting/865f4746bd01abab3d5914220c0e4f27.vehicle',
      'namespace' => 'redactor',
    ),
    73 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b617748dd60d9842a59d629741910d4b',
      'native_key' => 'redactor.imageEditable',
      'filename' => 'modSystemSetting/a0ad60c224c2d9a924a072434ec2683c.vehicle',
      'namespace' => 'redactor',
    ),
    74 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '31f2b2556468bfade852b59dbd6608d3',
      'native_key' => 'redactor.imageResizable',
      'filename' => 'modSystemSetting/f7644d64aca6b1e161673a1ed317e8cf.vehicle',
      'namespace' => 'redactor',
    ),
    75 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a4660bb400ef96f733488bb89cfca0ca',
      'native_key' => 'redactor.imageLink',
      'filename' => 'modSystemSetting/ee2215b8ad8594afe302ff4e9456497a.vehicle',
      'namespace' => 'redactor',
    ),
    76 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '806596f0717c3c1827e2a3d77e51ae56',
      'native_key' => 'redactor.imagePosition',
      'filename' => 'modSystemSetting/0323b5cecf4de68d96b020f4e7bdf402.vehicle',
      'namespace' => 'redactor',
    ),
    77 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3e401eefd7d3853fcf41db17011aee64',
      'native_key' => 'redactor.buttonsHide',
      'filename' => 'modSystemSetting/b54288d8069bbedb1e8bc27500b205bc.vehicle',
      'namespace' => 'redactor',
    ),
    78 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '74b66f2158719f76e8e7df11cb301625',
      'native_key' => 'redactor.formattingAdd',
      'filename' => 'modSystemSetting/ef9627dbf2a35d1b2b8662a50981f585.vehicle',
      'namespace' => 'redactor',
    ),
    79 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '331bf3a23867c7cdc5dffa63ab913589',
      'native_key' => 'redactor.tabifier',
      'filename' => 'modSystemSetting/ba8c328e208f4dce2f71a8e26210f018.vehicle',
      'namespace' => 'redactor',
    ),
    80 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '973e3973d6514c9d0b37bc1994aa3790',
      'native_key' => 'redactor.replaceTags',
      'filename' => 'modSystemSetting/0f00d24ea58c8b93c4269ca13258326a.vehicle',
      'namespace' => 'redactor',
    ),
    81 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3b9b25636ed12c70e6288e5eb68b612a',
      'native_key' => 'redactor.replaceStyles',
      'filename' => 'modSystemSetting/4ec00059a248c98b5acfe04038dee45e.vehicle',
      'namespace' => 'redactor',
    ),
    82 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5227adc2a6d205b415c83fa734c9f1fe',
      'native_key' => 'redactor.removeDataAttr',
      'filename' => 'modSystemSetting/de669305056959e4c90f0156efe3c8ed.vehicle',
      'namespace' => 'redactor',
    ),
    83 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dc0e9c2365cf4d0a6bba08b39279c684',
      'native_key' => 'redactor.removeAttr',
      'filename' => 'modSystemSetting/954370a2624429e15ecf06dcf1b7c0c2.vehicle',
      'namespace' => 'redactor',
    ),
    84 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f22c932f669a7e021122887df67d8169',
      'native_key' => 'redactor.allowedAttr',
      'filename' => 'modSystemSetting/46c36d69653e28e3e668adcc18047317.vehicle',
      'namespace' => 'redactor',
    ),
    85 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '465ff2011c2b50d812b0993474285f86',
      'native_key' => 'redactor.dragImageUpload',
      'filename' => 'modSystemSetting/62c7433040596111d549827a8ee63c76.vehicle',
      'namespace' => 'redactor',
    ),
    86 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c3395445740625a1ea9da4a87cdebff5',
      'native_key' => 'redactor.dragFileUpload',
      'filename' => 'modSystemSetting/bfb9bd9d12f952415c5605649443846f.vehicle',
      'namespace' => 'redactor',
    ),
    87 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '07b07d061ee7366b48a0ea0da5d27370',
      'native_key' => 'redactor.replaceDivs',
      'filename' => 'modSystemSetting/ec9a7c40fb21cd4a7960da33928456eb.vehicle',
      'namespace' => 'redactor',
    ),
    88 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cd577149d5b247f32cb2843c7a00c5a5',
      'native_key' => 'redactor.preSpaces',
      'filename' => 'modSystemSetting/7851afe0d42fd7869ba8fc87daec458e.vehicle',
      'namespace' => 'redactor',
    ),
    89 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '70a1fc4045055c160e4c85184f407002',
      'native_key' => 'redactor.parse_parent_path',
      'filename' => 'modSystemSetting/63456c8ede72a6e220a4d7be491f841a.vehicle',
      'namespace' => 'redactor',
    ),
    90 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '87a39a97c43ad7860aef3d2c05e01125',
      'native_key' => 'redactor.increment_file_names',
      'filename' => 'modSystemSetting/e5a4d64cc07e142c1a124a1a4bebf34c.vehicle',
      'namespace' => 'redactor',
    ),
    91 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0c64e62eb9f9d9cf72f04e5f80faaf60',
      'native_key' => 'redactor.parse_parent_path_height',
      'filename' => 'modSystemSetting/d2114757542066614471d86d5cd23256.vehicle',
      'namespace' => 'redactor',
    ),
    92 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f999e0b85b2658236a16cb3d6f2ee36b',
      'native_key' => 'redactor.baseurls_mode',
      'filename' => 'modSystemSetting/5057921ffb76b9fb9cb30a17c91d345b.vehicle',
      'namespace' => 'redactor',
    ),
    93 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bcbcb09f498ac7df64d62cbfb5793881',
      'native_key' => 'redactor.showDimensionsOnResize',
      'filename' => 'modSystemSetting/6a7a1c76f86846a9a0716c1d4fda7a25.vehicle',
      'namespace' => 'redactor',
    ),
    94 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f479ed6cb36faed28ba40657b46b65ac',
      'native_key' => 'redactor.plugin_counter',
      'filename' => 'modSystemSetting/6978650f847764a3f93f8b7dd10a07e6.vehicle',
      'namespace' => 'redactor',
    ),
    95 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '80e48f68289c46eec8f61317b013d4c6',
      'native_key' => 'redactor.plugin_fontcolor',
      'filename' => 'modSystemSetting/0626c9518ce12b11fdc1f50ae0b93f62.vehicle',
      'namespace' => 'redactor',
    ),
    96 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6968e100daff6d36473db340cdb9efbc',
      'native_key' => 'redactor.plugin_fontfamily',
      'filename' => 'modSystemSetting/f20e8448b9e003befc93e8a21230c421.vehicle',
      'namespace' => 'redactor',
    ),
    97 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'de16933ed00f250dc5221a4fd4590f37',
      'native_key' => 'redactor.plugin_fontsize',
      'filename' => 'modSystemSetting/41e3ef7afd6095e8e0619dbb05518edf.vehicle',
      'namespace' => 'redactor',
    ),
    98 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1047c03697bbc108bbbd90663671bba3',
      'native_key' => 'redactor.plugin_limiter',
      'filename' => 'modSystemSetting/e98c96848ad84b80e639676ac333020a.vehicle',
      'namespace' => 'redactor',
    ),
    99 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b32fe591f8ea3cefcb8504782ae6df4b',
      'native_key' => 'redactor.plugin_table',
      'filename' => 'modSystemSetting/0de550cbc98e614044e43426367e3e51.vehicle',
      'namespace' => 'redactor',
    ),
    100 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0e1412f0de42c37dcbdc88341e383fdd',
      'native_key' => 'redactor.plugin_textdirection',
      'filename' => 'modSystemSetting/4db5d16d09516e78e14f1d8a41d7be58.vehicle',
      'namespace' => 'redactor',
    ),
    101 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e05f20992ddfd45db0226a8685cfe671',
      'native_key' => 'redactor.plugin_video',
      'filename' => 'modSystemSetting/b9345b76adf2bb49cc66f9bfc76ed06f.vehicle',
      'namespace' => 'redactor',
    ),
    102 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1969181131e2120a55e88d190e9472f6',
      'native_key' => 'redactor.plugin_replacer',
      'filename' => 'modSystemSetting/2bbc27ee1b335cbea20ad18c5166178f.vehicle',
      'namespace' => 'redactor',
    ),
    103 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e7d0633f4166e010ff756e3003c6a3bf',
      'native_key' => 'redactor.plugin_syntax',
      'filename' => 'modSystemSetting/9423ce8afe04ca8101fa221c60be7a94.vehicle',
      'namespace' => 'redactor',
    ),
    104 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '03d3588b4535bbc26f67d9efd76760a8',
      'native_key' => 'redactor.plugin_speek',
      'filename' => 'modSystemSetting/4ea0c4cbd2dd647b31f815a41e6fb5fb.vehicle',
      'namespace' => 'redactor',
    ),
    105 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3b5e3b125f762a079686234ae282bc06',
      'native_key' => 'redactor.plugin_contrast',
      'filename' => 'modSystemSetting/47f5ac55bce987436849b49b986f18dc.vehicle',
      'namespace' => 'redactor',
    ),
    106 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f4838e692b4fcc6a6baee84b29cabf9f',
      'native_key' => 'redactor.plugin_eureka',
      'filename' => 'modSystemSetting/cef1930e856b69327dbe8a760497ab4d.vehicle',
      'namespace' => 'redactor',
    ),
    107 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9ce6853c2d38ada774e3f94b201f6c48',
      'native_key' => 'redactor.plugin_eureka_shivie9',
      'filename' => 'modSystemSetting/69dc8315a6f636d9952cc8b034d1054a.vehicle',
      'namespace' => 'redactor',
    ),
    108 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1a642dedcdf42c6216dd033fbdf792d6',
      'native_key' => 'redactor.eurekaUpload',
      'filename' => 'modSystemSetting/10163930f62983582deddb22d8a8bed4.vehicle',
      'namespace' => 'redactor',
    ),
    109 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '092ca19577897cf7b619a2fd2c0ac176',
      'native_key' => 'redactor.initial_directory_depth',
      'filename' => 'modSystemSetting/3fc10c04116c034ae384abb7007e599f.vehicle',
      'namespace' => 'redactor',
    ),
    110 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '906112b87200ce07391615958977c26c',
      'native_key' => 'redactor.plugin_zoom',
      'filename' => 'modSystemSetting/012f3de5e692eea7a2e4ffcdf12119da.vehicle',
      'namespace' => 'redactor',
    ),
    111 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '149ed42bab75cbaa8389ecafbe94630a',
      'native_key' => 'redactor.plugin_download',
      'filename' => 'modSystemSetting/b8d842312766581beb07aa5fa3de1ced.vehicle',
      'namespace' => 'redactor',
    ),
    112 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f23e93186d6b710d2f05ad479deccd42',
      'native_key' => 'redactor.plugin_imagepx',
      'filename' => 'modSystemSetting/cc328765f077939f7366eb86140ec23b.vehicle',
      'namespace' => 'redactor',
    ),
    113 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'af162da975e3fbe740f6088f4e45777d',
      'native_key' => 'redactor.plugin_imageurl',
      'filename' => 'modSystemSetting/ab852753c38e943e0fea78aaadb06b81.vehicle',
      'namespace' => 'redactor',
    ),
    114 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0c1ce7c4559014c0a4cb468d392af45a',
      'native_key' => 'redactor.plugin_breadcrumb',
      'filename' => 'modSystemSetting/062946ac2fe0667ab2202afabd84cbf3.vehicle',
      'namespace' => 'redactor',
    ),
    115 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8d1a72b23a9dfa788598827d5753cecd',
      'native_key' => 'redactor.plugin_norphan',
      'filename' => 'modSystemSetting/9ff28b7cb238df224e6a13c2f72df8df.vehicle',
      'namespace' => 'redactor',
    ),
    116 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '210cb84a0cb5b1be141914c88b6404d8',
      'native_key' => 'redactor.plugin_baseurls',
      'filename' => 'modSystemSetting/cda969543988840da2d88def151996bf.vehicle',
      'namespace' => 'redactor',
    ),
    117 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '74dd3d8846f444014e9155f2b2dca0a8',
      'native_key' => 'redactor.textexpander',
      'filename' => 'modSystemSetting/d786ad87c784a001b6688f4c0474f44b.vehicle',
      'namespace' => 'redactor',
    ),
    118 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dffa63401662c2a4ca46dc3d98f6d41f',
      'native_key' => 'redactor.speechPitch',
      'filename' => 'modSystemSetting/5f8bf4a33da1022f85317eb850c49c38.vehicle',
      'namespace' => 'redactor',
    ),
    119 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1be7ab6dfaeb69915e23bcb5970d4ce7',
      'native_key' => 'redactor.speechRate',
      'filename' => 'modSystemSetting/851eacc29639eb8e2ef14ca369dfec89.vehicle',
      'namespace' => 'redactor',
    ),
    120 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a86e6efd96825b7ded7cb371b9a9fbf4',
      'native_key' => 'redactor.speechVolume',
      'filename' => 'modSystemSetting/4028c4672ee49dd5fa36fb3cae362a99.vehicle',
      'namespace' => 'redactor',
    ),
    121 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a59261c026d8bad2b770a1a2b032c724',
      'native_key' => 'redactor.speechVoice',
      'filename' => 'modSystemSetting/c294ce0ed943fdcb4861e2f3acbd3e2e.vehicle',
      'namespace' => 'redactor',
    ),
    122 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cef7ecb93ea7421dd6979b883fc442f0',
      'native_key' => 'redactor.counterWPM',
      'filename' => 'modSystemSetting/78cebf2869e3258e7be78ea69f13be69.vehicle',
      'namespace' => 'redactor',
    ),
    123 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9cc1e624176ebe25d7d5ed6def43a887',
      'native_key' => 'redactor.codemirror',
      'filename' => 'modSystemSetting/4e9fcddf70e04fd91c09418b698bdb90.vehicle',
      'namespace' => 'redactor',
    ),
    124 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ee3a71309f69e4e15c519f95190d1de2',
      'native_key' => 'redactor.plugin_uploadcare',
      'filename' => 'modSystemSetting/d093830ba2924777c38274fecb7fa0fe.vehicle',
      'namespace' => 'redactor',
    ),
    125 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c90602b58230f7f8a4237c1ee3358dc0',
      'native_key' => 'redactor.uploadcare_pub_key',
      'filename' => 'modSystemSetting/e41adda035073259cb46b7b2ef495e6e.vehicle',
      'namespace' => 'redactor',
    ),
    126 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '532c0b0130c344e9ad2e26d674a461fd',
      'native_key' => 'redactor.uploadcare_locale',
      'filename' => 'modSystemSetting/5616ad18ad8e5f805aeac76771ffa9a1.vehicle',
      'namespace' => 'redactor',
    ),
    127 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2b4c8674b3cf5bd7b309bd879d61b500',
      'native_key' => 'redactor.uploadcare_crop',
      'filename' => 'modSystemSetting/39c886f3e608a236bef6c744738a15e8.vehicle',
      'namespace' => 'redactor',
    ),
    128 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '84984aa286baba28ffda9f6134a7770e',
      'native_key' => 'redactor.uploadcare_tabs',
      'filename' => 'modSystemSetting/f784525105fed33f8ec1dae78241ce7f.vehicle',
      'namespace' => 'redactor',
    ),
    129 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '54fbeb1b8901bdb913ac01509c695241',
      'native_key' => 'redactor.loadIntrotext',
      'filename' => 'modSystemSetting/fe9c1cc3bea5602cdf5096f779ac86d5.vehicle',
      'namespace' => 'redactor',
    ),
    130 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '01a95c5b0a8e0ff2e774050364e67ea1',
      'native_key' => 'redactor.limiter',
      'filename' => 'modSystemSetting/f159e5b4687b007a38deb8728117156c.vehicle',
      'namespace' => 'redactor',
    ),
    131 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => '8c4fc317b00d8074ffa2062ae89a2be4',
      'native_key' => '8c4fc317b00d8074ffa2062ae89a2be4',
      'filename' => 'xPDOScriptVehicle/31bba1ce0b1bac986892c3b9fffc6bbc.vehicle',
      'namespace' => 'redactor',
    ),
  ),
);