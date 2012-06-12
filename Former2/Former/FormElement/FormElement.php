<?php
namespace Former\FormElement;

abstract class FormElement {
    protected $attributes = array();
    
    public function getAttribute($attr) {
        if(empty($this->attributes[$attr])) {
            $this->setAttribute($attr, '');
        }
        return $this->attributes[$attr];
    }
    
    public function setAttribute($attr, $val) {
        if(is_array($attr)) {
            if(!is_array($val)) {
                $val = array_fill(0, count($attr), $val);
            }
            $attribute = array_combine($attr, $val);
            $this->attributes = array_merge($this->attributes, $attribute);
        }
        else {
            $this->attributes[$attr] = $val;
        }
        
        return $this;
    }
}