<?php return array (
  'b081a995cd3fe7867179ab8aa65ad909' => 
  array (
    'criteria' => 
    array (
      'name' => 'ContentBlocks_RegisterInputs',
    ),
    'object' => 
    array (
      'name' => 'ContentBlocks_RegisterInputs',
      'service' => 6,
      'groupname' => 'contentblocks',
    ),
  ),
  '0a9240e4b5a568076bccbf317837ca77' => 
  array (
    'criteria' => 
    array (
      'name' => 'ContentBlocks_RebuildContent',
    ),
    'object' => 
    array (
      'name' => 'ContentBlocks_RebuildContent',
      'service' => 6,
      'groupname' => 'contentblocks',
    ),
  ),
  '340417eeee5418ec9cfa49583c7ffde3' => 
  array (
    'criteria' => 
    array (
      'name' => 'ContentBlocks_AfterRebuildContent',
    ),
    'object' => 
    array (
      'name' => 'ContentBlocks_AfterRebuildContent',
      'service' => 6,
      'groupname' => 'contentblocks',
    ),
  ),
  '4da5c63b1ec058bb3ba240b1d035abdb' => 
  array (
    'criteria' => 
    array (
      'category' => 'ContentBlocks',
    ),
    'object' => 
    array (
      'id' => 20,
      'parent' => 0,
      'category' => 'ContentBlocks',
      'rank' => 0,
    ),
  ),
  'ad68b83dbc980fcb6bbf13dc28ed4c7c' => 
  array (
    'criteria' => 
    array (
      'name' => 'cbHasField',
    ),
    'object' => 
    array (
      'id' => 12,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cbHasField',
      'description' => 'Conditionally do stuff depending on the usage of a specific field on a resource. (Part of ContentBlocks)',
      'editor_type' => 0,
      'category' => 20,
      'cache_type' => 0,
      'snippet' => '/**
 * Use the cbHasField snippet for conditional logic depending on whether a certain field
 * is in use on a resource or not.
 *
 * For example, this can be useful if you need to initialise a certain javascript library
 * in your site\'s footer, but only when you have a Gallery on the page.
 *
 * Example usage:
 *
 * [[cbHasField?
 *      &field=`13`
 *      &then=`Has a Gallery!`
 *      &else=`Doesn\'t have a gallery!`
 * ]]
 *
 * An optional &resource param allows checking for fields on other resources.
 *
 * Note that if the resource does not use ContentBlocks for the content, it will default to the &else value.
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

// Use the current resource if it\'s available
$resource = isset($modx->resource) ? $modx->resource : false;

// If we have a requested resource...
if (array_key_exists(\'resource\', $scriptProperties) && !empty($scriptProperties[\'resource\'])) {
    // ... check if it is the same one as the current, and only load the requested resource if it isn\'t
    if ($resource instanceof modResource) {
        if ($scriptProperties[\'resource\'] != $resource->get(\'id\')) {
            $resource = $modx->getObject(\'modResource\', (int)$scriptProperties[\'resource\']);
        }
    }
    // ... or grab the requested resource anyway
    else {
        $resource = $modx->getObject(\'modResource\', (int)$scriptProperties[\'resource\']);
    }
}

$flds = $modx->getOption(\'field\', $scriptProperties, \'0\');
$flds = array_map(\'intval\', explode(\',\', $flds));
$then = $modx->getOption(\'then\', $scriptProperties, \'1\');
$else = $modx->getOption(\'else\', $scriptProperties, \'\');

// Make sure this is a contentblocks-enabled resource
$enabled = $resource->getProperty(\'_isContentBlocks\', \'contentblocks\');
if ($enabled !== true) return $else;

// Get the field counts
$counts = $resource->getProperty(\'fieldcounts\', \'contentblocks\');
if (is_array($counts)) {
    foreach ($flds as $fld) {
        if (!empty($fld) && isset($counts[$fld])) {
            return $then;
        }
    }
}
else {
    $modx->log(modX::LOG_LEVEL_ERROR, \'[ContentBlocks.cbHasField] Resource \' . $resource->get(\'id\') . \' does not contain field count data. This feature was added in ContentBlocks 0.9.2. Any resources not saved since the update to 0.9.2 need to be saved in order for the field counts to be calculated and stored.\');
}
return $else;',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Use the cbHasField snippet for conditional logic depending on whether a certain field
 * is in use on a resource or not.
 *
 * For example, this can be useful if you need to initialise a certain javascript library
 * in your site\'s footer, but only when you have a Gallery on the page.
 *
 * Example usage:
 *
 * [[cbHasField?
 *      &field=`13`
 *      &then=`Has a Gallery!`
 *      &else=`Doesn\'t have a gallery!`
 * ]]
 *
 * An optional &resource param allows checking for fields on other resources.
 *
 * Note that if the resource does not use ContentBlocks for the content, it will default to the &else value.
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

// Use the current resource if it\'s available
$resource = isset($modx->resource) ? $modx->resource : false;

// If we have a requested resource...
if (array_key_exists(\'resource\', $scriptProperties) && !empty($scriptProperties[\'resource\'])) {
    // ... check if it is the same one as the current, and only load the requested resource if it isn\'t
    if ($resource instanceof modResource) {
        if ($scriptProperties[\'resource\'] != $resource->get(\'id\')) {
            $resource = $modx->getObject(\'modResource\', (int)$scriptProperties[\'resource\']);
        }
    }
    // ... or grab the requested resource anyway
    else {
        $resource = $modx->getObject(\'modResource\', (int)$scriptProperties[\'resource\']);
    }
}

$flds = $modx->getOption(\'field\', $scriptProperties, \'0\');
$flds = array_map(\'intval\', explode(\',\', $flds));
$then = $modx->getOption(\'then\', $scriptProperties, \'1\');
$else = $modx->getOption(\'else\', $scriptProperties, \'\');

// Make sure this is a contentblocks-enabled resource
$enabled = $resource->getProperty(\'_isContentBlocks\', \'contentblocks\');
if ($enabled !== true) return $else;

// Get the field counts
$counts = $resource->getProperty(\'fieldcounts\', \'contentblocks\');
if (is_array($counts)) {
    foreach ($flds as $fld) {
        if (!empty($fld) && isset($counts[$fld])) {
            return $then;
        }
    }
}
else {
    $modx->log(modX::LOG_LEVEL_ERROR, \'[ContentBlocks.cbHasField] Resource \' . $resource->get(\'id\') . \' does not contain field count data. This feature was added in ContentBlocks 0.9.2. Any resources not saved since the update to 0.9.2 need to be saved in order for the field counts to be calculated and stored.\');
}
return $else;',
    ),
  ),
  '8e8f663c1ce4131307a6a0704d571c47' => 
  array (
    'criteria' => 
    array (
      'name' => 'cbGetFieldContent',
    ),
    'object' => 
    array (
      'id' => 13,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cbGetFieldContent',
      'description' => 'Get the content of a particular ContentBlocks field. (Part of ContentBlocks)',
      'editor_type' => 0,
      'category' => 20,
      'cache_type' => 0,
      'snippet' => '/**
 * Use the cbGetFieldContent snippet to get the content of a particular field.
 *
 * For example, this can be useful if you need to get a bit of content 
 * in a getResources call
 *
 * Example usage:
 *
 * [[cbGetFieldContent?
 *      &field=`13`
 *      &tpl=`fieldTpl`
 * ]]
 * 
 * [[cbGetFieldContent?
 *      &field=`13`
 *      &fieldSettingFilter=`class==keyImage`
 *      &tpl=`fieldTpl`
 * ]]
 * 
 * An optional &resource param allows checking for fields on other resources.
 * An option &fieldSettingFilter allows filtering by == or != of a field setting. Only items matching the filter will be returned.
 * An optional &limit param allows limiting the number of matched fields
 * An optional &offset param allows skipping the first n matched fields 
 * An optional &tpl param is a chunk name defining a template to use for your field. If not set,
 *   the ContentBlocks template for the field will be used.
 * An optional &wrapTpl param is a chunk name defining a template to use for your field wrapper.
 *   If not set, the ContentBlocks wrapper template for the field will be used. Applies only to
 *   multi-value inputs (galleries, files, etc.)
 * An optional &returnAsJSON parameter will return all values of the selected field as JSON.
 *
 * @var modX $modx
 * @var array $scriptProperties
 */
 

// Use the current resource if it\'s available
$resource = isset($modx->resource) ? $modx->resource : false;

// If we have a requested resource...
if ($scriptProperties[\'resource\']) {
    // ... check if it is the same one as the current, and only load the requested resource if it isn\'t
    if ($resource instanceof modResource) {
        if ($scriptProperties[\'resource\'] != $resource->get(\'id\')) {
            $resource = $modx->getObject(\'modResource\', (int)$scriptProperties[\'resource\']);
        }
    }
    // ... or grab the requested resource anyway
    else {
        $resource = $modx->getObject(\'modResource\', (int)$scriptProperties[\'resource\']);
    }
}

// Make sure we have a resource or end here
if (!$resource) {
    return \'\';
}

$fld = $modx->getOption(\'field\', $scriptProperties, 0, true);
$fieldSettingFilter = $modx->getOption(\'fieldSettingFilter\', $scriptProperties, false, true); 
$limit = $modx->getOption(\'limit\', $scriptProperties, 0, true);
$offset = $modx->getOption(\'offset\', $scriptProperties, 0, true);
$innerLimit = $modx->getOption(\'innerLimit\', $scriptProperties, 0, true);
$innerOffset = $modx->getOption(\'innerOffset\', $scriptProperties, 0, true);
$tpl = $modx->getOption(\'tpl\', $scriptProperties, false, true);
$wrapTpl = $modx->getOption(\'wrapTpl\', $scriptProperties, false, true);
$showDebug = $modx->getOption(\'showDebug\', $scriptProperties, false, true);
$returnAsJSON = $modx->getOption(\'returnAsJSON\', $scriptProperties, false, true);

/** @var array $debug */
$debug = array(\'scriptProperties\' => $scriptProperties);
$output = \'\';

if(!$fld) {
    $showDebug = true;
}

else {
    // Make sure this is a contentblocks-enabled resource
    $enabled = $resource->getProperty(\'_isContentBlocks\', \'contentblocks\');
    $debug[\'enabled\'] = (bool)$enabled;
    if ($enabled !== true) return;
    
    // Get the field counts
    $counts = $resource->getProperty(\'fieldcounts\', \'contentblocks\');
    $debug[\'counts\'] = $counts;
    if (is_array($counts) && isset($counts[$fld])) {
        $fieldsData = $resource->getProperty(\'linear\', \'contentblocks\');
        $fieldsTypeData = array();
        $cbCorePath = $modx->getOption(\'contentblocks.core_path\', null, $modx->getOption(\'core_path\').\'components/contentblocks/\'); 
        $ContentBlocks = $modx->getService(\'contentblocks\',\'ContentBlocks\', $cbCorePath.\'model/contentblocks/\');
        $ContentBlocks->loadInputs();
        $field = $modx->getObject(\'cbField\', $fld);

        if(!($field instanceof cbField)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[cbGetFieldContent] Error loading field \' . $fld);
            return;
        }
        
        if($tpl) {
            $chunk = $modx->getObject(\'modChunk\', array(\'name\' => $tpl));
            if ($chunk instanceof modChunk) {
                $field->set(\'template\', $chunk->get(\'content\'));
            }
        }
        
        if($wrapTpl) {
            $chunk = $modx->getObject(\'modChunk\', array(\'name\' => $wrapTpl));
            if ($chunk instanceof modChunk) {
                $field->set(\'wrapper_template\', $chunk->get(\'content\'));
            }
        }
    
        $debug[\'fieldsData\'] = $fieldsData;
        
        foreach($fieldsData as $fieldData) {
          	if($fieldData[\'field\'] == $fld) {
                $fieldsTypeData[] = $fieldData;
          	}
        }
        
        $debug[\'fieldsTypeData\'] = $fieldsTypeData;
      
        if($fieldSettingFilter) {
            $operators = array(
                \'!=\' => \'!=\',
                \'==\' => \'==\',
            );
            $filters = explode(\',\', $fieldSettingFilter);
            $debug[\'filters\'] = array(\'original\' => $filters);
            foreach($filters as $i => $filter) {
                foreach($operators as $op => $symbol) {
                    if (strpos($filter, $op, 1) !== false) {
                        $operator = $op;
                        break;
                    }
                }
                
                $filter = explode($operator, $filter);
                $debug[$i][\'filter\'] = $filter;
                $setting = array_shift($filter);
                $value = array_shift($filter);
                $debug[$i][\'setting\'] = $setting;
                $debug[$i][\'value\'] = $value;
                $debug[$i][\'operator\'] = $operator;
                
                foreach($fieldsTypeData as $idx => $fieldData) {
                    if($fieldData[\'settings\'] && array_key_exists($setting, $fieldData[\'settings\'])) {
                        switch($operator) {
                            case \'==\' :
                                if($fieldData[\'settings\'][$setting] != $value) {
                                    unset($fieldsTypeData[$idx]);
                                }
                            break;
                            case \'!=\' :
                                if($fieldData[\'settings\'][$setting] == $value) {
                                    unset($fieldsTypeData[$idx]);
                                }
                            break;
                        }
                    }
                }
            }
        }
        
        if($offset) {
            $fieldsTypeData = array_splice($fieldsTypeData, (int)$offset);
            $debug[\'offset\'] = $offset;
        }
        if($limit) {
            $fieldsTypeData = array_splice($fieldsTypeData, 0, $limit);
            $debug[\'limit\'] = $limit;
        }
        
        $debug[\'result\'] = $fieldsTypeData;

        if ($innerLimit || $innerOffset) {
            switch ($field->get(\'input\')) {
                case \'repeater\':
                    $keyname = \'rows\';
                    break;
                case \'gallery\':
                    $keyname = \'images\';
                    break;
                default:
                    $keyname = \'\';
            }
            if (!empty($keyname)) {
                $debug[\'innerLimit\'] = $innerLimit;
                $debug[\'innerOffset\'] = $innerOffset;

                foreach ($fieldsTypeData as &$fieldsTypeInner) {
                    if ($innerOffset) {
                        $fieldsTypeInner[$keyname] = array_splice($fieldsTypeInner[$keyname], (int)$innerOffset);
                    }
                    if ($innerLimit) {
                        $fieldsTypeInner[$keyname] = array_splice($fieldsTypeInner[$keyname], 0, $innerLimit);
                    }
                }
            }
        }

        if(!$returnAsJSON && count($fieldsTypeData)) {
            $i = 0;
            foreach($fieldsTypeData as $fieldData) {
                $i++;
                $output .= $ContentBlocks->generateFieldHtml($fieldData, $field, $i);
            }
        }

        if($returnAsJSON) {
            if($showDebug) {
                $output = $modx->toJSON(array(\'output\' => $fieldsTypeData, \'debug\' => $debug));
            }
            else {
                $output = $modx->toJSON($fieldsTypeData);
            }
        }
    }
}

if(!$returnAsJSON && $showDebug) {
    $output .= \'<pre>\' . print_r($debug, true) . \'</pre>\';
}


return $output;',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Use the cbGetFieldContent snippet to get the content of a particular field.
 *
 * For example, this can be useful if you need to get a bit of content 
 * in a getResources call
 *
 * Example usage:
 *
 * [[cbGetFieldContent?
 *      &field=`13`
 *      &tpl=`fieldTpl`
 * ]]
 * 
 * [[cbGetFieldContent?
 *      &field=`13`
 *      &fieldSettingFilter=`class==keyImage`
 *      &tpl=`fieldTpl`
 * ]]
 * 
 * An optional &resource param allows checking for fields on other resources.
 * An option &fieldSettingFilter allows filtering by == or != of a field setting. Only items matching the filter will be returned.
 * An optional &limit param allows limiting the number of matched fields
 * An optional &offset param allows skipping the first n matched fields 
 * An optional &tpl param is a chunk name defining a template to use for your field. If not set,
 *   the ContentBlocks template for the field will be used.
 * An optional &wrapTpl param is a chunk name defining a template to use for your field wrapper.
 *   If not set, the ContentBlocks wrapper template for the field will be used. Applies only to
 *   multi-value inputs (galleries, files, etc.)
 * An optional &returnAsJSON parameter will return all values of the selected field as JSON.
 *
 * @var modX $modx
 * @var array $scriptProperties
 */
 

// Use the current resource if it\'s available
$resource = isset($modx->resource) ? $modx->resource : false;

// If we have a requested resource...
if ($scriptProperties[\'resource\']) {
    // ... check if it is the same one as the current, and only load the requested resource if it isn\'t
    if ($resource instanceof modResource) {
        if ($scriptProperties[\'resource\'] != $resource->get(\'id\')) {
            $resource = $modx->getObject(\'modResource\', (int)$scriptProperties[\'resource\']);
        }
    }
    // ... or grab the requested resource anyway
    else {
        $resource = $modx->getObject(\'modResource\', (int)$scriptProperties[\'resource\']);
    }
}

// Make sure we have a resource or end here
if (!$resource) {
    return \'\';
}

$fld = $modx->getOption(\'field\', $scriptProperties, 0, true);
$fieldSettingFilter = $modx->getOption(\'fieldSettingFilter\', $scriptProperties, false, true); 
$limit = $modx->getOption(\'limit\', $scriptProperties, 0, true);
$offset = $modx->getOption(\'offset\', $scriptProperties, 0, true);
$innerLimit = $modx->getOption(\'innerLimit\', $scriptProperties, 0, true);
$innerOffset = $modx->getOption(\'innerOffset\', $scriptProperties, 0, true);
$tpl = $modx->getOption(\'tpl\', $scriptProperties, false, true);
$wrapTpl = $modx->getOption(\'wrapTpl\', $scriptProperties, false, true);
$showDebug = $modx->getOption(\'showDebug\', $scriptProperties, false, true);
$returnAsJSON = $modx->getOption(\'returnAsJSON\', $scriptProperties, false, true);

/** @var array $debug */
$debug = array(\'scriptProperties\' => $scriptProperties);
$output = \'\';

if(!$fld) {
    $showDebug = true;
}

else {
    // Make sure this is a contentblocks-enabled resource
    $enabled = $resource->getProperty(\'_isContentBlocks\', \'contentblocks\');
    $debug[\'enabled\'] = (bool)$enabled;
    if ($enabled !== true) return;
    
    // Get the field counts
    $counts = $resource->getProperty(\'fieldcounts\', \'contentblocks\');
    $debug[\'counts\'] = $counts;
    if (is_array($counts) && isset($counts[$fld])) {
        $fieldsData = $resource->getProperty(\'linear\', \'contentblocks\');
        $fieldsTypeData = array();
        $cbCorePath = $modx->getOption(\'contentblocks.core_path\', null, $modx->getOption(\'core_path\').\'components/contentblocks/\'); 
        $ContentBlocks = $modx->getService(\'contentblocks\',\'ContentBlocks\', $cbCorePath.\'model/contentblocks/\');
        $ContentBlocks->loadInputs();
        $field = $modx->getObject(\'cbField\', $fld);

        if(!($field instanceof cbField)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[cbGetFieldContent] Error loading field \' . $fld);
            return;
        }
        
        if($tpl) {
            $chunk = $modx->getObject(\'modChunk\', array(\'name\' => $tpl));
            if ($chunk instanceof modChunk) {
                $field->set(\'template\', $chunk->get(\'content\'));
            }
        }
        
        if($wrapTpl) {
            $chunk = $modx->getObject(\'modChunk\', array(\'name\' => $wrapTpl));
            if ($chunk instanceof modChunk) {
                $field->set(\'wrapper_template\', $chunk->get(\'content\'));
            }
        }
    
        $debug[\'fieldsData\'] = $fieldsData;
        
        foreach($fieldsData as $fieldData) {
          	if($fieldData[\'field\'] == $fld) {
                $fieldsTypeData[] = $fieldData;
          	}
        }
        
        $debug[\'fieldsTypeData\'] = $fieldsTypeData;
      
        if($fieldSettingFilter) {
            $operators = array(
                \'!=\' => \'!=\',
                \'==\' => \'==\',
            );
            $filters = explode(\',\', $fieldSettingFilter);
            $debug[\'filters\'] = array(\'original\' => $filters);
            foreach($filters as $i => $filter) {
                foreach($operators as $op => $symbol) {
                    if (strpos($filter, $op, 1) !== false) {
                        $operator = $op;
                        break;
                    }
                }
                
                $filter = explode($operator, $filter);
                $debug[$i][\'filter\'] = $filter;
                $setting = array_shift($filter);
                $value = array_shift($filter);
                $debug[$i][\'setting\'] = $setting;
                $debug[$i][\'value\'] = $value;
                $debug[$i][\'operator\'] = $operator;
                
                foreach($fieldsTypeData as $idx => $fieldData) {
                    if($fieldData[\'settings\'] && array_key_exists($setting, $fieldData[\'settings\'])) {
                        switch($operator) {
                            case \'==\' :
                                if($fieldData[\'settings\'][$setting] != $value) {
                                    unset($fieldsTypeData[$idx]);
                                }
                            break;
                            case \'!=\' :
                                if($fieldData[\'settings\'][$setting] == $value) {
                                    unset($fieldsTypeData[$idx]);
                                }
                            break;
                        }
                    }
                }
            }
        }
        
        if($offset) {
            $fieldsTypeData = array_splice($fieldsTypeData, (int)$offset);
            $debug[\'offset\'] = $offset;
        }
        if($limit) {
            $fieldsTypeData = array_splice($fieldsTypeData, 0, $limit);
            $debug[\'limit\'] = $limit;
        }
        
        $debug[\'result\'] = $fieldsTypeData;

        if ($innerLimit || $innerOffset) {
            switch ($field->get(\'input\')) {
                case \'repeater\':
                    $keyname = \'rows\';
                    break;
                case \'gallery\':
                    $keyname = \'images\';
                    break;
                default:
                    $keyname = \'\';
            }
            if (!empty($keyname)) {
                $debug[\'innerLimit\'] = $innerLimit;
                $debug[\'innerOffset\'] = $innerOffset;

                foreach ($fieldsTypeData as &$fieldsTypeInner) {
                    if ($innerOffset) {
                        $fieldsTypeInner[$keyname] = array_splice($fieldsTypeInner[$keyname], (int)$innerOffset);
                    }
                    if ($innerLimit) {
                        $fieldsTypeInner[$keyname] = array_splice($fieldsTypeInner[$keyname], 0, $innerLimit);
                    }
                }
            }
        }

        if(!$returnAsJSON && count($fieldsTypeData)) {
            $i = 0;
            foreach($fieldsTypeData as $fieldData) {
                $i++;
                $output .= $ContentBlocks->generateFieldHtml($fieldData, $field, $i);
            }
        }

        if($returnAsJSON) {
            if($showDebug) {
                $output = $modx->toJSON(array(\'output\' => $fieldsTypeData, \'debug\' => $debug));
            }
            else {
                $output = $modx->toJSON($fieldsTypeData);
            }
        }
    }
}

if(!$returnAsJSON && $showDebug) {
    $output .= \'<pre>\' . print_r($debug, true) . \'</pre>\';
}


return $output;',
    ),
  ),
  'ff700ccad1616fe18cf00b66c3cce220' => 
  array (
    'criteria' => 
    array (
      'name' => 'cbFileFormatSize',
    ),
    'object' => 
    array (
      'id' => 14,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cbFileFormatSize',
      'description' => 'Format a filesize. (Part of ContentBlocks)',
      'editor_type' => 0,
      'category' => 20,
      'cache_type' => 0,
      'snippet' => '/**
 * $the cbFileFormatSize snippet is used for formatting a number of bytes, into a more user friendly format.
 * It is intended to be used as output filter. For example:
 *
 * [[+size:cbFileFormatSize]] where [[+size]] is an integer.
 *
 * Optionally, it is possible to specify the number of decimals that should be added. Do this by specifying
 * a numeric value as option, like this:
 *
 * [[+size:cbFileFormatSize=`0`]] => no decimals
 * [[+size:cbFileFormatSize=`2`]] => 2 decimals, which is also the default *
 *
 * @var modX $modx
 * @var array $input
 * @var array $options
 */

$cbCorePath = $modx->getOption(\'contentblocks.core_path\', null, $modx->getOption(\'core_path\').\'components/contentblocks/\');
$contentBlocks = $modx->getService(\'contentblocks\',\'ContentBlocks\', $cbCorePath.\'model/contentblocks/\');

$bytes = $input;
$decimals = (isset($options) && is_numeric($options)) ? $options : 2;
return $contentBlocks->formatBytes($bytes, $decimals);',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * $the cbFileFormatSize snippet is used for formatting a number of bytes, into a more user friendly format.
 * It is intended to be used as output filter. For example:
 *
 * [[+size:cbFileFormatSize]] where [[+size]] is an integer.
 *
 * Optionally, it is possible to specify the number of decimals that should be added. Do this by specifying
 * a numeric value as option, like this:
 *
 * [[+size:cbFileFormatSize=`0`]] => no decimals
 * [[+size:cbFileFormatSize=`2`]] => 2 decimals, which is also the default *
 *
 * @var modX $modx
 * @var array $input
 * @var array $options
 */

$cbCorePath = $modx->getOption(\'contentblocks.core_path\', null, $modx->getOption(\'core_path\').\'components/contentblocks/\');
$contentBlocks = $modx->getService(\'contentblocks\',\'ContentBlocks\', $cbCorePath.\'model/contentblocks/\');

$bytes = $input;
$decimals = (isset($options) && is_numeric($options)) ? $options : 2;
return $contentBlocks->formatBytes($bytes, $decimals);',
    ),
  ),
  '7146d7a5978c49f0eed6a98f7756ddd7' => 
  array (
    'criteria' => 
    array (
      'name' => 'ContentBlocks',
    ),
    'object' => 
    array (
      'id' => 19,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ContentBlocks',
      'description' => 'The main plugin for ContentBlocks, responsible for handling generating the form as well as saving the resource. (Part of ContentBlocks)',
      'editor_type' => 0,
      'category' => 20,
      'cache_type' => 0,
      'plugincode' => '/**
 * ContentBlocks
 *
 * Events: OnDocFormRender, OnDocFormSave
 *
 * @package contentblocks
 */

$corePath = $modx->getOption(\'contentblocks.core_path\', null, $modx->getOption(\'core_path\') . \'components/contentblocks/\');
$assetsUrl = $modx->getOption(\'contentblocks.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/contentblocks/\');

/**
 * @var ContentBlocks $ContentBlocks
 * @var modResource $resource
 * @var modX $modx
 * @var array $scriptProperties
 */
$ContentBlocks = $modx->getService(\'contentblocks\', \'ContentBlocks\', $corePath . \'model/contentblocks/\');

switch ($modx->event->name) {
    case \'OnDocFormPrerender\':
        if ($modx->controller && isset($modx->controller->resource) && $modx->controller->resource instanceof modResource) {
            $resource = $modx->controller->resource;
            $ContentBlocks->setResource($modx->controller->resource);
        }
        else {
            return;
        }

        // Default settings
        $disabled = (int)$modx->getOption(\'contentblocks.disabled\', null, false);
        $acceptedResourceTypes = $modx->getOption(\'contentblocks.accepted_resource_types\', null, \'modDocument,mgResource\');

        // Fake the wctx variable for loading the working context to get settings
        if (!isset($_GET[\'wctx\'])) $_GET[\'wctx\'] = $resource->get(\'context_key\');

        // If we got the working context, get some settings
        if ($modx->controller->loadWorkingContext()) {
            $disabled = (int)$modx->controller->workingContext->getOption(\'contentblocks.disabled\', $disabled);
            $acceptedResourceTypes = $modx->controller->workingContext->getOption(\'contentblocks.accepted_resource_types\', $acceptedResourceTypes);
        }

        // Check if we\'re using an allowed resource type
        $acceptedType = false;
        $acceptedResourceTypes = explode(\',\', $acceptedResourceTypes);
        foreach ($acceptedResourceTypes as $type) {
            if ($resource instanceof $type) $acceptedType = true;
        }

        // If contentblocks is disabled or this is not an accepted resource, we can stop here.
        if ($disabled || !$acceptedType) return;

        // Load the lexicon
        $modx->controller->addLexiconTopic(\'contentblocks:default\');
        $isContentBlocks = $resource->getProperty(\'_isContentBlocks\', \'contentblocks\', null);

        // Load the use_contentblocks setting
        if ($ContentBlocks->getOption(\'contentblocks.show_resource_option\', null, true)) {
            $modx->controller->addJavascript($assetsUrl . \'cmp/js/widgets/booleancombo.js\');
            $settingChunk = $modx->newObject(\'modChunk\', array(
                \'content\' => file_get_contents($corePath . \'templates/setting.tpl\')
            ));

            $modx->controller->addHtml($settingChunk->process(array(
                \'value\' => ($isContentBlocks !== false) ? \'1\' : \'0\'
            )));
        }

        // Halt if we\'re not using contentblocks here
        if ($isContentBlocks === false) {
            // we\'re done here
            return;
        }

        // Prepare the content
        $contents = array();
        if ($isContentBlocks) {
            // When reloading, the contentblocks field will contain the JSON data
            $contents = $resource->get(\'contentblocks\');
            if (empty($contents)) {
                // If it\'s empty, we get the data from the resource property instead
                $contents = $resource->getProperty(\'content\', \'contentblocks\');
            }

            // Try to decode the JSON
            $contents = $modx->fromJSON($contents);
        }

        if (!is_array($contents) || empty($contents)) {
            $content = $resource->get(\'content\');
            $contents = $ContentBlocks->getDefaultCanvas(false, $content);
        }

        // Generate a wrapper class to apply, so we can target stuff in CSS
        $wrapperCls = array();
        $wrapperCls[] = \'type_\' . strtolower($resource->get(\'class_key\'));
        $wrapperCls[] = \'position_\' . $ContentBlocks->config[\'canvas_position\'];
        $modxVersion = $modx->getVersionData();
        if (version_compare($modxVersion[\'full_version\'], \'2.3.0-dev\', \'>=\')) {
            $wrapperCls[] = \'modx_v23\';
        }
        if (version_compare($modxVersion[\'full_version\'], \'3.0.0-dev\', \'>=\')) {
            $wrapperCls[] = \'modx_v30\';
        }
        $wrapperCls = implode(\' \', $wrapperCls);

        // Grab objects for building the canvas
        $objects = $ContentBlocks->getObjectsForCanvas($resource);
        $categories = $modx->toJSON($objects[\'categories\']);
        $fields = $modx->toJSON($objects[\'fields\']);
        $layouts = $modx->toJSON($objects[\'layouts\']);
        $templates = $modx->toJSON($objects[\'templates\']);

        $contents = $modx->toJSON($contents);
        $resourceInfo = $modx->toJSON($resource->get(array(\'id\', \'pagetitle\', \'context_key\')));
        $config = $modx->toJSON($ContentBlocks->config);

        $modx->controller->addHtml(<<<HTML
<script type="text/javascript">
    var ContentBlocksCategories = $categories,
        ContentBlocksFields = $fields,
        ContentBlocksLayouts = $layouts,
        ContentBlocksTemplates = $templates,
        ContentBlocksContents = $contents,
        ContentBlocksConfig = $config,
        ContentBlocksWrapperCls = "$wrapperCls",
        ContentBlocksResource = $resourceInfo;

    var cbGenerated = false,
        ContentBlocksWillRenderContent = true;
    MODx.on(\'ready\', function () {
        // Prevent double-generation
        if (cbGenerated) return;
        cbGenerated = true;

        ContentBlocks.render();

        // Hook up to beforesubmit to fetch the values and fetch the content blocks
        Ext.getCmp(\'modx-panel-resource\').on(\'beforesubmit\', function(o) {
            o.form.baseParams[\'contentblocks\'] = ContentBlocks.getData();
        });
    });
</script>
HTML
        );
        $scriptTags = $ContentBlocks->getAssets();
        $modx->controller->addHtml($scriptTags);

        break;

    case \'OnDocFormSave\':
        $ContentBlocks->setResource($resource);
        $modx->resource = $resource;

        $cbJson = $resource->get(\'contentblocks\');

        $cbContent = $modx->fromJSON($cbJson);

        // RenderContent Event
        $response = $modx->invokeEvent(\'ContentBlocks_RenderContent\', array(
            \'cbContent\' => $cbContent,
            \'cbJson\' => $cbJson,
            \'resource\' => $resource
        ));
        // check if customized content was returned
        if (!empty($response) && is_array($response) && json_encode($response) !== \'[""]\') {
            $cbContent = $response[0][\'cbContent\'];
            $cbJson = $response[0][\'cbJson\'];
        }

        if (!empty($cbJson) && $cbContent !== false && is_array($cbContent)) {
            $summary = $ContentBlocks->summarizeContent($cbContent);
            $resource->setProperties(array(
                \'content\' => $cbJson,
                \'linear\' => $summary[\'linear\'],
                \'fieldcounts\' => $summary[\'fieldcounts\'],
                \'_isContentBlocks\' => true,
            ), \'contentblocks\', true);

            // We save the CB data as soon as possible ...
            $resource->save();
            // ... then we parse it to HTML which is stored in the content ...
            try {
                $ContentBlocks->loadParser();
                $resource->setContent($ContentBlocks->generateHtml($cbContent));
                $ContentBlocks->restoreParser();
            } catch (Exception $e) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'Exception while trying to parse the content of resource \' . $resource->id . \': \' . $e->getMessage());
            }
            // ... to make sure parse errors don\'t lose the content.
        }
        $resource->set(\'contentblocks\', \'\');

        // Make sure we need to continue to use contentblocks
        $useCb = $resource->get(\'use_contentblocks\');
        if (in_array($useCb, array(\'0\', \'1\'), true)) {
            $resource->setProperty(\'_isContentBlocks\', (bool)$useCb, \'contentblocks\');
        }
        $resource->save();
        break;

    /**
     * @var string $path
     */
    case \'OnFileManagerFileRename\':
        $ContentBlocks->renames[] = $path;
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
 * ContentBlocks
 *
 * Events: OnDocFormRender, OnDocFormSave
 *
 * @package contentblocks
 */

$corePath = $modx->getOption(\'contentblocks.core_path\', null, $modx->getOption(\'core_path\') . \'components/contentblocks/\');
$assetsUrl = $modx->getOption(\'contentblocks.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/contentblocks/\');

/**
 * @var ContentBlocks $ContentBlocks
 * @var modResource $resource
 * @var modX $modx
 * @var array $scriptProperties
 */
$ContentBlocks = $modx->getService(\'contentblocks\', \'ContentBlocks\', $corePath . \'model/contentblocks/\');

switch ($modx->event->name) {
    case \'OnDocFormPrerender\':
        if ($modx->controller && isset($modx->controller->resource) && $modx->controller->resource instanceof modResource) {
            $resource = $modx->controller->resource;
            $ContentBlocks->setResource($modx->controller->resource);
        }
        else {
            return;
        }

        // Default settings
        $disabled = (int)$modx->getOption(\'contentblocks.disabled\', null, false);
        $acceptedResourceTypes = $modx->getOption(\'contentblocks.accepted_resource_types\', null, \'modDocument,mgResource\');

        // Fake the wctx variable for loading the working context to get settings
        if (!isset($_GET[\'wctx\'])) $_GET[\'wctx\'] = $resource->get(\'context_key\');

        // If we got the working context, get some settings
        if ($modx->controller->loadWorkingContext()) {
            $disabled = (int)$modx->controller->workingContext->getOption(\'contentblocks.disabled\', $disabled);
            $acceptedResourceTypes = $modx->controller->workingContext->getOption(\'contentblocks.accepted_resource_types\', $acceptedResourceTypes);
        }

        // Check if we\'re using an allowed resource type
        $acceptedType = false;
        $acceptedResourceTypes = explode(\',\', $acceptedResourceTypes);
        foreach ($acceptedResourceTypes as $type) {
            if ($resource instanceof $type) $acceptedType = true;
        }

        // If contentblocks is disabled or this is not an accepted resource, we can stop here.
        if ($disabled || !$acceptedType) return;

        // Load the lexicon
        $modx->controller->addLexiconTopic(\'contentblocks:default\');
        $isContentBlocks = $resource->getProperty(\'_isContentBlocks\', \'contentblocks\', null);

        // Load the use_contentblocks setting
        if ($ContentBlocks->getOption(\'contentblocks.show_resource_option\', null, true)) {
            $modx->controller->addJavascript($assetsUrl . \'cmp/js/widgets/booleancombo.js\');
            $settingChunk = $modx->newObject(\'modChunk\', array(
                \'content\' => file_get_contents($corePath . \'templates/setting.tpl\')
            ));

            $modx->controller->addHtml($settingChunk->process(array(
                \'value\' => ($isContentBlocks !== false) ? \'1\' : \'0\'
            )));
        }

        // Halt if we\'re not using contentblocks here
        if ($isContentBlocks === false) {
            // we\'re done here
            return;
        }

        // Prepare the content
        $contents = array();
        if ($isContentBlocks) {
            // When reloading, the contentblocks field will contain the JSON data
            $contents = $resource->get(\'contentblocks\');
            if (empty($contents)) {
                // If it\'s empty, we get the data from the resource property instead
                $contents = $resource->getProperty(\'content\', \'contentblocks\');
            }

            // Try to decode the JSON
            $contents = $modx->fromJSON($contents);
        }

        if (!is_array($contents) || empty($contents)) {
            $content = $resource->get(\'content\');
            $contents = $ContentBlocks->getDefaultCanvas(false, $content);
        }

        // Generate a wrapper class to apply, so we can target stuff in CSS
        $wrapperCls = array();
        $wrapperCls[] = \'type_\' . strtolower($resource->get(\'class_key\'));
        $wrapperCls[] = \'position_\' . $ContentBlocks->config[\'canvas_position\'];
        $modxVersion = $modx->getVersionData();
        if (version_compare($modxVersion[\'full_version\'], \'2.3.0-dev\', \'>=\')) {
            $wrapperCls[] = \'modx_v23\';
        }
        if (version_compare($modxVersion[\'full_version\'], \'3.0.0-dev\', \'>=\')) {
            $wrapperCls[] = \'modx_v30\';
        }
        $wrapperCls = implode(\' \', $wrapperCls);

        // Grab objects for building the canvas
        $objects = $ContentBlocks->getObjectsForCanvas($resource);
        $categories = $modx->toJSON($objects[\'categories\']);
        $fields = $modx->toJSON($objects[\'fields\']);
        $layouts = $modx->toJSON($objects[\'layouts\']);
        $templates = $modx->toJSON($objects[\'templates\']);

        $contents = $modx->toJSON($contents);
        $resourceInfo = $modx->toJSON($resource->get(array(\'id\', \'pagetitle\', \'context_key\')));
        $config = $modx->toJSON($ContentBlocks->config);

        $modx->controller->addHtml(<<<HTML
<script type="text/javascript">
    var ContentBlocksCategories = $categories,
        ContentBlocksFields = $fields,
        ContentBlocksLayouts = $layouts,
        ContentBlocksTemplates = $templates,
        ContentBlocksContents = $contents,
        ContentBlocksConfig = $config,
        ContentBlocksWrapperCls = "$wrapperCls",
        ContentBlocksResource = $resourceInfo;

    var cbGenerated = false,
        ContentBlocksWillRenderContent = true;
    MODx.on(\'ready\', function () {
        // Prevent double-generation
        if (cbGenerated) return;
        cbGenerated = true;

        ContentBlocks.render();

        // Hook up to beforesubmit to fetch the values and fetch the content blocks
        Ext.getCmp(\'modx-panel-resource\').on(\'beforesubmit\', function(o) {
            o.form.baseParams[\'contentblocks\'] = ContentBlocks.getData();
        });
    });
</script>
HTML
        );
        $scriptTags = $ContentBlocks->getAssets();
        $modx->controller->addHtml($scriptTags);

        break;

    case \'OnDocFormSave\':
        $ContentBlocks->setResource($resource);
        $modx->resource = $resource;

        $cbJson = $resource->get(\'contentblocks\');

        $cbContent = $modx->fromJSON($cbJson);

        // RenderContent Event
        $response = $modx->invokeEvent(\'ContentBlocks_RenderContent\', array(
            \'cbContent\' => $cbContent,
            \'cbJson\' => $cbJson,
            \'resource\' => $resource
        ));
        // check if customized content was returned
        if (!empty($response) && is_array($response) && json_encode($response) !== \'[""]\') {
            $cbContent = $response[0][\'cbContent\'];
            $cbJson = $response[0][\'cbJson\'];
        }

        if (!empty($cbJson) && $cbContent !== false && is_array($cbContent)) {
            $summary = $ContentBlocks->summarizeContent($cbContent);
            $resource->setProperties(array(
                \'content\' => $cbJson,
                \'linear\' => $summary[\'linear\'],
                \'fieldcounts\' => $summary[\'fieldcounts\'],
                \'_isContentBlocks\' => true,
            ), \'contentblocks\', true);

            // We save the CB data as soon as possible ...
            $resource->save();
            // ... then we parse it to HTML which is stored in the content ...
            try {
                $ContentBlocks->loadParser();
                $resource->setContent($ContentBlocks->generateHtml($cbContent));
                $ContentBlocks->restoreParser();
            } catch (Exception $e) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'Exception while trying to parse the content of resource \' . $resource->id . \': \' . $e->getMessage());
            }
            // ... to make sure parse errors don\'t lose the content.
        }
        $resource->set(\'contentblocks\', \'\');

        // Make sure we need to continue to use contentblocks
        $useCb = $resource->get(\'use_contentblocks\');
        if (in_array($useCb, array(\'0\', \'1\'), true)) {
            $resource->setProperty(\'_isContentBlocks\', (bool)$useCb, \'contentblocks\');
        }
        $resource->save();
        break;

    /**
     * @var string $path
     */
    case \'OnFileManagerFileRename\':
        $ContentBlocks->renames[] = $path;
        break;
}

return;',
    ),
  ),
  '05efbad48014b380f499f87a437ecff8' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'OnDocFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'OnDocFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'c201d62031b3132b6298969828d12743' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'OnDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'OnDocFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '35bb22f6f1409c91f397a28c12a2f7ef' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'OnFileManagerFileRename',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'OnFileManagerFileRename',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);