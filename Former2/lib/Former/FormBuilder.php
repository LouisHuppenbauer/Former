<?php
namespace Former;

class FormBuilder {
    private $elements = array();
    private $method = 'POST';
    private $action = '#';
    
    public function getMethod() {
        return $this->method;
    }
    public function setMethod($method) {
        $this->method = $method;
    }
    
    public function getAction() {
        return $this->action;
    }
    public function setAction($action) {
        $this->action = $action;
    }
    
    public function appendElement(\Former\FormElement\FormElement $element) {
        $this->elements[] = $element;
    }
    
    public function injectElement(\Former\FormElement\FormElement $element, $position) {
        $reorderedElements = array();
        foreach($this->elements AS $pos => $el) {
            if($pos == $position) {
                $reorderedElements[] = $element;
            }
            $reorderedElements[] = $el;
        }
        $this->elements = $reoderedElements;
    }
    
    public function display() {
        print($this);
    }
    
    public function __toString() {
        $str = '<form method = "'.$this->getMethod().'" action = "'.$this->getAction().'">';
            foreach($this->elements AS $element) {
                $str .= $element;
            }
        $str .= '</form>';
        
        return $str;
    }
    
}