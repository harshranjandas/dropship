<?php 
/** @see Zend_Controller_Action */ 
require_once 'Zend/Controller/Action.php'; 
 
class IndexController extends Zend_Controller_Action 
{ 
    public function indexAction() 
    {     
	
		$form = $this->getAddCommentForm(); 
	 
	    if ($this->getRequest()->isPost()) {  
	        if ($form->isValid($_POST)) {  
	            $values = $form->getValues();  
	            $this->view->values = $values; 
	        }  
	    }  
	  
	    $this->view->form = $form; 
	
    } 
	
	/**
	 * This function returns the form used for
	 * adding comments in blog application
	 */ 
	public static function getAddCommentForm() 
	{ 
	    require_once 'Zend/Form.php'; 
	    $form = new Zend_Form(array( 
	        'method'   => 'post', 
	        'elements' => array( 
	            'comments' => array('textarea', array( 
	                'required' => true, 
	                'label' => 'Write your comments' 
	            )), 
	            'submit' => array('submit', array( 
	                'label' => 'Send' 
	            )) 
	        ), 
	    )); 
	 
	    return $form; 
	} 
} 