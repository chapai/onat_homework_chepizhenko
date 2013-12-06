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
        $this->load->model('categorymodel');

        $viewData = array(
            'categories' => $this->categorymodel->getNotEmptyCategories(),
            'active_tab' => array('all' => "class='active'")
        );

        $this->_addPageComponent("navigation", "light/core/navigation", $viewData);
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

    public function showArticlesOfCategory($categoryAlias = null)
    {
        if(is_null($categoryAlias))
            show_404();

        $currentCategory = $this->categorymodel->get(array('alias' => $categoryAlias));

        if(!$currentCategory)
        {
            show_404();
            return;
        }

        $articles = $this->articlemodel->getByCategory($currentCategory[0]->id);

        $this->_appendPageComponentData('navigation', 'active_tab', array($currentCategory[0]->id => "class='active'"));

        $viewData = array(
            'articles' => $articles
        );

        $this->_addPageComponent('content', 'light/article/article_feed_view', $viewData);
        $this->_renderPage();
    }

}