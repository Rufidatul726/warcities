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


    public function validatePubgDuoReg() {
        
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
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            return redirect('Main_controller/errorview');
        } else {

            $value = $this->input->post('email');
            $fieldName = "email";
            $userTable = "reguser";
            $newvalue = $this->Get_model->CheckDataExistOrNot($userTable, $fieldName, $value);


            if ($newvalue) {
                return redirect('Main_controller/errorview');
            } else {



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
                    'pubname' => $this->input->post('vName'),
                    'pubnumber' => $this->input->post('pTag'),
                    'platfrom' => $this->input->post('cName'),
                    'map' => $this->input->post('cTag'),
                    'mode' => $this->input->post('mode'),
                    'userid' => $regid,
                    'playerPaymentSatus' => "UNPAID",
                    'team' => $this->input->post('team'),
                    'teamname' => $this->input->post('teamName'),
                    'subtorunamentId' => $this->input->post('subTournameID'),
                );



                $tableName = $this->input->post('table');

                $pubgSubTable = "subpubg";

                $subPubgdata = array
                    (
                    'pubgid' => $this->input->post('ptwoName'),
                    'subtid' => $this->input->post('subTournameID'),
                    'teamleadid' => $regid,
                    'teamname' => $this->input->post('teamName')
                );







                if (($this->Insert_model->insert($tableName, $data)) && ($this->Insert_model->insert($pubgSubTable, $subPubgdata))) {

                    $email = $this->Get_model->getLastRow($tableName);

                    foreach ($email as $row) {
                        $getEmail = $row['email'];
                        $getName = $row['name'];
                        $getmobile = $row['mobile'];
                        $newname = str_replace(" ", "", $getName);
                    }
                    
                   $sms =   $this->pubgSms($getName, $getmobile);
                    $gameName = "Player Unknown Battlegrounds";
                    $newNameGame = str_replace(" ", " ", $gameName);
                    return redirect('email/Email_controller/regTournamentUser/' . $getEmail . '/' . $newname . '/' . $newNameGame . '');
                } else {
                    return redirect('Main_controller/errorview');
                }
            }
        }
    }

    public function validatePubgSquadReg() {
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
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            return redirect('Main_controller/errorview');
        } else {

            $value = $this->input->post('email');
            $fieldName = "email";
            $userTable = "reguser";
            $newvalue = $this->Get_model->CheckDataExistOrNot($userTable, $fieldName, $value);


            if ($newvalue) {
                return redirect('Main_controller/errorview');
            } else {



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
                    'pubname' => $this->input->post('vName'),
                    'pubnumber' => $this->input->post('pTag'),
                    'platfrom' => $this->input->post('cName'),
                    'map' => $this->input->post('cTag'),
                    'mode' => $this->input->post('mode'),
                    'userid' => $regid,
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
                        'teamleadid' => $regid,
                        'teamname' => $this->input->post('teamName')
                    ),
                    array(
                        'pubgid' => $this->input->post('pthreeName'),
                        'subtid' => $this->input->post('subTournameID'),
                        'teamleadid' => $regid,
                        'teamname' => $this->input->post('teamName')
                    ),
                    array(
                        'pubgid' => $this->input->post('pfourName'),
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
                         $getmobile = $row['mobile'];
                        $newname = str_replace(" ", "", $getName);
                    }
                    
                    $sms =   $this->pubgSms($getName, $getmobile);
                    $gameName = "Player Unknown Battlegrounds";
                    $newNameGame = str_replace(" ", " ", $gameName);
                    return redirect('email/Email_controller/regTournamentUser/' . $getEmail . '/' . $newname . '/' . $newNameGame . '');
                } else {
                    return redirect('Main_controller/errorview');
                }
            }
        }
    }
    
    
    public function pubgSms($pname,$number)
    {
            $to = $number;
            $token = "acb060635ed2881788d39061a917f151";
            $message = "Congrats ! $pname, Your request for Explode T20 PUBG mobile has been accepted for 12 hours. Please Pay the Registration Fee 200 BDT ( Bikash – 01979122433 ) or your request will be cancelled. For any query Join our discord server – https://discord.gg/zaac8TR.";

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

