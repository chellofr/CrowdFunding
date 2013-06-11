<?php
/**
* @package      CrowdFunding
* @subpackage   Libraries
* @author       Todor Iliev
* @copyright    Copyright (C) 2010 Todor Iliev <todor@itprism.com>. All rights reserved.
* @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
* CrowdFunding is free software. This vpversion may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

defined('JPATH_PLATFORM') or die;

JLoader::register("CrowdFundingTableCurrency", JPATH_ADMINISTRATOR .DIRECTORY_SEPARATOR."components".DIRECTORY_SEPARATOR."com_crowdfunding".DIRECTORY_SEPARATOR."tables".DIRECTORY_SEPARATOR."currency.php");

/**
 * This class contains methods that are used for managing currency.
 *
 * @package      CrowdFunding
 * @subpackage   Libraries
 */
class CrowdFundingCurrency extends CrowdFundingTableCurrency {
    
    protected static $instances = array();
    
    public function __construct($id = 0) {
        
        // Set database driver
        $db = JFactory::getDbo();
        parent::__construct($db);
        
        if(!empty($id)) {
            $this->load($id);
        }
    }
    
    public static function getInstance($id = 0)  {
    
        if (empty(self::$instances[$id])){
            $currency = new CrowdFundingCurrency($id);
            self::$instances[$id] = $currency;
        }
    
        return self::$instances[$id];
    }
    
    
    /**
     * This method generates an amount using symbol or code of the currency.
     * 
     * @param mixed $value This is a value used in the amount string. This can be float, integer,...
     * @return string
     */
    public function getAmountString($value) {
        
        if(!empty($this->symbol)) { // Symbol
            $amount = $this->symbol.$value;
        } else { // Code
            $amount = $value.$this->abbr;
        }
        
        return $amount;
    }
    
}
