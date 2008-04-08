<?php 
require_once 'Zend/Controller/Action.php'; 
require_once 'Zend/View/Helper/Partial.php'; 
 
class Admin_shipmentController extends Zend_Controller_Action 
{ 
	public function init() 
	{
		$this->view->relatedLinks = array(
			'/admin/user' => 'Manage Users',
			'/admin/order' => 'Manage Orders',
			'/admin/shipping-method' => 'Manage Shipping Methods'
		);
		
		$this->_helper->actionStack('menu', 'nav');		
		$this->_helper->actionStack('related', 'nav');		
	}

    public function indexAction() 
    {   
		
    } 
	
	public function listAction()
	{
		$this->view->shipments = array();
	}
	
	public function addAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/shipment/list');
		}
	}
	
	public function editAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/shipment/list');
		}		
	}
	
	public function deleteAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/shipment/list');
		}
	}
	
} 