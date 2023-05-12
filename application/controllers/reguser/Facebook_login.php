<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//session_init();
ini_set('max_execution_time', '300');

//session_start();

class Facebook_login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('facebook');
        $this->load->model('google_login_model');
    }

    public function index() {
        $data['fb'] = $this->getauth();
        $data['LogonUrl'] =  $this->facebook->login_url();
        $this->load->view('fb_login', $data);
        
    }

    public function getauth() {
        $userProfile = array();
        if ($this->facebook->is_authenticated()) {
            $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');

        //echo '<pre>';print_r($userProfile);die();
        $current_datetime = date('Y-m-d H:i:s');

        if($this->google_login_model->Is_already_register($userProfile['id'])){
        //update data
        $full_name  = $userProfile['first_name']." ".$userProfile['last_name'];
        $data = array(
          'oauth_uid' => $userProfile['id'],
          'fullName'  => $full_name,
          'email'  => $userProfile['email'],
          'image' => $userProfile['picture']['data']['url'],
          'role' => 'REGISER',
          'oauth_provider' => 'facebook',
          'updatedAt' => $current_datetime,
        );

        $this->google_login_model->Update_user_data($data, $userProfile['id']);

        $checkdata = array('email' => $userProfile['email'], 'oauth_uid' => $userProfile['id']);
        $this->db->where($checkdata);
        //$query = $this->db->get('admin');
        $userquery = $this->db->get('reguser');
        //$subquery = $this->db->get('subadmin');
        if ($userquery->num_rows() > 0) {
          $this->load->library('session');
          // If there is a user, then create session data
          $row = $userquery->row();
          $data6 = array(
              'id' => $row->id,
              'role' => $row->role,
              'mobile' => $row->mobile,
              'name' => $row->fullName,
              'image' => $row->image,
              'email' => $row->email
          );

          $this->session->set_userdata($data6);
        }
        return redirect('reguser/Reguser_Load_controller/tournametListDetails');
        }else{
        //insert data
        $full_name  = $userProfile['given_name']." ".$userProfile['family_name'];
        $data = array(
          'oauth_uid' => $userProfile['id'],
          'fullName'  => $full_name,
          'email'  => $userProfile['email'],
          'image' => $userProfile['picture']['data']['url'],
          'role' => 'REGISER',
          'oauth_provider' => 'facebook',
          'updatedAt' => $current_datetime,
        );
        $this->google_login_model->Insert_user_data($data);

        $checkdata = array('email' => $userProfile['email'], 'oauth_uid' => $userProfile['id']);
        $this->db->where($checkdata);
        //$query = $this->db->get('admin');
        $userquery = $this->db->get('reguser');
        //$subquery = $this->db->get('subadmin');
        if ($userquery->num_rows() > 0) {
          $this->load->library('session');
          // If there is a user, then create session data
          $row = $userquery->row();
          $data6 = array(
              'id' => $row->id,
              'role' => $row->role,
              'mobile' => $row->mobile,
              'name' => $row->fullName,
              'image' => $row->image,
              'email' => $row->email
          );

          $this->session->set_userdata($data6);
        }
        //$data2['main_content'] = $this->load->view('registeruser/user_dashboard_view', '', TRUE);
        //$this->load->view('registeruser/user_mainTemplate_view', $data2);
        return redirect('reguser/Reguser_Load_controller/tournametListDetails');
        }
       }
        return $userProfile;
    }

    public function logout() {
        try {
          // Some request to the Graph API
            $this->facebook->destroy_session();
            redirect('/facebook_login');
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
          echo 'Message: ' . $e->getMessage();
          $previousException = $e->getPrevious();
          // Do some further processing on $previousException
          exit;
        }

        
    }
}
?>