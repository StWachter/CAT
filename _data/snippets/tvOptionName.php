id: 23
source: 2
name: tvOptionName
category: 'Snippets and Output-Filters'
properties: 'a:0:{}'

-----

/*
 * tvOptionName
 *
 * returns the Name of a tv option (type: DropDown List or multi DropDown List)
 *
 * Usage examples:
 * [[*tvName:tvOptionName=`65`]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

$tv = $options; // ID of TV

$tv = $modx->getObject('modTemplateVar', $tv);
$optionValues = $tv->get('elements');   
$options = explode("||", $optionValues);

foreach ($options as $option) {
    $valueKey = explode("==", trim($option));
    
    if (trim($valueKey[1]) == trim($input)) {
        return trim($valueKey[0]);
    }
}

return $input;