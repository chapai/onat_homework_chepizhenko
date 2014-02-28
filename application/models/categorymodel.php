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

    public function getNotEmptyCategories()
    {
        $result = $this->db->select('category_id')->distinct()->from('articles')->get()->result();

        $uniqueIds = array();
        foreach($result as $object)
        {
            $uniqueIds[] = $object->category_id;
        }

        $this->db
            ->select()
            ->from($this->_tablename)
            ->where_in('id', $uniqueIds);

        return  $this->db->get()->result();
    }

}

?>