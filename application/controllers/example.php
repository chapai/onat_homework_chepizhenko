<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 9/9/13
 * Time: 0:43
 * To change this template use File | Settings | File Templates.
 */

class Example extends CI_Controller
{

    public function index()
    {
        echo "Main page.";
    }

    public function about()
    {
        echo "About page.";
    }


}