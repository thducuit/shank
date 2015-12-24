<?php
//REQUIRE
require_once APPPATH . 'modules/default/controllers/parent.php';

if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends Parent_Controller
{

    private $data;

    function __construct()
    {
        //if i remove this parent::__construct(); the error is gone
        parent::__construct();
        $this->data = $this->get_data();
    }

    public function index($lang, $alias_name)
    {

        $this->data['about'] = $this->find_post_by_alias_name($this->data['about_list'], $alias_name);
        $this->data['seo_title'] = $this->data['about']['post_seo_title'];
        $this->data['seo_keywords'] = $this->data['about']['post_seo_keywords'];
        $this->data['seo_description'] = $this->data['about']['post_seo_description'];
        //_pr($this->data['about'],true);
        //RUN VIEW
        $this->template->build('about/index', $this->data);
    }

    private function find_post_by_alias_name($about_list, $alias_name)
    {
        for ($i = 0; $i < count($about_list); $i++) {
            $a = $about_list[$i]['alias_name'];
            if (strcmp($a, $alias_name) == 0) {
                return $about_list[$i];
            }
        }
        return array();
    }

}