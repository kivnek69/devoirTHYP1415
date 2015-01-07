<?php

class LireController extends Zend_Controller_Action
{

//var $rss = array("THYP1415"=>"http://picasaweb.google.com/data/feed/base/user/107401320610499259896/albumid/6065229773950541889?alt=rss&kind=photo&authkey=Gv1sRgCNak7e60l-7VlgE&hl=fr"	);

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
	
	 public function lireAction()
    {
        
    }
	
	 public function lireAbsenceAction()
    {
        $dbUti = new Model_DbTable_Example_Absence();
		$this->view->data = $dbUti->findByAbsent($this->_getParam('absent'),true, true);
    }
	
	 public function lirePresenceAction()
    {
        $dbUti = new Model_DbTable_Example_Presence();
		$this->view->data = $dbUti->findByPresent($this->_getParam('present'),true, true);
    }
	
	public function ajouteventAction()
    {
    	
    }


}

