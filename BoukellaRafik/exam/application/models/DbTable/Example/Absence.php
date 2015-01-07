<?php
/**
 * Ce fichier contient la classe Absence.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
*/

/**
 * @see Zend_Db_Table_Abstract
 */
require_once 'Zend/Db/Table/Abstract.php';

/**
 * Classe ORM qui représente la table 'absence'.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
 */
class Absence extends Zend_Db_Table_Abstract
{
    
    /*
     * Nom de la table.
     */
    protected $_name = 'absence';
    
    /*
     * Clé primaire de la table.
     */
    protected $_primary = 'eleve_id';
    
    /**
     * Recherche une entrée Absence avec la clé primaire spécifiée
     * et modifie cette entrée avec les nouvelles données.
     *
     * @param integer $id
     * @param array $data
     *
     * @return void
     */
    public static function edit($id, $data)
    {        
        $db = Zend_Registry::get('dbAdapter');
        $db->update('absence', $data, 'absence.eleve_id = ' . $id);
    }
    
    /**
     * Recherche une entrée Absence avec la clé primaire spécifiée
     * et supprime cette entrée.
     *
     * @param integer $id
     *
     * @return void
     */
    public static function remove($id)
    {
        $db = Zend_Registry::get('dbAdapter');
        $db->delete('absence', 'absence.eleve_id = ' . $id);
    }
    
    /**
     * Récupère toutes les entrées Absence avec certains critères
     * de tri, intervalles
     */
    public static function get($order=null, $limit=0, $from=0)
    {
        $db = Zend_Registry::get('dbAdapter');
        
        $query = $db->select()
                    ->from( array("%ftable%" => "absence") );
                    
        if($order != null)
        {
            $query->order($order);
        }

        if($limit != 0)
        {
            $query->limit($limit, $from);
        }

        return $db->fetchAll($query);
    }
    
    /*
     * Recherche une entrée Absence avec la valeur spécifiée
     * et retourne cette entrée.
     *
     * @param int $eleve_id
     */
    public static function findByEleve_id($eleve_id)
    {
        $db = Zend_Registry::get('dbAdapter');

        $query = $db->select()
                    ->from( array("a" => "absence") )                           
                    ->where( "a.eleve_id = " . $eleve_id );

        return $db->fetchRow($query); 
    }
    /*
     * Recherche une entrée Absence avec la valeur spécifiée
     * et retourne cette entrée.
     *
     * @param datetime $date
     */
    public static function findByDate($date)
    {
        $db = Zend_Registry::get('dbAdapter');

        $query = $db->select()
                    ->from( array("a" => "absence") )                           
                    ->where( "a.date = " . $date );

        return $db->fetchRow($query); 
    }
    /*
     * Recherche une entrée Absence avec la valeur spécifiée
     * et retourne cette entrée.
     *
     * @param varchar $absent
     */
    public static function findByAbsent($absent)
    {
        $db = Zend_Registry::get('dbAdapter');

        $query = $db->select()
                    ->from( array("a" => "absence") )                           
                    ->where( "a.absent = " . $absent );

        return $db->fetchRow($query); 
    }
    
    
}
