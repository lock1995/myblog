<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function single(){
		$blog_id = $this -> input -> get('blog_id');
		$this -> load -> model('blog_model');
		$this -> load -> model('comment_model');
		$result1 = $this -> blog_model -> get_single_by_blog_id($blog_id);
		$result2 = $this -> comment_model -> get_by_blog_id($blog_id);

		$data = array(
			'blogs' => $result1,
			'comments' => $result2
		);
		$this -> load -> view('single',$data);
	}

	public function contact(){
		$this -> load -> view('contact');
	}

	public function message(){
		$username = $this -> input -> post('username');
		$email = $this -> input -> post('email');
		$content = $this -> input -> post('content');

		if($username == '' || $email == '' || $content == ''){
			//$this -> contact();
			echo "fail";
		}else{
			$this -> load -> model('message_model');
			$this -> message_model -> save($username,$email,$content);
			echo 'success';
		}
	}

	public function comment(){
		$blog_id = $this -> input -> post('blog_id');
		$commname = $this -> input -> post('commname');
		$email = $this -> input -> post('email');
		$website = $this -> input -> post('website');
		$subject = $this -> input -> post('subject');
		$add_time = $this -> input -> post('add_time');

		if($commname == '' || $email == '' || $subject == ''){
			// redirect('welcome/single?blog_id='.$blog_id);
			echo "fail";
		}else{
			$this -> load -> model('comment_model');
			$this -> comment_model -> save($blog_id,$commname,$email,$website,$subject);
			// echo "success";
			// var_dump($result);die();
			$data = array(
				'subject' => $subject,
				'comm_name' => $commname,
				'add_time' => $add_time
			);
			$json = array(
				'data' => $data
			);
			echo json_encode($json);
			// echo $data1;
			
		}
	}

	public function get_articles(){
		$page = $this -> input -> get('page');
		$this -> load -> model('blog_model');
		$all = $this -> blog_model -> get_all();
		$total = count($all);
		$total_page = ceil($total / 6);
		$result = $this -> blog_model -> get_by_page($page);
		$json = array(
			'data' => $result,
			'isEnd' => $page/6+1<=$total_page?false:true
		);
		echo json_encode($json);
	}

}


























