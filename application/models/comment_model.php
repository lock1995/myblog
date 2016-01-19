 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {

   public function save($blog_id,$commname,$email,$website,$subject){
      return $this -> db -> insert('t_comment', array(
         'blog_id' => $blog_id,
         'comm_name' => $commname,
         'email' => $email,
         'website' => $website,
         'subject' => $subject
      ));
   }

   public function get_by_blog_id($id){
      $data = array( 'blog_id' => $id );
      $this -> db -> order_by('add_time','desc');
      return $this -> db -> get_where('t_comment',$data) -> result();
      // var_dump($result);die();

      // $this -> db ->order_by("comm_id","desc");
      // return $this -> db -> get() -> result();
      // var_dump($rs);die;
   }
}