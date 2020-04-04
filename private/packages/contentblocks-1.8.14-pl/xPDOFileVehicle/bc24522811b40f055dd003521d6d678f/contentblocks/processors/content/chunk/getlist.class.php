<?php

/**
 * Class ContentBlocksChunkGetListProcessor
 */
class ContentBlocksChunkGetListProcessor extends modObjectGetListProcessor {
    public $classKey = 'modChunk';
    public $languageTopics = array('chunk','category');

    public function prepareQueryBeforeCount(xPDOQuery $c) {
        $id = $this->getProperty('id', '');
        if (!empty($id)) {
            $c->where(array(
                $this->classKey . '.id' => $id,
            ));
        }
        return $c;
    }
}
return 'ContentBlocksChunkGetListProcessor';
