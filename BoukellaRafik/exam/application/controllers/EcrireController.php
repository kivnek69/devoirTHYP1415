<?php

class EcrireController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
	
	 public function ecrireAction()
    {
        // action body
    }
	
	 public function ecrireAbsenceAction()
    {
        $dbUti = new Model_DbTable_Example_Absence();
		$this->view->data = $dbUti->findByAbsent($this->_getParam('absent'),true, true);
    }
	
	 public function ecrirePresenceAction()
    {
        $dbUti = new Model_DbTable_Example_Presence();
		$this->view->data = $dbUti->findByPresent($this->_getParam('present'),true, true);
    }
	
	public function ajouteventAction()
    {
    	
    }


}

