<?php
/**
 * User: Chapai
 * Date: 9/25/13
 * Time: 22:54
 */

class Articlemodel extends CH_Model
{
    /**
     * @var string Database table title for articles.
     */
    private $_articleTale;

    function __construct()
    {
        parent::__construct();
        $this->_tablename = 'articles';

        $this->_fieldsToSelect = 'articles.id as id,
                                  articles.alias as alias,
                                  articles.title as title,
                                  articles.content as content,
                                  categories.id as category_id,
                                  categories.title as category,
                                  articles.short_content as short'
    }

    /**
     * @param string|int $articleIdentifier
     *
     * @return array|object If article identifier is not null return type is object(article entity),
     *                      else array of objects.
     */
    public function get($articleIdentifier = null)
    {
        $this->db->select($this->_fieldsToSelect);
        $this->db->from($this->_tablename);
        $this->db->join('categories', 'articles.category_id = categories.id');

        if($articleIdentifier != null)
        {
            if(is_numeric($articleIdentifier))
                $this->db->where(array('articles.id' => $articleIdentifier));
            else
                $this->db->where(array('articles.alias' => $articleIdentifier));


            $this->db->limit(1);
            return $this->db->get()->row();
        }

        return $this->db->get()->result();
    }

    public function getByCategory($categoryId)
    {
        $this->db->select($this->_fieldsToSelect);
        $this->db->from($this->_tablename);
        $this->db->where(array("category_id" => $categoryId));
        $this->db->join('categories', 'articles.category_id = categories.id');

        return $this->db->get()->result();
    }
}