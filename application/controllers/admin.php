<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @version 1.0
 * @package default
 * @author chapai <chepizhenko.alex@gmail.com>
 * @date 04-12-2013
 */

class Admin extends CH_Controller
{
    function __construct()
    {
        parent::__construct();

        if(!$this->tank_auth->is_logged_in())
        {
            redirect('/auth/login');
        }

        $this->load->model('articlemodel');

        // navigation bar for admin panel
        $this->_addPageComponent('navigation', 'light/admin/core/navigation', array());
    }

    /**
     * Main page of admin panel
     */
    function index()
    {
        $this->listArticles();
    }

    function newArticle()
    {
        $action = $this->input->get('action');
        if(!$action)
        {
            $this->load->model('categorymodel');

            $viewData = array(
                'action' => 'new',
                'categories' => $this->categorymodel->get()
            );

            $this->_addPageComponent('content','light/admin/article/new_edit_form', $viewData);
            $this->_renderPage();
        }
        elseif($action == "create")
        {
            $articleData = $this->input->post();
            $articleId = $this->articlemodel->post($articleData);

            redirect("/admin/article/edit/" . $articleId);
        }
    }

    function listArticles($category = null)
    {
        $articleList = $this->articlemodel->get();


        $viewData = array(
            'articles' => $articleList
        );

        $this->_addPageComponent('content','light/admin/article/list', $viewData);
        $this->_renderPage();
    }

    function editArticle($articleId = null)
    {

        $this->load->model('categorymodel');

        $articleData = $this->articlemodel->get($articleId);

        $action = $this->input->get('action');


        // if no article
        if(is_array($articleData) && count($articleData) == 0)
            show_404();

        if($action == false or $action == 'edit')
        {
            $categoryList = $this->categorymodel->get();

            $viewData = array(
                'action' => 'edit',
                'article' => $articleData,
                'categories' => $categoryList,
                'current_category' => array($articleData->category_id => 'selected="selected"')
            );

            $this->_addPageComponent('content','light/admin/article/new_edit_form', $viewData);
            $this->_renderPage();
        }
        elseif($action == "save")
        {
            $dataToSave = $this->input->post('article_data', true);
            $this->articlemodel->patch($dataToSave, array('id' => $articleId));

            //
            redirect("/admin/article/edit/" . $articleId);
        }
    }

    function deleteArticle($articleId = null)
    {
        if(is_null($articleId))
        {
            show_404();
            return;
        }
        $this->articlemodel->delete($articleId);
        redirect("/admin/article/list");
    }
}