<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 9/9/13
 * Time: 0:43
 * To change this template use File | Settings | File Templates.
 */

class Article extends CH_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('articlemodel');
    }

    /**
     * Main page
     *
     * Displays list of all recently aded articles.
     *
     */
    public function index()
    {

        $articles = $this->articlemodel->get();

        $viewData = array(
            'articles' => $articles
        );

        $this->_addPageComponent('content', 'light/article/article_feed_view', $viewData);
        $this->_renderPage();
    }

    /** Shows article by alias or id.
     *
     * @param string $articleAlias
     */
    public function showSingleArticle($articleIdentifier)
    {
        $article = $this->articlemodel->get($articleIdentifier);

        if(is_array($article) && (count($article) == 0))
            show_404('Article not found');

        $viewData = array(
            'article' => $article
        );

        $this->_addPageComponent('content', 'light/article/single_article_view', $viewData);
        $this->_renderPage();
    }
}