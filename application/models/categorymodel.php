<?php
/**
 *
 * @version 1.0
 * @package default
 * @author chapai <chepizhenko.alex@gmail.com>
 * @date 05-12-2013
 */

class Categorymodel extends CH_Model
{
    function __construct()
    {
        parent::__construct();
        $this->_tablename = "categories";
    }
}

?>