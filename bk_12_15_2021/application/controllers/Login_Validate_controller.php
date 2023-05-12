<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Validate_controller extends CI_Controller {

    public function loginValidate() {
        $this->load->library('form_validation');
        $config = array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
           return redirect('Call_controller/loginError');
        } else {
            $email = $this->input->post('email');
            $passwoard =  md5($this->input->post('password'));
            $this->load->model('Login_model');
            $userRole = $this->Login_model->Login($email, $passwoard);

            if ($userRole === "admin" || $userRole === "editor" || $userRole === "subeditor") {
                return redirect('admin/Admin_Load_controller/dashboard');   
            }
            else if ($userRole === "user") {
                return redirect('reguser/Reguser_Load_controller/dashboard');
            }
            else {
                 return redirect('Call_controller/loginError');
            }
        }
    }
    
    public function emailValidate() {
        $this->load->library('form_validation');
        $config = array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
           return redirect('Call_controller/forgatepassError');
        } else {
            $email = $this->input->post('email');
           

            $this->load->model('Login_model');

            $userRole = $this->Login_model->forgatePass($email);
            if ($userRole === "admin") {

                return redirect('Call_controller/forgaterepass');
                
                
            }
            
            else if ($userRole === "user") {

                return redirect('Call_controller/forgaterepass');
            }
            
            
            else {
                  return redirect('Call_controller/forgatepassError');
            }
        }

    }
    
    
    public function codeValidate() {

        $this->load->model('admin/Get_model');
         $tableName= $this->session->userdata('tableName');
         $id= $this->session->userdata('id');
         $index = "recover";

        $this->load->library('form_validation');
        $config = array(
            array(
                'field' => 'code',
                'label' => 'Code',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            

            
           return redirect('Call_controller/forgatepassError');
        } 
        
        else
            
            {
            
          
            
            $code = $this->input->post('code');
           
          $varificationCode = $this->Get_model->getDataForEditIndex($tableName, $index,$code);
          foreach ($varificationCode as $row) {
             $codeNew = $row['recover'];
           
           
             
         }
          
        

        
            if ($code === $codeNew) {

                return redirect('Call_controller/UpdatePassView');
                
                
            }
            
           
            else {
                  return redirect('Call_controller/forgatepassError');
            }
  }

    }
    
    
    public function updatePassValidate() {

       $this->load->model('admin/Update_model');
       
         $tableName= $this->session->userdata('tableName');
         $id= $this->session->userdata('id');
         

        $this->load->library('form_validation');
        $config = array(
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
           return redirect('Call_controller/forgatepassError');
        } 
        
        else
            
            {
            
           
           $data = array
                (
                'password' => md5($this->input->post('password'))
                
            );
           $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);
        

        
            if ($returnValue) {

                return redirect('Call_controller/logout');
                
                
            }
            
           
            else {
                $this->session->sess_destroy();
                  return redirect('Call_controller/errorview');
            }
        }

    }

    
    
    
    
    
}
