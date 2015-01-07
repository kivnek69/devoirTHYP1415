<?php

class EcrireController extends Zend_Controller_Action
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
	
	 public function ecrireAbsenceAction()
    {
        $dbUti = new Model_DbTable_Example_Absence();
		$this->view->data = $dbUti->findByRole($this->_getParam('role', "THYP 14-15"),true, true);
    }
	
	public function ajouteventAction()
    {
    		//ajouter l'enregistrement dans la base	
    		$idUti = $this->_getParam('idUti');
    		$idTag = $this->_getParam('idTag');
  		$this->view->idUti = $idUti;
    		$dbUT = new Model_DbTable_flux_utitag();
    		$dbUT->ajouter(array("uti_id"=>$idUti,"tag_id"=>$idTag),false);
  		$this->view->data = $dbUT->findByUti_id($idUti);
    }


}

