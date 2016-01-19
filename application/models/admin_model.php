<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_by_name_pwd($name, $pwd){
        //'select * from t_admin where admin_name=$name and admin_pwd=$pwd'
        $data = array(
            'admin_name' => $name,
            'admin_pwd' => $pwd
        );
        return $this -> db -> get_where('t_admin', $data) -> row();
    }

    public function get_all(){
        return $this -> db -> get('t_admin') -> result();
    }

    public function get_comm_by_blog_id(){
        // $data = array(
        //     'blog_id' => $blog_id
        // );
        return $this -> db -> get('t_comment') -> result();
    }

    public  function save($admin_name, $admin_pwd){

    }

    public  function update(){

    }

    public  function delete($admin_id){
        $this -> db -> delete('t_admin', array('admin_id' => $admin_id));
    }

    public function get_all_message(){
        return $this -> db -> get('t_message') -> result();
    }

    public  function delete_comm($comm_id){
        $this -> db -> delete('t_comment', array('comm_id' => $comm_id));
    }

    public  function delete_msg($msg_id){
        $this -> db -> delete('t_message', array('message_id' => $msg_id));
    }

    public function get_all_blog(){
        return $this -> db -> get('t_blog') -> result();
    }

    public  function delete_blog($blog_id){
        $this -> db -> delete('t_blog', array('blog_id' => $blog_id));
    }

    public  function edit_blog_view($blog_id){
        return $this -> db -> get_where('t_blog',array('blog_id' => $blog_id)) -> result();
    }

    public  function edit_blog($blog_id,$title,$content){
        $data = array(
            'title' => $title,
            'content' => $content
        );
        $this -> db -> where('blog_id',$blog_id);
        $this -> db -> update('t_blog',$data);
    }

    public  function edit_blog_title($blog_id,$title){
        $data = array(
            'title' => $title,
        );
        $this -> db -> where('blog_id',$blog_id);
        $this -> db -> update('t_blog',$data);
    }

    public  function edit_blog_content($blog_id,$content){
        $data = array(
            'content' => $content,
        );
        $this -> db -> where('blog_id',$blog_id);
        $this -> db -> update('t_blog',$data);
    }

    public function add_blog($title,$content,$admin_id){
        $data = array(
            'title' => $title,
            'content' => $content,
            'author' => $admin_id
        );
        $this -> db -> insert('t_blog',$data);
    }
}



















