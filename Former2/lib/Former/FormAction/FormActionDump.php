<?php
namespace Former\FormAction;

class FormActionDump extends FormAction implements iFormAction {
    private $source;
    
    public function __construct($source = '') {
        $this->setSource($source);
    }
    
    public function setSource($source) {
        $this->source = $source;
    }
    
    public function execute() {
        echo '<pre>';
        var_dump($this->source);
        echo '</pre>';
    }
}