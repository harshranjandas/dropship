<?php 
require_once 'Zend/Controller/Action.php'; 
 
class Admin_ProductController extends Zend_Controller_Action 
{ 
	public function init() 
	{
		$this->view->relatedLinks = array(
			'/admin/manufacturer' => 'Manage Manufacturers',
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
		$this->view->products = array();
	}
	
	public function addAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/product/list');
		}
	}
	
	public function editAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/product/list');
		}		
	}
	
	public function deleteAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/product/list');
		}
	}
} 