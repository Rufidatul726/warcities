<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Google_login extends CI_Controller {

  public function __construct()
  {
  parent::__construct();
    $this->load->model('google_login_model');
  }

  public function login(){
    //die();
    include_once APPPATH . "../vendor/autoload.php";
    $google_client = new Google_Client();
    $google_client->setClientId('274861605414-ope16asotl2530c2q9a9kpdhujrbvbag.apps.googleusercontent.com');
    $google_client->setClientSecret('tu7W_ogo0WFHBrwOZJLQnVOS');
    $google_client->setRedirectUri('https://test.warcities.com/reguser/google_login/login');
    $google_client->addScope('email');
    $google_client->addScope('profile');

    if(isset($_GET["code"])){
     $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
     if(!isset($token["error"]))
     {
      $google_client->setAccessToken($token['access_token']);
      $this->session->set_userdata('access_token', $token['access_token']);
      $google_service = new Google_Service_Oauth2($google_client);
      $data1 = $google_service->userinfo->get();

      $current_datetime = date('Y-m-d H:i:s');

      if($this->google_login_model->Is_already_register($data1['id'])){
        //update data
        
        $full_name  = $data1['given_name']." ".$data1['family_name'];
        $data = array(
          'oauth_uid' => $data1['id'],
          'fullName'  => $full_name,
          'email'  => $data1['email'],
          'image' => $data1['picture'],
          'role' => 'REGISER',
          'oauth_provider' => 'google',
          'updatedAt' => $current_datetime,
        );
        
        $this->google_login_model->Update_user_data($data, $data1['id']);

        $checkdata = array('email' => $data1['email'], 'oauth_uid' => $data1['id']);
        $this->db->where($checkdata);
        $userquery = $this->db->get('reguser');
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
      }else{
        //insert data
        $full_name  = $data1['given_name']." ".$data1['family_name'];
        $data = array(
          'oauth_uid' => $data1['id'],
          'fullName'  => $full_name,
          'email'  => $data1['email'],
          'image' => $data1['picture'],
          'role' => 'REGISER',
          'oauth_provider' => 'google',
          'createdAt'  => $current_datetime
        );
        $this->google_login_model->Insert_user_data($data);

        $checkdata = array('email' => $data1['email'], 'oauth_uid' => $data1['id']);
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
    }

    // $login_button = '';

    // if(!$this->session->userdata('access_token')){
    //  $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="'.base_url().'asset/sign-in-with-google.png" /></a>';
    //  $data['login_button'] = $login_button;
    //  $this->load->view('subpage/login_view', $data);
    // }else{
    //   $this->load->view('subpage/login_view');
    // }
  }

  function logout(){
    $this->session->unset_userdata('access_token');
    $this->session->unset_userdata('user_data');
    redirect('reguser/google_login/login');
  }
 
}
?>
