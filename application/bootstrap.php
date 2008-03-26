<?php  
set_include_path('../library' . PATH_SEPARATOR . get_include_path());  
  
/** @see Zend_Controller_Front */  
require_once 'Zend/Controller/Front.php';  
  
Zend_Controller_Front::run('../application/controllers'); 