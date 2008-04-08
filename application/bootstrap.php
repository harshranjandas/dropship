<?php  
set_include_path('../library' . PATH_SEPARATOR . get_include_path());  

require_once 'Zend/Controller/Front.php';  
require_once 'Zend/Layout.php';
require_once 'Zend/View/Helper/Doctype.php';
require_once 'Zend/View/Helper/HeadLink.php';
require_once 'Zend/View/Helper/HeadMeta.php';
require_once 'Zend/View/Helper/HeadScript.php';
require_once 'Zend/View/Helper/HeadStyle.php';
require_once 'Zend/View/Helper/HeadTitle.php';

Zend_Layout::startMvc();
  
$front = Zend_Controller_Front::getInstance();

$front->setControllerDirectory(array(
	'default' => '../application/controllers',
	'admin' => '../modules/admin/controllers'
));

$front->dispatch();