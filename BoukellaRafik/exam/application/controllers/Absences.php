<?php

/**
 * Ce fichier contient la classe AbsencesController.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
*/

/**
 * // TODO :: Description du contrôleur //
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
 */
class AbsencesController
{

    /**
     * // TODO :: Description de l'action //
     *
     * @return void
     */
    public function indexAction()
    {
        
        $this->view->absences = Absence::get();
        
        echo $this->view->render('absences/index.tpl');
    }
    
    /**
     * // TODO :: Description de l'action //
     *
     * @return void
     */
    public function ajouterAction()
    {
        
        // On crée une instance du formulaire
        $form = new Form_Absence_Ajouter();
        
        if ($this->getRequest()->isPost()) {
             
            if ($form->isValid( $this->getRequest()->getPost() )) {
                
                try {
                    Absence::add($form->getValues());
                    $this->_redirect('/Absences');
                }catch (Zend_Db_Exception $e) {
                    $this->view->messages = array('DbError' => $e->getMessage());
                }               
                
            } else {
                $this->view->values = $form->getValues();
                $this->view->messages = $form->getMessages();
            }

        }
        
    }
    
    /**
     * // TODO :: Description de l'action //
     *
     * @return void
     */
    public function modifierAction()
    {
        
        $eleve_id = $this->getRequest()->getParam( 'eleve_id' );
        $absence = Absence::findByeleve_id('eleve_id');
        
        if ($absence == null) {
            $this->_redirect('/Absences');
        }
    
        // On crée une instance du formulaire
        $form = new Form_Absence_Modifier();
        
        if ($this->getRequest()->isPost()) {
             
            if ($form->isValid( $this->getRequest()->getPost() )) {
                
                try {
                    Absence::edit($eleve_id, $form->getValues());
                    $this->_redirect('/Absences');
                }catch (Zend_Db_Exception $e) {
                    $this->view->messages = array('DbError' => $e->getMessage());
                }               
                
            } else {
                $this->view->values = $form->getValues();
                $this->view->messages = $form->getMessages();
            }

        }
    }
    
    /**
     * // TODO :: Description de l'action //
     *
     * @return void
     */
    public function supprimerAction()
    {
    
        $eleve_id = $this->getRequest()->getParam( 'eleve_id' );
        $absence = Absence::findByeleve_id('eleve_id');
        
        if ($absence == null) {
            $this->_redirect('/Absences');
        }
    
        // On crée une instance du formulaire
        $form = new Form_Absence_Supprimer();
        
        if ($this->getRequest()->isPost()) {
             
            if ($form->isValid( $this->getRequest()->getPost() )) {
                
                try {
                    Absence::remove(eleve_id);
                    $this->_redirect('/Absences');
                }catch (Zend_Db_Exception $e) {
                    $this->view->messages = array('DbError' => $e->getMessage());
                }               
                
            } else {
                $this->view->values = $form->getValues();
                $this->view->messages = $form->getMessages();
            }

        }
        
    }

}