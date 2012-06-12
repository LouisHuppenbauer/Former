<?php
namespace Former\FormAction;

class FormActionMail extends FormAction implements iFormAction {
    private $source;
    
    public function __construct($source = '') {
        $this->setSource($source);
    }
    
    public function setSource($source) {
        $this->source = $source;
    }
    
    public function execute() {
        
    }
}