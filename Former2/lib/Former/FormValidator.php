<?php
namespace Former;

class FormValidator {
    private $validity;
    private $form;
    private $source;
    
    public function __construct(\Former\FormBuilder $form, $source) {
        $this->form = $form;
        $this->source = $source;
    }
    
    public function validate() {
        $this->validity = true;
    }
    
    public function isValid() {
        return $this->validity;
    }
}