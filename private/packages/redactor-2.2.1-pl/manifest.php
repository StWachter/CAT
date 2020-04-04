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
    'changelog' => '++ Redactor 2.2.1-pl
++ Released on 2017-04-07
+++++++++++++++++++++++++
- Add new `root-relative` baseurls mode value for subdirectory-based contexts with shared assets in the site root [S11174]
- Fix potential jQuery conflicts affecting Redactor template variables [S11205]
- Fix context-specific redactor.css setting not being recognised [#443]
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
      'guid' => 'e0f9959c6879e9ee0be915da43945df5',
      'native_key' => 'redactor',
      'filename' => 'modNamespace/ba2f7469835d8795dabae807e55add7a.vehicle',
      'namespace' => 'redactor',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '8678c370e4ed49e02f06a4b75948f3ef',
      'native_key' => '8678c370e4ed49e02f06a4b75948f3ef',
      'filename' => 'xPDOFileVehicle/3b90935a97535e5d0f615ee872ad103c.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'modmoreVehicle',
      'class' => 'modPlugin',
      'guid' => 'd7dd6e7c803532c42893d229ebca55c8',
      'native_key' => NULL,
      'filename' => 'modPlugin/51720b2c6e78e26a670b1f8c070bb881.vehicle',
      'namespace' => 'redactor',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ad07ec427372e3044bd6e821bda37ccf',
      'native_key' => 'redactor.lang',
      'filename' => 'modSystemSetting/7f3deb7256ef8956e54dfa7ef7bb4a6b.vehicle',
      'namespace' => 'redactor',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f3aa92196b8a1aaec8ae48f52a2b626c',
      'native_key' => 'redactor.direction',
      'filename' => 'modSystemSetting/2814d1f40ff31203b3c56a4c7d04adb1.vehicle',
      'namespace' => 'redactor',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '555fce288fa22b9f146dca0ad0b8d2b7',
      'native_key' => 'redactor.buttons',
      'filename' => 'modSystemSetting/b86840c5c6ca93c8e53aa1a7903032c9.vehicle',
      'namespace' => 'redactor',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cc29aae56d632877053012a5bedbcae6',
      'native_key' => 'redactor.activeButtons',
      'filename' => 'modSystemSetting/8867f81a4910aa1657ea6e6fd263e375.vehicle',
      'namespace' => 'redactor',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'eb0af640a71546e752d3bf7e5e9260f2',
      'native_key' => 'redactor.activeButtonsStates',
      'filename' => 'modSystemSetting/c53a0309ce081817659199f15a971c61.vehicle',
      'namespace' => 'redactor',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6081fb6c93e2500c08659ba996d0aca0',
      'native_key' => 'redactor.formattingTags',
      'filename' => 'modSystemSetting/7998c15a5cb5809e3b6b3f6f75a5e50c.vehicle',
      'namespace' => 'redactor',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7a44d7e9954c443f8da8041c7719e050',
      'native_key' => 'redactor.buttonSource',
      'filename' => 'modSystemSetting/38d1be19dbfae1bcc9189836637d6461.vehicle',
      'namespace' => 'redactor',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '93530e4a39877a98a97fe13f2cfe140e',
      'native_key' => 'redactor.buttonFullScreen',
      'filename' => 'modSystemSetting/bf192fdbb997477fa2bed9582b928da1.vehicle',
      'namespace' => 'redactor',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd5f15bf1cd53421f44caa7df55ac26f7',
      'native_key' => 'redactor.css',
      'filename' => 'modSystemSetting/5400859967903baa24cc9a1f0cdd1d24.vehicle',
      'namespace' => 'redactor',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8d8bc330ac5410422d6cf48e475fff88',
      'native_key' => 'redactor.shortcuts',
      'filename' => 'modSystemSetting/b3d694dce12c5cb6f29515dff9797e2d.vehicle',
      'namespace' => 'redactor',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '007a7b665453148aabaf05121570f5dc',
      'native_key' => 'redactor.cleanup',
      'filename' => 'modSystemSetting/3219bc9c5244d145bdc549aeccdcfe2d.vehicle',
      'namespace' => 'redactor',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4241c38b8969f8a71da6665f2f9b546b',
      'native_key' => 'redactor.convertLinks',
      'filename' => 'modSystemSetting/cf1b301f9954fb3142742657e09aa495.vehicle',
      'namespace' => 'redactor',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ec64053238a85d6be5772a32af2c0b7e',
      'native_key' => 'redactor.tabindex',
      'filename' => 'modSystemSetting/fa629f8fcda40d52b0fae70db9d7a0d5.vehicle',
      'namespace' => 'redactor',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '174f1f1fd3ed5b7f54b3ad1b886d8e23',
      'native_key' => 'redactor.minHeight',
      'filename' => 'modSystemSetting/05e571e895b29208d9d9fbc5e7c85123.vehicle',
      'namespace' => 'redactor',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b14c7b683dfd6504b6af04de78c9920a',
      'native_key' => 'redactor.colors',
      'filename' => 'modSystemSetting/70aaece16fa8955890a4a7a4cba5aa3f.vehicle',
      'namespace' => 'redactor',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6f682199f7208ebe4f0ff98e3354322d',
      'native_key' => 'redactor.wym',
      'filename' => 'modSystemSetting/b93a89af6ffb8e2b04848af2f5b30755.vehicle',
      'namespace' => 'redactor',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0cd091a784e274793251bfbddf953e94',
      'native_key' => 'redactor.linkProtocol',
      'filename' => 'modSystemSetting/53f2510e9864295b1ecedb6f1bd08760.vehicle',
      'namespace' => 'redactor',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fd693dbc0fae4f4bd8e824f55f8e974e',
      'native_key' => 'redactor.placeholder',
      'filename' => 'modSystemSetting/489648bf73201ecdaa3756ab36224d33.vehicle',
      'namespace' => 'redactor',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3b44da505135e41398f2c6c48a983719',
      'native_key' => 'redactor.linebreaks',
      'filename' => 'modSystemSetting/5a168f9e72c6f088b17268a0f4bfccc9.vehicle',
      'namespace' => 'redactor',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e60d19654a6613aa0716ee88467edb7c',
      'native_key' => 'redactor.allowedTags',
      'filename' => 'modSystemSetting/bac8cc5fa5209b49528371b0e12f2625.vehicle',
      'namespace' => 'redactor',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f51b7ae6085bb5742b8c0ae44c3981b9',
      'native_key' => 'redactor.deniedTags',
      'filename' => 'modSystemSetting/1828da902ee4cc1cae5f128003201a3d.vehicle',
      'namespace' => 'redactor',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e940fdad3d027c7ca5774514a8ab8f3a',
      'native_key' => 'redactor.linkEmail',
      'filename' => 'modSystemSetting/399434b39a56b3a736ec2383d0f6b437.vehicle',
      'namespace' => 'redactor',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3782a85acf50e90e15e8b5623cff40cb',
      'native_key' => 'redactor.linkAnchor',
      'filename' => 'modSystemSetting/39356e74e66b5619f9fa0c78ae8861bb.vehicle',
      'namespace' => 'redactor',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ad950afe85b8737984bf67576f99f013',
      'native_key' => 'redactor.pastePlainText',
      'filename' => 'modSystemSetting/749f123565c3ece3b4096511a6848b49.vehicle',
      'namespace' => 'redactor',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3d36acefea7c4c1cc5e44642aa4c7ee1',
      'native_key' => 'redactor.paragraphize',
      'filename' => 'modSystemSetting/5581331a790eb93fdc00c2f7a1228329.vehicle',
      'namespace' => 'redactor',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '57c79b5da7fb65c1023c25b391d22fe2',
      'native_key' => 'redactor.removeComments',
      'filename' => 'modSystemSetting/ad095b0e42917be60c3c97300f8e5018.vehicle',
      'namespace' => 'redactor',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2af59a9eeda2adf4eba389e825789ce4',
      'native_key' => 'redactor.visual',
      'filename' => 'modSystemSetting/a9e5bdf88d382cd42cfadc0f132f74ea.vehicle',
      'namespace' => 'redactor',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3fbf6cade1f85c28187302f70a7a9dc0',
      'native_key' => 'redactor.marginFloatLeft',
      'filename' => 'modSystemSetting/88768c08ac8299ea0ca2f9afea3dc81b.vehicle',
      'namespace' => 'redactor',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '23dd18179a0fc28ff6775e1db0b62fa1',
      'native_key' => 'redactor.marginFloatRight',
      'filename' => 'modSystemSetting/3460c0cc9197b6e0fb009372030b4ff4.vehicle',
      'namespace' => 'redactor',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7976a357e601e882c77889a34997f8d4',
      'native_key' => 'redactor.mediasource',
      'filename' => 'modSystemSetting/2fef913bbd16c33c417894379e432297.vehicle',
      'namespace' => 'redactor',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6474ac433d52955053898ce365f091da',
      'native_key' => 'redactor.file_mediasource',
      'filename' => 'modSystemSetting/df22730e13412ed009cc857ebdcebb55.vehicle',
      'namespace' => 'redactor',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '930c835da2bdfb2f15c5251db005ca20',
      'native_key' => 'redactor.image_upload_path',
      'filename' => 'modSystemSetting/735f556b3df177a954560e25115bef96.vehicle',
      'namespace' => 'redactor',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e1f5143a70c07e0412e647d740dc2d65',
      'native_key' => 'redactor.image_browse_path',
      'filename' => 'modSystemSetting/1e1c7acc751366a296f0910cf08b78b6.vehicle',
      'namespace' => 'redactor',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '93fceb1ccb156a1e73feb17d601c22d8',
      'native_key' => 'redactor.file_upload_path',
      'filename' => 'modSystemSetting/4d1147eb97aa2ff95905487ebed2d6aa.vehicle',
      'namespace' => 'redactor',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0dd3ca975432caeadf609f8ffd314761',
      'native_key' => 'redactor.file_browse_path',
      'filename' => 'modSystemSetting/36e01e83de81d3ff2e998164d0554b00.vehicle',
      'namespace' => 'redactor',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '235fb13266cb5ad7a4fb47c374c7bc41',
      'native_key' => 'redactor.browse_files',
      'filename' => 'modSystemSetting/987934a2f12bddd3e4c8049869429d42.vehicle',
      'namespace' => 'redactor',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8618cc40073b01d2999158c346e7fbcb',
      'native_key' => 'redactor.date_images',
      'filename' => 'modSystemSetting/83974e29c386fd04ead96a94a6d8a8cc.vehicle',
      'namespace' => 'redactor',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6e713f5d8b3655e4f861aecc45b4f1e0',
      'native_key' => 'redactor.date_files',
      'filename' => 'modSystemSetting/c1c0af57ded3c8073408436c22e9c7ef.vehicle',
      'namespace' => 'redactor',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '63a475b7e25fab22f930611b1cbd7235',
      'native_key' => 'redactor.typeahead.include_introtext',
      'filename' => 'modSystemSetting/000c85244b9f5864e20e4ea8387b70fb.vehicle',
      'namespace' => 'redactor',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9d34b382e01459649bd3d5a8e79cfa0c',
      'native_key' => 'redactor.prefetch_ttl',
      'filename' => 'modSystemSetting/7a219006080ba863a334d5f53f562502.vehicle',
      'namespace' => 'redactor',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b4144ea67b511297793debac75b6b602',
      'native_key' => 'redactor.linkResource',
      'filename' => 'modSystemSetting/d42742b08278036d19d6f4ece96c7e56.vehicle',
      'namespace' => 'redactor',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2a61a45d5cebbabb446d1d96e734b08d',
      'native_key' => 'redactor.cleanFileNames',
      'filename' => 'modSystemSetting/2f611442cec7648f0a0e6536552d5f73.vehicle',
      'namespace' => 'redactor',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '353d6ae2be57440f74688aec7de4ebe3',
      'native_key' => 'redactor.dynamicThumbs',
      'filename' => 'modSystemSetting/9a2a976acac4428bbe6ad6d667307005.vehicle',
      'namespace' => 'redactor',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'beb49e00e23b0bd41d481142e27e9a0e',
      'native_key' => 'redactor.clipsJson',
      'filename' => 'modSystemSetting/d25543bbc4d3cdb251c35b3ab469072e.vehicle',
      'namespace' => 'redactor',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fba8356b4025045c6810796d31b15220',
      'native_key' => 'redactor.additionalPlugins',
      'filename' => 'modSystemSetting/7f1efcbe495f807126780192fc4ff1c9.vehicle',
      'namespace' => 'redactor',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ce8319040ccf6c3c53a93f884bad14b4',
      'native_key' => 'redactor.dragUpload',
      'filename' => 'modSystemSetting/6a0650dbc154c1c20b4ffadc37912cc0.vehicle',
      'namespace' => 'redactor',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8438b01a4bf7348cb5cb44028613ddc1',
      'native_key' => 'redactor.convertImageLinks',
      'filename' => 'modSystemSetting/4e16639354483967ccd3fbfd1ecfd223.vehicle',
      'namespace' => 'redactor',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b8570e5236cbeb67957f6d365cdbb54f',
      'native_key' => 'redactor.convertVideoLinks',
      'filename' => 'modSystemSetting/1424351d9924363007d510da5395e6a0.vehicle',
      'namespace' => 'redactor',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '89eb728ddcd1e8e46d7d3a952811e62f',
      'native_key' => 'redactor.tabAsSpaces',
      'filename' => 'modSystemSetting/7196bd1d6f3cbaf73cafc797d37a215e.vehicle',
      'namespace' => 'redactor',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '96ba7c16a14b2e306ab8d0978d82a15f',
      'native_key' => 'redactor.removeEmptyTags',
      'filename' => 'modSystemSetting/797d7d6724f1d5ebb71dd0e265bed8b6.vehicle',
      'namespace' => 'redactor',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'aea1036ced6f041643dc715ca165e48c',
      'native_key' => 'redactor.sanitizePattern',
      'filename' => 'modSystemSetting/41a352791fa3f5011d5701c190caf33b.vehicle',
      'namespace' => 'redactor',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd38abc2fb2a97a7bd6264769ed672b60',
      'native_key' => 'redactor.sanitizeReplace',
      'filename' => 'modSystemSetting/880729e51189414c6a6db90c7e393ce5.vehicle',
      'namespace' => 'redactor',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'daa8c313efd9461430b668dfcb6ed374',
      'native_key' => 'redactor.linkSize',
      'filename' => 'modSystemSetting/d15583c7e0ebb586dd2f6f3a1e701fe1.vehicle',
      'namespace' => 'redactor',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '020f68a6b68e8379e30259aba3ae6bfd',
      'native_key' => 'redactor.advAttrib',
      'filename' => 'modSystemSetting/ea1e14e1160f6217bb6ee7fb204e508a.vehicle',
      'namespace' => 'redactor',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c6af98c9bde4dcf7faaaf299ba48beb5',
      'native_key' => 'redactor.linkNofollow',
      'filename' => 'modSystemSetting/4ddbf2b1d974eb3e05f7dd3ef3d2c301.vehicle',
      'namespace' => 'redactor',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fa8d4db7a7db9dedd54b688de547eb5f',
      'native_key' => 'redactor.typewriter',
      'filename' => 'modSystemSetting/fee14b5eb89e4a349f5e0c6fbdcb3b09.vehicle',
      'namespace' => 'redactor',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b08dbfb393d21882fb8706ff514ca448',
      'native_key' => 'redactor.buttonsHideOnMobile',
      'filename' => 'modSystemSetting/e4a74ffb5c9fe745b91732682f93396b.vehicle',
      'namespace' => 'redactor',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '085b2e164d1656e2bc8506a66721b3ee',
      'native_key' => 'redactor.toolbarOverflow',
      'filename' => 'modSystemSetting/d556d8795678f0b7aa374fefbd20ff76.vehicle',
      'namespace' => 'redactor',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2dceeca34204a933a16fef3fff932fb6',
      'native_key' => 'redactor.imageTabLink',
      'filename' => 'modSystemSetting/05743e41b1272e164a8d07bab8d23db0.vehicle',
      'namespace' => 'redactor',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '37eb595c0199667abe7ce2843875a34f',
      'native_key' => 'redactor.cleanSpaces',
      'filename' => 'modSystemSetting/50472c17c987979f1de23667a755e974.vehicle',
      'namespace' => 'redactor',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2d764e7fb359ca723a976dd11b70d32a',
      'native_key' => 'redactor.predefinedLinks',
      'filename' => 'modSystemSetting/910edd2e633c376566feb7bd78d6c80b.vehicle',
      'namespace' => 'redactor',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bbb42f098528b85fed37fbbff33c8165',
      'native_key' => 'redactor.shortcutsAdd',
      'filename' => 'modSystemSetting/178993dfbd158be98ad79f5ca8a63af4.vehicle',
      'namespace' => 'redactor',
    ),
    65 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6ea16338c94ff3504d0f925a8e86e461',
      'native_key' => 'redactor.commemorateRebecca',
      'filename' => 'modSystemSetting/483db064b5f655310fcf58cabbbaf82a.vehicle',
      'namespace' => 'redactor',
    ),
    66 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2d001dd414381cdd2a16335cfa14be90',
      'native_key' => 'redactor.toolbarFixed',
      'filename' => 'modSystemSetting/fa3d60a7b41299c65182b50db6929eeb.vehicle',
      'namespace' => 'redactor',
    ),
    67 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cabaaeb1301ec6ec55e29c27f51cfcfc',
      'native_key' => 'redactor.focus',
      'filename' => 'modSystemSetting/f34765bc6877266828645bc43405cf4b.vehicle',
      'namespace' => 'redactor',
    ),
    68 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '981336744b0340dacb7977db1c4edfb9',
      'native_key' => 'redactor.focusEnd',
      'filename' => 'modSystemSetting/0c3c03d58d09e866f94568df48a62ceb.vehicle',
      'namespace' => 'redactor',
    ),
    69 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '16592020d5bc8c8c5bcdda1d445c0e90',
      'native_key' => 'redactor.scrollTarget',
      'filename' => 'modSystemSetting/40a189b09d43aa81a7ae88da6c87eb34.vehicle',
      'namespace' => 'redactor',
    ),
    70 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '916cb2de8b6fcfeacf4669b024971d53',
      'native_key' => 'redactor.enterKey',
      'filename' => 'modSystemSetting/27c69e35593476d36b137f19d0eeb13b.vehicle',
      'namespace' => 'redactor',
    ),
    71 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '993e16c9b7c716cf6dd4ac87256ece15',
      'native_key' => 'redactor.cleanStyleOnEnter',
      'filename' => 'modSystemSetting/61cce1d01ca079aae6a58bc49c2428a5.vehicle',
      'namespace' => 'redactor',
    ),
    72 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0082363013a3425176dd0f26604f68a4',
      'native_key' => 'redactor.linkTooltip',
      'filename' => 'modSystemSetting/ab1ea92ad7075d93c3b12e5fdaa19705.vehicle',
      'namespace' => 'redactor',
    ),
    73 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f6475ec8b6d1c1544dd26457ed06f97a',
      'native_key' => 'redactor.imageEditable',
      'filename' => 'modSystemSetting/b6d23d5cf87d389401b0399dec226325.vehicle',
      'namespace' => 'redactor',
    ),
    74 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cfb6f86f155ab339119d5fb39862603a',
      'native_key' => 'redactor.imageResizable',
      'filename' => 'modSystemSetting/7bf958402ea8308d54a5deffb4dc18e2.vehicle',
      'namespace' => 'redactor',
    ),
    75 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5c1304161c65b8ff767182cbd2be9034',
      'native_key' => 'redactor.imageLink',
      'filename' => 'modSystemSetting/999c7d5e25931a48270d590e08880d90.vehicle',
      'namespace' => 'redactor',
    ),
    76 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '20e2f664591409d80cc1fd700da70cbe',
      'native_key' => 'redactor.imagePosition',
      'filename' => 'modSystemSetting/2ab5a0f49a5dd83c7dab1f3e4c9c2883.vehicle',
      'namespace' => 'redactor',
    ),
    77 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1960dfb51ce125d52cbcc5fdd767933e',
      'native_key' => 'redactor.buttonsHide',
      'filename' => 'modSystemSetting/de627f487f520b9fa8ad4fbd19c33b74.vehicle',
      'namespace' => 'redactor',
    ),
    78 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b54b4eec37d1a39c02552025f4e5d2a8',
      'native_key' => 'redactor.formattingAdd',
      'filename' => 'modSystemSetting/897c52f51db23714d8bcc038fa73ab04.vehicle',
      'namespace' => 'redactor',
    ),
    79 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'eea9e7ea3768ecf87612cf62dfb5ac6f',
      'native_key' => 'redactor.tabifier',
      'filename' => 'modSystemSetting/b94a441d7b964f316fd56797564ee6c5.vehicle',
      'namespace' => 'redactor',
    ),
    80 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e9f7e37d0b768d98997807a4ac893a97',
      'native_key' => 'redactor.replaceTags',
      'filename' => 'modSystemSetting/1fe7972f583821567784c485f16ea220.vehicle',
      'namespace' => 'redactor',
    ),
    81 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '803e1edcae21e052ffe2708f8f36bdbe',
      'native_key' => 'redactor.replaceStyles',
      'filename' => 'modSystemSetting/d9e73b1124ef545f85968c163c7a9221.vehicle',
      'namespace' => 'redactor',
    ),
    82 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '204445261f28ba974f165bb346b09c11',
      'native_key' => 'redactor.removeDataAttr',
      'filename' => 'modSystemSetting/935e872c1180c35ef93595fdbba372dc.vehicle',
      'namespace' => 'redactor',
    ),
    83 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '796dc5300a678ef5b968276c4d8fbaad',
      'native_key' => 'redactor.removeAttr',
      'filename' => 'modSystemSetting/5ea747c4c3f3604b2333f548005c1e18.vehicle',
      'namespace' => 'redactor',
    ),
    84 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cfb0c0b996bb482ca815384d50a3928f',
      'native_key' => 'redactor.allowedAttr',
      'filename' => 'modSystemSetting/d66157f9723a51879cf9f1e3c2a97e5a.vehicle',
      'namespace' => 'redactor',
    ),
    85 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5d219cb74b2008045c3d726c18fb4fd4',
      'native_key' => 'redactor.dragImageUpload',
      'filename' => 'modSystemSetting/a66568727cab530e7cb252e279e9b03b.vehicle',
      'namespace' => 'redactor',
    ),
    86 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'db4c85bde4974368dec410636626cbfe',
      'native_key' => 'redactor.dragFileUpload',
      'filename' => 'modSystemSetting/930907952efe60b0c9dec84d4b01884e.vehicle',
      'namespace' => 'redactor',
    ),
    87 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e2eafb05b8670ebd17f198470aba079a',
      'native_key' => 'redactor.replaceDivs',
      'filename' => 'modSystemSetting/506e7a7f8c317472a4f99d99fd821614.vehicle',
      'namespace' => 'redactor',
    ),
    88 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '937c891efa9a1b7384b0653c25d56cb9',
      'native_key' => 'redactor.preSpaces',
      'filename' => 'modSystemSetting/44d3faa79b2063d0612560a2b52370e0.vehicle',
      'namespace' => 'redactor',
    ),
    89 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'efa244be6bb00611e359fad2f97cec60',
      'native_key' => 'redactor.parse_parent_path',
      'filename' => 'modSystemSetting/8135657570ea3d512b115a6ffa1a8766.vehicle',
      'namespace' => 'redactor',
    ),
    90 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fc2ee002883999a830588eb440e6d18e',
      'native_key' => 'redactor.increment_file_names',
      'filename' => 'modSystemSetting/cf37de2cd7302f3633ef80379a88d730.vehicle',
      'namespace' => 'redactor',
    ),
    91 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c85d8dba89c14b66704e231aefd105cb',
      'native_key' => 'redactor.parse_parent_path_height',
      'filename' => 'modSystemSetting/9f3f3e97d28225d59329d3f636243999.vehicle',
      'namespace' => 'redactor',
    ),
    92 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bb7244a382ae2dd102f8636ac4106337',
      'native_key' => 'redactor.baseurls_mode',
      'filename' => 'modSystemSetting/3d5afa1d72d875bf2d05ce9b7744fae7.vehicle',
      'namespace' => 'redactor',
    ),
    93 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dfbe14a796d0cb791fdd875b12a094ad',
      'native_key' => 'redactor.showDimensionsOnResize',
      'filename' => 'modSystemSetting/a4bda977f3755750a25f58b4aadf29e5.vehicle',
      'namespace' => 'redactor',
    ),
    94 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a458134c75904f3d38d6ccc26cbcf0cf',
      'native_key' => 'redactor.plugin_counter',
      'filename' => 'modSystemSetting/1d6f622cd7daff7c510ade5cab301b70.vehicle',
      'namespace' => 'redactor',
    ),
    95 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd032b1a80b8a98648ef5cc9c356d3b03',
      'native_key' => 'redactor.plugin_fontcolor',
      'filename' => 'modSystemSetting/820d71b5a9b2e264efa7e384326697f1.vehicle',
      'namespace' => 'redactor',
    ),
    96 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8728957824344386dae5c2ef06ffea57',
      'native_key' => 'redactor.plugin_fontfamily',
      'filename' => 'modSystemSetting/a5cb5f274271c892873221824a017be4.vehicle',
      'namespace' => 'redactor',
    ),
    97 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ee55a3baf89ba3de7fdffbf569627bfe',
      'native_key' => 'redactor.plugin_fontsize',
      'filename' => 'modSystemSetting/3321b02a5a573d6dfd79f9d990af4946.vehicle',
      'namespace' => 'redactor',
    ),
    98 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '495b87347106b58a0875c794c67b452a',
      'native_key' => 'redactor.plugin_limiter',
      'filename' => 'modSystemSetting/662cc0f49a00f273a3516abd1afa1a43.vehicle',
      'namespace' => 'redactor',
    ),
    99 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'baebdbaa754d3766ba8376445ab880ac',
      'native_key' => 'redactor.plugin_table',
      'filename' => 'modSystemSetting/2b46cf2de8d44a8c76bc5f76a6bf179a.vehicle',
      'namespace' => 'redactor',
    ),
    100 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '84fb24b6ea5b313a3e131d50220593b7',
      'native_key' => 'redactor.plugin_textdirection',
      'filename' => 'modSystemSetting/56aff51e82e883699856365371dc75e2.vehicle',
      'namespace' => 'redactor',
    ),
    101 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '86b1489dc04b3bae3f9b5bc51ee7cfc3',
      'native_key' => 'redactor.plugin_video',
      'filename' => 'modSystemSetting/822570545df1979170fa1bad6b2d9a51.vehicle',
      'namespace' => 'redactor',
    ),
    102 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7e59400b33dec5d6db388572e8e36681',
      'native_key' => 'redactor.plugin_replacer',
      'filename' => 'modSystemSetting/3b117792109f2847187ed773bf69e55f.vehicle',
      'namespace' => 'redactor',
    ),
    103 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5fbd640100e5b239578b597fdd923900',
      'native_key' => 'redactor.plugin_syntax',
      'filename' => 'modSystemSetting/96ba34910eca33f39b652708b0f3666a.vehicle',
      'namespace' => 'redactor',
    ),
    104 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f343d26fbb0fb737d226c76f97adce7f',
      'native_key' => 'redactor.plugin_speek',
      'filename' => 'modSystemSetting/36a0b55662b56ebcbcf586216c0ee9ef.vehicle',
      'namespace' => 'redactor',
    ),
    105 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6ba7264ec733a263901d85cc470183b8',
      'native_key' => 'redactor.plugin_contrast',
      'filename' => 'modSystemSetting/64c781303367ba8a4fd6639ef923029e.vehicle',
      'namespace' => 'redactor',
    ),
    106 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9901e7bd7e6ef9405069b2e4788e584a',
      'native_key' => 'redactor.plugin_eureka',
      'filename' => 'modSystemSetting/08eb9861101897b194d323a7932c32b1.vehicle',
      'namespace' => 'redactor',
    ),
    107 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b659e79da8ce485a41908de05043300d',
      'native_key' => 'redactor.plugin_eureka_shivie9',
      'filename' => 'modSystemSetting/066c6eb99448b8152ca1a440ca0c3779.vehicle',
      'namespace' => 'redactor',
    ),
    108 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ef10d080f1a323bf197a2117d0f87088',
      'native_key' => 'redactor.eurekaUpload',
      'filename' => 'modSystemSetting/b76cec126fa3fe7d1b683dd464e6ff69.vehicle',
      'namespace' => 'redactor',
    ),
    109 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4a8fa6eb18024e853871f2724810f276',
      'native_key' => 'redactor.initial_directory_depth',
      'filename' => 'modSystemSetting/d609229b290c72fded5e79b086a8f751.vehicle',
      'namespace' => 'redactor',
    ),
    110 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '58326e7d5265f0a1b0ef0c370244201c',
      'native_key' => 'redactor.plugin_zoom',
      'filename' => 'modSystemSetting/61cb043cabfbd04d0b9bba7cc095146e.vehicle',
      'namespace' => 'redactor',
    ),
    111 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '54f0f5a4668334dd2fe5b7bbea3692d2',
      'native_key' => 'redactor.plugin_download',
      'filename' => 'modSystemSetting/cdc1fb821a03ac5ca50df412398b824c.vehicle',
      'namespace' => 'redactor',
    ),
    112 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '48f7565e4b5c52bacf5e570c2e7763e3',
      'native_key' => 'redactor.plugin_imagepx',
      'filename' => 'modSystemSetting/cfe981cc792b09e83a013dcaffdc47b6.vehicle',
      'namespace' => 'redactor',
    ),
    113 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '265c3422043526f439db9f559dc1c020',
      'native_key' => 'redactor.plugin_imageurl',
      'filename' => 'modSystemSetting/cde9ad0f87fe17972e4b6f03a4b4af13.vehicle',
      'namespace' => 'redactor',
    ),
    114 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3f1c93467dbfe507fe8498945c1f0c54',
      'native_key' => 'redactor.plugin_breadcrumb',
      'filename' => 'modSystemSetting/2dd413ad8004c4f261b69ed012bdd84b.vehicle',
      'namespace' => 'redactor',
    ),
    115 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '09eb847b83b2b92d40cb16c5e473ff28',
      'native_key' => 'redactor.plugin_norphan',
      'filename' => 'modSystemSetting/351f2b2831acf9ad3446b73b57277bf5.vehicle',
      'namespace' => 'redactor',
    ),
    116 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '750b3e9a1c077534ad32bc6c145fa06d',
      'native_key' => 'redactor.plugin_baseurls',
      'filename' => 'modSystemSetting/29e4090f226553a77943e9208ecb7cfc.vehicle',
      'namespace' => 'redactor',
    ),
    117 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2b3bdac0edacaa68b40827200dbb681f',
      'native_key' => 'redactor.textexpander',
      'filename' => 'modSystemSetting/64a404f933299536c0ad0c0598e033e3.vehicle',
      'namespace' => 'redactor',
    ),
    118 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'eeeae1fe53466e6f8d6abe5f379e4fa0',
      'native_key' => 'redactor.speechPitch',
      'filename' => 'modSystemSetting/96efa0a0c38e3614747e88291bc16eff.vehicle',
      'namespace' => 'redactor',
    ),
    119 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9ec348b709df414006e5a83cd529396a',
      'native_key' => 'redactor.speechRate',
      'filename' => 'modSystemSetting/1194fdcad6ef931d68c1a5e332719c0b.vehicle',
      'namespace' => 'redactor',
    ),
    120 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '75e39ca32bd396c1c400f37d77b5e192',
      'native_key' => 'redactor.speechVolume',
      'filename' => 'modSystemSetting/2b82d92fa38e60b16fc20b3763f768e7.vehicle',
      'namespace' => 'redactor',
    ),
    121 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6834450c3677c67aa61b931f3ddfa2f4',
      'native_key' => 'redactor.speechVoice',
      'filename' => 'modSystemSetting/ba7886476f473fc2091ac058f249cf38.vehicle',
      'namespace' => 'redactor',
    ),
    122 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e673af29ea90e34f9e4cf2f11722f69f',
      'native_key' => 'redactor.counterWPM',
      'filename' => 'modSystemSetting/360c8454a3ce0c82a637e08769475349.vehicle',
      'namespace' => 'redactor',
    ),
    123 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9f24a08b602db8f64fd0248139419395',
      'native_key' => 'redactor.codemirror',
      'filename' => 'modSystemSetting/3443a1af600c1c78c605061dd10e67a5.vehicle',
      'namespace' => 'redactor',
    ),
    124 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'afc0dad6addb375a4a16cce32a1f06b4',
      'native_key' => 'redactor.plugin_uploadcare',
      'filename' => 'modSystemSetting/169aec31b38d1f3cacc0eab2ebd61304.vehicle',
      'namespace' => 'redactor',
    ),
    125 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '72f2ababba8a63f1f4f379d524eaab07',
      'native_key' => 'redactor.uploadcare_pub_key',
      'filename' => 'modSystemSetting/3d84e210ab1620a03d0f1e9011e57737.vehicle',
      'namespace' => 'redactor',
    ),
    126 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5fbcde5cd9366b44590fdda88e5b0949',
      'native_key' => 'redactor.uploadcare_locale',
      'filename' => 'modSystemSetting/1caeb8831936384780cbf5de9b7b062b.vehicle',
      'namespace' => 'redactor',
    ),
    127 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '74b1fe2602b39b235c2b7e3035c57c44',
      'native_key' => 'redactor.uploadcare_crop',
      'filename' => 'modSystemSetting/3652b1eff4fa9b11f98e87d934671590.vehicle',
      'namespace' => 'redactor',
    ),
    128 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '32ba6150b3a15758bf20a9f88b067721',
      'native_key' => 'redactor.uploadcare_tabs',
      'filename' => 'modSystemSetting/840c1058364bac69bc97b567f16da289.vehicle',
      'namespace' => 'redactor',
    ),
    129 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1b9d9a4f51dad419c73eda7799d0f5bd',
      'native_key' => 'redactor.loadIntrotext',
      'filename' => 'modSystemSetting/59994b49a301f7385250fe1e5e4b25a5.vehicle',
      'namespace' => 'redactor',
    ),
    130 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '76a8532dabe046962fbb5d978cca76b6',
      'native_key' => 'redactor.limiter',
      'filename' => 'modSystemSetting/5bcbb07b262dc41c80f47cfc6c2292c6.vehicle',
      'namespace' => 'redactor',
    ),
    131 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => 'acdab1fe8d28e5e6f54601943597b0ac',
      'native_key' => 'acdab1fe8d28e5e6f54601943597b0ac',
      'filename' => 'xPDOScriptVehicle/1563be6c1bbec20de66340da58bcbf7a.vehicle',
      'namespace' => 'redactor',
    ),
  ),
);