<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Call_controller extends CI_Controller {
    public function login() {

        $this->load->library('facebook');
        
        include_once APPPATH . "../vendor/autoload.php";
        $data1['google_client'] = new Google_Client();
        $data1['google_client']->setClientId('274861605414-ope16asotl2530c2q9a9kpdhujrbvbag.apps.googleusercontent.com');
        $data1['google_client']->setClientSecret('tu7W_ogo0WFHBrwOZJLQnVOS');
        $data1['google_client']->setRedirectUri('http://localhost/warcities/reguser/google_login/login');
        $data1['google_client']->addScope('email');
        $data1['google_client']->addScope('profile');

        //$data1['fb'] = $this->getauth();
        $data1['LogonUrl'] =  $this->facebook->login_url();

        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $data['main_content'] = $this->load->view('Subpage/login_view', $data1, TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    

    public function noRegView($gameName) {


        $data['gamename'] = $gameName;
        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);

        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);

        $data['main_content'] = $this->load->view('Subpage/no_reg_view', $data, TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }
    
    public function regClose($gameName) {


        $data['gamename'] = $gameName;
        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);

        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);

        $data['main_content'] = $this->load->view('Subpage/reg_close_view', $data, TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function logout() {
        $this->load->library('facebook');
        try {
          // Some request to the Graph API
            $this->facebook->destroy_session();
            $this->login();
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
            $this->session->sess_destroy();
            $this->login();
        }
        
    }

    public function loginError() {

        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);

        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);

        $data['main_content'] = $this->load->view('Subpage/login_erro_view', '', TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function tournament() {

        $this->load->model('admin/Get_model');

        $TableName = "subtournament";
        $newTable = "tournament";
        $data['TableName'] = "subtournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);
        $data['table_cotent'] = $this->Get_model->getAllIteams($newTable);


        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);

        $data['main_content'] = $this->load->view('Subpage/game_registration_view', $data, TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function about() {


        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);

        $data['main_content'] = $this->load->view('Subpage/about_view', '', TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }


    public function privacyPolicy() {

        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $data['main_content'] = $this->load->view('Subpage/privacy_policy_view', '', TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function terms() {

        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $data['main_content'] = $this->load->view('Subpage/terms_and_condition_view', '', TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function refundPolicy() {

        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $data['main_content'] = $this->load->view('Subpage/terms_and_condition_view', '', TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function contactUs() {

        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $data['main_content'] = $this->load->view('Subpage/terms_and_condition_view', '', TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function NofileUploadView() {


        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);

        $data['main_content'] = $this->load->view('Subpage/nofile_upload_view', '', TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }
    

    public function browser() {



        $this->load->model('admin/Get_model');

        $TableName = "tournament";
        $data['TableName'] = "tournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);

        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);

        $data['main_content'] = $this->load->view('Subpage/browse_view', $data, TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function regUser() {

        $this->load->model('admin/Get_model');

        $TableName = "tournament";
        $data['TableName'] = "tournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);


        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);

        $data['main_content'] = $this->load->view('Subpage/reg_user_view', $data, TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function requestForTournament() {

        $this->load->model('admin/Get_model');
        $this->load->library('session');


        $TableName = "tournament";
        $data['TableName'] = "tournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);


        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);

        $data['main_content'] = $this->load->view('Subpage/req_for_tour_view', $data, TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function registration($tablename, $gamename, $id) {
        $this->load->model('admin/Get_Record_model');
        $this->load->model('admin/Get_model');
        $detailsTable = "rules";
        $fixtureTable = "fixture";
        $index = "gameid";
        $indexToCount = "subtorunamentId";
        $searchTableName = "subtournament";
        $personTotalInput = $this->Get_model->getDataForEdit($searchTableName, $id);
        $data['totalList'] = $this->Get_Record_model->getAllRowCountWithIndex($tablename, $indexToCount,$id);
        $listPerson = $this->Get_Record_model->getAllRowCountWithIndex($tablename, $indexToCount,$id);
        $data['details'] = $this->Get_model->getDataForEditIndex($detailsTable, $index, $id);
        $data['fixture'] = $this->Get_model->getDataForEditIndex($fixtureTable, $index, $id);
        $newTableName = $tablename;
        $data['gamename'] = $gamename;
        $newtotalPersonCount = $personTotalInput[0]['totalPerson'];

        if ($newTableName === "coc") {
            if((int)$listPerson >= (int)$newtotalPersonCount ){
                $this->regClose($gamename);
            }else{
                $data['TableName'] = $tablename;
                $data['sub_t_ID'] = $id;
                $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
                $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
                $data['main_content'] = $this->load->view('Subpage/coc_reg_view', $data, TRUE);
                $this->load->view('Template/subTemplate_view', $data);
            }   
        }

        if ($newTableName === "mlbb") {
            if((int)$listPerson >= (int)$newtotalPersonCount ){
                $this->regClose($gamename);
            }else{
                $data['TableName'] = $tablename;
                $data['sub_t_ID'] = $id;  
                $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
                $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
                $data['main_content'] = $this->load->view('Subpage/mlbb_reg_view', $data, TRUE);
                $this->load->view('Template/subTemplate_view', $data);
            } 
        }elseif ($newTableName === "pubg"){
            if((int)$listPerson >= (int)$newtotalPersonCount ){
                $this->regClose($gamename);
            }else{
                $data['TableName'] = $tablename;
                $data['sub_t_ID'] = $id;
                $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
                $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
                $pubgDetails = $this->Get_model->getDataForEdit($searchTableName,$id);
                $gamType = $pubgDetails[0]['gametype'];
                if($gamType == 1){
                    $data['main_content'] = $this->load->view('Subpage/pubg_reg_view', $data, TRUE);
                    $this->load->view('Template/subTemplate_view', $data);
                }else if($gamType == 2){
                  $data['main_content'] = $this->load->view('Subpage/pubg_duo_reg_view', $data, TRUE);
                    $this->load->view('Template/subTemplate_view', $data);
                }else{
                    $data['main_content'] = $this->load->view('Subpage/pubg_squad_reg_view', $data, TRUE);
                    $this->load->view('Template/subTemplate_view', $data);
                }       
            }
         }else{
            if((int)$listPerson >= (int)$newtotalPersonCount ){
                $this->regClose($gamename);
            }else {
                $this->load->model('admin/Get_model');
                $data['sub_t_ID'] = $id;
                $data['TableName'] = $tablename;
                $data['sub_cotent'] = $this->Get_model->getAllIteams($newTableName);
                $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
                $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
                $data['main_content'] = $this->load->view('Subpage/game_reg_view', $data, TRUE);
                $this->load->view('Template/subTemplate_view', $data);
            } 
        }
    }

    public function leaderBoardtListGroupByGame() {
        $this->load->model('admin/Get_model');
        $TableName = "tournament";
        $data['TableName'] = "tournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);
        $data['leader_board'] = $this->Get_model->getAllIteams('leader_board');
        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $data['main_content'] = $this->load->view('Subpage/leader_board_group_by_game_list_view', $data, TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function leaderBoardtListBySingleGame($id, $tournamentName) {
        $this->load->model('admin/Get_model');
        $TableName = "tournament";
        $data['TableName'] = "tournament";
        $data['tournamentName'] = $tournamentName;
        $data['leader_board'] = $this->Get_model->leaderBoardtListBySingleGame('leader_board', $id);
        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $data['main_content'] = $this->load->view('Subpage/leader_board_by_game_list_view', $data, TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function subGameLoad($id='') {
        $this->load->model('admin/Get_model');
        $this->load->model('admin/Update_model');
        $newTableName = "tournament";
        date_default_timezone_set("Asia/Dhaka");
        $currentdate = date('Y-m-d');
        $currentdatenew = strtotime($currentdate);
        $getData = $this->Get_model->getDataForEdit($newTableName, $id);
        foreach ($getData as $value) {
            $mid = $value['id'];
            $tableName = $value['tablename'];
            $status = $value['status'];
            $gname = $value['tournamentName'];
            $pic = $value['piclocation'];
        }
        $data['fixture'] = "fixture";
        $data['rules'] = "rules";
        $data['point'] = "point";

        if ($id == '') 
           $indexValue = ''; 
        else
            $indexValue = $mid;
          
        $tName = "subtournament";
        $index = "mainTournamentId";
        //$indexValue = $mid;
        $data['sub_cotent'] = $this->Get_model->getDataForEditIndexDesending($tName, $index, $indexValue);
        $chedataForSubGame = $this->Get_model->getDataForEditIndexDesending($tName, $index, $indexValue);
        $GropuByfield = "subtorunamentId";
        $GroupByCreateField = "totalCount";
        $chedataForGame = $this->Get_model->getGrpupByRecordCount($tableName, $GropuByfield, $GroupByCreateField);
        $data['recordcount'] = $this->Get_model->getGrpupByRecordCount($tableName, $GropuByfield, $GroupByCreateField);
      
        foreach ($chedataForSubGame as $value) {

            $subGameid = $value['id'];
            $Tperson = $value['totalPerson'];
            $enddate = $value['endDate'];
            $endDateenew = strtotime($enddate);
            
            if (empty($chedataForGame)){
                if(($currentdatenew > $endDateenew)){
                    $datadisable = array('status' => "DISABLE",);
                        $this->Update_model->updateAnydata($tName, $datadisable, $subGameid);
                }   
            }else{
                foreach ($chedataForGame as $row) {
                    $subGameTournaid = $row['subtorunamentId'];
                    $Tpersoncount = $row['totalCount'];
                    if ((($subGameid === $subGameTournaid) && ($Tpersoncount >= $Tperson)) || ($currentdatenew > $endDateenew)) {
                        $datadisable = array
                            (
                            'status' => "DISABLE",
                        );
                        $this->Update_model->updateAnydata($tName, $datadisable, $subGameid);
                    }
                }
            }
        }

        $data['ppid'] = $id;
        $data['currentDate'] = $currentdatenew;
        $data['TableName'] = $tableName;
        $data['GameName'] = $gname;
        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        //$data['main_content'] = $this->load->view('Subpage/tournament_game_view', $data, TRUE);
        $data['main_content'] = $this->load->view('Subpage/tournament_game_all_view', $data, TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function subGameLoadpast($id='') {
        $this->load->model('admin/Get_model');
        $this->load->model('admin/Update_model');
        $newTableName = "tournament";

        date_default_timezone_set("Asia/Dhaka");
        $currentdate = date('Y-m-d');
        $currentdatenew = strtotime($currentdate);
        $data['result'] = "result";
        $getData = $this->Get_model->getDataForEdit($newTableName, $id);
        foreach ($getData as $value) {
            $mid = $value['id'];
            $tableName = $value['tablename'];
            $status = $value['status'];
            $gname = $value['tournamentName'];
            $pic = $value['piclocation'];
        }
        $tName = "subtournament";
        $index = "mainTournamentId";
        if ($id == '') 
           $indexValue = ''; 
        else
            $indexValue = $mid;
        $data['sub_cotent'] = $this->Get_model->getDataForEditIndexDesending($tName, $index, $indexValue);
        $chedataForSubGame = $this->Get_model->getDataForEditIndexDesending($tName, $index, $indexValue);
        $GropuByfield = "subtorunamentId";
        $GroupByCreateField = "totalCount";
        $chedataForGame = $this->Get_model->getGrpupByRecordCount($tableName, $GropuByfield, $GroupByCreateField);
        $data['recordcount'] = $this->Get_model->getGrpupByRecordCount($tableName, $GropuByfield, $GroupByCreateField);
      
        foreach ($chedataForSubGame as $value) {
            $subGameid = $value['id'];
            $Tperson = $value['totalPerson'];
            $enddate = $value['endDate'];
            $endDateenew = strtotime($enddate);
            if (empty($chedataForGame)) {
                if(($currentdatenew > $endDateenew)){
                    $datadisable = array(
                        'status' => "DISABLE",
                    );
                    $this->Update_model->updateAnydata($tName, $datadisable, $subGameid);
                } 
            }else{
                foreach ($chedataForGame as $row) {
                    $subGameTournaid = $row['subtorunamentId'];
                    $Tpersoncount = $row['totalCount'];

                    if ((($subGameid === $subGameTournaid) && ($Tpersoncount >= $Tperson)) || ($currentdatenew > $endDateenew)) {
                        $datadisable = array(
                            'status' => "DISABLE",
                        );
                        $this->Update_model->updateAnydata($tName, $datadisable, $subGameid);
                    }
                }
            }
        }

        $data['ppid'] = $id;
        $data['currentDate'] = $currentdatenew;
        $data['TableName'] = $tableName;
        $data['GameName'] = $gname;
        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        //$data['main_content'] = $this->load->view('Subpage/tournament_past_game_view', $data, TRUE);
        $data['main_content'] = $this->load->view('Subpage/tournament_past_game_all_view', $data, TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function download($fileName) {
        $this->load->helper('download');
        $data = 'asset/documents/' . $fileName;
        $fileExtentionCheck = (pathinfo("$data", PATHINFO_EXTENSION));
        
        if(($fileExtentionCheck === "pdf") ||($fileExtentionCheck === "PDF")){
            header("Content-type: application/pdf");
            header("Content-Length: " . filesize($data)); 
            readfile($data);
            
        }else{
            force_download($data, Null);
        } 
    }
    
    
    public function fileDownload($tableName,$subtournamentID){
        $this->load->model('admin/Get_model');
        $index= "gameid";
        $getData = $this->Get_model->getDataForEditIndex($tableName, $index, $subtournamentID);
        if($getData)
        {
            $fileName= $getData[0]['filename'];
            $this->download($fileName);
        }
        else
        {
            $this->NofileUploadView();
        }  
    }
    

    public function loadAll() {

        $this->load->model('admin/Get_model');
        $TableName = "game";
        $data['TableName'] = "game";
        $data['tradeTable'] = "trade";
        $SearchTable = "trade";
        $SearchTableIndex = "status";
        $SearchTableValue = "UNSOLD";
        $orderTypeIndex = "date";
        $data['trade_cotent'] = $this->Get_model->getAllDataForDesending($SearchTable, $SearchTableValue, $SearchTableIndex, $orderTypeIndex);
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);
        $data['header'] = $this->load->view('Template/hedder_view', $data, TRUE);
        $data['main_content'] = $this->load->view('Subpage/load_all_view', $data, TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function loadSingelGameAll($gameId) {

        $this->load->model('admin/Get_model');
        $TableName = "game";
        $data['TableName'] = "game";
        $data['tradeTable'] = "trade";
        $SearchTable = "trade";
        $SearchTableIndex = "status";
        $SearchTableValue = "UNSOLD";
        $indextwo = "gameid";
        $data['trade_cotent'] = $this->Get_model->getDataForTowIndex($SearchTable, $SearchTableIndex, $indextwo, $SearchTableValue, $gameId);
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);
        $data['header'] = $this->load->view('Template/hedder_view', $data, TRUE);
        $data['main_content'] = $this->load->view('Subpage/load_all_view', $data, TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function searchLoad() {
        $this->load->model('admin/Get_model');
        $tablename = "tournament";
        $SearchTableIndex = "tournamentName";
        $searchkye = $this->input->post('search');
        $data['sub_cotent'] = $this->Get_model->search($tablename, $SearchTableIndex, $searchkye);
        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $data['main_content'] = $this->load->view('Subpage/browse_view', $data, TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function successview() {
        $this->load->view('admin/success_view');
    }

    public function errorview() {
        $this->load->view('admin/error_view');
    }

    public function forgatepass() {
        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $data['main_content'] = $this->load->view('Subpage/forgate_view', '', TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function forgatepassError() {
        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $data['main_content'] = $this->load->view('Subpage/forgate_error_view', '', TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function forgaterepass() {
        $code = rand();
        $this->load->model('admin/Update_model');

        $data = array
            (
            'recover' => $code,
        );
        $tableName = $this->session->userdata('tableName');
        $id = $this->session->userdata('id');

        $this->Update_model->updateAnydata($tableName, $data, $id);
        return redirect('email/Email_controller/varificationNumber/' . $id . '/' . $tableName . '');
    }

    public function forgaterePassView() {

        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $data['main_content'] = $this->load->view('Subpage/forgate_repass_view', '', TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

    public function UpdatePassView() {

        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
        $data['main_content'] = $this->load->view('Subpage/update_repass_view', '', TRUE);
        $this->load->view('Template/subTemplate_view', $data);
    }

}
