<?php

/**
 * Ce fichier contient la classe Form_Presence_Ajouter.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
*/

/**
 * Ajouter une entrée Presence.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
 */
class Form_Presence_Ajouter
{
           
    public function init()
    {
        
        $eleve_id = new Zend_Form_Element_Text('eleve_id');
        $eleve_id->setRequired(true)
            ->addValidators(array(new Zend_Validate_Int(), new Zend_Validate_StringLength()));
        
        $date = new Zend_Form_Element_('date');
        $date->setRequired(true)
            ->addValidators(array());
        
        $present = new Zend_Form_Element_Text('present');
        $present->setRequired(true)
            ->addValidators(array(new Zend_Validate_Alnum(true), new Zend_Validate_StringLength(20)));
        
        
        
        $this->addElements(array($eleve_id, $date, $present, ));             
   
    }
            
}