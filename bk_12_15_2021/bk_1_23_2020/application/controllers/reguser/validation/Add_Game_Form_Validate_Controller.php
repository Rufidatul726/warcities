<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Game_Form_Validate_Controller extends MY_Controller {

    public function validateAddGame() {

        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
        $this->load->model('admin/Create_model');

        $config = array(
            array(
                'field' => 'gamename',
                'label' => 'Game Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'sdate',
                'label' => 'Start Date',
                'rules' => 'required'
            ),
            array(
                'field' => 'edate',
                'label' => 'End Date',
                'rules' => 'required'
            ),
            array(
                'field' => 'table',
                'label' => 'Table Name',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {


            return redirect('reguser/Reguser_Load_controller/errorview');
        } else {


            $tableName = $this->input->post('table');

            $returnValue = $this->Create_model->create($tableName);


            $data = array
                (
                'tournamentName' => $this->input->post('gamename'),
                'startDate' => $this->input->post('sdate'),
                'endDate' => $this->input->post('edate'),
                'tablename' => $this->input->post('table'),
                'status' => 'ACTIVE'
            );




            if ($returnValue === true) {

                $gameTable = "tournament";
              $this->Insert_model->insert($gameTable, $data);

                return redirect('reguser/Reguser_Load_controller/successview');
            } else {
                  return redirect('reguser/Reguser_Load_controller/errorview');
            }
        }
    }
    
    
    
    
    
   public function validateAddPaymetn() {
       
           $this->load->model('admin/Get_model');

        $this->load->library('form_validation');
        $this->load->model('admin/Update_model');
        

        $config = array(
            array(
                'field' => 'tranjectiontype',
                'label' => 'Payment Type',
                'rules' => 'required'
            ),
            array(
                'field' => 'tranjection',
                'label' => 'Tranjection ID',
                'rules' => 'required'
            ),
            array(
                'field' => 'table',
                'label' => 'Amount',
                'rules' => 'required'
            ),
            
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {


            return redirect('reguser/Reguser_Load_controller/errorview');
        } else {


            $tableName = $this->input->post('tableName');
            $id = $this->input->post('id');


            $data = array
                (
                'trantype' => $this->input->post('tranjectiontype'),
                'tranjectionid' => $this->input->post('tranjection'),
                'totalamount' =>$this->input->post('table')
               
            );


            $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);

            if ($returnValue === true) {
                
                 $smsdetais = $this->Get_model->getDataForEdit($tableName, $id);
                 
                 $pname = $smsdetais['0']['name'];
                 $pmobile = $smsdetais['0']['mobile'];
                 $sms =   $this->pubgPaymentSms( $pname, $pmobile);
                 
                return redirect('reguser/Reguser_Load_controller/successview');
            } 
            else {
                  return redirect('reguser/Reguser_Load_controller/errorview');
            }
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    public function validateCocEditReg() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
       

        $config = array(
            array(
                'field' => 'playerName',
                'label' => 'Player Name',
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
                'field' => 'cName',
                'label' => 'Clan Name',
                'rules' => 'required'
            ),
           
             array(
                'field' => 'selector1',
                'label' => 'Clan Position',
                'rules' => 'required'
            ),
            array(
                'field' => 'cTag',
                'label' => 'Clan Tag',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
               return redirect('reguser/Reguser_Load_controller/errorview');
        } 
        
        else {
            
            
            $data = array
                (
                'name' => $this->input->post('playerName'),
                'mobile' => $this->input->post('mobile'),
                'vname' => $this->input->post('vName'),
                'ptag' => $this->input->post('pTag'),
                'cname' => $this->input->post('cName'),
                'ctag' => $this->input->post('cTag'),
                'cpos' => $this->input->post('selector1')
            );

           

            $this->load->model('admin/Update_model');

            $tableName = $this->input->post('table');
            $id = $this->input->post('id');

            

            $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);

            if ($returnValue === true) {

                return redirect('reguser/Reguser_Load_controller/successview');
            } else {
                return redirect('reguser/Reguser_Load_controller/errorview');
            }
        }
    }
    
    

    public function validateEditeGame() {

        $this->load->library('form_validation');
        $this->load->model('admin/Update_model');


        $config = array(
            array(
                'field' => 'gamename',
                'label' => 'Game Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'sdate',
                'label' => 'Start Date',
                'rules' => 'required'
            ),
            array(
                'field' => 'edate',
                'label' => 'End Date',
                'rules' => 'required'
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {


            return redirect('admin/Admin_Load_controller/errorview');
        } else {


            $tableName = $this->input->post('table');

            $id = $this->input->post('id');


            $data = array
                (
                'tournamentName' => $this->input->post('gamename'),
                'startDate' => $this->input->post('sdate'),
                'endDate' => $this->input->post('edate'),
            );

            $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);

            if ($returnValue === true) {

                return redirect('admin/Admin_Load_controller/successview');
            } else {
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }

    
    
    
    
    
    public function validateAnyGameRegEdite() {

        $this->load->library('form_validation');
        $this->load->model('admin/Update_model');


        $config = array(
            array(
                'field' => 'playerName',
                'label' => 'Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'cTag',
                'label' => 'Tag Id',
                'rules' => 'required'
            ),
            array(
                'field' => 'mobile',
                'label' => 'End Date',
                'rules' => 'required'
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {


            return redirect('reguser/Reguser_Load_controller/errorview');
        } else {


            $tableName = $this->input->post('table');

            $id = $this->input->post('id');


            $data = array
                (
                'name' => $this->input->post('playerName'),
                'tagid' => $this->input->post('cTag'),
                'mobile' => $this->input->post('mobile')
            );

            $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);

            if ($returnValue === true) {

                  return redirect('reguser/Reguser_Load_controller/successview');
            } else {
                return redirect('reguser/Reguser_Load_controller/errorview');
            }
        }
    }

    
    
    
    
    public function validateAddGameType() {

        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
        
       
         $this->load->model('admin/Get_model');
        $this->load->library('image_lib');
         $this->load->library('upload');
       
        $config = array(
            array(
                'field' => 'gamename',
                'label' => 'Game Name',
                'rules' => 'required'
          )
        );
     $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
        return redirect('admin/Admin_load_controller/errorview');
        }
        else {
            
                                    $config['upload_path'] = './asset/image/Background_image/game/';
                                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
            
                                   $this->upload->initialize($config);
                                   
                                     if ($this->upload->do_upload('image'))
                                     {
                                                    $data = $this->upload->data();
                                                    $image_path= base_url("asset/image/Background_image/game/".$data['raw_name'].$data['file_ext']);
                                                    $picname=$this->upload->data('file_name');
                                                    $piclocation=$this->upload->data('full_path');
                                                    
                                                    
                                                    $gameTable = "game";
                                            $data = array
                                                (
                                                'gamename' => $this->input->post('gamename'),
                                                'picname' => $picname,
                                                'piclocation' =>$image_path

                                                );

                                               $NewReturnValue = $this->Insert_model->insert($gameTable, $data);

                                            if ($NewReturnValue === true) {

                                               return redirect('admin/Admin_Load_controller/successview');
                                            } else {
                                                return redirect('admin/Admin_Load_controller/errorview');
                                            }
                                                    
                                                    
                                                    
                                     }
                                     
                                     
     else {
                  return redirect('admin/Admin_Load_controller/errorview');
            }
             
            
            
        }
    }
    
     public function validateEditGameType() {

        $this->load->library('form_validation');
        $this->load->model('admin/Update_model');
        
        
         $this->load->model('admin/Get_model');
        $this->load->library('image_lib');
         $this->load->library('upload');
       

        $config = array(
            array(
                'field' => 'gamename',
                'label' => 'Game Name',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {


            return redirect('admin/Admin_load_controller/errorview');
        } else {


            $tableName = $this->input->post('table');

            $id = $this->input->post('id');
            
            
                                    $config['upload_path'] = './asset/image/Background_image/game/';
                                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
            
                                   $this->upload->initialize($config);
            
            
            
                                   
                  if ($this->upload->do_upload('image'))
                                     {
                                                    $data = $this->upload->data();
                                                    $image_path= base_url("asset/image/Background_image/game/".$data['raw_name'].$data['file_ext']);
                                                    $picname=$this->upload->data('file_name');
                                                    
                                                    
                                                    
                                                    
                                            $data = array
                                                (
                                                'gamename' => $this->input->post('gamename'),
                                                'picname' => $picname,
                                                'piclocation' =>$image_path

                                                );

                                              $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);

                                            if ($returnValue === true) {

                                               return redirect('admin/Admin_Load_controller/successview');
                                            } else {
                                                return redirect('admin/Admin_Load_controller/errorview');
                                            }
                                                    
                                                    
                                                    
                                     }  
                                     
                                     
                      else {
                                return redirect('admin/Admin_Load_controller/errorview');
                         }             
                                   
           
        }
    }
    
    
    
    public function validateAddItemType() {

        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
       
        $config = array(
            array(
                'field' => 'gamename',
                'label' => 'Game Name',
                'rules' => 'required'
          )
        );
     $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
        return redirect('admin/Admin_load_controller/errorview');
        }
        else {
            $gameTable = "iteam";
            $data = array
                (
                'gamename' => $this->input->post('gamename'),
                );

               $NewReturnValue = $this->Insert_model->insert($gameTable, $data);
              
            if ($NewReturnValue === true) {
                
               return redirect('admin/Admin_Load_controller/successview');
            } else {
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }
    
    
    public function validateEditItemType() {

        $this->load->library('form_validation');
        $this->load->model('admin/Update_model');
       

        $config = array(
            array(
                'field' => 'gamename',
                'label' => 'Game Name',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {


            return redirect('admin/Admin_load_controller/errorview');
        } else {


            $tableName = $this->input->post('table');

            $id = $this->input->post('id');
            
            $data = array
                (
                'gamename' => $this->input->post('gamename'),
                );

               $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);

            if ($returnValue === true) {

                return redirect('admin/Admin_Load_controller/successview');
            } else {
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }
    
    
    
    
    
 
    
    
    
 
    
public function validatePubgReg() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
         $this->load->model('admin/Get_model');
       

        $config = array(
           
            
            array(
                'field' => 'vName',
                'label' => 'Id Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'pTag',
                'label' => 'Id Number',
                'rules' => 'required'
            )
           
            
            
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
             return redirect('reguser/Reguser_Load_controller/errorview');
        } 
        
        else {
            
            
            $data = array
                (
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'pubname' => $this->input->post('vName'),
                'pubnumber' => $this->input->post('pTag'),
                'platfrom' => $this->input->post('cName'),
                'map' => $this->input->post('cTag'),
                'mode' => $this->input->post('mode'),
                'userid' => $this->session->userdata('id'),
                'team' => $this->input->post('team'),
                'playerPaymentSatus' => $this->input->post('payment'),
                'subtorunamentId' => $this->input->post('subTournameID')
            );

           

            $tableName = $this->input->post('table');


            

            if ($this->Insert_model->insert($tableName, $data))  {
                
                $regUsertableName = "reguser";
                $reguId = $this->session->userdata('id');
                 $email = $this->Get_model->getDataForEdit($regUsertableName, $reguId);
                 
               foreach ($email as $row)
               {
                   $getEmail = $row['email'];
                    $getName = $row['fullName'];
                    $newname = str_replace("%20"," ",$getName);
                }
                
                
                
                $gameTableName = "subtournament";
                $subtId = $this->input->post('subTournameID');
                $testGameName = $this->Get_model->getDataForEdit($gameTableName, $subtId);
                $gameName = $testGameName[0]["tournamentName"];
                 $newNameGame = str_replace("%20"," ",$gameName);
                 
                 $pname = $this->input->post('name');
                 $pmobile = $this->input->post('mobile');
                 $sms =   $this->pubgSms( $pname, $pmobile);
                 
                 return redirect('email/Email_controller/regUserTournament/'.$getEmail.'/'.$newname.'/'.$newNameGame.'');
                
               
                
            }
            else {
                return redirect('reguser/Reguser_Load_controller/errorview');
            }
        }
    }    

    
   public function validateGameReg() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
         $this->load->model('admin/Get_model');

        $config = array(
            array(
                'field' => 'playerName',
                'label' => 'TAG ID',
                'rules' => 'required'
            ),
            
            
            
           
            
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
              return redirect('reguser/Reguser_Load_controller/errorview');
        } 
        
        else {
            
            
            
            
            
            
            
            
            $data = array
                (
                'tagid' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
               'userid' => $this->session->userdata('id'),
               'name' => $this->session->userdata('name'),
                 'playerPaymentSatus' => $this->input->post('payment'),
               'subtorunamentId' => $this->input->post('subTournameID'),
                'mobile' => $this->input->post('mobile')
               
            );

           

            $tableName = $this->input->post('table');


            

            if ($this->Insert_model->insert($tableName, $data)) {
                
                $regUsertableName = "reguser";
                $reguId = $this->session->userdata('id');
                 $email = $this->Get_model->getDataForEdit($regUsertableName, $reguId);
                 
               foreach ($email as $row)
               {
                   $getEmail = $row['email'];
                    $getName = $row['fullName'];
                    $newname = str_replace("%20"," ",$getName);
                }
                
                $gameTableName = "subtournament";
                $subtId = $this->input->post('subTournameID');
                $testGameName = $this->Get_model->getDataForEdit($gameTableName, $subtId);
                $gameName = $testGameName[0]["tournamentName"];
                 $newNameGame = str_replace("%20"," ",$gameName);
                 
                 return redirect('email/Email_controller/regUserTournament/'.$getEmail.'/'.$newname.'/'.$newNameGame.'');
                
               
                
            }
            
            
            else {
               return redirect('reguser/Reguser_Load_controller/errorview');
            }
        }
    } 
    
    
    
    
    
    
    
    
   public function validateregCocReg() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
         $this->load->model('admin/Get_model');
       

        $config = array(
            
            
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
                'field' => 'cName',
                'label' => 'Clan Name',
                'rules' => 'required'
            ),
           
             array(
                'field' => 'selector1',
                'label' => 'Clan Position',
                'rules' => 'required'
            ),
            array(
                'field' => 'cTag',
                'label' => 'Clan Tag',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
              return redirect('Main_controller/errorview');
        } 
        
        else {
            
            
            $data = array
                (
                'name' => $this->session->userdata('name'),
                'email' =>  $this->session->userdata('email'),
                'mobile' => $this->session->userdata('mobile'),
                'vname' => $this->input->post('vName'),
                'ptag' => $this->input->post('pTag'),
                'cname' => $this->input->post('cName'),
                'ctag' => $this->input->post('cTag'),
                'userid' => $this->session->userdata('id'),
                'cpos' => $this->input->post('selector1'),
                 'playerPaymentSatus' => $this->input->post('payment'),
                'subtorunamentId' => $this->input->post('subTournameID')
            );

           

            $tableName = $this->input->post('table');


            

            if ($this->Insert_model->insert($tableName, $data)) {
                
                $regUsertableName = "reguser";
                $reguId = $this->session->userdata('id');
                 $email = $this->Get_model->getDataForEdit($regUsertableName, $reguId);
                 
               foreach ($email as $row)
               {
                   $getEmail = $row['email'];
                    $getName = $row['fullName'];
                    $newname = str_replace("%20"," ",$getName);
                }
                
                $gameTableName = "subtournament";
                $subtId = $this->input->post('subTournameID');
                $testGameName = $this->Get_model->getDataForEdit($gameTableName, $subtId);
                $gameName = $testGameName[0]["tournamentName"];
                 $newNameGame = str_replace("%20"," ",$gameName);
                 
                 return redirect('email/Email_controller/regUserTournament/'.$getEmail.'/'.$newname.'/'.$newNameGame.'');
                
               
                
            }
            else {
                 return redirect('reguser/Reguser_Load_controller/errorview');
            }
        }
    } 
    
    
    
    
     public function validatePubgEditReg() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
       

       $config = array(
            array(
                'field' => 'playerName',
                'label' => 'Player Name',
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
            )
            
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
              return redirect('reguser/Reguser_Load_controller/errorview');
        } 
        
        else {
            
            
         
            
            
             $data = array
                (
                'name' => $this->input->post('playerName'),
                'mobile' => $this->input->post('mobile'),
                'pubnumber' => $this->input->post('pTag'),
                'pubname' => $this->input->post('vName'),
                'platfrom' => $this->input->post('cName'),
                'map' => $this->input->post('cTag'),
                'mode' => $this->input->post('mode'),
                'team ' => $this->input->post('team')
            );
            
            
            
            
            

           

            $this->load->model('admin/Update_model');

            $tableName = $this->input->post('table');
            $id = $this->input->post('id');

            

            $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);

            if ($returnValue === true) {

               return redirect('reguser/Reguser_Load_controller/successview');
            } else {
                return redirect('reguser/Reguser_Load_controller/errorview');
            }
        }
    }
    
    
    
    public function validateprofile() {
        $picup = 'pic';
        $this->load->library('form_validation');
        $this->load->model('admin/Update_model');
        $tableName = $this->input->post('table');

        $id = $this->session->userdata('id');

        $config = array(
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ),
            array(
                'field' => 'repassword',
                'label' => 'repassword',
                'rules' => 'required'
            ),
            array(
                'field' => 'playerName',
                'label' => 'Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'mobile',
                'label' => 'mobile',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {

             return redirect('Call_controller/errorview');
        
            
            
        } else {
            $pic = $this->input->post('pic');


            if (empty($_FILES['pic']['name'])) {
                $image_path = "there is no profile image";
                $data = array
                    (
                    'fullName' => $this->input->post('playerName'),
                    'password' => md5($this->input->post('password')),
                    'image' => $image_path,
                    'mobile' => $this->input->post('mobile')
                );


                $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);

                if ($returnValue === true) {

                     return redirect('Call_controller/successview');
                } else {
                     return redirect('Call_controller/errorview');
                }
            } else {


                $this->load->library('upload');
                $config['upload_path'] = './asset/image/profilePic/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '';
                $config['max_width'] = '';
                $config['max_height'] = '';
                $this->upload->initialize($config);

                if ($this->upload->do_upload($picup)) {

                    $picdata = $this->upload->data();
                    $picname = $this->upload->data('file_name');
//                                  $piclocation = $this->upload->data('full_path');
                    $image_path = base_url("asset/image/profilePic/" . $picdata['raw_name'] . $picdata['file_ext']);
                    $data = array
                        (
                        'fullName' => $this->input->post('playerName'),
                        'password' => md5($this->input->post('password')),
                        'image' => $image_path,
                        'mobile' => $this->input->post('mobile')
                    );

                    $this->Update_model->updateAnydata($tableName, $data, $id);
                     return redirect('Call_controller/successview');
                } else {

                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);

//                                    $this->load->view('admin/error_view',$error);
                }
            }
        }
    }  
    
    
    
    public function pubgSms($pname,$number)
    {
            $to = $number;
            $token = "acb060635ed2881788d39061a917f151";
            $message = "Congrats ! $pname, You have register for Player Unknown Battlegrounds . Your tournament details will be publish in http://www.warcities.com/ soon. For any inquiry mail us warcities2@gmail.com. Thank you for your participation. Join our facebook page for the update news : https://www.facebook.com/warcities/.";

            $url = "http://api.greenweb.com.bd/api.php";
             $data= array(
            'to'=>"$to",
            'message'=>"$message",
            'token'=>"$token"
            ); // Add parameters in key value
            $ch = curl_init(); // Initialize cURL
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_ENCODING, '');
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $smsresult = curl_exec($ch);

            //Result
            return $smsresult;

            //Error Display
           // echo curl_error($ch);
    }
    
    public function pubgPaymentSms($pname,$number)
    {
            $to = $number;
            $token = "acb060635ed2881788d39061a917f151";
            $message = "$pname payment details for Player Unknown Battlegrounds is saved.After varifying your payment details we will notify you within 24 hours by sms.";

            $url = "http://api.greenweb.com.bd/api.php";
             $data= array(
            'to'=>"$to",
            'message'=>"$message",
            'token'=>"$token"
            ); // Add parameters in key value
            $ch = curl_init(); // Initialize cURL
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_ENCODING, '');
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $smsresult = curl_exec($ch);

            //Result
            return $smsresult;

            //Error Display
           // echo curl_error($ch);
    }
    
    
    
    

}
