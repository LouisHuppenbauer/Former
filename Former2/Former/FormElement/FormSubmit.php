<?php
namespace Former\FormElement;

class FormSubmit extends FormElement implements iFormElement{    
    public function getLabel() {}
    public function setLabel($label) {}

    public function getType() {}
    public function setType($type) {}
    
    public function getRequired() {}
    public function setRequired($bool) {}
    
    public function __toString() {
        return "<input type = 'submit' value = '".$this->getAttribute('value')."'></submit>";
    }
}