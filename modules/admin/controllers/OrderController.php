<?php 
require_once 'Zend/Controller/Action.php'; 
require_once 'Zend/View/Helper/Partial.php'; 
 
class Admin_OrderController extends Zend_Controller_Action 
{ 
	public function init() 
	{
		$this->view->relatedLinks = array(
			'/admin/customer' => 'Manage Customers',
			'/admin/shipment' => 'Manage Shipments',
			'/admin/invoice' => 'Manage Invoices',
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
		$this->view->orders = array();
	}
	
	public function addAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/order/list');
		}
	}
	
	public function editAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/order/list');
		}		
	}
	
	public function deleteAction()
	{
		if ($this->getRequest()->isPost()) {
			$this->_redirect('/admin/order/list');
		}
	}
	
} 