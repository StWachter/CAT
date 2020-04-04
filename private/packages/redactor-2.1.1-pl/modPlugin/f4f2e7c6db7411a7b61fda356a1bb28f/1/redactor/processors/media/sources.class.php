<?php
require_once MODX_PROCESSORS_PATH . 'source/getlist.class.php';

class RedactorMediaSourcesProcessor extends modMediaSourceGetListProcessor
{
    public function prepareRow(xPDOObject $object) {
        $objectArray = $object->get(array('id', 'name'));
        return $objectArray;
    }
}

return 'RedactorMediaSourcesProcessor';