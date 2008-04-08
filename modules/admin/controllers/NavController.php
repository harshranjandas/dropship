<?php 
require_once 'Zend/Controller/Action.php'; 
 
class Admin_NavController extends Zend_Controller_Action 
{ 
    public function menuAction() 
    {     	
		$this->render('menu', 'nav');
    } 
	
	public function relatedAction()
	{
		$this->render('related', 'sidebar');
	}
		
} 