<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Game_Form_Validate_Controller extends MY_Controller {

    public function validateAddGame() {
        
        ini_set('upload_max_filesize','10240M');

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
                'field' => 'eventStartdate',
                'label' => 'Event Start Date',
                'rules' => 'required'
            ),
            array(
                'field' => 'table',
                'label' => 'Total person',
                'rules' => 'required'
            )
        );

        //echo '<pre>';print_r($this->input->post());die();

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            return redirect('admin/Admin_load_controller/errorview');
        } else {
            $mainid = $this->input->post('mainid');
            if ($mainid) {
                $config['upload_path'] = './asset/image/Background_image/game/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('image')) {
                    $data = $this->upload->data();
                    $image_path = base_url("asset/image/Background_image/game/" . $data['raw_name'] . $data['file_ext']);
                    $picname = $this->upload->data('file_name');
                    $gameTable = "subtournament";
                    $data = array(
                        'tournamentName' => $this->input->post('gamename'),
                        'startDate' => $this->input->post('sdate'),
                        'endDate' => $this->input->post('edate'),
                        'eventStartDate' => $this->input->post('eventStartdate'),
                        'pic' => $image_path,
                        'picname' => $picname,
                        'totalPerson' => $this->input->post('table'),
                        'entryFeeStatus' => $this->input->post('entryFeeStatus'),
                        'mainTournamentId' => $mainid,
                        'status' => 'ACTIVE'
                    );
                    $returnId = $this->Insert_model->insert_subtournanament($gameTable, $data);
                    if ($returnId) {
                        $dataFixture = array(
                            'name' => $this->input->post('gamename'),
                            'gameid' => $returnId,
                            'fixtureDescription' => 'Enter Fixture',
                        );
                        $this->Insert_model->insert('fixture', $dataFixture);
                        $dataRules = array(
                            'name' => $this->input->post('gamename'),
                            'gameid' => $returnId,
                            'rulesDescription' => 'Enter Rules',
                        );
                        $this->Insert_model->insert('rules', $dataRules);
                        return redirect('admin/Admin_Load_controller/successview');
                    }else{
                        return redirect('admin/Admin_Load_controller/errorview');
                    }
                }else {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                }
            }else {
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }
    
    public function validatePubgAddGame() {
        
        ini_set('upload_max_filesize','10240M');

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
                'label' => 'Total person',
                'rules' => 'required'
            ),
            array(
                'field' => 'gametype',
                'label' => 'Game Type',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {


            return redirect('admin/Admin_load_controller/errorview');
        } else {


            $mainid = $this->input->post('mainid');

            
                   
                   

            if ($mainid) {


                $config['upload_path'] = './asset/image/Background_image/game/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                 

                
                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $data = $this->upload->data();
                     
                    $image_path = base_url("asset/image/Background_image/game/" . $data['raw_name'] . $data['file_ext']);
                    $picname = $this->upload->data('file_name');



                    $gameTable = "subtournament";

                    $data = array
                        (
                        'tournamentName' => $this->input->post('gamename'),
                        'startDate' => $this->input->post('sdate'),
                        'endDate' => $this->input->post('edate'),
                        'gametype' => $this->input->post('gametype'),
                        'pic' => $image_path,
                        'picname' => $picname,
                        'totalPerson' => $this->input->post('table'),
                        'mainTournamentId' => $mainid,
                        'status' => 'ACTIVE'
                    );


                    $NewReturnValue = $this->Insert_model->insert($gameTable, $data);

                    if ($NewReturnValue === true) {

                        return redirect('admin/Admin_Load_controller/successview');
                    } else {
                        return redirect('admin/Admin_Load_controller/errorview');
                    }
                }
                
                
                else 
                    {
                     $error = array('error' => $this->upload->display_errors());
                     print_r($error);
                    }
                
                
            } else {
               
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }
    
    
    
    
    public function validateAddMainGame() {
        
        ini_set('upload_max_filesize','10240M');
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
        $this->load->model('admin/Create_model');
        $this->load->model('admin/Get_model');
        $this->load->library('image_lib');
        $this->load->library('upload');
        $config = array(
            array(
                'field' => 'gamename',
                'label' => 'Game Name',
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
            return redirect('admin/Admin_load_controller/errorview');
        } else {
            $tableName = $this->input->post('table');
            $returnValue =  $this->Create_model->create($tableName);
            if ($returnValue === true) {
                $config['upload_path'] = './asset/image/Background_image/game/';
                $config['allowed_types'] = '*';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('image')) {
                    $data = $this->upload->data();     
                    $image_path = base_url("asset/image/Background_image/game/" . $data['raw_name'] . $data['file_ext']);
                    $picname = $this->upload->data('file_name');
                    $gameTable = "tournament";
                    $data = array(
                        'tournamentName' => $this->input->post('gamename'),
                        'piclocation' => $image_path,
                        'picname' => $picname,
                        'tablename' => $this->input->post('table'),
                        'status' => 'ACTIVE'
                    );
                    $NewReturnValue = $this->Insert_model->insert($gameTable, $data);
                    if ($NewReturnValue === true) {
                        return redirect('admin/Admin_Load_controller/successview');
                    } else {
                        return redirect('admin/Admin_Load_controller/errorview');
                    }
                }else {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                }
            }else{
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }

    public function validateAddTournamentLeaderBoard() {
        
        ini_set('upload_max_filesize','10240M');
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
        $this->load->model('admin/Create_model');
        $this->load->model('admin/Get_model');
        $this->load->library('image_lib');
        $this->load->library('upload');
        $config = array(
            array(
                'field' => 'game_name',
                'label' => 'Game Name',
                'rules' => 'required'
            ),

            array(
                'field' => 'tournament_name',
                'label' => 'Tournament Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'team_name',
                'label' => 'Team Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'leader_score',
                'label' => 'Leader Score',
                'rules' => 'required'
            ),
            array(
                'field' => 'semi_final_score',
                'label' => 'Semi Final Score',
                'rules' => 'required'
            ),
            array(
                'field' => 'runner_up_score',
                'label' => 'Runner Up Score',
                'rules' => 'required'
            ),
            array(
                'field' => 'final_score',
                'label' => 'Final Score',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            //echo '<pre>';print_r($this->validation_errors());die();
            return redirect('admin/Admin_load_controller/errorview');
        } else {
            //$tableName = $this->input->post('table');
            //$returnValue =  $this->Create_model->create($tableName);
            $config['upload_path'] = './asset/image/leader_board/';
            $config['allowed_types'] = '*';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {
                $data = $this->upload->data();     
                $image_path = base_url("asset/image/leader_board/" . $data['raw_name'] . $data['file_ext']);
                $picname = $this->upload->data('file_name');
                //$gameTable = "tournament";
                $data = array(
                    'team' => $this->input->post('team_name'),
                    'logo' => $image_path,
                    'leader' => $this->input->post('leader_score'),
                    'semi' => $this->input->post('semi_final_score'),
                    'final' => $this->input->post('final_score'),
                    'runnerup' => $this->input->post('runner_up_score'),
                    'game' => $this->input->post('game_name'),
                    'tournament' => $this->input->post('tournament_name')
                );
                $NewReturnValue = $this->Insert_model->insert("leader_board", $data);
                if ($NewReturnValue === true) {
                    //echo '<pre>';print_r("test");die();
                    return redirect('admin/Admin_Load_controller/successview');
                } else {
                    return redirect('admin/Admin_Load_controller/errorview');
                }
            }else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        }
    }

    public function validateEditTournamentLeaderBoard() {
        
        ini_set('upload_max_filesize','10240M');
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
        $this->load->model('admin/Create_model');
        $this->load->model('admin/Get_model');
        $this->load->model('admin/Update_model');
        $this->load->library('image_lib');
        $this->load->library('upload');
        $config = array(
            array(
                'field' => 'game_name',
                'label' => 'Game Name',
                'rules' => 'required'
            ),

            array(
                'field' => 'tournament_name',
                'label' => 'Tournament Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'team_name',
                'label' => 'Team Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'leader_score',
                'label' => 'Leader Score',
                'rules' => 'required'
            ),
            array(
                'field' => 'semi_final_score',
                'label' => 'Semi Final Score',
                'rules' => 'required'
            ),
            array(
                'field' => 'runner_up_score',
                'label' => 'Runner Up Score',
                'rules' => 'required'
            ),
            array(
                'field' => 'final_score',
                'label' => 'Final Score',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            //echo '<pre>';print_r($this->validation_errors());die();
            return redirect('admin/Admin_load_controller/errorview');
        } else {
            //$tableName = $this->input->post('table');
            //$returnValue =  $this->Create_model->create($tableName);
            $config['upload_path'] = './asset/image/leader_board/';
            $config['allowed_types'] = '*';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {
                $data = $this->upload->data();     
                $image_path = base_url("asset/image/leader_board/" . $data['raw_name'] . $data['file_ext']);
                $picname = $this->upload->data('file_name');
                //$gameTable = "tournament";
                $data = array(
                    'team' => $this->input->post('team_name'),
                    'logo' => $image_path,
                    'leader' => $this->input->post('leader_score'),
                    'semi' => $this->input->post('semi_final_score'),
                    'final' => $this->input->post('final_score'),
                    'runnerup' => $this->input->post('runner_up_score'),
                    'game' => $this->input->post('game_name'),
                    'tournament' => $this->input->post('tournament_name')
                );
                $id = $this->input->post('lb_id');
                //$NewReturnValue = $this->Insert_model->insert("leader_board", $data);

                $returnValue = $this->Update_model->updateAnydata('leader_board', $data, $id);
                if ($returnValue === true) {
                    return redirect('admin/Admin_Load_controller/successview');
                } else {
                    return redirect('admin/Admin_Load_controller/errorview');
                }
            }else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
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
              return redirect('admin/Admin_Load_controller/errorview');
        }else { 
            $data = array(
                'name' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
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
                return redirect('admin/Admin_Load_controller/successview');
            } else {
                return redirect('admin/Admin_Load_controller/errorview');
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
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            return redirect('admin/Admin_Load_controller/errorview');
        }else {
             $data = array(
                'name' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'pubname' => $this->input->post('vName'),
                'pubnumber' => $this->input->post('pTag'),
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
                return redirect('admin/Admin_Load_controller/successview');
            } else {
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }

    public function validateEditeMainGame() {
        $this->load->library('form_validation');
        $this->load->model('admin/Update_model');
        $this->load->library('image_lib');
        $this->load->library('upload');
        $config = array(
            array(
                'field' => 'gamename',
                'label' => 'Game Name',
                'rules' => 'required'
            ),
           
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            return redirect('admin/Admin_Load_controller/errorview');
        }else{
            $tableName = $this->input->post('table');
            $id = $this->input->post('id');
            $data = array(
                'tournamentName' => $this->input->post('gamename'), 
            );
            if($_FILES['image']['size'] == 0){  
                $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);
                if ($returnValue === true) {
                    return redirect('admin/Admin_Load_controller/successview');
                } else {
                    return redirect('admin/Admin_Load_controller/errorview');
                }    
            }else{
             
                $config['upload_path'] = './asset/image/Background_image/game/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('image')){
                    $data = $this->upload->data();
                    $image_path= base_url("asset/image/Background_image/game/".$data['raw_name'].$data['file_ext']);
                    $picname=$this->upload->data('file_name');
                    $piclocation=$this->upload->data('full_path');
                    
                     $data = array
                                (
                                'tournamentName' => $this->input->post('gamename'),
                                'picname' => $picname,
                                'piclocation' =>$image_path,
                               );
                    
                       $NewReturnValue = $this->Update_model->updateAnydata($tableName, $data, $id);

                    if ($NewReturnValue === true) {

                       return redirect('admin/Admin_Load_controller/successview');
                    } else {
                        return redirect('admin/Admin_Load_controller/errorview');
                    }                                 
                }                     
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }    
        }
        $error = array('error' => $this->upload->display_errors());
        print_r($error);
    }

    public function validateEditeGame() {
        $this->load->library('form_validation');
        $this->load->model('admin/Update_model');
        $this->load->library('image_lib');
        $this->load->library('upload');
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
        }else{
            $tableName = $this->input->post('table');
            $id = $this->input->post('id');
            $data = array(
                'tournamentName' => $this->input->post('gamename'),
                'startDate' => $this->input->post('sdate'),
                'endDate' => $this->input->post('edate'),
                'totalPerson' => $this->input->post('player'),
            );
            if($_FILES['image']['size'] == 0){
                  
                $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);  
                if ($returnValue === true) {
                    return redirect('admin/Admin_Load_controller/successview');
                }else{
                    return redirect('admin/Admin_Load_controller/errorview');
                }  
              }else{
                $config['upload_path'] = './asset/image/Background_image/game/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('image')){
                    $data = $this->upload->data();
                    $image_path= base_url("asset/image/Background_image/game/".$data['raw_name'].$data['file_ext']);
                    $picname=$this->upload->data('file_name');
                    $piclocation=$this->upload->data('full_path');            
                    $gameTable = "game";                                
                    $data = array(
                        'tournamentName' => $this->input->post('gamename'),
                        'startDate' => $this->input->post('sdate'),
                        'endDate' => $this->input->post('edate'),
                        'picname' => $picname,
                        'pic' =>$image_path,
                        'totalPerson' => $this->input->post('player'),
                    );
                    $NewReturnValue = $this->Update_model->updateAnydata($tableName, $data, $id);
                    if ($NewReturnValue === true) {
                       return redirect('admin/Admin_Load_controller/successview');
                    }else {
                        return redirect('admin/Admin_Load_controller/errorview');
                    }                
                }                         
                $error = array('error' => $this->upload->display_errors());
                print_r($error);         
            }
        }
        $error = array('error' => $this->upload->display_errors());
                                        print_r($error);
       
        
        
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
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ),
            array(
                'field' => 'mobile',
                'label' => 'mobile',
                'rules' => 'required'
            ),
            array(
                'field' => 'gameTagid',
                'label' => 'TAG ID',
                'rules' => 'required'
            ),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            return redirect('admin/Admin_Load_controller/errorview');
        } else {
            $tableName = $this->input->post('table');
            $id = $this->input->post('id');
            $data = array(
                'name' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
                'tagid' => $this->input->post('gameTagid'),
                'mobile' => $this->input->post('mobile')
            );
            $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);
            if ($returnValue === true) {
                return redirect('admin/Admin_Load_controller/successview');
            }else{
                return redirect('admin/Admin_Load_controller/errorview');
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
                $data = array(
                    'gamename' => $this->input->post('gamename'),
                    'picname' => $picname,
                    'piclocation' =>$image_path
                );
                $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);
                if ($returnValue === true) {
                   return redirect('admin/Admin_Load_controller/successview');
                }else{
                    return redirect('admin/Admin_Load_controller/errorview');
                }                                        
            }else {
                return redirect('admin/Admin_Load_controller/errorview');
            }                    
        }
    }

    public function validateAssignTournament() {
        $this->load->library('form_validation');
        $this->load->model('admin/Update_model');
        $this->load->model('admin/Get_model');
        $config = array(
            array(
                'field' => 'tournament',
                'label' => 'Tournament',
                'rules' => 'required'
            ),
            array(
                'field' => 'subtournament',
                'label' => 'Sub Tournament',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            return redirect('admin/Admin_load_controller/errorview');
        } else {
            $subtournament = $this->input->post('subtournament');
            $editor = $this->input->post('editor');
            $tournament = $this->input->post('tournament');

            //echo '<pre>';print_r($subtournament);die();

            $subtourna = array(
                'editor' => $editor
            );

            $tourna = array(
                'editor' => $editor
            );
            
            $ret1 = $this->Update_model->updateAnydata('subtournament', $subtourna, $subtournament);
            $ret2 = $this->Update_model->updateAnydata('tournament', $tourna, $tournament);
            if ($ret1 === true and $ret2 === true) {
               return redirect('admin/Admin_Load_controller/successview');
            }else{
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
            $data = array(
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
    
    public function validateprofile() {
        $picup = 'pic';
        $this->load->library('form_validation');
        $this->load->model('admin/Update_model');
        $tableName = $this->session->userdata('table');
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
                'field' => 'headline',
                'label' => 'HEADLINE',
                'rules' => 'required'
            ),
            array(
                'field' => 'editor1',
                'label' => 'mobile',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/error_view');
        } else {
            $pic = $this->input->post('pic');
            if (empty($_FILES['pic']['name'])) {
                $image_path = "there is no profile image";
                $data = array(
                    'fullname' => $this->input->post('headline'),
                    'password' => $this->input->post('password'),
                    'profilepic' => $image_path,
                    'mobile' => $this->input->post('editor1')
                );
                $returnValue = $this->Update_model->updateAnydata($tableName, $data, $id);
                if ($returnValue === true) {
                    $this->load->view('admin/success_view');
                } else {
                    $this->load->view('admin/error_view');
                }
            }else{
                $this->load->library('upload');
                $config['upload_path'] = './asset/image/Background_image/team/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '';
                $config['max_width'] = '';
                $config['max_height'] = '';
                $this->upload->initialize($config);
                if ($this->upload->do_upload($picup)) {
                    $picdata = $this->upload->data();
                    $picname = $this->upload->data('file_name');
                    //$piclocation = $this->upload->data('full_path');
                    $image_path = base_url("asset/image/Background_image/team/" . $picdata['raw_name'] . $picdata['file_ext']);
                    $data = array(
                        'fullname' => $this->input->post('headline'),
                        'password' => $this->input->post('password'),
                        'profilepic' => $image_path,
                        'mobile' => $this->input->post('editor1')
                    );
                    $this->Update_model->updateAnydata($tableName, $data, $id);
                    $this->load->view('admin/success_view');
                }else {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                    //$this->load->view('admin/error_view',$error);
                }
            }
        }
    }
    
    public function validateGameDetails() {
        $this->load->model('admin/Insert_model');
        $this->load->library('image_lib');
        $this->load->library('upload');
        if (isset($_FILES["image"]) AND empty($_FILES["image"])) {
            return redirect('admin/Admin_load_controller/errorview');
        } else {
            $config['upload_path'] = './asset/documents/';
            $config['allowed_types'] = '*';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {
                $data = $this->upload->data();
                $image_path = base_url("asset/documents/" . $data['raw_name'] . $data['file_ext']);
                $picname = $this->upload->data('file_name');
                $data = array
                    (
                    'name' => $this->input->post('gamename'),
                    'gameid' => $this->input->post('id'),
                    'doculocation' => $image_path,
                    'filename' => $picname
                );
                $gameTable = $this->input->post('table');
                $NewReturnValue = $this->Insert_model->insert($gameTable, $data);
                if ($NewReturnValue === true) {
                    return redirect('admin/Admin_Load_controller/successview');
                }else{
                    return redirect('admin/Admin_Load_controller/errorview');
                }
            }else{
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }


    public function validateGameRules() {
        $this->load->model('admin/Update_model');
        //echo '<pre>';print_r($this->input->post());die();
        if (empty($this->input->post('gamename')) OR empty($this->input->post('id')) OR empty($this->input->post('rulesDescription')) OR empty($this->input->post('table_id')) ) {
            return redirect('admin/Admin_load_controller/errorview');
        } else {
            $data = array(
                'name' => $this->input->post('gamename'),
                'gameid' => $this->input->post('id'),
                'rulesDescription' => $this->input->post('rulesDescription'),
            );
            $id = $this->input->post('table_id');
            $updateRules = $this->Update_model->updateAnydata('rules', $data, $id);
            if ($updateRules === true) {
                return redirect('admin/Admin_Load_controller/successview');
            }else{
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }

    public function validateGameFixture() {
        $this->load->model('admin/Update_model');
        //echo '<pre>';print_r($this->input->post());die();
        if (empty($this->input->post('gamename')) OR empty($this->input->post('id')) OR empty($this->input->post('fixtureDescription')) OR empty($this->input->post('table_id')) ) {
            return redirect('admin/Admin_load_controller/errorview');
        } else {
            $data = array(
                'name' => $this->input->post('gamename'),
                'gameid' => $this->input->post('id'),
                'fixtureDescription' => $this->input->post('fixtureDescription'),
            );
            $id = $this->input->post('table_id');
            $updateRules = $this->Update_model->updateAnydata('fixture', $data, $id);
            if ($updateRules === true) {
                return redirect('admin/Admin_Load_controller/successview');
            }else{
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }

    public function validateGameDetailsDesc() {
        $this->load->model('admin/Insert_model');
        if (empty($this->input->post('rulesDescription'))) {
            return redirect('admin/Admin_load_controller/errorview');
        } else {
                $rulesDescription = $this->input->post('rulesDescription');
                $data = array(
                    'name' => $this->input->post('gamename'),
                    'gameid' => $this->input->post('id'),
                    'rulesDescription' => $this->input->post('rulesDescription')
                );
                $gameTable = $this->input->post('table');
                $NewReturnValue = $this->Insert_model->insert($gameTable, $data);
                if ($NewReturnValue === true) {
                    return redirect('admin/Admin_Load_controller/successview');
                }else{
                    return redirect('admin/Admin_Load_controller/errorview');
                }
        }
    }
    
    public function validateAddMessage() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
        $config = array(
            array(
                'field' => 'message',
                'label' => 'Message',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            return redirect('admin/Admin_load_controller/errorview');
        }else {
            $gameTable = $this->input->post('table');
            $data = array(
                'comment' => $this->input->post('message'),
                'subtorunamentId' => $this->input->post('subTournameID'),
            );
            $NewReturnValue = $this->Insert_model->insert($gameTable, $data);  
            if ($NewReturnValue === true) { 
                return redirect('admin/Admin_Load_controller/successview');
            }else{
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }
    
    public function validateEditAddMessage() {
        $this->load->library('form_validation');
        $this->load->model('admin/Update_model');
        $config = array(
            array(
                'field' => 'message',
                'label' => 'Message',
                'rules' => 'required'
           )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            return redirect('admin/Admin_load_controller/errorview');
        }else{
            $gameTable = $this->input->post('table');
            $id = $this->input->post('subTournameID');
            $data = array(
                'comment' => $this->input->post('message'),
            );

            $NewReturnValue = $returnValue = $this->Update_model->updateAnydata($gameTable, $data, $id);
              
            if ($NewReturnValue === true) {    
                return redirect('admin/Admin_Load_controller/successview');
            }else{
                return redirect('admin/Admin_Load_controller/errorview');
            }
        }
    }
    
    public function validatePaymentConfirm($tableName,$idName,$value) {
        $this->load->model('admin/Update_model');
        $gameTable = $tableName;
        $id = $idName;
        $data = array(
            'playerPaymentSatus' => $value,
        );
        $NewReturnValue = $returnValue = $this->Update_model->updateAnydata($gameTable, $data, $id);    
        if ($NewReturnValue === true) {
            if($value == "PAID"){
                $this->load->model('admin/Get_model');
                $smsdetais = $this->Get_model->getDataForEdit($gameTable, $id); 
                $pname = $smsdetais['0']['name'];
                $pmobile = $smsdetais['0']['mobile'];
                $sms =   $this->pubgPaymentSms( $pname, $pmobile);
            }
            return redirect('admin/Admin_Load_controller/successview');
        }else{
            return redirect('admin/Admin_Load_controller/errorview');
        }
    }

    public function uploadMultipleImage(){
        ini_set('upload_max_filesize','10240M');
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
        $this->load->library('image_lib');
        $this->load->library('upload');    
        $con = count($_FILES['image']['name']);
        $config['upload_path'] = './asset/image/Background_image/slider/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';      
        $files = $_FILES; 
        for($i=0; $i< $con; $i++){           
            $_FILES['image']['name']= $files['image']['name'][$i];
            $_FILES['image']['type']= $files['image']['type'][$i];
            $_FILES['image']['tmp_name']= $files['image']['tmp_name'][$i];
            $_FILES['image']['error']= $files['image']['error'][$i];
            $_FILES['image']['size']= $files['image']['size'][$i];    

            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')){
                $data = $this->upload->data();
                $image_path= base_url("asset/image/Background_image/slider/".$data['raw_name'].$data['file_ext']);
                $picname=$this->upload->data('file_name');  
                $data = array(
                    'location' => $image_path,
                    'name' => $picname    
                );                                      
                $pictableName = $this->input->post('table');                                            
                $this->Insert_model->insert($pictableName, $data);              
            }else {
                return redirect('admin/Admin_Load_controller/errorview');
            }                                       
        }  
        return redirect('admin/Admin_Load_controller/successview');
         
        
    }  
    
    public function pubgPaymentSms($pname,$number){
        $to = $number;
        $token = "acb060635ed2881788d39061a917f151";
        $message = " $pname, Your payment  for Player Unknown Battlegrounds is confirmed. You can check payment & tournamet details  by login http://www.warcities.com/.";
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
