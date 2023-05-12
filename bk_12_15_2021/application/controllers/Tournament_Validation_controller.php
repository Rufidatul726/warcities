<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tournament_Validation_controller extends CI_Controller {

    public function validateCocReg() {
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
                'field' => 'password',
                'label' => 'Password',
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
              return redirect('Main_controller/errorview');
        } 
        
        else {
            
             $regtableName= "reguser";
             $userdata = array
                (
                'fullName' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
                'password' =>  md5($this->input->post('password')),
                'role' => 'REGISER',
                'paymentstatus' => 'NONE',
                'mobile' => $this->input->post('mobile')
               
            );
            
            $this->Insert_model->insert($regtableName, $userdata);
            $reguser = $this->Get_model->getLastRow($regtableName);
                 
            foreach ($reguser as $row)
            {
               $regid = $row['id'];
                
            }
             
            $data = array
                (
                'name' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'vname' => $this->input->post('vName'),
                'ptag' => $this->input->post('pTag'),
                'cname' => $this->input->post('cName'),
                'ctag' => $this->input->post('cTag'),
                'userid' => $regid,
                'cpos' => $this->input->post('selector1'),
                 'playerPaymentSatus' => "UNPAID",
                'subtorunamentId' => $this->input->post('subTournameID')
            );

            $tableName = $this->input->post('table');

            if ($this->Insert_model->insert($tableName, $data)) {

                 $email = $this->Get_model->getLastRow($tableName);
                 
               foreach ($email as $row)
               {
                   $getEmail = $row['email'];
                    $getName = $row['name'];
                    $newname = str_replace("%20"," ",$getName);
                  
                   
               }
                $gameName = "Clash of Clans";
                 $newNameGame = str_replace("%20"," ",$gameName);
                 return redirect('email/Email_controller/regTournamentUser/'.$getEmail.'/'.$newname.'/'.$newNameGame.''); 
            }
            else {
                return redirect('Main_controller/errorview');
            }
        }
    }
    
    
    
    
    
    
    public function validatePubgReg() {
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
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            )
            
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
              return redirect('Main_controller/errorview');
        } 
        
        else {
            
            $value= $this->input->post('email');
              $fieldName = "email";
              $userTable= "reguser";
               $newvalue = $this->Get_model->CheckDataExistOrNot($userTable, $fieldName, $value);
            
            
            if($newvalue)
            {
                return redirect('Main_controller/errorview');
            }
            
            
              else {
            
            
            
            
            $regtableName= "reguser";
            
           $userdata = array
                (
                'fullName' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
                'password' =>  md5($this->input->post('password')),
                'role' => 'REGISER',
                'paymentstatus' => 'NONE',
                'mobile' => $this->input->post('mobile')
               
            );
            
            $this->Insert_model->insert($regtableName, $userdata);
             $reguser = $this->Get_model->getLastRow($regtableName);
                 
               foreach ($reguser as $row)
               {
                   $regid = $row['id'];
                    
               }
            
            
            
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
                'userid' => $regid,
                'playerPaymentSatus' => "UNPAID",
                'team' => $this->input->post('team'),
                'subtorunamentId' => $this->input->post('subTournameID'),
            );

           

            $tableName = $this->input->post('table');


            

            if ($this->Insert_model->insert($tableName, $data)) {

                 $email = $this->Get_model->getLastRow($tableName);
                 
               foreach ($email as $row)
               {
                   $getEmail = $row['email'];
                    $getName = $row['name'];
                     $getmobile = $row['mobile'];
                    $newname = str_replace(" "," ",$getName);
                  
               }
               
               
                  $sms =   $this->pubgSms( $newname, $getmobile);
                $gameName = "Player Unknown Battlegrounds";
                 $newNameGame = str_replace(" "," ",$gameName);
                 return redirect('email/Email_controller/regTournamentUser/'.$getEmail.'/'.$newname.'/'.$newNameGame.'');
                
                
                
                
                
            }
            else {
                return redirect('Main_controller/errorview');
            }
            
            
            
              }
            
            
            
            
        }
    }

    

    
   public function validateGameReg() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
        $this->load->model('admin/Get_model');

        //echo '<pre>';print_r();die();

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
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ),
            array(
                'field' => 'mobile',
                'label' => 'Mobile',
                'rules' => 'required'
            ),
            array(
                'field' => 'leader_tag_id',
                'label' => 'Leader Tag Id',
                'rules' => 'required'
            )
        );



        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
           // echo '<pre>';print_r(validation_errors());die();
            return redirect('Main_controller/errorview');
        }else {
            $regtableName= "reguser";
            $userdata = array
                (
                'fullName' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
                'password' =>  md5($this->input->post('password')),
                'role' => 'REGISTER',
                'paymentstatus' => 'NONE',
                'mobile' => $this->input->post('mobile'),
                'leader_tag' => $this->input->post('leader_tag_id'),
                'team_name' => $this->input->post('team_name'),
            );
            
            $this->Insert_model->insert($regtableName, $userdata);
            $reguser = $this->Get_model->getLastRow($regtableName);
         
            foreach ($reguser as $row){
               $regid = $row['id']; 
            }

            $tagid  = $this->input->post('gameTagid');

            //echo '<pre>';print_r($tagid);die();

            if (empty($tagid) ){
                $tags = $this->input->post('leader_tag_id');
                //return redirect('Main_controller/errorview');
            }else{
                $tags = implode(',', $this->input->post('gameTagid'));
            }
            //echo '<pre>';print_r($data['tagid']);die();
            $data = array(
                'name' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
                'userid' => $regid,
                'mobile' => $this->input->post('mobile'),
                //'tagid' => $this->input->post('gameTagid'),
                'tagid' => $tags,
                'playerPaymentSatus' => "UNPAID",
                'subtorunamentId' => $this->input->post('subTournameID') 
            );

            //echo '<pre>';print_r($data['tagid']);die();
            $tableName = $this->input->post('table');
            if ($this->Insert_model->insert($tableName, $data)) {
                $email = $this->Get_model->getLastRow($tableName);
                foreach ($email as $row){
                   $getEmail = $row['email'];
                    $getName = $row['name'];
                    $newname = str_replace("%20"," ",$getName); 
                }
                $gameName = $this->input->post('gamename');
                return redirect('email/Email_controller/regTournamentUser/'.$getEmail.'/'.$newname.'/'.$gameName.'');    
            }
            else {
                return redirect('Main_controller/errorview');
            }
        }
    }
    
    
    
    
    
     public function validateUserReg() {
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
            )
            
            
           
            
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
              return redirect('Main_controller/errorview');
        } 
        
        else {
            
            
            $data = array
                (
                'fullName' => $this->input->post('playerName'),
                'email' => $this->input->post('email'),
                'password' =>  md5($this->input->post('password')),
                'role' => 'REGISER',
                'paymentstatus' => 'NONE',
                'mobile' => $this->input->post('mobile')
               
            );

           

            $tableName = $this->input->post('table');


            

            if ($this->Insert_model->insert($tableName, $data)) {
                
               $email = $this->Get_model->getLastRow($tableName);
                 
               foreach ($email as $row)
               {
                   $getEmail = $row['email'];
                    $getName = $row['fullName'];
                    $newname = str_replace(" ","",$getName);
                  
                   
               }
                $newid = "1";
                 return redirect('email/Email_controller/reguser/'.$getEmail.'/'.$newname.'');
            }
            else {
                
                
                
                return redirect('Main_controller/errorview');
            }
        }
    }
    
    
    
    
   



    public function validateuser() {
        $this->load->library('form_validation');
        $config = array(
            array(
                'field' => 'banglaname',
                'label' => 'Full Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'englishname',
                'label' => 'Email',
                'rules' => 'required'
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            return redirect('Admin_load_controller/errorview');
        } else {
            $data = array
                (
                'username' => $this->input->post('englishname'),
                'fullname' => $this->input->post('banglaname'),
                'password' => $this->input->post('password')
            );

            $this->load->model('admin/Update_model');

            $tableName = $this->input->post('table');
            $id = $this->input->post('id');

            if ($this->Update_model->updateAnydata($tableName, $data, $id)) {

                return redirect('Admin_load_controller/successview');
            } else {

                return redirect('Admin_load_controller/errorview');
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
                    'name' => $this->input->post('playerName'),
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
                        'name' => $this->input->post('playerName'),
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
            $message = "Congrats ! $pname, You have register for Player Unknown Battlegrounds. Your tournament details will be publish in http://www.warcities.com/ soon. For any inquiry mail us warcities2@gmail.com. Thank you for your participation. Join our facebook page for the update news : https://www.facebook.com/warcities/.";

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
    
    public function requestForTour() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
        $this->load->model('admin/Get_model');
        $this->load->library('session');

       

        // $config = array(
        //     array(
        //         'field' => 'game_name',
        //         'label' => 'Game Name',
        //     ),
        //     array(
        //         'field' => 'game_mode',
        //         'label' => 'Game Mode',
        //     ),
        //     array(
        //         'field' => 'team_and_player_name',
        //         'label' => 'Team/Player Name'
        //     ),
        //     array(
        //         'field' => 'reg_date_start',
        //         'label' => 'Registration Start Date'
        //     ),
            
        //     array(
        //         'field' => 'reg_date_end',
        //         'label' => 'Village Name'
        //     ),
        //     array(
        //         'field' => 'entry_fee',
        //         'label' => 'Entry Fee'
        //     ),
        //     array(
        //         'field' => 'rules',
        //         'label' => 'Rules'
        //     ),
           
        //      array(
        //         'field' => 'contact_no',
        //         'label' => 'Contact No.'
        //     ),
        //     array(
        //         'field' => 'fixture',
        //         'label' => 'Fixture'
        //     )
        // );

        // echo'<pre>';print_r($this->form_validation->run());die();

        // $this->form_validation->set_rules($config);

        // if ($this->form_validation->run() == FALSE) {
        //       return redirect('Main_controller/errorview');
        // } else {
            
        $regtableName= "request_for_tournamet";
        $userdata = array
            (
            'game_name' => $this->input->post('game_name'),
            'game_mode' => $this->input->post('game_mode'),
            'team_or_player_name' => $this->input->post('team_and_player_name'),
            'reg_start' => $this->input->post('reg_date_start'),
            'reg_end' => $this->input->post('reg_date_end'),
            'entry_fee' => $this->input->post('entry_fee'),
            'rules' => $this->input->post('rules'),
            'contact_no' => $this->input->post('contact_no'),
            'fixture' => $this->input->post('fixture'),
            'extra_info' => $this->input->post('extra_info'),
           
        );
        
        $this->Insert_model->insert($regtableName, $userdata);
        return redirect('Call_controller/successview');
        //}
    }

}
