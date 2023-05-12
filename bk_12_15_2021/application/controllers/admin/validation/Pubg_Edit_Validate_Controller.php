<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pubg_Edit_Validate_Controller extends MY_Controller {


    
    
    
    
        public function validatePubgDuoEditReg() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
       

       $config = array(
            array(
                'field' => 'playerName',
                'label' => 'Player Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ),
            array(
                'field' => 'mobile',
                'label' => 'Mobile',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'vName',
                'label' => 'Village Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'teamName',
                'label' => 'Team Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'pTag',
                'label' => 'Personal Tag',
                'rules' => 'required'
            )
            
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
              return redirect('admin/Admin_Load_controller/errorview');
        } 
        
        else {
            
            
         
            
            
             $data = array
                (
                'name' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'pubname' => $this->input->post('vName'),
                'pubnumber' => $this->input->post('pTag'),
                'platfrom' => $this->input->post('cName'),
                'map' => $this->input->post('cTag'),
                'mode' => $this->input->post('mode'),
                'teamname' => $this->input->post('teamName'),
                'team ' => $this->input->post('team')
            );
            
            
            
            
            

           

            $this->load->model('admin/Update_model');

            $tableName = $this->input->post('table');
            $id = $this->input->post('id');

            

            $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);

            if ($returnValue === true) {

                return redirect('admin/Admin_Load_controller/successview');
            } else {
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }
    
    
    
        public function validateMlbbEditReg() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
       

       $config = array(
            array(
                'field' => 'playerName',
                'label' => 'Player Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ),
            array(
                'field' => 'mobile',
                'label' => 'Mobile',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'vName',
                'label' => 'Village Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'teamName',
                'label' => 'Team Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'pTag',
                'label' => 'Personal Tag',
                'rules' => 'required'
            )
            
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
              return redirect('admin/Admin_Load_controller/errorview');
        } 
        
        else {
            
            
         
            
            
             $data = array
                (
                'name' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'mlbbtagname' => $this->input->post('vName'),
                'tagid' => $this->input->post('pTag'),
                
                'teamname' => $this->input->post('teamName')
               
            );
            
            
            
            
            

           

            $this->load->model('admin/Update_model');

            $tableName = $this->input->post('table');
            $id = $this->input->post('id');

            

            $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);

            if ($returnValue === true) {

                return redirect('admin/Admin_Load_controller/successview');
            } else {
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }
    

    
 public function validatePubgTeamEdit() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
       

       $config = array(
            
            array(
                'field' => 'ptwoName',
                'label' => 'Tag Name',
                'rules' => 'required'
            )
            
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
              return redirect('admin/Admin_Load_controller/errorview');
        } 
        
        else {
            
            
             $data = array
                (
                'pubgid' => $this->input->post('ptwoName')
                
            );
            
            
           

            $this->load->model('admin/Update_model');

            $tableName = $this->input->post('table');
            $id = $this->input->post('id');

            

            $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);

            if ($returnValue === true) {

                return redirect('admin/Admin_Load_controller/successview');
            } else {
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }
    
    
    
     public function validateMlbbTeamEdit() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
       

       $config = array(
            
            array(
                'field' => 'ptwoName',
                'label' => 'Tag Name',
                'rules' => 'required'
            )
            
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
              return redirect('admin/Admin_Load_controller/errorview');
        } 
        
        else {
            
            
             $data = array
                (
                'mlbbid' => $this->input->post('ptwoName')
                
            );
            
            
           

            $this->load->model('admin/Update_model');

            $tableName = $this->input->post('table');
            $id = $this->input->post('id');

            

            $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);

            if ($returnValue === true) {

                return redirect('admin/Admin_Load_controller/successview');
            } else {
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }

}
