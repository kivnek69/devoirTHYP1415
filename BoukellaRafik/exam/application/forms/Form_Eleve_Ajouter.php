<?php

/**
 * Ce fichier contient la classe Form_Eleve_Ajouter.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
*/

/**
 * Ajouter une entrée Eleve.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
 */
class Form_Eleve_Ajouter
{
           
    public function init()
    {
        
        $id = new Zend_Form_Element_Text('id');
        $id->setRequired(true)
            ->addValidators(array(new Zend_Validate_Int(), new Zend_Validate_StringLength()));
        
        $nom = new Zend_Form_Element_Text('nom');
        $nom->setRequired(true)
            ->addValidators(array(new Zend_Validate_Alnum(true), new Zend_Validate_StringLength(20)));
        
        $pr�nom = new Zend_Form_Element_Text('pr�nom');
        $pr�nom->setRequired(true)
            ->addValidators(array(new Zend_Validate_Alnum(true), new Zend_Validate_StringLength(20)));
        
        
        
        $this->addElements(array($id, $nom, $pr�nom, ));             
   
    }
            
}