<?php

/**
 * Ce fichier contient la classe Form_Absence_Supprimer.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
*/

/**
 * Supprimer une entrée Absence.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
 */
class Form_Absence_Supprimer
{
           
    public function init()
    {
        
        $eleve_id = new Zend_Form_Element_Text('eleve_id');
        $eleve_id->setRequired(true)
            ->addValidators(array(new Zend_Validate_Int(), new Zend_Validate_StringLength()));
        
        $date = new Zend_Form_Element_('date');
        $date->setRequired(true)
            ->addValidators(array());
        
        $absent = new Zend_Form_Element_Text('absent');
        $absent->setRequired(true)
            ->addValidators(array(new Zend_Validate_Alnum(true), new Zend_Validate_StringLength(20)));
        
        
        
        $this->addElements(array($eleve_id, $date, $absent, ));             
   
    }
            
}