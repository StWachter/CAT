<?php
/**
 * Redactor custom Template Variable
 *
 * Class RedactorInputRender
 */
class RedactorInputRender extends modTemplateVarInputRender {
    /** @var Redactor */
    private $redactor;

    /**
     * Get lexicon topics for this TV.
     * @return array
     */
    public function getLexiconTopics() {
        return array('redactor:default');
    }
    /**
     * @param string $value
     * @param array $params
     * @return mixed
     */
    public function render($value, array $params = array()) {
        /**
         * Get the Redactor service class.
         */
        $corePath = $this->modx->getOption('redactor.core_path', null, $this->modx->getOption('core_path').'components/redactor/');
        $this->redactor = $this->modx->getService('redactor', 'Redactor', $corePath . 'model/redactor/');
        if (!($this->redactor instanceof Redactor)) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, '[Redactor] Error loading Redactor service class.');
            return parent::render($value, $params);
        }

        if ($this->modx->resource) {
            $this->redactor->setResource($this->modx->resource);
        }

        $this->redactor->initialize();

        // Determine the configuration set to use
        $configSet =  $this->redactor->getOption('redactor.configuration_set', null, 1, true);
        if (array_key_exists('configuration_set', $params)) {
            $configSet = $params['configuration_set'];
        }
        $this->setPlaceholder('configSet', $configSet);
        return parent::render($value, $params);
    }

    /**
     * Returns the template path to load.
     * @return string
     */
    public function getTemplate() {
        $corePath = $this->redactor->getOption('redactor.core_path', null, $this->redactor->getOption('core_path').'components/redactor/');
        return $corePath . 'elements/tvs/tpl/input.tpl';
    }
}
return 'RedactorInputRender';
