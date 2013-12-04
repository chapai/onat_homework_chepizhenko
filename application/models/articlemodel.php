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
        $this->_tablename = 'articles';
    }

    /**
     * @param string $articleIdentifier
     * @return array|object If article identifier is null return type is object(article entity), else array of objects.
     */
    public function get($articleIdentifier = null)
    {
//        $whereArray = null;
//        $limit = null;
//
//        if(!$articleIdentifier == null)
//        {
//            if(is_numeric($articleIdentifier))
//            {
//                $whereArray = array('id' => $articleIdentifier);
//                $limit = 1;
//            }
//            else
//            {
//                $whereArray = array('alias' => $articleIdentifier);
//                $limit = 1;
//            }
//        }
//
//        return parent::get($whereArray, $limit);

        $this->db->select('articles.alias as alias, articles.title as title, articles.content as content, categories.title as category, articles.short_content as short');
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

    /**
     * @param string $articleAlias
     * @return mixed
     */
    private function _getByAlias($articleAlias)
    {



    }

    /**
     * @param numeric $articleId
     * @return object
     */
    private function _getById($articleId)
    {


    }
}