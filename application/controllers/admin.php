<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function login(){
        $this->load->view('admin/login');
    }

    public function check_login(){
        //1. 接数据
        $admin_name = $this -> input -> post('admin_name');
        $admin_pwd = $this -> input -> post('admin_pwd');


        //2. 查数据
        $this -> load -> model('admin_model');
        $row = $this -> admin_model -> get_by_name_pwd($admin_name, $admin_pwd);

        //分页
        // $this->load->library('pagination');
        // $config['base_url'] = 'admin/check_login';
        // $config['total_rows'] = 15;
        // $config['per_page'] = 3; 
        // $this->pagination->initialize($config); 
        // echo $this->pagination->create_links();

        //跳转
        if($row){
            // $this -> load -> model('admin_model');
            // $result = $this -> admin_model -> get_all_message();
            $this->load->library('session');
            $newdata = array(
               'admin_id'  => $row -> admin_id,
               'email'     => $admin_name,
               'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            // var_dump($this->session->all_userdata());die();
            $data = array(
                'admins' => $row
            );
            $this -> load -> view('admin/admin-index',$data);
        }else{
            $this->load->view('admin/login');
        }
    }

    public  function admin_mgr(){
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_all();
//        if($result){
            $data = array(
                'admins' => $result
            );
            $this -> load -> view('admin/admin-mgr', $data);
//        }

    }

    public  function  delete_admin(){
        $admin_id = $this -> input -> get('admin_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete($admin_id);
        $this -> admin_mgr();
    }

    public  function admin_comm(){
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_comm_by_blog_id();
            $data = array(
                'comments' => $result
            );
            $this -> load -> view('admin/admin-comm', $data);
    }

    public  function  delete_comm(){
        $comm_id = $this -> input -> get('comm_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_comm($comm_id);
        $this -> admin_comm();
    }

    public  function admin_msg(){
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_all_message();
            $data = array(
                'messages' => $result
            );
            $this -> load -> view('admin/admin-msg', $data);
    }

    public  function  delete_msg(){
        $msg_id = $this -> input -> get('msg_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_msg($msg_id);
        $this -> admin_msg();
    }

    public  function admin_blog(){
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_all_blog();
        $data = array(
            'blogs' => $result
        );
        $this -> load -> view('admin/admin-blog', $data);
    }

    public  function  delete_blog(){
        $blog_id = $this -> input -> get('blog_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_blog($blog_id);
        $this -> admin_blog();
    }

    public function add_blog_view(){
        $this -> load -> view('admin/add-blog-view'); 
    }

    public function add_blog(){
        $title = $this -> input -> post('title');
        $content = $this -> input -> post('content');
        $admin_id = $this->session->userdata('admin_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> add_blog($title,$content,$admin_id);
        $this -> admin_blog();
        // redirect('upload');


    }

    public function update_blog(){
        $title = $this -> input -> post('title');
        $content = $this -> input -> post('content');
        $blog_id = $this -> input -> get('blog_id');
        // var_dump($title);die();
        $this -> load -> model('admin_model');
        $this -> admin_model -> edit_blog($blog_id,$title,$content);
        $this -> admin_blog();
    }

    public function blog_edit_title(){
        $title = $this -> input -> post('title');
        $blog_id = $this -> input -> post('blog_id');
        // var_dump($title);die();
        $this -> load -> model('admin_model');
        $this -> admin_model -> edit_blog_title($blog_id,$title);
        echo $title;
    }

    public function blog_edit_content(){
        $content = $this -> input -> post('content');
        $blog_id = $this -> input -> post('blog_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> edit_blog_content($blog_id,$content);
        echo $content;
    }

    public function sign_out(){
        $this->session->sess_destroy();
        $this -> login();
    }

    public function upload(){
        // redirect('upload');
        $this -> load -> library("upload");
        $this -> upload;
        $data = $this -> upload -> data();
    }

}



















