<?php 
require_once 'Zend/Controller/Action.php'; 
 
class Admin_ManufacturerController extends Zend_Controller_Action 
{ 
	public function init() 
	{
		$this->view->relatedLinks = array(
			'/admin/product' => 'Manage Products',
			'/admin/category' => 'Manage Categories'
		);
		
		$this->_helper->actionStack('menu', 'nav');		
		$this->_helper->actionStack('related', 'nav');		
	}
	
    public function indexAction() 
    {     	
    } 
	
	public function listAction()
	{
		$this->view->manufacturers = array();
	}
	
	public function addAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/manufacturer/list');
		}
	}
	
	public function editAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/manufacturer/list');
		}		
	}
	
	public function deleteAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/manufacturer/list');
		}
	}
} 