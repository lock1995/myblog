<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this -> load -> model('admin_model');
    }

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
               'admin_id' => $row -> admin_id,
               'admin_name' => $admin_name,
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
        $offset = $this -> uri -> segment(3);
        if($offset == ''){
            $offset = 0;
        }

        $this->load->library('pagination');

        $config['base_url'] = 'admin/admin_comm';
        $config['total_rows'] = $this -> admin_model -> get_comm_count();
        $config['per_page'] = 10; 

        $this->pagination->initialize($config); 

        $result = $this -> admin_model -> get_comm_by_blog_id($config['per_page'], $offset);
        // $result = $this -> admin_model -> get_comm_by_blog_id();
        $data = array(
            'comments' => $result,
            'total_rows' => $config['total_rows']
        );
        $this -> load -> view('admin/admin-comm', $data);
    }

    public  function  delete_comm(){
        $comm_id = $this -> input -> get('comm_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_comm($comm_id);
        $this -> admin_comm();
    }

    public  function  delete_comms(){
        $comm_ids = $this -> input -> get('comm_ids');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_comms($comm_ids);
        // $this -> admin_comm();
        redirect('admin/admin_comm');
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
        $title = htmlspecialchars($this -> input -> post('title'));
        $content = $this -> input -> post('content');
        $admin_id = $this->session->userdata('admin_id');
        // $this -> admin_model -> add_blog($title,$content,$admin_id);
        // $this -> admin_blog();

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '3072';
        $config['file_name'] = date("YmdHis") . '_' . rand(10000, 99999);

        $this->load->library('upload', $config);
        $this->upload->do_upload('img');
        $upload_data = $this->upload->data();
        // var_dump($upload_data['file_size']);die();
        if ( $upload_data['file_size'] > 0 )
        {
            $photo_url = 'uploads/'.$upload_data['file_name'];//.$upload_data['file_ext'];
            $rows = $this -> admin_model -> add_blog($title, $content, $photo_url, $admin_id);
            if($rows > 0){
                redirect('admin/admin_blog');
            }
        }


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



















