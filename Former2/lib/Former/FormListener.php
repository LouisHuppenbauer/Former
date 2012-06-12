<?php
namespace Former;

class FormListener {
    private $form;
    private $action;
    public function __construct(\Former\FormBuilder $form, \Former\FormAction\FormAction $action) {
        $this->form = $form;
        $this->action = $action;
    }
    
    public function listen() {
        $source = $this->form->getMethod() == 'POST' ? $_POST : $_GET;
        
        if(!empty($source)) {
            $validator = new FormValidator($this->form, $source);
            $validator->validate();
            $this->action->setSource($source);
            
            if($validator->isValid()) {
                $this->action->execute();
            }
            else {
                echo "Das Formular ist noch nicht valid";
            }
        }
    }
}