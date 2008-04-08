<?php 
require_once 'Zend/Controller/Action.php'; 
 
class Admin_CategoryController extends Zend_Controller_Action 
{ 
	public function init() 
	{
		$this->view->relatedLinks = array(
			'/admin/product' => 'Manage Products',
			'/admin/manufacturer' => 'Manage Manufacturers'
		);
		
		$this->_helper->actionStack('menu', 'nav');		
		$this->_helper->actionStack('related', 'nav');		
	}

    public function indexAction() 
    {   
		
    } 
	
	public function listAction()
	{
		$this->view->categories = array();
	}
	
	public function addAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/category/list');
		}
	}
	
	public function editAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/category/list');
		}		
	}
	
	public function deleteAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/category/list');
		}
	}
	
} 