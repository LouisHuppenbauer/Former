<?php
namespace Former\FormElement;

class FormSelect extends FormElement implements iFormElement{
    private $label;
    private $type;
    private $required;
    private $options;
    
    public function addOption($name, $value = '') {
        if(empty($value)) {
            $value = $name;
        }
        $this->options[$value] = $name;
        
        return $this;
    }
    
    public function getLabel() {
        return $this->label;
    }
    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

    public function getType() {
        return $this->type;
    }
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
    
    public function getRequired() {
        return $this->required;
    }
    public function setRequired($bool) {
        $this->required = $bool;
        return $this;
    }
    
    public function __toString() {
        $str = '';
        $label = $this->getLabel();
        $id    = $this->getAttribute('id');
        if(!empty($label)) {
            $str .= '<label '.(!empty($id) ? 'for = "'.$id.'"' : '').'>'.$this->getLabel().'</label>';
        }
        $str .= '<select ';
        foreach($this->attributes AS $attr => $val){
            $str .= $attr.' = "'.$val.'" ';
        }
        $str .= '>';
        foreach($this->options AS $value => $name) {
            $str .= '<option value = "'.$value.'">'.$name.'</option>';
        }
        $str .= '</select>';
        
        return $str;
    }
}