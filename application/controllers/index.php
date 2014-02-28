<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User: user
 * Date: 9/25/13
 * Time: 22:45
 */

class Index extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Main page
     */
    public function index()
    {
        echo "Main page.";
    }

    /**
     * About page
     */
    public function about()
    {
        echo "About page.";
    }

}