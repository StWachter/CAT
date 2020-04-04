<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'This license is a legal agreement between you and modmore for the use of the Redactor extra for MODX. By downloading or installing Redactor, you agree to the terms and conditions of this license. modmore reserves the right to alter this agreement at any time, for any reason, without notice.

modmore grants you a non-exclusive non-transferable license to use Redactor on one MODX installation, identified by its domain name. A license code is embedded in this package, which is associated with your account on modmore.com and is not transferable to other accounts. Changes to the MODX installation, such as moving to a different domain, invalidates this license. For your convenience, you will receive automatic instructions on resolving such invalidations via email.

Neither the installable package nor the source code may be redistributed, changed, stripped of its license information or license verification code, or otherwise modified without upfront written permission. Any attempt to block, jeopardize or fool built-in protections and/or license verification is strictly forbidden and cause for account termination.

Should you require multiple environments (test/staging) for a single MODX installations, each environment requires its own license. Free development licenses may be available. Please see: https://modmore.com/free-development-licenses/

Support is available for the most recent major version via support@modmore.com. Upon the release of a new major version or discontinuation, support will remain available for 6 months. For the current supported versions and timelines, please see: https://modmore.com/about/support/

modmore is not liable for any damages directly or indirectly caused by usage of Redactor.

modmore may revoke this license at any time.

---

This extra includes third party software, for which we are thankful.

- Redactor.js by Imperavi (imperavi.com), including plugins, OEM License.
- CodeMirror, MIT license
- Autocomplete.js by Algolia, MIT license
',
    'readme' => 'Welcome to Redactor 3.

Redactor is a powerful and user friendly rich text editor for MODX. It is based on the commercial Redactor editor built by Imperavi, enhanced with MODX-specific customisations and management.

With Redactor you get a tightly integrated editor experience. The editor integrates with the MODX media manager and media sources, allows direct linking to resources, and looks great within the manager design.

Redactor also integrates nicely with other extras. Third party extras can seamlessly enable Redactor on fields they want to use a rich text editor for. We love pairing Redactor with ContentBlocks ourselves.

For more information about the functionality offered by Redactor 3, please visit https://modmore.com/redactor/ or the documentation at https://docs.modmore.com/en/Redactor/v3.x/index.html

Standard unlimited support is included with your license purchase. If you have questions or need help, please email support@modmore.com.
',
    'changelog' => 'Redactor 3.0.0-rc2
------------------
Released on 2020-01-16

