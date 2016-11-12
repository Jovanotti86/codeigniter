<?php

/**
 * Created by PhpStorm.
 * User: draga
 * Date: 11/8/2016
 * Time: 8:16 PM
 */
class Pages extends CI_Controller
{
    public function view($page = "home")
    {
        if(!file_exists(APPPATH."views\\pages\\".$page.'.php'))
        {
            show_404();
        }

        $data['title']=ucfirst($page);


        $this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer',$data);



    }

}