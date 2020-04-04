<?php return array (
  'e6558199589c020fdf068d49add7b155' => 
  array (
    'criteria' => 
    array (
      'name' => 'clientconfig',
    ),
    'object' => 
    array (
      'name' => 'clientconfig',
      'path' => '{core_path}components/clientconfig/',
      'assets_path' => '{assets_path}components/clientconfig/',
    ),
  ),
  '797200ffd1272c9cca9cce32cb7c5290' => 
  array (
    'criteria' => 
    array (
      'key' => 'clientconfig.admin_groups',
    ),
    'object' => 
    array (
      'key' => 'clientconfig.admin_groups',
      'value' => 'Administrator',
      'xtype' => 'textfield',
      'namespace' => 'clientconfig',
      'area' => 'Default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '935a82ad64eb0b29ee86b9c0cf60ed17' => 
  array (
    'criteria' => 
    array (
      'key' => 'clientconfig.clear_cache',
    ),
    'object' => 
    array (
      'key' => 'clientconfig.clear_cache',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'clientconfig',
      'area' => 'Default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'deb32bc76c8d227771e621eb02ecad5b' => 
  array (
    'criteria' => 
    array (
      'key' => 'clientconfig.vertical_tabs',
    ),
    'object' => 
    array (
      'key' => 'clientconfig.vertical_tabs',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'clientconfig',
      'area' => 'Default',
      'editedon' => '2019-03-04 17:04:55',
    ),
  ),
  '2b62491bfa7f51b99d83db78bf02616b' => 
  array (
    'criteria' => 
    array (
      'key' => 'clientconfig.context_aware',
    ),
    'object' => 
    array (
      'key' => 'clientconfig.context_aware',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'clientconfig',
      'area' => 'Default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ed0eff82df77eb01084dc726d468934b' => 
  array (
    'criteria' => 
    array (
      'key' => 'clientconfig.google_fonts_api_key',
    ),
    'object' => 
    array (
      'key' => 'clientconfig.google_fonts_api_key',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'clientconfig',
      'area' => 'Default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '704508072bdcbc5fc7e03e8a80f0a14b' => 
  array (
    'criteria' => 
    array (
      'name' => 'ClientConfig_ConfigChange',
    ),
    'object' => 
    array (
      'name' => 'ClientConfig_ConfigChange',
      'service' => 6,
      'groupname' => 'clientconfig',
    ),
  ),
  'c4e240332e25e95b793feea6b11625d9' => 
  array (
    'criteria' => 
    array (
      'name' => 'ClientConfig',
    ),
    'object' => 
    array (
      'id' => 14,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ClientConfig',
      'description' => 'Sets system settings from the Client Config CMP.',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * ClientConfig
 *
 * Copyright 2011-2014 by Mark Hamstra <hello@markhamstra.com>
 *
 * ClientConfig is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClientConfig is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClientConfig; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package clientconfig
 *
 * @var modX $modx
 * @var int $id
 * @var string $mode
 * @var modResource $resource
 * @var modTemplate $template
 * @var modTemplateVar $tv
 * @var modChunk $chunk
 * @var modSnippet $snippet
 * @var modPlugin $plugin
*/

$eventName = $modx->event->name;

switch($eventName) {
    case \'OnMODXInit\':
    case \'OnHandleRequest\':
        /* Grab the class */
        $path = $modx->getOption(\'clientconfig.core_path\', null, $modx->getOption(\'core_path\') . \'components/clientconfig/\');
        $path .= \'model/clientconfig/\';
        $clientConfig = $modx->getService(\'clientconfig\',\'ClientConfig\', $path);

        /* If we got the class (gotta be careful of failed migrations), grab settings and go! */
        if ($clientConfig instanceof ClientConfig) {
            $contextKey = $modx->context instanceof modContext ? $modx->context->get(\'key\') : \'web\';
            $settings = $clientConfig->getSettings($contextKey);

            /* Make settings available as [[++tags]] */
            $modx->setPlaceholders($settings, \'+\');

            /* Make settings available for $modx->getOption() */
            foreach ($settings as $key => $value) {
                $modx->setOption($key, $value);
            }
        }
        break;
}

return;',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * ClientConfig
 *
 * Copyright 2011-2014 by Mark Hamstra <hello@markhamstra.com>
 *
 * ClientConfig is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClientConfig is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClientConfig; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package clientconfig
 *
 * @var modX $modx
 * @var int $id
 * @var string $mode
 * @var modResource $resource
 * @var modTemplate $template
 * @var modTemplateVar $tv
 * @var modChunk $chunk
 * @var modSnippet $snippet
 * @var modPlugin $plugin
*/

$eventName = $modx->event->name;

switch($eventName) {
    case \'OnMODXInit\':
    case \'OnHandleRequest\':
        /* Grab the class */
        $path = $modx->getOption(\'clientconfig.core_path\', null, $modx->getOption(\'core_path\') . \'components/clientconfig/\');
        $path .= \'model/clientconfig/\';
        $clientConfig = $modx->getService(\'clientconfig\',\'ClientConfig\', $path);

        /* If we got the class (gotta be careful of failed migrations), grab settings and go! */
        if ($clientConfig instanceof ClientConfig) {
            $contextKey = $modx->context instanceof modContext ? $modx->context->get(\'key\') : \'web\';
            $settings = $clientConfig->getSettings($contextKey);

            /* Make settings available as [[++tags]] */
            $modx->setPlaceholders($settings, \'+\');

            /* Make settings available for $modx->getOption() */
            foreach ($settings as $key => $value) {
                $modx->setOption($key, $value);
            }
        }
        break;
}

return;',
    ),
  ),
  '4eb7bbcc20a91587a77ab5583720fb9f' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 14,
      'event' => 'OnMODXInit',
    ),
    'object' => 
    array (
      'pluginid' => 14,
      'event' => 'OnMODXInit',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'b97c5e4497bc738da6dfd99ee8796a22' => 
  array (
    'criteria' => 
    array (
      'text' => 'clientconfig',
    ),
    'object' => 
    array (
      'text' => 'clientconfig',
      'parent' => 'components',
      'action' => 'home',
      'description' => 'clientconfig.desc',
      'icon' => '',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'clientconfig',
    ),
  ),
  '94c61f5fac6da092c78ad9f366e788bb' => 
  array (
    'criteria' => 
    array (
      'category' => 'ClientConfig',
    ),
    'object' => 
    array (
      'id' => 12,
      'parent' => 0,
      'category' => 'ClientConfig',
      'rank' => 0,
    ),
  ),
);