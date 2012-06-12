<?php
namespace Former\FormElement;

interface iFormElement {
    public function getLabel();
    public function setLabel($label);

    public function getType();
    public function setType($type);

    public function getRequired();
    public function setRequired($bool);
    
    public function getAttribute($attr);
    public function setAttribute($attr, $val);
    
    
    public function __toString();
}