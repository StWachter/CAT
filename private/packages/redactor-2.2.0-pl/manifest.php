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
    'changelog' => '++ Redactor 2.2.0-pl
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
      'guid' => '8a1554f75e41ad56145cb7a2e788b1de',
      'native_key' => 'redactor',
      'filename' => 'modNamespace/ed52b7f1f866209347dfa92e52974d87.vehicle',
      'namespace' => 'redactor',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '6319026ca88303bad94a0169e52a07ac',
      'native_key' => '6319026ca88303bad94a0169e52a07ac',
      'filename' => 'xPDOFileVehicle/79dcdbfbaf91dd460ff4249d8d4caa43.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'modmoreVehicle',
      'class' => 'modPlugin',
      'guid' => '4d9ef22afe9f7cd5720278e9547408c4',
      'native_key' => NULL,
      'filename' => 'modPlugin/bcf5c127f0e5f265843740c764f4ba82.vehicle',
      'namespace' => 'redactor',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f3ce8f13a8283d88dad8dffdba8feeb5',
      'native_key' => 'redactor.lang',
      'filename' => 'modSystemSetting/0f27f79c986d23fad0f41a29efec934f.vehicle',
      'namespace' => 'redactor',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6fa53348b26d54dd806d01e0daa72972',
      'native_key' => 'redactor.direction',
      'filename' => 'modSystemSetting/a95a6740cb4d50849aa7db568716a2f4.vehicle',
      'namespace' => 'redactor',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9afa5d191d9fa5e7389b428093201bca',
      'native_key' => 'redactor.buttons',
      'filename' => 'modSystemSetting/6b0c32250ccd7f8190863eb6ed73ec79.vehicle',
      'namespace' => 'redactor',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '81999fd8b0fefbcb45bba27841561ac2',
      'native_key' => 'redactor.activeButtons',
      'filename' => 'modSystemSetting/5167434ae4b9ab5c398aed8d62d25b42.vehicle',
      'namespace' => 'redactor',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f99c7a6c6163c8d9317ce9125808ffbd',
      'native_key' => 'redactor.activeButtonsStates',
      'filename' => 'modSystemSetting/bf15f7f84766810fa179eed07af7f92e.vehicle',
      'namespace' => 'redactor',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '380970b405581d9a892b41860fb0e0ce',
      'native_key' => 'redactor.formattingTags',
      'filename' => 'modSystemSetting/66ddb83a3c60066b276b1df3ab0a221f.vehicle',
      'namespace' => 'redactor',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cdae4e9fd77086c167e705041ffd0b43',
      'native_key' => 'redactor.buttonSource',
      'filename' => 'modSystemSetting/f470d2d4cef63ddedbe40f609230f272.vehicle',
      'namespace' => 'redactor',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1981ef5ba2919ba258dfdb9d83159ffe',
      'native_key' => 'redactor.buttonFullScreen',
      'filename' => 'modSystemSetting/b8334843f5ca56792e27963fb47f21d2.vehicle',
      'namespace' => 'redactor',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1751b8ac1c76cbb541f0d9b1a757ad53',
      'native_key' => 'redactor.css',
      'filename' => 'modSystemSetting/406dfc3849403eab03fb68ebe8eeb3e4.vehicle',
      'namespace' => 'redactor',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'de15d96f9ca485cd41a8838f2d9d3844',
      'native_key' => 'redactor.shortcuts',
      'filename' => 'modSystemSetting/838fc92bf02e9daed7698ec4fe54297c.vehicle',
      'namespace' => 'redactor',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4072a173f757da6d72170c52a76a72c9',
      'native_key' => 'redactor.cleanup',
      'filename' => 'modSystemSetting/b25a786f16befcb60ef78466e9fccddd.vehicle',
      'namespace' => 'redactor',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a5d6a912edfee4a18c1a55311f1a9128',
      'native_key' => 'redactor.convertLinks',
      'filename' => 'modSystemSetting/aa5c1a56ba4c154604fc1cd84960bca9.vehicle',
      'namespace' => 'redactor',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '31356877be78f699ade7b88f60dd6952',
      'native_key' => 'redactor.tabindex',
      'filename' => 'modSystemSetting/12784c53c84d2b1486f1a4bb009de047.vehicle',
      'namespace' => 'redactor',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '812552e0600e59fd6f0dcbd015b39ff2',
      'native_key' => 'redactor.minHeight',
      'filename' => 'modSystemSetting/4053b8b89524838654d4d541800bf3de.vehicle',
      'namespace' => 'redactor',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '46a25dcd7ce4b3332e09d4bc67c2e2b9',
      'native_key' => 'redactor.colors',
      'filename' => 'modSystemSetting/b9dd7c1c93e843525d97a7e6ff344aab.vehicle',
      'namespace' => 'redactor',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '33f0c472b4f07da1b575cc654e141eaf',
      'native_key' => 'redactor.wym',
      'filename' => 'modSystemSetting/0c0ece015225ecf18e1045858dab3e81.vehicle',
      'namespace' => 'redactor',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '00a7f636e72200d8797d126559e68b25',
      'native_key' => 'redactor.linkProtocol',
      'filename' => 'modSystemSetting/75051dff1dd8a1b583c8a7dded78e0da.vehicle',
      'namespace' => 'redactor',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0a98598232bb1b69dcd3ab289e6b01a6',
      'native_key' => 'redactor.placeholder',
      'filename' => 'modSystemSetting/53c50f680b8d2ca68dbd321035b93a8f.vehicle',
      'namespace' => 'redactor',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '43b29955c917abbd73dab5e8366dabb4',
      'native_key' => 'redactor.linebreaks',
      'filename' => 'modSystemSetting/01bde811316217b8a38a99615079922a.vehicle',
      'namespace' => 'redactor',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5e9743a41b47d2aa348e389b1229e972',
      'native_key' => 'redactor.allowedTags',
      'filename' => 'modSystemSetting/a4818b992c6d0a9948e8c12c77e4439f.vehicle',
      'namespace' => 'redactor',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd2841f379485e7019a053de82e5fa00b',
      'native_key' => 'redactor.deniedTags',
      'filename' => 'modSystemSetting/546d9e24d149bb6a6dc5faac8afd8884.vehicle',
      'namespace' => 'redactor',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5747974260fd59f968f25e871ad210e5',
      'native_key' => 'redactor.linkEmail',
      'filename' => 'modSystemSetting/71a4c7c389c0afb0ee3d2a6182c7f48b.vehicle',
      'namespace' => 'redactor',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9a3bc2f9dc15a0110b44ea6a0126496b',
      'native_key' => 'redactor.linkAnchor',
      'filename' => 'modSystemSetting/7aa4c6d20bf1eb938f684050c6714876.vehicle',
      'namespace' => 'redactor',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b279e0f148934a831a7f80becb032ced',
      'native_key' => 'redactor.pastePlainText',
      'filename' => 'modSystemSetting/66133d27db3bb6bc7a2ec2e32b4592ab.vehicle',
      'namespace' => 'redactor',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9141c7828af5de94de8b39264b692735',
      'native_key' => 'redactor.paragraphize',
      'filename' => 'modSystemSetting/242fb47bd7d2bbd28c8132dd238165a1.vehicle',
      'namespace' => 'redactor',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4d0eb5b5e3312f48c5454f93ff3b1626',
      'native_key' => 'redactor.removeComments',
      'filename' => 'modSystemSetting/e9d14f0a0241eb636dd554ea35f9267f.vehicle',
      'namespace' => 'redactor',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '04cd32064eab4762cc234c8db2cdaa1f',
      'native_key' => 'redactor.visual',
      'filename' => 'modSystemSetting/124ff3371bb5e865623ace7e69202081.vehicle',
      'namespace' => 'redactor',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9c6ca227a974bc301e6532110ce1f85c',
      'native_key' => 'redactor.marginFloatLeft',
      'filename' => 'modSystemSetting/db359f02f95cbc3374f985a715488e7d.vehicle',
      'namespace' => 'redactor',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6e5ad1dfc4f5133802861cc8e812e11c',
      'native_key' => 'redactor.marginFloatRight',
      'filename' => 'modSystemSetting/6f7a73d09f653cd04c35093e5f95c02f.vehicle',
      'namespace' => 'redactor',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '384ec816f9821f6c4c58ea57d9477236',
      'native_key' => 'redactor.mediasource',
      'filename' => 'modSystemSetting/916c64073aa94a6b7fb53cdfb18af53a.vehicle',
      'namespace' => 'redactor',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '183f333b203f110c0e61ea75664028ef',
      'native_key' => 'redactor.file_mediasource',
      'filename' => 'modSystemSetting/eef9a1c387c02d5bd50e071a31c9508f.vehicle',
      'namespace' => 'redactor',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6a9819fc5ef1336d67fc2e6a4eb9ee7a',
      'native_key' => 'redactor.image_upload_path',
      'filename' => 'modSystemSetting/35f7c0d87dfb277f8b46693692cfba72.vehicle',
      'namespace' => 'redactor',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e1e48450f10b7d6808b1b16393cb8f76',
      'native_key' => 'redactor.image_browse_path',
      'filename' => 'modSystemSetting/2bc4dda1b56369a6160a25482dae01ef.vehicle',
      'namespace' => 'redactor',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8a9553457b8b7e6b8adfd8fd67444064',
      'native_key' => 'redactor.file_upload_path',
      'filename' => 'modSystemSetting/3d3427c2f9f50a0b6f20a7026317040c.vehicle',
      'namespace' => 'redactor',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '465bb4fa5b97b1718ac8014b68c3a27f',
      'native_key' => 'redactor.file_browse_path',
      'filename' => 'modSystemSetting/2663b3a60043e1ede40cba66a1fec820.vehicle',
      'namespace' => 'redactor',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6e5d58b60d8b6edbc9a2544a43685552',
      'native_key' => 'redactor.browse_files',
      'filename' => 'modSystemSetting/1df1954ccb64313cbf36480b7aa62c9b.vehicle',
      'namespace' => 'redactor',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6b0b88f3c950b39eeebc5e814def48b0',
      'native_key' => 'redactor.date_images',
      'filename' => 'modSystemSetting/01ed665d14b75df76f0494fe39f9e353.vehicle',
      'namespace' => 'redactor',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8a58f5c18d67a3de4cdc8b5e56d146f5',
      'native_key' => 'redactor.date_files',
      'filename' => 'modSystemSetting/9eeb8cadf587e8e9d59f10dcdf3336ed.vehicle',
      'namespace' => 'redactor',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '934bab552256c304b9ea8051f4876806',
      'native_key' => 'redactor.typeahead.include_introtext',
      'filename' => 'modSystemSetting/8efbad1d375d0e3a8bb7e207d0a78c6c.vehicle',
      'namespace' => 'redactor',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd49de4f8b367ac8b5cd062a764cc4b00',
      'native_key' => 'redactor.prefetch_ttl',
      'filename' => 'modSystemSetting/417e57189c2f9a232e8761755ad768ef.vehicle',
      'namespace' => 'redactor',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cf8fc468670dea66da6a376f1ca9fbb4',
      'native_key' => 'redactor.linkResource',
      'filename' => 'modSystemSetting/79d621769125be50465b1b2e3bf8e6b3.vehicle',
      'namespace' => 'redactor',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '655485f559fbccff0e830b1a2fbde43f',
      'native_key' => 'redactor.cleanFileNames',
      'filename' => 'modSystemSetting/0f1cba9da5c50be5d415aaac49c964c0.vehicle',
      'namespace' => 'redactor',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '95001d2bb1161a515a95002df0a885fa',
      'native_key' => 'redactor.dynamicThumbs',
      'filename' => 'modSystemSetting/9002f7ff42be6e5699b887df839cd684.vehicle',
      'namespace' => 'redactor',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5986aff330185a62d49224bffa1d3f57',
      'native_key' => 'redactor.clipsJson',
      'filename' => 'modSystemSetting/c72d38f2ca788aa31ae4df72a110545a.vehicle',
      'namespace' => 'redactor',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '019716f9df55bad72a3f7a43f4b0aafc',
      'native_key' => 'redactor.additionalPlugins',
      'filename' => 'modSystemSetting/52f2674bdbb40a7d982e94648ee12097.vehicle',
      'namespace' => 'redactor',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a28fbe07631a4364520cf6501ba8052b',
      'native_key' => 'redactor.dragUpload',
      'filename' => 'modSystemSetting/bb6f01c82e96149ed10d4ef9d873ae27.vehicle',
      'namespace' => 'redactor',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bd5257f24595e858b45f1cf896e089bc',
      'native_key' => 'redactor.convertImageLinks',
      'filename' => 'modSystemSetting/3bd1ab2a1521cf6809089c993857c58d.vehicle',
      'namespace' => 'redactor',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '347f4e4dbb2c13f9a9ee740258d7c7bb',
      'native_key' => 'redactor.convertVideoLinks',
      'filename' => 'modSystemSetting/399121d9430b520fd9f872130f66e4f3.vehicle',
      'namespace' => 'redactor',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'edc83ebcd2603ecda4273b93d84edabb',
      'native_key' => 'redactor.tabAsSpaces',
      'filename' => 'modSystemSetting/27efd46ebe79438b5c8bb547a37a0d9e.vehicle',
      'namespace' => 'redactor',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '46ebf20f8844b733f082abb9f126dfa4',
      'native_key' => 'redactor.removeEmptyTags',
      'filename' => 'modSystemSetting/edddf49d6264ae88393ff0a22b4560a6.vehicle',
      'namespace' => 'redactor',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9eae77e802b67b724cc282935eb9a9b7',
      'native_key' => 'redactor.sanitizePattern',
      'filename' => 'modSystemSetting/1f10b5c9f8f5c49cc9849a6068cceee5.vehicle',
      'namespace' => 'redactor',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6a7b9f6becba7af120331f6ee4862f27',
      'native_key' => 'redactor.sanitizeReplace',
      'filename' => 'modSystemSetting/d70d94cbd944f627894a2e723a4a0d4b.vehicle',
      'namespace' => 'redactor',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bfe9d959e4902613dd8b1f9c6d316430',
      'native_key' => 'redactor.linkSize',
      'filename' => 'modSystemSetting/310e478a0c20315a9c6e40cd570a44d6.vehicle',
      'namespace' => 'redactor',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ed9a607cdde81398fddf1c4e741ad62c',
      'native_key' => 'redactor.advAttrib',
      'filename' => 'modSystemSetting/92a0190b5d464acc3d779d6a0715fc46.vehicle',
      'namespace' => 'redactor',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd30e1dfb62ce156eb47d658e37cbfc20',
      'native_key' => 'redactor.linkNofollow',
      'filename' => 'modSystemSetting/2538b930c7f9404a6293cf0fcfa41afc.vehicle',
      'namespace' => 'redactor',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'be02f6a999c9d7dc88ecd88eae9c77be',
      'native_key' => 'redactor.typewriter',
      'filename' => 'modSystemSetting/cc3e83b4e3812d10d7655f77d2e1b968.vehicle',
      'namespace' => 'redactor',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '632655e5d4929866f2c03829285b901a',
      'native_key' => 'redactor.buttonsHideOnMobile',
      'filename' => 'modSystemSetting/261ee049a41783a393449e8749409d43.vehicle',
      'namespace' => 'redactor',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fe3c906d2e58a084221c75072bad4a83',
      'native_key' => 'redactor.toolbarOverflow',
      'filename' => 'modSystemSetting/78d89329d0d3888a8fc0e40f2a0c28e6.vehicle',
      'namespace' => 'redactor',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ee61bfa44c136227cb30ca47364266f2',
      'native_key' => 'redactor.imageTabLink',
      'filename' => 'modSystemSetting/5d529d09869d1728fdd2540fe3f5f628.vehicle',
      'namespace' => 'redactor',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b67a190a2fa6a0c09bab51d6b531e75a',
      'native_key' => 'redactor.cleanSpaces',
      'filename' => 'modSystemSetting/105fa172fec79f30ab45961dc06d4c54.vehicle',
      'namespace' => 'redactor',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6426a4384067f79c16ff89a07b86bd7d',
      'native_key' => 'redactor.predefinedLinks',
      'filename' => 'modSystemSetting/64ec4d9c5dee5a7d53fefac63c153a9f.vehicle',
      'namespace' => 'redactor',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4452448d104cc0481967526a3f6b414c',
      'native_key' => 'redactor.shortcutsAdd',
      'filename' => 'modSystemSetting/db7fcdc5973f42406ac207943be7151b.vehicle',
      'namespace' => 'redactor',
    ),
    65 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '402c5a56b5e6677c3c44bb2755c657df',
      'native_key' => 'redactor.commemorateRebecca',
      'filename' => 'modSystemSetting/20fcea331f6d52688ece986be0f1c4c3.vehicle',
      'namespace' => 'redactor',
    ),
    66 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '246ae5e67395e66792c4372b5622506e',
      'native_key' => 'redactor.toolbarFixed',
      'filename' => 'modSystemSetting/b6afd02fb43e7f88854ca83ff0224ae2.vehicle',
      'namespace' => 'redactor',
    ),
    67 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3ff84fb0937592cc27637ed7b449b22a',
      'native_key' => 'redactor.focus',
      'filename' => 'modSystemSetting/cb8148bdaa59d630a01c4120782b393b.vehicle',
      'namespace' => 'redactor',
    ),
    68 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bb1ee9e65b406fe3b783d0fa72a1ff27',
      'native_key' => 'redactor.focusEnd',
      'filename' => 'modSystemSetting/30c9498c82ecb73ea3ef919c8e45c5b0.vehicle',
      'namespace' => 'redactor',
    ),
    69 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '95e4969c580d5c6dc120d21a3da70d3f',
      'native_key' => 'redactor.scrollTarget',
      'filename' => 'modSystemSetting/30288f1372e328fc6f5d71c8ecab69aa.vehicle',
      'namespace' => 'redactor',
    ),
    70 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9eec9316cb8d71c88ed319b9dd0baf1d',
      'native_key' => 'redactor.enterKey',
      'filename' => 'modSystemSetting/9d474d0e51f14b84333ce7465c3978dc.vehicle',
      'namespace' => 'redactor',
    ),
    71 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '42ba98034b19906392c62ab892455f64',
      'native_key' => 'redactor.cleanStyleOnEnter',
      'filename' => 'modSystemSetting/41a1e377934e32cb7f7310cc7f525bc7.vehicle',
      'namespace' => 'redactor',
    ),
    72 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b1f0391893ba8a5d5f6a543eceef35d2',
      'native_key' => 'redactor.linkTooltip',
      'filename' => 'modSystemSetting/8a51ab315b5201f677b054377aa60323.vehicle',
      'namespace' => 'redactor',
    ),
    73 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0e137e9ec91b7058d891a66251208dd5',
      'native_key' => 'redactor.imageEditable',
      'filename' => 'modSystemSetting/f8e5b848c8b39e703276d50302c87f4a.vehicle',
      'namespace' => 'redactor',
    ),
    74 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2aa66bf7148de5f56dcd84e0019971aa',
      'native_key' => 'redactor.imageResizable',
      'filename' => 'modSystemSetting/0c6aa390283114b5c1425c5aba594ee3.vehicle',
      'namespace' => 'redactor',
    ),
    75 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a5f7ecf3b3fd29ebd76b9c3f8f430e9c',
      'native_key' => 'redactor.imageLink',
      'filename' => 'modSystemSetting/5c8927d415e55e967b253f39cbf13bf4.vehicle',
      'namespace' => 'redactor',
    ),
    76 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e6cbbfcb5e1e21570712e4e63ae47e11',
      'native_key' => 'redactor.imagePosition',
      'filename' => 'modSystemSetting/9297a0ac30eaf96fe12c0ce0d02ee33e.vehicle',
      'namespace' => 'redactor',
    ),
    77 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '59cd19a2113a4af40a9e3b2188d623d1',
      'native_key' => 'redactor.buttonsHide',
      'filename' => 'modSystemSetting/ddc4a0d29a611fdba9daf5e3f7c8f148.vehicle',
      'namespace' => 'redactor',
    ),
    78 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '26bf73b9da5d4e7e2c1be571047d0f18',
      'native_key' => 'redactor.formattingAdd',
      'filename' => 'modSystemSetting/e7a06fd0bac9ef967cecd691ddd72492.vehicle',
      'namespace' => 'redactor',
    ),
    79 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a1314c09e684f7543f791a28d5cb4f7e',
      'native_key' => 'redactor.tabifier',
      'filename' => 'modSystemSetting/e8ad3456fbaeac825985b404c37604b8.vehicle',
      'namespace' => 'redactor',
    ),
    80 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8ed5f91f0a7de3c00763f72d676e650d',
      'native_key' => 'redactor.replaceTags',
      'filename' => 'modSystemSetting/1155f346491cbcac4771753d74dad39a.vehicle',
      'namespace' => 'redactor',
    ),
    81 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '31c149c70f2371ed63ea49e95d3be645',
      'native_key' => 'redactor.replaceStyles',
      'filename' => 'modSystemSetting/ed1cf787e3d75234adc7795a3f6606c2.vehicle',
      'namespace' => 'redactor',
    ),
    82 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4546053d23a2a71e7d632ad2cca1c239',
      'native_key' => 'redactor.removeDataAttr',
      'filename' => 'modSystemSetting/cb17a854d576d850c8acad76122169b7.vehicle',
      'namespace' => 'redactor',
    ),
    83 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '501ca850446c057d9ee7faa7ce68c0d4',
      'native_key' => 'redactor.removeAttr',
      'filename' => 'modSystemSetting/2bf7ea653a2937ceef121962cd128002.vehicle',
      'namespace' => 'redactor',
    ),
    84 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a3e8c889262148bbda033ec171aca9e9',
      'native_key' => 'redactor.allowedAttr',
      'filename' => 'modSystemSetting/477e59a7fefc9a6ed896ec006da10eaa.vehicle',
      'namespace' => 'redactor',
    ),
    85 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8763154603a7cedf395025d42c0f793b',
      'native_key' => 'redactor.dragImageUpload',
      'filename' => 'modSystemSetting/6157e496b09dd28f3878bfcc260f428b.vehicle',
      'namespace' => 'redactor',
    ),
    86 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '05c4ebf7b4d082224dd6b634f55e95b3',
      'native_key' => 'redactor.dragFileUpload',
      'filename' => 'modSystemSetting/37ecb68b3d6017b609a5fb5c1eff71cc.vehicle',
      'namespace' => 'redactor',
    ),
    87 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4abdc3a46f2a98b3fc8e152f99998e28',
      'native_key' => 'redactor.replaceDivs',
      'filename' => 'modSystemSetting/41490b7f0a366166d51daea85e02d311.vehicle',
      'namespace' => 'redactor',
    ),
    88 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4f6aa74e85b2072ad8a3c43a85701ba8',
      'native_key' => 'redactor.preSpaces',
      'filename' => 'modSystemSetting/ac96e8f803258e9c6d4d2226450d48f4.vehicle',
      'namespace' => 'redactor',
    ),
    89 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bff28162bfbda13a65ce0df0e19cb056',
      'native_key' => 'redactor.parse_parent_path',
      'filename' => 'modSystemSetting/d4cf30853f1b11cfff53b9e18b0195ba.vehicle',
      'namespace' => 'redactor',
    ),
    90 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7435ec3e9a617f2da1cc050c55d9d6e0',
      'native_key' => 'redactor.increment_file_names',
      'filename' => 'modSystemSetting/cfafd35661ff8656ca0b975071b51efc.vehicle',
      'namespace' => 'redactor',
    ),
    91 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0324157bc874a416d65ebb697f7affbf',
      'native_key' => 'redactor.parse_parent_path_height',
      'filename' => 'modSystemSetting/27ec913a516a0e47da83a790ca9f5669.vehicle',
      'namespace' => 'redactor',
    ),
    92 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b24a62dd757c71b60d8fc4f0e2b2c059',
      'native_key' => 'redactor.baseurls_mode',
      'filename' => 'modSystemSetting/d8f57dba8b90f03e9c8744fe6c168236.vehicle',
      'namespace' => 'redactor',
    ),
    93 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7f825eb55830a0d74f2cfbe4a8306992',
      'native_key' => 'redactor.showDimensionsOnResize',
      'filename' => 'modSystemSetting/2060d80bb06b941d3ff5a061085b713f.vehicle',
      'namespace' => 'redactor',
    ),
    94 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '53267b8bcea45f0d209d25b9ad3ac134',
      'native_key' => 'redactor.plugin_counter',
      'filename' => 'modSystemSetting/20180ae22b70bd8a91f7b3aa3220cd63.vehicle',
      'namespace' => 'redactor',
    ),
    95 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f34adf5db018a429368c2b3c96988f13',
      'native_key' => 'redactor.plugin_fontcolor',
      'filename' => 'modSystemSetting/3ad7f6996253b46ced6f871fd66b4a3c.vehicle',
      'namespace' => 'redactor',
    ),
    96 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f009a6f92260fbc4e6be02501a7476e8',
      'native_key' => 'redactor.plugin_fontfamily',
      'filename' => 'modSystemSetting/b4e98532bb726f218b577e4277d59d39.vehicle',
      'namespace' => 'redactor',
    ),
    97 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5871fc9cbd06f6bdeb16eb6d6faf150a',
      'native_key' => 'redactor.plugin_fontsize',
      'filename' => 'modSystemSetting/7ffb6c31897c06e0ba44237ce43d28e3.vehicle',
      'namespace' => 'redactor',
    ),
    98 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '28c16b419d3b956a04ff909715087e03',
      'native_key' => 'redactor.plugin_limiter',
      'filename' => 'modSystemSetting/dc3d9d53e85982f9cec50351906c4f57.vehicle',
      'namespace' => 'redactor',
    ),
    99 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '62189160f94586272fdcffbf78fac016',
      'native_key' => 'redactor.plugin_table',
      'filename' => 'modSystemSetting/562882d6ddf273b33e9de5a25beef847.vehicle',
      'namespace' => 'redactor',
    ),
    100 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '51e644ce7c297cdb6907f607c4d233d7',
      'native_key' => 'redactor.plugin_textdirection',
      'filename' => 'modSystemSetting/eefcfd150c1c6e76616601951703bc34.vehicle',
      'namespace' => 'redactor',
    ),
    101 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cb60d6c0a493a01ff3648e1e4cfe3587',
      'native_key' => 'redactor.plugin_video',
      'filename' => 'modSystemSetting/b40a6d6f8a99afcb27070f4a0272f8f3.vehicle',
      'namespace' => 'redactor',
    ),
    102 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '413edbbe471029e3129e0703b4e47779',
      'native_key' => 'redactor.plugin_replacer',
      'filename' => 'modSystemSetting/f2ad9a01147eeebafacedb2100fc9da7.vehicle',
      'namespace' => 'redactor',
    ),
    103 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '01326d5f54f34238b8e5bfa23956bba0',
      'native_key' => 'redactor.plugin_syntax',
      'filename' => 'modSystemSetting/d3a73f79823dab5c225fa8fffc6fdb88.vehicle',
      'namespace' => 'redactor',
    ),
    104 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fe581a3ab54c12dd7a50b5a43f9bf464',
      'native_key' => 'redactor.plugin_speek',
      'filename' => 'modSystemSetting/54f27a96e525abf0dfef4fe79a159cae.vehicle',
      'namespace' => 'redactor',
    ),
    105 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd5957d78a973164a8ace56511b6ad3cf',
      'native_key' => 'redactor.plugin_contrast',
      'filename' => 'modSystemSetting/b59f7de9b7bee4ba41b8951362eb4e42.vehicle',
      'namespace' => 'redactor',
    ),
    106 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '114b569eeae417c0ae1fd2d0ae617975',
      'native_key' => 'redactor.plugin_eureka',
      'filename' => 'modSystemSetting/53a7ff6acc818588fca61eb8acad0dd2.vehicle',
      'namespace' => 'redactor',
    ),
    107 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3e1dacacbf01c2a6d73cde142e6d2e4d',
      'native_key' => 'redactor.plugin_eureka_shivie9',
      'filename' => 'modSystemSetting/8382434080a6e0dbea9f852ba90c550f.vehicle',
      'namespace' => 'redactor',
    ),
    108 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9dd6134350373be00de5312c9284312f',
      'native_key' => 'redactor.eurekaUpload',
      'filename' => 'modSystemSetting/7382d1bd5ab30324e12a8ef48d833f6d.vehicle',
      'namespace' => 'redactor',
    ),
    109 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd7ee15a073f18db601d0d189fce53ba7',
      'native_key' => 'redactor.initial_directory_depth',
      'filename' => 'modSystemSetting/4ce00df7ec327c8244c4b72761be33e3.vehicle',
      'namespace' => 'redactor',
    ),
    110 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '21fe9d262bdc2d9415558c4fc9b0b928',
      'native_key' => 'redactor.plugin_zoom',
      'filename' => 'modSystemSetting/daba4a563c6f41602c29e3e51a71d866.vehicle',
      'namespace' => 'redactor',
    ),
    111 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4d6aef181da723f463b7e5637ec4390d',
      'native_key' => 'redactor.plugin_download',
      'filename' => 'modSystemSetting/3c74a01b2e28913f1642e9939e098df8.vehicle',
      'namespace' => 'redactor',
    ),
    112 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '76cd1c9eff62e6eb8d55fbcd731be1d1',
      'native_key' => 'redactor.plugin_imagepx',
      'filename' => 'modSystemSetting/77c54eef388b52a6c9b471d164f905fb.vehicle',
      'namespace' => 'redactor',
    ),
    113 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2531b4e18831849e2b5dfb6325f34c91',
      'native_key' => 'redactor.plugin_imageurl',
      'filename' => 'modSystemSetting/7dbdc048dfe90b4d0406523a75eab40e.vehicle',
      'namespace' => 'redactor',
    ),
    114 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1e1d60e7add2342fcc20a020457fd6cd',
      'native_key' => 'redactor.plugin_breadcrumb',
      'filename' => 'modSystemSetting/4ffb27f4c2db5cb3af8551ba35ce8a98.vehicle',
      'namespace' => 'redactor',
    ),
    115 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dbdb0dfd4af5b7345f7eeea91282a0bc',
      'native_key' => 'redactor.plugin_norphan',
      'filename' => 'modSystemSetting/3098b0216afa08149cc2532f3d628b1a.vehicle',
      'namespace' => 'redactor',
    ),
    116 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c06d7166d5fda69f10c1ce83364925a6',
      'native_key' => 'redactor.plugin_baseurls',
      'filename' => 'modSystemSetting/79bdb1676e2728cca55a36c0be9c50c7.vehicle',
      'namespace' => 'redactor',
    ),
    117 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8a83489372dd35931910f9b9bb50b554',
      'native_key' => 'redactor.textexpander',
      'filename' => 'modSystemSetting/3ac26c81f222f16abe7d50f53ef8df07.vehicle',
      'namespace' => 'redactor',
    ),
    118 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7fc8926cb0085769b7261af6ba20f1bf',
      'native_key' => 'redactor.speechPitch',
      'filename' => 'modSystemSetting/94027830042a0ff33f1428197117b2dc.vehicle',
      'namespace' => 'redactor',
    ),
    119 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0a2b8da20e8c0116f9e811653f58e8eb',
      'native_key' => 'redactor.speechRate',
      'filename' => 'modSystemSetting/7c07745f2bc24beeb5e2c3797aae9bb1.vehicle',
      'namespace' => 'redactor',
    ),
    120 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '74c8bb49470b2ce383d8c25dc270cad3',
      'native_key' => 'redactor.speechVolume',
      'filename' => 'modSystemSetting/53c09671254f43cd8254f9ed5ac3dc18.vehicle',
      'namespace' => 'redactor',
    ),
    121 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8bea85added13631214c38016383ebf7',
      'native_key' => 'redactor.speechVoice',
      'filename' => 'modSystemSetting/921f52bee96e9bdf3c1bc887a64c1d38.vehicle',
      'namespace' => 'redactor',
    ),
    122 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4f1ecd4e0496a767d1b4ec938a1c7152',
      'native_key' => 'redactor.counterWPM',
      'filename' => 'modSystemSetting/0c92ad4cccec9e2e413c8d6d120a8a6b.vehicle',
      'namespace' => 'redactor',
    ),
    123 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'de7d73bca62cf8760bc4eba47af2d601',
      'native_key' => 'redactor.codemirror',
      'filename' => 'modSystemSetting/c44136eb3f22d484378da1e4a96b39d2.vehicle',
      'namespace' => 'redactor',
    ),
    124 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'df11def90f3f3811ef069103e8e0dea3',
      'native_key' => 'redactor.plugin_uploadcare',
      'filename' => 'modSystemSetting/5eb1c780c79baa769c1a60748d78a54b.vehicle',
      'namespace' => 'redactor',
    ),
    125 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9f8958b83cfe2a2ffbbc75cb8ec006d7',
      'native_key' => 'redactor.uploadcare_pub_key',
      'filename' => 'modSystemSetting/0cffa7b36780030ce44ee390cf2554bd.vehicle',
      'namespace' => 'redactor',
    ),
    126 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '57ce41135e1d4c379828e633a15e67b5',
      'native_key' => 'redactor.uploadcare_locale',
      'filename' => 'modSystemSetting/07ba34d28ab537335425f7cccb56c413.vehicle',
      'namespace' => 'redactor',
    ),
    127 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f30d01c7a8473eeda906ead53584e57c',
      'native_key' => 'redactor.uploadcare_crop',
      'filename' => 'modSystemSetting/a2e14bbc6fdafaafb637e45e1b562e12.vehicle',
      'namespace' => 'redactor',
    ),
    128 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bebb18bd8522483a0f5a87fac37efde9',
      'native_key' => 'redactor.uploadcare_tabs',
      'filename' => 'modSystemSetting/1c9de975ee15c5024c9f54641c5580be.vehicle',
      'namespace' => 'redactor',
    ),
    129 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e256b8b5c83537639237100793697a56',
      'native_key' => 'redactor.loadIntrotext',
      'filename' => 'modSystemSetting/2dde32457091f14b07db0245f4079d44.vehicle',
      'namespace' => 'redactor',
    ),
    130 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '43d23dee5183b40d9be78f237020940b',
      'native_key' => 'redactor.limiter',
      'filename' => 'modSystemSetting/39cab893cb4191d591b73500fa4dcf2b.vehicle',
      'namespace' => 'redactor',
    ),
    131 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => 'b425fa6b09a8586d9842dd100d8c33b6',
      'native_key' => 'b425fa6b09a8586d9842dd100d8c33b6',
      'filename' => 'xPDOScriptVehicle/f25d284ac1fde30a6c0080e639bb045c.vehicle',
      'namespace' => 'redactor',
    ),
  ),
);