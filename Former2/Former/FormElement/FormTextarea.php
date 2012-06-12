<?php
namespace Former\FormElement;

class FormTextarea extends FormElement implements iFormElement{
    private $label;
    private $type;
    private $required;
    
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
        $str .= '<textarea ';
        foreach($this->attributes AS $attr => $val){
            $str .= $attr.' = "'.$val.'" ';
        }
        $str .= '></textarea>';
        
        return $str;
    }
}