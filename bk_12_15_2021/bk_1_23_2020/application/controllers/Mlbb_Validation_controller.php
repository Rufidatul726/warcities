<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlbb_Validation_controller extends CI_Controller {
    
    
    


    
    
    
    public function validateMlbbReg() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
        $this->load->model('admin/Get_model');


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
                'field' => 'pTag',
                'label' => 'Personal Tag',
                'rules' => 'required'
            ),
            array(
                'field' => 'teamName',
                'label' => 'Team Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'ptwoName',
                'label' => 'Player ID Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'pthreeName',
                'label' => 'Player ID Name',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'pfourName',
                'label' => 'Player ID Name',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'pfiveName',
                'label' => 'Player ID Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'subtituteName',
                'label' => 'Player ID Name',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            return redirect('Main_controller/errorview');
        } else {
            
           $value= $this->input->post('email');
              $fieldName = "email";
              $userTable= "reguser";
               $newvalue = $this->Get_model->CheckDataExistOrNot($userTable, $fieldName, $value);
            
            
            if($newvalue)
            {
                return redirect('Main_controller/errorview');
            }
            
            
            else {
            
            
            
            $regtableName = "reguser";

            $userdata = array
                (
                'fullName' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'role' => 'REGISER',
                'paymentstatus' => 'NONE',
                'mobile' => $this->input->post('mobile')
            );

            $this->Insert_model->insert($regtableName, $userdata);
            $reguser = $this->Get_model->getLastRow($regtableName);

            foreach ($reguser as $row) {
                $regid = $row['id'];
            }






            $data = array
                (
                'name' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                
                'mlbbtagname' => $this->input->post('vName'),
                'tagid' => $this->input->post('pTag'),
                
                
               
                'userid' => $regid,
                'playerPaymentSatus' => "UNPAID",
               
                'teamname' => $this->input->post('teamName'),
                'subtorunamentId' => $this->input->post('subTournameID'),
            );



            $tableName = $this->input->post('table');

            $pubgSubTable = "submlbb";

            $subPubgdata =  array(
                                    array(
                                                 'mlbbid' => $this->input->post('ptwoName'),
                                                 'subtid' => $this->input->post('subTournameID'),
                                                 'teamleadid' => $regid,
                                                 'teamname' => $this->input->post('teamName')
                                    ),
                                    array(
                                                 'mlbbid' => $this->input->post('pthreeName'),
                                                 'subtid' => $this->input->post('subTournameID'),
                                                 'teamleadid' => $regid,
                                                 'teamname' => $this->input->post('teamName')
                                    ),
                                   array(
                                                  'mlbbid' => $this->input->post('pfourName'),
                                                 'subtid' => $this->input->post('subTournameID'),
                                                 'teamleadid' => $regid,
                                                 'teamname' => $this->input->post('teamName')
                                    ),
                                    
                                     array(
                                                 'mlbbid' => $this->input->post('pfiveName'),
                                                 'subtid' => $this->input->post('subTournameID'),
                                                 'teamleadid' => $regid,
                                                 'teamname' => $this->input->post('teamName')
                                    ),
                
                                     array(
                                                 'mlbbid' => $this->input->post('subtituteName'),
                                                 'subtid' => $this->input->post('subTournameID'),
                                                 'teamleadid' => $regid,
                                                 'teamname' => $this->input->post('teamName')
                                    )
                               );





            if (($this->Insert_model->insert($tableName, $data)) && ($this->Insert_model->batchinsert($pubgSubTable, $subPubgdata))) {

                $email = $this->Get_model->getLastRow($tableName);

                foreach ($email as $row) {
                    $getEmail = $row['email'];
                    $getName = $row['name'];
                    $newname = str_replace(" ", "", $getName);
                }
                $gameName = "MOBILE LEGENDS BANG BANG";
                $newNameGame = str_replace(" ", " ", $gameName);
                return redirect('email/Email_controller/regTournamentUser/' . $getEmail . '/' . $newname . '/' . $newNameGame . '');
            } else {
                return redirect('Main_controller/errorview');
            }
        }
        
        
        
       } 
        
       
    }
    
    
    
    
    
    
    
    
    
    
    
}
