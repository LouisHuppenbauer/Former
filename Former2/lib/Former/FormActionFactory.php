<?php
namespace Former;

class FormActionFactory {
    public static function factory($action) {
        return new \Former\FormAction\FormActionDump();
    }
}