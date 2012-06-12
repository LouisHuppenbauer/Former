<?php
// Felder: captcha
// Fehlermeldungen: kann div-id angeben, dieses div wird dann generiert, evtl. auch per js injected)
// Validator checks dataType of source
// Validator may use a factory for all the "datatypes" (makes it more flexible)
// MailAction set mail-sender and mail-recipient (a form-field or a static)
// Add an ID for Form

require_once(__DIR__.'/lib/Symfony/Component/ClassLoader/UniversalClassLoader.php');

$loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespace('Former', __DIR__.'/lib');
$loader->registerNamespace('Former\\FormElement', __DIR__.'/lib/Former');
$loader->registerNamespace('Former\\FormAction', __DIR__.'/lib/Former');
$loader->register();

use \Former\FormBuilder;
use \Former\FormElementFactory; 
use \Former\FormListener;
use \Former\FormActionFactory;

$form = new FormBuilder();
$form->appendElement(FormElementFactory::factory('textarea')->setAttribute('name', 'textarea')->setAttribute('id', 'textarea')->setLabel('Test-Textarea')->setAttribute('style', 'width: 300px'));
$form->appendElement(FormElementFactory::factory('break'));
$form->appendElement(FormElementFactory::factory('input')->setAttribute(array('name', 'id'), 'input')->setLabel('Test-Input'));
$form->appendElement(FormElementFactory::factory('break'));
$form->appendElement(FormElementFactory::factory('radio')->setAttribute(array('name', 'id', 'value'), array('radio', 'radio_1', 'Jean'))->setAttribute('value', 'Jean')->setLabel('Test-Radio-1'));
$form->appendElement(FormElementFactory::factory('break'));
$form->appendElement(FormElementFactory::factory('radio')->setAttribute(array('name', 'id', 'value'), array('radio', 'radio_2', 'Luc'))->setLabel('Test-Radio-2'));
$form->appendElement(FormElementFactory::factory('break'));
$form->appendElement(FormElementFactory::factory('select')->setAttribute('name', 'select')->setAttribute('id', 'select')->addOption('Käse')->addOption('Brot')->addOption('Cheese', 'bread')->setLabel('Test-Select'));
$form->appendElement(FormElementFactory::factory('break'));
$form->appendElement(FormElementFactory::factory('submit')->setAttribute('value', 'Senden'));

$form->display();
?>
<hr />
<?php
$action = FormActionFactory::factory('dump');

$listener = new FormListener($form, $action);
$listener->listen();