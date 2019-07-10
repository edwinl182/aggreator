<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Estimate extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('estimate_model');
		$movedata = array();
	}

	public function index(){
		$this->load->template('estimate');
	}

	public function property_info(){
		$this->load->template('property_info');
	}

	public function personal_info(){
		$this->load->template('personal_info');
	}

	public function items_info($data=null){
		$this->load->template('items_info',$data);
	}

	public function service_type(){
		$this->load->template('service_type');
	}

	public function summary(){
		$this->load->template('summary');
	}

	public function form_one_validate(){
		$this->form_validation->set_rules('property_size','Property','required|trim');
		$this->form_validation->set_rules('from_area','From Area','required|trim');
		$this->form_validation->set_rules('to_area','To Area','required|trim');
		$this->form_validation->set_rules('move_date','Move Date','required');
		if($this->form_validation->run()){
			if($this->session->userdata('movedata') && !empty($this->session->userdata('movedata'))){
				$movedata = $this->session->userdata('movedata');
			}
			$movedata['property_size']= $this->input->post('property_size');
			$movedata['moving_from'] = $this->input->post('from_area');
			$movedata['moving_to'] = $this->input->post('to_area');
			$movedata['moving_date'] = $this->input->post('move_date');
			$this->session->set_userdata('movedata',$movedata);
			redirect('estimate/property_info');
		}else{
			$this->index();
		}
	}

	public function property_info_validate(){
		$this->form_validation->set_rules('current_floor','Current Floor','required|trim');
		$this->form_validation->set_rules('old_elevator_availability','Elevator Availability','required|trim');
		$this->form_validation->set_rules('old_parking_dist','Current Floor','required|trim');
		$this->form_validation->set_rules('new_floor','Elevator Availability','required|trim');
		$this->form_validation->set_rules('new_elevator_availability','Current Floor','required|trim');
		$this->form_validation->set_rules('new_parking_dist','Elevator Availability','required|trim');
		if($this->form_validation->run()){
			if($this->session->userdata('movedata') && !empty($this->session->userdata('movedata'))){
				$movedata = $this->session->userdata('movedata');
			}
			$movedata['current_floor']= $this->input->post('current_floor');
			$movedata['old_elevator_availability'] = $this->input->post('old_elevator_availability');
			$movedata['old_parking_dist'] = $this->input->post('old_parking_dist');
			$movedata['new_floor'] = $this->input->post('new_floor');
			$movedata['new_elevator_availability'] = $this->input->post('new_elevator_availability');
			$movedata['new_parking_dist'] = $this->input->post('new_parking_dist');
			$this->session->set_userdata('movedata',$movedata);
			redirect('estimate/personal_info');
		}else{
			$this->property_info();
		}
	}

	public function personal_info_validate(){
		$this->form_validation->set_rules('first_name','First Name','required|trim');
		$this->form_validation->set_rules('last_name','Last Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[customers.email]');
		$this->form_validation->set_rules('phone', 'Phone Number ', 'required|regex_match[/^[0-9]{10}$/]|is_unique[customers.phone]');
		if($this->form_validation->run()){
			if($this->session->userdata('movedata') && !empty($this->session->userdata('movedata'))){
				$movedata = $this->session->userdata('movedata');
			}
			$movedata['first_name']= $this->input->post('first_name');
			$movedata['last_name'] = $this->input->post('last_name');
			$movedata['email'] = $this->input->post('email');
			$movedata['phone'] = $this->input->post('phone');
			$movedata['verification_key'] = md5(rand());
			$movedata['user_id'] = "B".rand(10000,99999);
			$data = array(
				'user_id' => $movedata['user_id'],
				'first_name' => $movedata['first_name'],
				'last_name' => $movedata['last_name'],
				'email' => $movedata['email'],
				'phone' => $movedata['phone'],
				'verification_key' => $movedata['verification_key']
			);
			$this->session->set_userdata('movedata',$movedata);
			$result = $this->estimate_model->insert_personal_data($data);
			if($result >= 0){
				//$this->session->set_userdata('user_id',$movedata['user_id']);
				$this->session->set_flashdata('message','A verification link is sent to your email. Please check your email to verify and proceed.');
				if($this->sendEmailVerificationLink($movedata['verification_key'])){
					redirect('estimate/personal_info');
				}else{
					$this->session->set_flashdata('message','There is an error sending verificaton link to your email. Please check your email and try again');
					redirect('estimate/personal_info');
				}
			}
		}else{
			$this->personal_info();
		}
	}


	public function verify_email(){
		if($this->uri->segment(3)){
			$verification_key = $this->uri->segment(3);
			if($this->estimate_model->verify_email($verification_key)){
				$movedata = $this->session->userdata('movedata');
				$movedata['is_email_verified'] = true;
				$this->session->set_userdata('movedata',$movedata); 
			}else{
				$movedata = $this->session->userdata('movedata');
				$movedata['is_email_verified'] = false;
				$this->session->set_userdata('movedata',$movedata); 
			}
			redirect('estimate/items_info');
		}
	}


	public function items_data(){
		$data = $this->input->form_data();
		$data = array_filter($data);
		$count = 0;
		foreach ($data as $key => $value) {
			$count += $value;
		}
		
		$itemData = implode('|', array_map(
		    function ($v, $k) { 
		    	return sprintf("%s=%s", $k, $v);
		    },$data,array_keys($data)
		));
		$movedata = $this->session->userdata('movedata');
		$movedata['items'] = $itemData;
		$movedata['total_items'] = $count;
		$this->session->set_userdata('movedata',$movedata);
		redirect('estimate/service_type');

	}


	public function service_type_select(){
		$movedata = $this->session->userdata('movedata');
		$estimate_id = "E".rand(10000,99999);
		$movedata['estimate_id'] = $estimate_id;
		$this->session->set_userdata('movedata',$movedata);
		if($this->uri->segment(3)){
			$service_type = $this->uri->segment(3);
			$finalData = array(
				'estimate_id'=>$movedata['estimate_id'],
				'user_id'=>$movedata['user_id'],
				'moving_from'=>$movedata['moving_from'],
				'moving_to'=>$movedata['moving_to'],
				'moving_on'=>$movedata['moving_date'],
				'property_size'=>$movedata['property_size'],
				'old_floor_no'=>$movedata['current_floor'],
				'new_floor_no'=>$movedata['new_floor'],
				'old_elevator_availability'=>$movedata['old_elevator_availability'],
				'new_elevator_availability'=>$movedata['new_elevator_availability'],
				'old_parking_distance'=>$movedata['old_parking_dist'],
				'new_parking_distance'=>$movedata['new_parking_dist'],
				'items'=>$movedata['items'],
				'total_items'=>$movedata['total_items'],
				'service_type'=>$service_type
			);
			$result = $this->estimate_model->insert_items_data($finalData);
			if($result === true){
				$this->session->set_flashdata('items_success_message','Your request for quote has been received succedfully. We will get you the quotes from our trusted vendors less than 24 hours. Please login with your phone number to update your request');
				redirect('estimate/summary');
			}else{
				$this->session->set_flashdata('error_message',$result);
				redirect('estimate/service_type');
			}
		}
	}


	function sendEmailVerificationLink($key){

        $this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();
        
        //$mail->SMTPDebug = 4; 
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'samnsimson@gmail.com';                 // SMTP username
        $mail->Password = 'S@mS!mson!';                           // SMTP password
        $mail->SMTPSecure = 'tls';  
        $mail->SMTPAutoTLS = false;                          
        $mail->Port = 587;
        $mail->setFrom('info@boxigo.com', 'Boxigo');
        $mail->addReplyTo('info@boxigo.com', 'Boxigo');
        $mail->addAddress($this->input->post('email'));
        $mail->Subject = 'Please verify email for login';
        $mail->isHTML(true);
        $mailContent = "<h4>Hi ".$this->input->post('first_name')." ".$this->input->post('last_name')."</h4>
					<p>Please click this <a href='".base_url()."estimate/verify_email/".$key."'>link</a> to verify your email.</p>
					<p>Thanks.</p>";
        $mail->Body = $mailContent;
        $mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		);
        if($mail->send()){
            return true;
        }else{
            return false;
        }
	}
}

?>

