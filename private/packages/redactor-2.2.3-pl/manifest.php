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
    'changelog' => '++ Redactor 2.2.2-pl
++ Released on 2017-05-02
+++++++++++++++++++++++++
- Fix Bold/italic/underline etc don\'t work in Chrome [#456]
- Fix buttonsHide settings, set these as comma separated lists

++ Redactor 2.2.1-pl
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
      'guid' => '5a201193c7b7e83d743aa19eb935859a',
      'native_key' => 'redactor',
      'filename' => 'modNamespace/bc1d7c6883dc0deafa2ccd2d92a4bcd4.vehicle',
      'namespace' => 'redactor',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '26d755ad01aa1785fff78c4d5d2c1d79',
      'native_key' => '26d755ad01aa1785fff78c4d5d2c1d79',
      'filename' => 'xPDOFileVehicle/7abadbbe9f450cdf3930b4cb500b39dd.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'modmoreVehicle',
      'class' => 'modPlugin',
      'guid' => '17cd8aeb3c3a82c2332e6a7fde1177af',
      'native_key' => NULL,
      'filename' => 'modPlugin/0a7d5689536aa00f3e3722460a054c1f.vehicle',
      'namespace' => 'redactor',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '608aa4dee053b36426e53436a418dc57',
      'native_key' => 'redactor.lang',
      'filename' => 'modSystemSetting/495092ae4a2f7cf64e0fcfc67b8a4013.vehicle',
      'namespace' => 'redactor',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4e2e0300d1bfb5cfe14654580e242848',
      'native_key' => 'redactor.direction',
      'filename' => 'modSystemSetting/988efadb4048194b34fca4da93bc9d16.vehicle',
      'namespace' => 'redactor',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f41f7bfe57375c053a370e40be9faf0c',
      'native_key' => 'redactor.buttons',
      'filename' => 'modSystemSetting/be87b77fe586957d722f6045f9980a21.vehicle',
      'namespace' => 'redactor',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5aa644dea17ad4a8166c1f11b43385b1',
      'native_key' => 'redactor.activeButtons',
      'filename' => 'modSystemSetting/1bdef7e40c8dd0a95f35cd2e505d05f1.vehicle',
      'namespace' => 'redactor',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5bc21d75ad8e4e5c8fb0010b46bccd2f',
      'native_key' => 'redactor.activeButtonsStates',
      'filename' => 'modSystemSetting/a4a88a89a8840cb3c2bcb7976575b36e.vehicle',
      'namespace' => 'redactor',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cf168e2f9cc373f8520fcca7b84dfefb',
      'native_key' => 'redactor.formattingTags',
      'filename' => 'modSystemSetting/09e6dc181c96e0098f2b9f73303198c4.vehicle',
      'namespace' => 'redactor',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f0bb6ea56de772cec432dcf0e10dbdb8',
      'native_key' => 'redactor.buttonSource',
      'filename' => 'modSystemSetting/2ab76bfb437b40d57af16621cc509b34.vehicle',
      'namespace' => 'redactor',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3f927b554c1559c32a5a821e677352dd',
      'native_key' => 'redactor.buttonFullScreen',
      'filename' => 'modSystemSetting/6a132b0fd732f64cd6de8e54755a0aa7.vehicle',
      'namespace' => 'redactor',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '21f90333f934ceb1328bf0b9345b92b6',
      'native_key' => 'redactor.css',
      'filename' => 'modSystemSetting/4867457c1c955ff57ae0d0fdf16a98c0.vehicle',
      'namespace' => 'redactor',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bb9025fe5f7b60a3a3a82d98168404f3',
      'native_key' => 'redactor.shortcuts',
      'filename' => 'modSystemSetting/7bc08f47189ad79d3d6d1143b31506f4.vehicle',
      'namespace' => 'redactor',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'de93f5e1caac7bf0a8d6f270f37b6fe4',
      'native_key' => 'redactor.cleanup',
      'filename' => 'modSystemSetting/978989c9169613cb8b04828ad62462a1.vehicle',
      'namespace' => 'redactor',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '331696597e87dbbbf05dcfb86581b79c',
      'native_key' => 'redactor.convertLinks',
      'filename' => 'modSystemSetting/9ae8d3de1ad5d42f7fe9fffa43ac18ca.vehicle',
      'namespace' => 'redactor',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8086ffc868294a634ce15de526e334b6',
      'native_key' => 'redactor.tabindex',
      'filename' => 'modSystemSetting/3dc3641452082a9dd1d14176b3f8ac90.vehicle',
      'namespace' => 'redactor',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a6b57061367afe26592e342fed230954',
      'native_key' => 'redactor.minHeight',
      'filename' => 'modSystemSetting/fce9bba57a9ea643a655029653aa8b75.vehicle',
      'namespace' => 'redactor',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ccdf1a8c5e444ecece1c600c39b04ea0',
      'native_key' => 'redactor.colors',
      'filename' => 'modSystemSetting/dfe7e96993a40ae368f7415fb6b60758.vehicle',
      'namespace' => 'redactor',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3a8ca465e039a1649dc04d441b72f9f1',
      'native_key' => 'redactor.wym',
      'filename' => 'modSystemSetting/53d1364f417d53a6cc6e695abb98c74f.vehicle',
      'namespace' => 'redactor',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b3a05092312ebe722044b2cccfe41816',
      'native_key' => 'redactor.linkProtocol',
      'filename' => 'modSystemSetting/8694298335fc7a723f47a8000e84bfb5.vehicle',
      'namespace' => 'redactor',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'beabcce2b445c8b63ef0cd560c549f29',
      'native_key' => 'redactor.placeholder',
      'filename' => 'modSystemSetting/5f90137b026cb47f770dbccac6438a66.vehicle',
      'namespace' => 'redactor',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1df3f9c09f618fae4c32dd641caa6936',
      'native_key' => 'redactor.linebreaks',
      'filename' => 'modSystemSetting/394ef5ba916c194c9f82e5994ba2eedb.vehicle',
      'namespace' => 'redactor',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '61a423f601b1b5f54a366943c137d0e7',
      'native_key' => 'redactor.allowedTags',
      'filename' => 'modSystemSetting/e0adf9478ad6259ded8641feaf10e510.vehicle',
      'namespace' => 'redactor',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ac98aa27403ce9504fdee879f15047a7',
      'native_key' => 'redactor.deniedTags',
      'filename' => 'modSystemSetting/739b188e0c90d0bd38942677a54ee475.vehicle',
      'namespace' => 'redactor',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd8d46783a651c6e65ee8942a95fb6156',
      'native_key' => 'redactor.linkEmail',
      'filename' => 'modSystemSetting/1805f5ceb9eb565cb0bee44aafc8097e.vehicle',
      'namespace' => 'redactor',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fea3737d9b647f64137097a0970ed934',
      'native_key' => 'redactor.linkAnchor',
      'filename' => 'modSystemSetting/3ccd8a09e017e58ec90d7f6d4b121c91.vehicle',
      'namespace' => 'redactor',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e9ca665eabd49982f63b40eba936822f',
      'native_key' => 'redactor.pastePlainText',
      'filename' => 'modSystemSetting/c660373004ceb06a62726ba8d5ee40f2.vehicle',
      'namespace' => 'redactor',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '490cfbee908333ee30d498ab94d3a950',
      'native_key' => 'redactor.paragraphize',
      'filename' => 'modSystemSetting/a909b4f7d5c9e388081a7b1009751de8.vehicle',
      'namespace' => 'redactor',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1570a3899d4ae8087a606daeafe79a16',
      'native_key' => 'redactor.removeComments',
      'filename' => 'modSystemSetting/e8dfb13ede451b4260e175324f935550.vehicle',
      'namespace' => 'redactor',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '844a46bd85b7df6d11bf98566e99bde2',
      'native_key' => 'redactor.visual',
      'filename' => 'modSystemSetting/a8639f8c884abed24102011e3e9c1227.vehicle',
      'namespace' => 'redactor',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd458fbcf2561290116cbec5e701b57f9',
      'native_key' => 'redactor.marginFloatLeft',
      'filename' => 'modSystemSetting/447a3f258d8451cd0a61a89e198f30df.vehicle',
      'namespace' => 'redactor',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e337ab126050ab121552810b3fd06d10',
      'native_key' => 'redactor.marginFloatRight',
      'filename' => 'modSystemSetting/4aa7fbc49393e0407dacbb9b9cdfe2db.vehicle',
      'namespace' => 'redactor',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6d464bf766f72dae09ec0417249fcbd5',
      'native_key' => 'redactor.mediasource',
      'filename' => 'modSystemSetting/4917b91015ff4b6cc1b2b7651fc8b819.vehicle',
      'namespace' => 'redactor',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '28bd2ff0e621f43d52635760110a7035',
      'native_key' => 'redactor.file_mediasource',
      'filename' => 'modSystemSetting/78718a8f738a23b9e7517a790b9e58f7.vehicle',
      'namespace' => 'redactor',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '358187c54e8608d0b777899e2f3c0cb7',
      'native_key' => 'redactor.image_upload_path',
      'filename' => 'modSystemSetting/0801da8da8b9af8a70926166541d211b.vehicle',
      'namespace' => 'redactor',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '10c16be75517f943d0390f2efe74981c',
      'native_key' => 'redactor.image_browse_path',
      'filename' => 'modSystemSetting/63669e853d61a6217cd2393c3fc6ce81.vehicle',
      'namespace' => 'redactor',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '32c52f12b583c4ec2899e3e64a9ea9b2',
      'native_key' => 'redactor.file_upload_path',
      'filename' => 'modSystemSetting/d6206e5541d28e23cc12a307613252ce.vehicle',
      'namespace' => 'redactor',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6a6db9b0ca95c1238fcad733d70d3e32',
      'native_key' => 'redactor.file_browse_path',
      'filename' => 'modSystemSetting/d016b716b0ac47faaae3b5b71076927d.vehicle',
      'namespace' => 'redactor',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0d915793a3d3187feb67a9a894876f44',
      'native_key' => 'redactor.browse_files',
      'filename' => 'modSystemSetting/5b1612b31654c0e28bb64b52d7cd07c3.vehicle',
      'namespace' => 'redactor',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9f10b0b703fad184878334a41a5025c5',
      'native_key' => 'redactor.date_images',
      'filename' => 'modSystemSetting/715dae0540592cce806697f2399d15d3.vehicle',
      'namespace' => 'redactor',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dda5c37cbf028d81a05db587b65294bd',
      'native_key' => 'redactor.date_files',
      'filename' => 'modSystemSetting/8b3213821b9990ea5cafceff46fa3894.vehicle',
      'namespace' => 'redactor',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '47ab439991bdbdc837e664c58f9bf503',
      'native_key' => 'redactor.typeahead.include_introtext',
      'filename' => 'modSystemSetting/823d67ab359a2c2f5019bbd2422ba180.vehicle',
      'namespace' => 'redactor',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4282a4e57bd16ab79c26936f120697fc',
      'native_key' => 'redactor.prefetch_ttl',
      'filename' => 'modSystemSetting/7c4620a0948de6b7405432d506ba5e0b.vehicle',
      'namespace' => 'redactor',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ed4d7a58382fcc30929d9c38b5b3d6ed',
      'native_key' => 'redactor.linkResource',
      'filename' => 'modSystemSetting/e0a3d11fa35f32cf4702b613e41dc108.vehicle',
      'namespace' => 'redactor',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '81926f762f6e6bc0e71adf24e197cd41',
      'native_key' => 'redactor.cleanFileNames',
      'filename' => 'modSystemSetting/3f718aeed422f7cfdf9ddd022cac6bf8.vehicle',
      'namespace' => 'redactor',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9b1b2fe25425bfd4c8c108b52ac1317a',
      'native_key' => 'redactor.dynamicThumbs',
      'filename' => 'modSystemSetting/afb4d53cafedff3d79188ce279db1eef.vehicle',
      'namespace' => 'redactor',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '79b5a224395a00ac3d58edb2d6f5f8e0',
      'native_key' => 'redactor.clipsJson',
      'filename' => 'modSystemSetting/37d83f685cf69de7baba7934e79159d2.vehicle',
      'namespace' => 'redactor',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ac3d6a2c77b818f4659b1890ff6ed07b',
      'native_key' => 'redactor.additionalPlugins',
      'filename' => 'modSystemSetting/2c1a6bda9bfa7f0f0fd36faf4eb0b620.vehicle',
      'namespace' => 'redactor',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b967789c990accdbac316240b582ac98',
      'native_key' => 'redactor.dragUpload',
      'filename' => 'modSystemSetting/38ddc7404f04464024d7a8f964c9fab8.vehicle',
      'namespace' => 'redactor',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '89aa36290c4cc53c44919f8b0da86eb4',
      'native_key' => 'redactor.convertImageLinks',
      'filename' => 'modSystemSetting/5d46b491077ad3de5fa5c69de95cf4b8.vehicle',
      'namespace' => 'redactor',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'aa92ad67053984a543dc872efc9df6ed',
      'native_key' => 'redactor.convertVideoLinks',
      'filename' => 'modSystemSetting/25ba57c4bddc94054d662f6fc95daa38.vehicle',
      'namespace' => 'redactor',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c2a4cafc893dee8dca20575e611a66d9',
      'native_key' => 'redactor.tabAsSpaces',
      'filename' => 'modSystemSetting/dbc302f4da249e983d4f757a8dd8f3f5.vehicle',
      'namespace' => 'redactor',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0ec052bbff20bd9a7a003d0fa2d7c817',
      'native_key' => 'redactor.removeEmptyTags',
      'filename' => 'modSystemSetting/528eee1ce6146863ca2fceac190dd08b.vehicle',
      'namespace' => 'redactor',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '02d4429c0295a837e8bbd90be467171d',
      'native_key' => 'redactor.sanitizePattern',
      'filename' => 'modSystemSetting/7bee64e91de00c948298dfac05396d46.vehicle',
      'namespace' => 'redactor',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '81d5ae68776c9c54e81ddee7b1e4aaae',
      'native_key' => 'redactor.sanitizeReplace',
      'filename' => 'modSystemSetting/4012b4957e0a6071b5f4772897236538.vehicle',
      'namespace' => 'redactor',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '69410645d18bcea0b324f740a2af199f',
      'native_key' => 'redactor.linkSize',
      'filename' => 'modSystemSetting/ecea08dbe4c2361ce7d721bb020d789c.vehicle',
      'namespace' => 'redactor',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a3bce9a58fdc85cf26c29251ea96e009',
      'native_key' => 'redactor.advAttrib',
      'filename' => 'modSystemSetting/f4ab9ca7aeb04c2c8301a5709c6eaf5c.vehicle',
      'namespace' => 'redactor',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2797efc0ab1cef03f354bbab0d91c9c6',
      'native_key' => 'redactor.linkNofollow',
      'filename' => 'modSystemSetting/c527379167c105330524a4502fca283d.vehicle',
      'namespace' => 'redactor',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '67f2ea9b8d61a1aa59a50c9bb5b5b03f',
      'native_key' => 'redactor.typewriter',
      'filename' => 'modSystemSetting/0100e5a97c5a9e6a4c841894354fd606.vehicle',
      'namespace' => 'redactor',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '655db3608b3f65b72b7c37bdb023b539',
      'native_key' => 'redactor.buttonsHideOnMobile',
      'filename' => 'modSystemSetting/9ed1a7ae8a5e6eeb89dde372c29c34df.vehicle',
      'namespace' => 'redactor',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '342f07e9022035570403404bfd279ae5',
      'native_key' => 'redactor.toolbarOverflow',
      'filename' => 'modSystemSetting/98c166add7aca3e3325ce8731f5e022d.vehicle',
      'namespace' => 'redactor',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4cbda6c993f569f39a7461fc577c3f7a',
      'native_key' => 'redactor.imageTabLink',
      'filename' => 'modSystemSetting/bd7ceba4326cbd3327c2fcd3e989892f.vehicle',
      'namespace' => 'redactor',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cc3d2dcca0ec4dacbeaa1cfd0b61ec65',
      'native_key' => 'redactor.cleanSpaces',
      'filename' => 'modSystemSetting/b5fbba3a1c0d3d857b9158b3c83c4e5a.vehicle',
      'namespace' => 'redactor',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ec31f78b81db3f4d87ce80e17980a94f',
      'native_key' => 'redactor.predefinedLinks',
      'filename' => 'modSystemSetting/e8cc982a82908cb5fe1c96b02c2b1489.vehicle',
      'namespace' => 'redactor',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '88077d2bfaa12113f1022950f50be801',
      'native_key' => 'redactor.shortcutsAdd',
      'filename' => 'modSystemSetting/f7619786fd9c019217708705bce72e4a.vehicle',
      'namespace' => 'redactor',
    ),
    65 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '528ec3541f0944f4896d5e7837d1ecd1',
      'native_key' => 'redactor.commemorateRebecca',
      'filename' => 'modSystemSetting/53050d460f9b1b4bcfa17d7bea4fe1b6.vehicle',
      'namespace' => 'redactor',
    ),
    66 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3f3cc1c6133c45c7c64f45b2d3fce486',
      'native_key' => 'redactor.toolbarFixed',
      'filename' => 'modSystemSetting/8a7d0a895c5eb2a0963c24194a07315b.vehicle',
      'namespace' => 'redactor',
    ),
    67 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fc67b92c258bc1b1d14cebf4c4e39a4b',
      'native_key' => 'redactor.focus',
      'filename' => 'modSystemSetting/4e10fa05a45de8288496143446b62ba0.vehicle',
      'namespace' => 'redactor',
    ),
    68 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4ccf68531bf2dcbd8a4d8d20671cb1cb',
      'native_key' => 'redactor.focusEnd',
      'filename' => 'modSystemSetting/adfde66df751b053bba84f8a1176db60.vehicle',
      'namespace' => 'redactor',
    ),
    69 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c4fb38e979bab28a359af28f47f227b3',
      'native_key' => 'redactor.scrollTarget',
      'filename' => 'modSystemSetting/51da741df8e3096efd7e4d58a034c4b3.vehicle',
      'namespace' => 'redactor',
    ),
    70 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '431ca23aed6c5968882f8563dae0dd94',
      'native_key' => 'redactor.enterKey',
      'filename' => 'modSystemSetting/853f2ea6fe55e3defb7106e33bb7e286.vehicle',
      'namespace' => 'redactor',
    ),
    71 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'db048c93571411c1ab3f60accd2e2bc4',
      'native_key' => 'redactor.cleanStyleOnEnter',
      'filename' => 'modSystemSetting/a6bf2c410a231f52d78e61ed59886f66.vehicle',
      'namespace' => 'redactor',
    ),
    72 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a653429ae0aae9c7c83e5d7e6731a2f1',
      'native_key' => 'redactor.linkTooltip',
      'filename' => 'modSystemSetting/74f0280b29980ec7cdc0472485f5ee4f.vehicle',
      'namespace' => 'redactor',
    ),
    73 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a31af9f8d2a19216659d8917bdff249e',
      'native_key' => 'redactor.imageEditable',
      'filename' => 'modSystemSetting/83b00de9e57be1b7a1ef22291eb25471.vehicle',
      'namespace' => 'redactor',
    ),
    74 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'eda93612ddc511fd1f8a4855cff4d249',
      'native_key' => 'redactor.imageResizable',
      'filename' => 'modSystemSetting/1dcb79e567cea9fccb4a0214caa5d48f.vehicle',
      'namespace' => 'redactor',
    ),
    75 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4ff2c6b4fb886fe808e03c1ce4f091fa',
      'native_key' => 'redactor.imageLink',
      'filename' => 'modSystemSetting/3ce6e250ded1031e972b2309cc3a0aeb.vehicle',
      'namespace' => 'redactor',
    ),
    76 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9c635d42e51340d7c62eff2c46dc13eb',
      'native_key' => 'redactor.imagePosition',
      'filename' => 'modSystemSetting/adf0887d5a61749cbcd4c4c9f79b7e2f.vehicle',
      'namespace' => 'redactor',
    ),
    77 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a323be8fe2b6a6146c158e1678b3a076',
      'native_key' => 'redactor.buttonsHide',
      'filename' => 'modSystemSetting/cfe7fcb0bdbaf746adfed5f114880dc8.vehicle',
      'namespace' => 'redactor',
    ),
    78 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f081fa4fa6485c66af666481dfdb3027',
      'native_key' => 'redactor.formattingAdd',
      'filename' => 'modSystemSetting/6202b2830309d645588661eb4c105004.vehicle',
      'namespace' => 'redactor',
    ),
    79 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f309733b31cca979aac6a3762fd50c86',
      'native_key' => 'redactor.tabifier',
      'filename' => 'modSystemSetting/b4ef601815808e59a82866de25f3f255.vehicle',
      'namespace' => 'redactor',
    ),
    80 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e6e3619649292decb75dc807dd28074d',
      'native_key' => 'redactor.replaceTags',
      'filename' => 'modSystemSetting/411753274289ddacc55acc276ac99357.vehicle',
      'namespace' => 'redactor',
    ),
    81 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6c4ce247dd275839986f6fbfdc68416b',
      'native_key' => 'redactor.replaceStyles',
      'filename' => 'modSystemSetting/12d5cd9e0298da266bdfedfa0b4b5e0b.vehicle',
      'namespace' => 'redactor',
    ),
    82 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1c1f313fc5bceb5839bc6253d02a50d0',
      'native_key' => 'redactor.removeDataAttr',
      'filename' => 'modSystemSetting/83caa67bc577d8c61134018301196d83.vehicle',
      'namespace' => 'redactor',
    ),
    83 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '29649603e8192b1a201de4e1b9f5e03f',
      'native_key' => 'redactor.removeAttr',
      'filename' => 'modSystemSetting/5d7d4f0870143e42ec73658854cad0b4.vehicle',
      'namespace' => 'redactor',
    ),
    84 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fea4a9ae994eefd320517cc831a50c2a',
      'native_key' => 'redactor.allowedAttr',
      'filename' => 'modSystemSetting/ce28162be074ae671ef2317d2679ae9b.vehicle',
      'namespace' => 'redactor',
    ),
    85 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2441ba1c2f8d03a0f32b0800a7d26a84',
      'native_key' => 'redactor.dragImageUpload',
      'filename' => 'modSystemSetting/ee73bb6de3650c36eb948b6bf0ca5b38.vehicle',
      'namespace' => 'redactor',
    ),
    86 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8c89aaa2983229d8b99e9b016651decf',
      'native_key' => 'redactor.dragFileUpload',
      'filename' => 'modSystemSetting/bf9bb3eef107a8244e4a713a33f3c7d2.vehicle',
      'namespace' => 'redactor',
    ),
    87 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fbe8297f12c794e6a0455bf2f6fb4a0b',
      'native_key' => 'redactor.replaceDivs',
      'filename' => 'modSystemSetting/1d78fe8d2ae2bd52b1500cf7c059114d.vehicle',
      'namespace' => 'redactor',
    ),
    88 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '82d8d7233034c5bc5709b852cbc2e0ca',
      'native_key' => 'redactor.preSpaces',
      'filename' => 'modSystemSetting/4d53f68d27fd07d6ba86ee9be5fa54e1.vehicle',
      'namespace' => 'redactor',
    ),
    89 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'da40566e50d00b4c44fd560543c5a243',
      'native_key' => 'redactor.parse_parent_path',
      'filename' => 'modSystemSetting/714c11b7a663ee69d92c4f93e06e5155.vehicle',
      'namespace' => 'redactor',
    ),
    90 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2be22e5dcda0a989b5916a745dd914e0',
      'native_key' => 'redactor.increment_file_names',
      'filename' => 'modSystemSetting/12d84e5220309cf386a6237004d479de.vehicle',
      'namespace' => 'redactor',
    ),
    91 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '784e93a3963520464d35688489351654',
      'native_key' => 'redactor.parse_parent_path_height',
      'filename' => 'modSystemSetting/457cbb66487cfe8f74d166fe18cc771c.vehicle',
      'namespace' => 'redactor',
    ),
    92 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cfc873a81299e07246c71263ced2762b',
      'native_key' => 'redactor.baseurls_mode',
      'filename' => 'modSystemSetting/fda21da119783f8db98141259543f644.vehicle',
      'namespace' => 'redactor',
    ),
    93 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '177333125d900969ba373945dd82ec13',
      'native_key' => 'redactor.showDimensionsOnResize',
      'filename' => 'modSystemSetting/10c50dfd3bb60c10992a6902b43b35e5.vehicle',
      'namespace' => 'redactor',
    ),
    94 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0bfc60ab677fa55ece08eaee2bb293de',
      'native_key' => 'redactor.plugin_counter',
      'filename' => 'modSystemSetting/abc7c9734ce11a0ed5b060aebaf3f03d.vehicle',
      'namespace' => 'redactor',
    ),
    95 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dfa04789373622c71fb10d9e6b9aec73',
      'native_key' => 'redactor.plugin_fontcolor',
      'filename' => 'modSystemSetting/93ebcbc37c47c03eb4d63806db40a6cc.vehicle',
      'namespace' => 'redactor',
    ),
    96 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '02f81963abc4fb0fff2a410f42ecd8b3',
      'native_key' => 'redactor.plugin_fontfamily',
      'filename' => 'modSystemSetting/9aa2def532fe66fde92819e4306fc993.vehicle',
      'namespace' => 'redactor',
    ),
    97 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '837c805662fabea9740ee55f33e9c9e8',
      'native_key' => 'redactor.plugin_fontsize',
      'filename' => 'modSystemSetting/1b85556df3c7c5f2fa32de86cd427896.vehicle',
      'namespace' => 'redactor',
    ),
    98 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4e22973c9cbbc1f344bccf01d1513a15',
      'native_key' => 'redactor.plugin_limiter',
      'filename' => 'modSystemSetting/4e1269f194382d37f93e7f6b8b312e9f.vehicle',
      'namespace' => 'redactor',
    ),
    99 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6fbe475f5602080a222a376dac74300e',
      'native_key' => 'redactor.plugin_table',
      'filename' => 'modSystemSetting/5bdeba15cdad20a1999070414dbc19db.vehicle',
      'namespace' => 'redactor',
    ),
    100 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2af1977103d2b9c27eace014d49c9094',
      'native_key' => 'redactor.plugin_textdirection',
      'filename' => 'modSystemSetting/fca756e9aa830a904e33ffe090f992f8.vehicle',
      'namespace' => 'redactor',
    ),
    101 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6d5bc588f33150d34dc72632d3f3a286',
      'native_key' => 'redactor.plugin_video',
      'filename' => 'modSystemSetting/7e2d873debff343e13b02eed3192e99c.vehicle',
      'namespace' => 'redactor',
    ),
    102 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd9470e80cf85682ce2cdc473577ec603',
      'native_key' => 'redactor.plugin_replacer',
      'filename' => 'modSystemSetting/66bd67e031169eb02c7cd5006bf91aea.vehicle',
      'namespace' => 'redactor',
    ),
    103 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a2965c23df79aec1faf5c393807fa4a8',
      'native_key' => 'redactor.plugin_syntax',
      'filename' => 'modSystemSetting/4d3575c46659d03e16cb5cf33757ad7e.vehicle',
      'namespace' => 'redactor',
    ),
    104 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '24766d506219f2ada896a3c18f803e29',
      'native_key' => 'redactor.plugin_speek',
      'filename' => 'modSystemSetting/01ba27fa4e991d576a44d26c2b0476c4.vehicle',
      'namespace' => 'redactor',
    ),
    105 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2e988c1a0f5cbd26485ff6f81fee90d1',
      'native_key' => 'redactor.plugin_contrast',
      'filename' => 'modSystemSetting/060482da8d46887a6aa6d7d7c1e3e941.vehicle',
      'namespace' => 'redactor',
    ),
    106 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '06587c73c6e847ac67e2e4fbf202b76f',
      'native_key' => 'redactor.plugin_eureka',
      'filename' => 'modSystemSetting/0b51d134221bded16115abc855dadf41.vehicle',
      'namespace' => 'redactor',
    ),
    107 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8b19e4fa1ef1a17f4c6dccb76fb5dfcb',
      'native_key' => 'redactor.plugin_eureka_shivie9',
      'filename' => 'modSystemSetting/315811e3cfdb0fb724c53a9c89d8bfcd.vehicle',
      'namespace' => 'redactor',
    ),
    108 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5a48d0dee8980c2dcc570cc31db558ec',
      'native_key' => 'redactor.eurekaUpload',
      'filename' => 'modSystemSetting/99cb937914ddb415c50731bd403524f2.vehicle',
      'namespace' => 'redactor',
    ),
    109 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '79117fb766c21a734aef645da01f15c0',
      'native_key' => 'redactor.initial_directory_depth',
      'filename' => 'modSystemSetting/22b76016b8f24ae59313c25350388d0f.vehicle',
      'namespace' => 'redactor',
    ),
    110 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '96518ea55809fef4c4b0f467d428b1fc',
      'native_key' => 'redactor.plugin_zoom',
      'filename' => 'modSystemSetting/4fd666634f9b2ef1b0724116a3150672.vehicle',
      'namespace' => 'redactor',
    ),
    111 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f7d5feebfa3a40107b0a6a87981e5a61',
      'native_key' => 'redactor.plugin_download',
      'filename' => 'modSystemSetting/25c8544777db4cd83e49f2e848f5c46f.vehicle',
      'namespace' => 'redactor',
    ),
    112 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd7aa46743eef8dd0cc92ce4083955a14',
      'native_key' => 'redactor.plugin_imagepx',
      'filename' => 'modSystemSetting/0824b8f955f59bf32f82dca896623fed.vehicle',
      'namespace' => 'redactor',
    ),
    113 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '53e31710b0b4a4dfe39e473b0d6cb022',
      'native_key' => 'redactor.plugin_imageurl',
      'filename' => 'modSystemSetting/d82c230d3538b85479829e64f8765ebb.vehicle',
      'namespace' => 'redactor',
    ),
    114 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a39187b15a5481c6eb1681ffc9750fbd',
      'native_key' => 'redactor.plugin_breadcrumb',
      'filename' => 'modSystemSetting/0662e6b7262ce5288c817503574e5495.vehicle',
      'namespace' => 'redactor',
    ),
    115 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '97ef53b169081c2b03519139a5972a3a',
      'native_key' => 'redactor.plugin_norphan',
      'filename' => 'modSystemSetting/fc8233b72767eeb83f2eed317d81da36.vehicle',
      'namespace' => 'redactor',
    ),
    116 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bcf34e5c448ff4021bbf0187bd760db4',
      'native_key' => 'redactor.plugin_baseurls',
      'filename' => 'modSystemSetting/df9d9e474dbaf6219f9641d7bb0e6c39.vehicle',
      'namespace' => 'redactor',
    ),
    117 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0ff2137cd792e24f8ee8233e871681d0',
      'native_key' => 'redactor.textexpander',
      'filename' => 'modSystemSetting/3cb3f28d8baf2d1c281e4ef42d35afe8.vehicle',
      'namespace' => 'redactor',
    ),
    118 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5348e1ce17249e32aab5b417087c5355',
      'native_key' => 'redactor.speechPitch',
      'filename' => 'modSystemSetting/3699c7f6cc6914dfa588c9aaddb4b27f.vehicle',
      'namespace' => 'redactor',
    ),
    119 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2c1c97e323911aafe01527e20be7132b',
      'native_key' => 'redactor.speechRate',
      'filename' => 'modSystemSetting/12ce8515d0d7d9d743c19f387743a3ab.vehicle',
      'namespace' => 'redactor',
    ),
    120 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ac4d496b6b1ef4fb5a6f2f79f3fc14af',
      'native_key' => 'redactor.speechVolume',
      'filename' => 'modSystemSetting/b7d4aae37352acc72bc2e2fde865b944.vehicle',
      'namespace' => 'redactor',
    ),
    121 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2c6c86df392602fddf498337913f5881',
      'native_key' => 'redactor.speechVoice',
      'filename' => 'modSystemSetting/e756b65475746088fa8abf0b5df09a91.vehicle',
      'namespace' => 'redactor',
    ),
    122 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '37841713714c6c3b22b49e89ddd14553',
      'native_key' => 'redactor.counterWPM',
      'filename' => 'modSystemSetting/592523bc5f9ba8c02b60857a47ca488a.vehicle',
      'namespace' => 'redactor',
    ),
    123 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '95440ef8e3b91d53f0422aaf3532d540',
      'native_key' => 'redactor.codemirror',
      'filename' => 'modSystemSetting/b9b6dd0e2f1390bfb041eb6c382fbca9.vehicle',
      'namespace' => 'redactor',
    ),
    124 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bcc9a1f449c2fe193846ab34ebf1366e',
      'native_key' => 'redactor.plugin_uploadcare',
      'filename' => 'modSystemSetting/0e55a99b7cf9eecbe1ed9709bfb562b0.vehicle',
      'namespace' => 'redactor',
    ),
    125 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e1033ea6b35089df714daf32d4f466b8',
      'native_key' => 'redactor.uploadcare_pub_key',
      'filename' => 'modSystemSetting/3ec3ea91b463743a19336a7e1268f1d1.vehicle',
      'namespace' => 'redactor',
    ),
    126 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1eea222f5337baffdc6505081fd287f6',
      'native_key' => 'redactor.uploadcare_locale',
      'filename' => 'modSystemSetting/18cefd0d6c1d3e4df4ddd33bec9290d8.vehicle',
      'namespace' => 'redactor',
    ),
    127 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1e382cee65e6e0f520486105f2dc3a3e',
      'native_key' => 'redactor.uploadcare_crop',
      'filename' => 'modSystemSetting/7b8cf157461ee43e4bea0228986fd8e8.vehicle',
      'namespace' => 'redactor',
    ),
    128 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8820ed4ad0fb9b534bec93ad28ced6b5',
      'native_key' => 'redactor.uploadcare_tabs',
      'filename' => 'modSystemSetting/e9f8454043cd963162cc393a2fd680a0.vehicle',
      'namespace' => 'redactor',
    ),
    129 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd44cceed8b18b5894fdb715630935a90',
      'native_key' => 'redactor.loadIntrotext',
      'filename' => 'modSystemSetting/0e924d713949d726665df797b59054f0.vehicle',
      'namespace' => 'redactor',
    ),
    130 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3360b2160c9bc64bd3a035c08bbde77c',
      'native_key' => 'redactor.limiter',
      'filename' => 'modSystemSetting/feb4b86e963d3f910ad642bd5b4d5f02.vehicle',
      'namespace' => 'redactor',
    ),
    131 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => '6ffa153ef5024a562740560eb122dac9',
      'native_key' => '6ffa153ef5024a562740560eb122dac9',
      'filename' => 'xPDOScriptVehicle/a7b626c15ae7f6d1c602f209f54c56dc.vehicle',
      'namespace' => 'redactor',
    ),
  ),
);