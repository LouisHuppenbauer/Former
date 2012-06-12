<?php
namespace Former;

class FormElementFactory {
    public static function factory($element) {
        switch($element) {
            case 'textarea':
                return new \Former\FormElement\FormTextarea();
            break;
        
            case 'input':
                return new \Former\FormElement\FormInput();
            break;
        
            case 'radio':
                return new \Former\FormElement\FormRadio();
            break;
        
            case 'break':
                return new \Former\FormElement\FormBreak();
            break;
        
            case 'select':
                return new \Former\FormElement\FormSelect();
            break;
        
            case 'submit':
                return new \Former\FormElement\FormSubmit();  
            break;
        }
        
    }
}