- Don\'t load English translation file to avoid emptying plugin translation strings (alignment, clips) [S21859]
- Fix z-index issues with the MODX media browser, by not overriding the z-index to make it appear in front of Redactor-built modals but closing the initiating Redactor modal window instead. [S21859]
- Add support for shift+tab to outdent within lists [B31]
- Fix replaced images not being saved [B31]
- Restore fixed toolbar to normal toolbar when opening full screen mode [#492]
- Split autoparse options in the configurator to a separate tab
- Add options for resource links: limit to current context, include introtext [S21862]
- Make directory depth for the simple browser configurable
- When adding a link, the resource search will now automatically query for the selected text
- Fix link styles not working correctly with multiple classnames
- Fix image styles not preselecting current styles when it has multiple classnames

Redactor 3.0.0-rc1
------------------
Released on 2020-01-14

Welcome to Redactor 3. A refreshed and modernised take on the rich text editor.

This is a major release and paid upgrade for users of Redactor 2. Learn more in the release announcement: https://modmore.com/blog/2020/redactor-3/

Some of the highlights in Redactor 3:

- Configuration is now managed with Configuration Sets. After installation, browse to Extras > Redactor Configuration to start. On upgrade, your previous settings will be (as much as possible) migrated to the new format, including context-specific overrides
- Much simpler media manager is now included by default. You can also use the standard MODX browser, or both!
- New input type for ContentBlocks allowing you to choose a configuration set per field
- You can now choose a configuration set per template
- New `divider` button lets you visually separate toolbar buttons
- Different themes are now supported, including the new default, a Redactor 2-inspired theme, and one filled with rainbows
- New properties plugin to set IDs and classes on any block element
- Improved core editing experience with better cleanup and some long-standing issues resolved
- redactor.css setting now support a comma separated list of CSS files rather than just one
- Sanitising file names now supports transliteration
- New Image Styles option lets you define classes that can be added to an image
- Experimental support for Fred
- Redactor plugins from Imperavi, which often do not ship with a translation, can now be translated through the MODX lexicon system

Powered by Imperavi\'s redactor.js v3.3.2.
',
    'standard-set' => '<?xml version="1.0" encoding="UTF-8"?>
<data package="redactor" exported="2019-08-26@13:09:31" total="2">
	<redConfigurationSet>
		<class_key><![CDATA[redConfigurationSet]]></class_key>
		<name><![CDATA[Standard]]></name>
		<description><![CDATA[]]></description>
		<content><![CDATA[{"buttons":"format, bold, italic, underline, divider, table, link, image, file, divider, ol, ul, indent, outdent, divider, redo, undo, divider, html","buttonsTextLabeled":"0","formatting":"p, h2, h3, h4, h5, h6, blockquote, pre","formattingAdd":"","air":"0","toolbar":"1","toolbarContext":"1","lang":"en","theme":"default","minHeight":"200","maxHeight":"","maxWidth":"","animation":"1","structure":"0","counter":"0","stylesClass":"redactor-styles","direction":"ltr","cleanOnEnter":"1","cleanInlineOnEnter":"1","removeScript":"1","removeNewLines":"0","removeComments":"1","pasteClean":"1","pastePlainText":"0","pasteLinks":"1","pasteLinkTarget":"false","pasteImages":"1","pasteBlockTags":"pre, h1, h2, h3, h4, h5, h6, table, tbody, thead, tfoot, th, tr, td, ul, ol, li, blockquote, p, figure, figcaption","pasteInlineTags":"a, img, br, strong, ins, code, del, span, samp, kbd, sup, sub, mark, var, cite, small, b, u, em, i","pasteKeepStyle":"","pasteKeepClass":"","pasteKeepAttrs":"","markup":"p","enterKey":"1","breakline":"0","preClass":"false","preSpaces":"4","tabAsSpaces":"","imageFigure":"1","imageCaption":"1","imagePosition":"1","imageFloatMargin":"1em","imageEditable":"1","imageResizable":"1","dragUpload":"1","clipboardUpload":"1","baseurlsMode":"relative","imageSimpleBrowser":"1","imageSimpleBrowserSource":"1","imageSimpleBrowserPath":"\\/assets\\/","fileSimpleBrowser":"1","fileSimpleBrowserSource":"1","fileSimpleBrowserPath":"\\/assets\\/","imageMODXBrowser":"1","imageMODXBrowserSource":"1","imageMODXBrowserPath":"\\/assets\\/","fileMODXBrowser":"1","fileMODXBrowserSource":"1","fileMODXBrowserPath":"\\/assets\\/","linkTitle":"1","linkNewTab":"1","linkNofollow":"0","linkToAnchor":"0","linkSize":"30","linkValidation":"1","definedlinks":"","autoparse":"1","autoparseLinks":"1","autoparseImages":"1","autoparseVideo":"1","source":"1","sourceCodemirror":"1","showSource":"0","limiter":"","clips":"","textexpander":"","variables":"","placeholder":"false","spellcheck":"1","grammarly":"0","tabKey":"1"}]]></content>
	</redConfigurationSet>
	<redConfigurationSet>
		<class_key><![CDATA[redConfigurationSet]]></class_key>
		<name><![CDATA[Minimal]]></name>
		<description><![CDATA[]]></description>
		<content><![CDATA[{"buttons":"format, divider, bold, italic, underline, deleted, divider, link, image","buttonsTextLabeled":"0","formatting":"p, h2, h3, h4, blockquote, code","formattingAdd":"","air":"0","toolbar":"1","toolbarContext":"1","lang":"en","theme":"default","minHeight":"100","maxHeight":"","maxWidth":"","animation":"1","structure":"0","counter":"0","stylesClass":"redactor-styles","direction":"","cleanOnEnter":"1","cleanInlineOnEnter":"1","removeScript":"1","removeNewLines":"0","removeComments":"1","pasteClean":"1","pastePlainText":"0","pasteLinks":"1","pasteLinkTarget":"false","pasteImages":"1","pasteBlockTags":"h1, h2, h3, h4, h5, h6, table, tbody, thead, tfoot, th, tr, td, ul, ol, li, blockquote, pre","pasteInlineTags":"strong, b, u, em, i, code, del, span, ins, samp, kbd, sup, sub, mark, var, cite, small","pasteKeepStyle":"","pasteKeepClass":"","pasteKeepAttrs":"","markup":"p","enterKey":"1","breakline":"0","preClass":"false","preSpaces":"4","tabAsSpaces":"","imageFigure":"1","imageCaption":"1","imagePosition":"0","imageFloatMargin":"10px","imageEditable":"1","imageResizable":"1","dragUpload":"1","clipboardUpload":"1","baseurlsMode":"relative","imageSimpleBrowser":"0","imageSimpleBrowserSource":"1","imageSimpleBrowserPath":"\\/","fileSimpleBrowser":"0","fileSimpleBrowserSource":"1","fileSimpleBrowserPath":"\\/","imageMODXBrowser":"1","imageMODXBrowserSource":"1","imageMODXBrowserPath":"\\/","fileMODXBrowser":"1","fileMODXBrowserSource":"1","fileMODXBrowserPath":"\\/","linkTitle":"1","linkNewTab":"0","linkNofollow":"0","linkToAnchor":"0","linkSize":"50","linkValidation":"1","definedlinks":"","autoparse":"1","autoparseLinks":"1","autoparseImages":"1","autoparseVideo":"1","source":"1","sourceCodemirror":"1","showSource":"0","limiter":"","clips":"","textexpander":"","variables":"","placeholder":"false","spellcheck":"1","grammarly":"1","tabKey":"1"}]]></content>
	</redConfigurationSet>
</data>',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '12ffdb59add4fd179a0a6921d4b1727c',
      'native_key' => 'redactor',
      'filename' => 'modNamespace/4bf450223e16f20de931c4c245526f8b.vehicle',
      'namespace' => 'redactor',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '30080e3d762fc1d1920a6265fcc8c028',
      'native_key' => '30080e3d762fc1d1920a6265fcc8c028',
      'filename' => 'xPDOFileVehicle/aba4700988a5f50c4576a49422024e16.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '6a536cc78a2655a8f29ad5e3a3418eed',
      'native_key' => '6a536cc78a2655a8f29ad5e3a3418eed',
      'filename' => 'xPDOFileVehicle/661b8c265316edb7ac5714bff6d6ebab.vehicle',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '789ee4c7ed4a3e7e1d1ef24e74b3e7dc',
      'native_key' => 'redactor.configuration_set',
      'filename' => 'modSystemSetting/892c8e01b5f1ddbd59ae384ada91750e.vehicle',
      'namespace' => 'redactor',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0013f11af38a7f0ba87de2028b56a4ad',
      'native_key' => 'redactor.introtext',
      'filename' => 'modSystemSetting/5f900b3642835bbb605d8258e0a6db1b.vehicle',
      'namespace' => 'redactor',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2e82d6aaee68a50e1d5c5b3d5f2d2d0a',
      'native_key' => 'redactor.introtext.configuration_set',
      'filename' => 'modSystemSetting/bb4b40d3a4c0da02af30d56ccc783eea.vehicle',
      'namespace' => 'redactor',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2ce1158c51e000d37f32f9e8df48585c',
      'native_key' => 'redactor.css',
      'filename' => 'modSystemSetting/34d575833682f6e1fefd9a27d5bbecc4.vehicle',
      'namespace' => 'redactor',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '44fcb18a9cceeb16bc3340534d89b6c3',
      'native_key' => 'redactor.js',
      'filename' => 'modSystemSetting/af651d04975da7597fd3b9d2ccc168f7.vehicle',
      'namespace' => 'redactor',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e2074c2d399509ae4d2110a702c14e8d',
      'native_key' => 'redactor.sanitizePattern',
      'filename' => 'modSystemSetting/b48f41b4869bb2d661dab9f2911f4f55.vehicle',
      'namespace' => 'redactor',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '53bd808089aa6786534bce3bb51b07e6',
      'native_key' => 'redactor.sanitizeReplace',
      'filename' => 'modSystemSetting/50287c9262a89780ada726f7699c04da.vehicle',
      'namespace' => 'redactor',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '12d53f6df16c0cc4952eb6e051778430',
      'native_key' => 'redactor.translit',
      'filename' => 'modSystemSetting/f6dbddfc5a725104ca549748c3e589ca.vehicle',
      'namespace' => 'redactor',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '33095bd3332815996a2c8d953c0a9353',
      'native_key' => 'redactor.translit_class',
      'filename' => 'modSystemSetting/c12a0918b55f1a8acf36bf9836aaa23f.vehicle',
      'namespace' => 'redactor',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd47eba94e3aa19eebed1032cf48a09cb',
      'native_key' => 'redactor.translit_class_path',
      'filename' => 'modSystemSetting/3f693a294a9d6ff164f6570917595786.vehicle',
      'namespace' => 'redactor',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '0b5c4fb8e98b65048d509d3bda382566',
      'native_key' => 'redactor.configuration',
      'filename' => 'modMenu/e0a23c59f1af67b1ac06565e15763e56.vehicle',
      'namespace' => 'redactor',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => 'e5355df1e38650aebaf27705e397d9a6',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/9cec9b8a197397d25835e11553b60397.vehicle',
      'namespace' => 'redactor',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'encryptedVehicle',
      'class' => 'modPlugin',
      'guid' => '075fdfce853cf7a0e5bb20d050b45f93',
      'native_key' => NULL,
      'filename' => 'modPlugin/8493e55184100056405664f4834498aa.vehicle',
      'namespace' => 'redactor',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => '39fd19b48a5ae8efb959ede2a21ab667',
      'native_key' => '39fd19b48a5ae8efb959ede2a21ab667',
      'filename' => 'xPDOScriptVehicle/216608a57f84a4fce2f923c615b44386.vehicle',
      'namespace' => 'redactor',
    ),
  ),
);