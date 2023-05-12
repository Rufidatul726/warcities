<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pubg_Validation_controller extends CI_Controller {

//    public function __construct() {
//
//
//        parent::__construct();
//        
//            $this->load->model('admin/Get_model');
//            $TableName = "game";
//            $data['TableName'] = "game";
//            $TradetableName = "trade";
//            $data['TradetableName'] = "trade";
//            
//            $itemTableName = "iteam";
//            $data['itemTableName'] = "iteam";
//            
//            $data['header_content'] = $this->Get_model->getAllIteams($TableName);
//            $data['boday_content'] = $this->Get_model->getAllIteams($TradetableName);
//            $data['boday_item_content'] = $this->Get_model->getAllIteams($itemTableName);
//            
//            $data['header'] = $this->load->view('Template/hedder_view', $data, TRUE);
//            $data['boday'] = $this->load->view('Template/body_view', $data, TRUE);
//            
//     
//}


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
                'field' => 'vName',
                'label' => 'Id Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'teamName',
                'label' => 'Team Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'ptwoName',
                'label' => 'Player Name',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            return redirect('reguser/Reguser_Load_controller/errorview');
        } else {


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
                'teamname' => $this->input->post('teamName'),
                'playerPaymentSatus' => $this->input->post('payment'),
                'subtorunamentId' => $this->input->post('subTournameID')
            );



            $tableName = $this->input->post('table');

            $pubgSubTable = "subpubg";

            $subPubgdata = array
                (
                'pubgid' => $this->input->post('ptwoName'),
                'subtid' => $this->input->post('subTournameID'),
                'teamleadid' => $this->session->userdata('id'),
                'teamname' => $this->input->post('teamName')
            );


            if (($this->Insert_model->insert($tableName, $data)) && ($this->Insert_model->insert($pubgSubTable, $subPubgdata))) {

                $regUsertableName = "reguser";
                $reguId = $this->session->userdata('id');
                $email = $this->Get_model->getDataForEdit($regUsertableName, $reguId);

                foreach ($email as $row) {
                    $getEmail = $row['email'];
                    $getName = $row['fullName'];
                    $newname = str_replace("%20", " ", $getName);
                }

                $gameTableName = "subtournament";
                $subtId = $this->input->post('subTournameID');
                $testGameName = $this->Get_model->getDataForEdit($gameTableName, $subtId);
                $gameName = $testGameName[0]["tournamentName"];
                $newNameGame = str_replace("%20", " ", $gameName);
                
                 $pname = $this->input->post('name');
                 $pmobile = $this->input->post('mobile');
                 $sms =   $this->pubgSms( $pname, $pmobile);

                return redirect('email/Email_controller/regUserTournament/' . $getEmail . '/' . $newname . '/' . $newNameGame . '');
            } else {
                return redirect('reguser/Reguser_Load_controller/errorview');
            }
        }
    }

    public function validatePubgSquadReg() {
        $this->load->library('form_validation');
        $this->load->model('admin/Insert_model');
        $this->load->model('admin/Get_model');


        $config = array(
            array(
                'field' => 'name',
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
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {

            return redirect('reguser/Reguser_Load_controller/errorview');
        } else {



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
                'playerPaymentSatus' => "UNPAID",
                'team' => $this->input->post('team'),
                'teamname' => $this->input->post('teamName'),
                'subtorunamentId' => $this->input->post('subTournameID'),
            );



            $tableName = $this->input->post('table');

            $pubgSubTable = "subpubg";

            $subPubgdata = array(
                array(
                    'pubgid' => $this->input->post('ptwoName'),
                    'subtid' => $this->input->post('subTournameID'),
                    'teamleadid' => $this->session->userdata('id'),
                    'teamname' => $this->input->post('teamName')
                ),
                array(
                    'pubgid' => $this->input->post('pthreeName'),
                    'subtid' => $this->input->post('subTournameID'),
                    'teamleadid' => $this->session->userdata('id'),
                    'teamname' => $this->input->post('teamName')
                ),
                array(
                    'pubgid' => $this->input->post('pfourName'),
                    'subtid' => $this->input->post('subTournameID'),
                    'teamleadid' => $this->session->userdata('id'),
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
                $gameName = "Player Unknown Battlegrounds";
                $newNameGame = str_replace(" ", " ", $gameName);
                
                 $pname = $this->input->post('name');
                 $pmobile = $this->input->post('mobile');
                 $sms =   $this->pubgSms( $pname, $pmobile);
                 
                return redirect('email/Email_controller/regUserTournament/' . $getEmail . '/' . $newname . '/' . $newNameGame . '');
            } else {
                return redirect('reguser/Reguser_Load_controller/errorview');
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
            return redirect('reguser/Reguser_Load_controller/errorview');
        } else {


            $data = array
                (
                'pubgid' => $this->input->post('ptwoName')
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

    public function validatePubgSqanDuoEditReg() {
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
            return redirect('reguser/Reguser_Load_controller/errorview');
        } else {





            $data = array
                (
                'name' => $this->input->post('playerName'),
                'mobile' => $this->input->post('mobile'),
                'pubnumber' => $this->input->post('pTag'),
                'pubname' => $this->input->post('vName'),
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

                return redirect('reguser/Reguser_Load_controller/successview');
            } else {
                return redirect('reguser/Reguser_Load_controller/errorview');
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
    
    
    
    

}
