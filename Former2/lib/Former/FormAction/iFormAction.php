<?php
namespace Former\FormAction;

interface iFormAction {
    public function __construct($source = '');
    public function setSource($source);
    public function execute();
}