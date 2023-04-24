<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reguser_Load_controller extends MY_Controller {

//    public function __construct() {
//
//
//        parent::__construct();
//        
//            $this->load->model('admin/Get_model');
//            $TableName = "game";
//            $data['TableName'] = "game";
//            $itemTableName = "iteam";
//             $data['itemTableName'] = "iteam";
//              $SearchTable = "trade";
//              $SearchTableIndex = "status";
//            $SearchTableValue = "UNSOLD";
//             
//            $data['boday_all_count'] = $this->Get_model->getDataCountForOneIndex($SearchTable, $SearchTableIndex,$SearchTableValue); 
//            
//            $data['boday_item_content'] = $this->Get_model->getAllIteams($itemTableName); 
//           $data['header_content'] = $this->Get_model->getAllIteams($TableName);
//            $data['header'] = $this->load->view('Template/hedder_view', $data, TRUE);
//     
//}



    public function dashboard() {

        $data['main_content'] = $this->load->view('registeruser/user_dashboard_view', '', TRUE);

        $this->load->view('registeruser/user_mainTemplate_view', $data);
    }

    public function tournamentRegForm() {

        $data['main_content'] = $this->load->view('admin/forms/tournament_add_form_view', '', TRUE);

        $this->load->view('admin/admin_mainTemplate_view', $data);
    }

    public function successview() {

        $data['main_content'] = $this->load->view('admin/success_view', '', TRUE);
        $this->load->view('registeruser/user_mainTemplate_view', $data);
    }

    public function errorview() {

        $data['main_content'] = $this->load->view('admin/error_view', '', TRUE);
        $this->load->view('registeruser/user_mainTemplate_view', $data);
    }

    public function tournametList() {


        $this->load->model('admin/Get_model');

        $TableName = "tournament";
        $data['TableName'] = "tournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);
        $data['main_content'] = $this->load->view('admin/tables/tournament_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }

    public function tournametListDeactivate($tableName, $id) {

        $this->load->model('admin/Update_model');
        $data = array
            (
            'status' => "DISABLE"
        );

        $this->Update_model->updateAnydata($tableName, $data, $id);

        $this->load->model('admin/Get_model');

        $TableName = "tournament";
        $data['TableName'] = "tournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);
        $data['main_content'] = $this->load->view('admin/tables/tournament_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }

    public function tournametListAactivate($tableName, $id) {

        $this->load->model('admin/Update_model');
        $data = array
            (
            'status' => "ACTIVE"
        );

        $this->Update_model->updateAnydata($tableName, $data, $id);

        $this->load->model('admin/Get_model');

        $TableName = "tournament";
        $data['TableName'] = "tournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);

        $data['main_content'] = $this->load->view('admin/tables/tournament_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }

    public function tournametListDetails() {


        $this->load->model('admin/Get_model');

        $TableName = "tournament";
        $data['TableName'] = "tournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);

        $data['main_content'] = $this->load->view('registeruser/boxlist/load_any_list_view', $data, TRUE);
        $this->load->view('registeruser/user_mainTemplate_view', $data);
    }

    public function regTournametListDetails() {


        $this->load->model('admin/Get_model');

        $TableName = "tournament";
        $data['TableName'] = "tournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);
        $data['main_content'] = $this->load->view('registeruser/boxlist/load_any_reg_game_list_view', $data, TRUE);
        $this->load->view('registeruser/user_mainTemplate_view', $data);
    }
    public function regTournametListMessageDetails() {


        $this->load->model('admin/Get_model');

        $TableName = "tournament";
        $data['TableName'] = "tournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);
        $data['main_content'] = $this->load->view('registeruser/boxlist/load_any_reg_message_list_view', $data, TRUE);
        $this->load->view('registeruser/user_mainTemplate_view', $data);
    }

    public function profile() {
        $this->load->model('admin/Get_model');
        $data['table'] = "reguser";
        $TableName = "reguser";
        $index = "id";

        $indexValue = $this->session->userdata('id');

        $data['sub_cotent'] = $this->Get_model->getDataForEditIndex($TableName, $index, $indexValue);
        $data['main_content'] = $this->load->view('registeruser/Subpage/profile_view', $data, TRUE);

        $this->load->view('registeruser/user_mainTemplate_view', $data);
    }

    public function gameRegList($TableName, $gameName, $id, $status) {
        $this->load->model('admin/Get_model');
        $index = "userid";


        $indexValue = $this->session->userdata('id');
        $data['userID'] = $this->session->userdata('id');

        $data['sub_cotent'] = $this->Get_model->getDataForEditIndex($TableName, $index, $indexValue);
        $subTableName = "subtournament";
        $data['sub_tournament'] = $this->Get_model->getAllIteams($subTableName);
        
        $data['status'] = $status;
        $data['fixture'] = "fixture";
        $data['rules'] = "rules";
        $data['result'] = "result";
        $data['point'] = "point";
        
        if ($TableName === "coc") {
            $data['TableName'] = $TableName;
            $data['gamename'] = $gameName;
            $data['id'] = $id;
            $data['main_content'] = $this->load->view('registeruser/tables/coc_reg_list_view', $data, TRUE);
            $this->load->view('registeruser/user_mainTemplate_view', $data);
        } elseif ($TableName === "pubg") {
            
            
            $data['TableName'] = $TableName;
            $data['gamename'] = $gameName;
            $data['id'] = $id;
            $data['main_content'] = $this->load->view('registeruser/tables/pubg_reg_list_view', $data, TRUE);
            $this->load->view('registeruser/user_mainTemplate_view', $data);
            
            
        } 
        

        
        
        else {
            $data['gamename'] = $gameName;
            $data['TableName'] = $TableName;
            $data['id'] = $id;
            $data['main_content'] = $this->load->view('registeruser/tables/game_reg_list_view', $data, TRUE);
            $this->load->view('registeruser/user_mainTemplate_view', $data);
        }
    }

     public function subGameLoad($id) {
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
          
        $tName = "subtournament";
        $index = "mainTournamentId";
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
            
            
            if (empty($chedataForGame)) 
                
            {
                if(($currentdatenew > $endDateenew))
                {
                    $datadisable = array
                            (
                            'status' => "DISABLE",
                        );
                        $this->Update_model->updateAnydata($tName, $datadisable, $subGameid);
                }   
                
            }  
            else 
                {
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
        $data['main_content'] = $this->load->view('registeruser/Subpage/reg_user_tournament_game_view', $data, TRUE);
        
         $this->load->view('registeruser/user_mainTemplate_view', $data);
    }
    
    
    
    
    
    public function fileDownload($tableName,$subtournamentID)
    {
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
    
    
    public function NofileUploadView() {


        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);

        $data['main_content'] = $this->load->view('registeruser/Subpage/nofile_upload_view', '', TRUE);
       $this->load->view('registeruser/user_mainTemplate_view', $data);
    }
    
     public function download($fileName) {
        $this->load->helper('download');

        $data = 'asset/documents/' . $fileName;
        
        $fileExtentionCheck = (pathinfo("$data", PATHINFO_EXTENSION));
        
        if(($fileExtentionCheck === "pdf") ||($fileExtentionCheck === "PDF"))
        {
            header("Content-type: application/pdf");
            header("Content-Length: " . filesize($data)); 
        
            readfile($data);
            
        }
        else
            {
            force_download($data, Null);
            }
       
        
         
    }
    
    
  public function regClose($gameName) {


        $data['gamename'] = $gameName;
        $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);

        $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);

        $data['main_content'] = $this->load->view('registeruser/Subpage/reg_close_view', $data, TRUE);
        $this->load->view('registeruser/user_mainTemplate_view', $data);
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

            
            if((int)$listPerson >= (int)$newtotalPersonCount )
                {
                $this->regClose($gamename);
                }
            
            else
                {
            
                
                    $userId = $this->session->userdata('id');
                    $subTfindId = $id;
                    $oneIndex = "userid";
                    $twoIndex  = "subtorunamentId";      
                    $findData = $this->Get_model->getDataForTowIndex($newTableName,$oneIndex,$twoIndex,$userId,$subTfindId);

                    if($findData)
                    {
                         $data['main_content'] = $this->load->view('registeruser/Subpage/no_reg_view', $data, TRUE);
                         $this->load->view('registeruser/user_mainTemplate_view', $data);

                    }
                    else
                    {
                        $data['TableName'] = $tablename;
                          $data['sub_t_ID'] = $id;

                          $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
                          $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);

                          $data['main_content'] = $this->load->view('registeruser/Subpage/coc_reg_view', $data, TRUE);
                          $this->load->view('registeruser/user_mainTemplate_view', $data);
                      }
              
            
                }
            
            
        } 
        
        
        if ($newTableName === "mlbb") {

            
            if((int)$listPerson >= (int)$newtotalPersonCount )
                {
                $this->regClose($gamename);
                }
            
            else
                {
            
                
                    $userId = $this->session->userdata('id');
                    $subTfindId = $id;
                    $oneIndex = "userid";
                    $twoIndex  = "subtorunamentId";      
                    $findData = $this->Get_model->getDataForTowIndex($newTableName,$oneIndex,$twoIndex,$userId,$subTfindId);

                    if($findData)
                    {
                         $data['main_content'] = $this->load->view('registeruser/Subpage/no_reg_view', $data, TRUE);
                         $this->load->view('registeruser/user_mainTemplate_view', $data);

                    }
                    else
                    {
                        $data['TableName'] = $tablename;
                          $data['sub_t_ID'] = $id;

                          $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
                          $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);

                          $data['main_content'] = $this->load->view('registeruser/Subpage/mlbb_reg_view                                                                                                         ', $data, TRUE);
                          $this->load->view('registeruser/user_mainTemplate_view', $data);
                      }
              
            
                }
            
            
        }
        
        
        
        
        
        
        
        
        elseif ($newTableName === "pubg")
            
            
            {
            
            if((int)$listPerson >= (int)$newtotalPersonCount )
                {
                $this->regClose($gamename);
                }
                
            else
                
                {
                
                $userId = $this->session->userdata('id');
                    $subTfindId = $id;
                    $oneIndex = "userid";
                    $twoIndex  = "subtorunamentId";      
                    $findData = $this->Get_model->getDataForTowIndex($newTableName,$oneIndex,$twoIndex,$userId,$subTfindId);
                    
                    
                    
                    

                    if($findData)
                    {
                         $data['main_content'] = $this->load->view('registeruser/Subpage/no_reg_view', $data, TRUE);
                         $this->load->view('registeruser/user_mainTemplate_view', $data);

                    }
                else
                    {
                    
                     $data['TableName'] = $tablename;
                    $data['sub_t_ID'] = $id;
                    $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
                    $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
                     $pubgDetails = $this->Get_model->getDataForEdit($searchTableName,$id);
                    $gamType = $pubgDetails[0]['gametype'];
                    
                    
                                    if($gamType == 1)
                            {
                                 $data['main_content'] = $this->load->view('registeruser/Subpage/pubg_reg_view', $data, TRUE);
                                $this->load->view('registeruser/user_mainTemplate_view', $data);
                            }
                            else if($gamType == 2)
                            {
                              $data['main_content'] = $this->load->view('registeruser/Subpage/pubg_duo_reg_view', $data, TRUE);
                               $this->load->view('registeruser/user_mainTemplate_view', $data);
                            }
                            else if($gamType == 3)
                            {
                              $data['main_content'] = $this->load->view('registeruser/Subpage/pubg_squad_reg_view', $data, TRUE);
                               $this->load->view('registeruser/user_mainTemplate_view', $data);
                            }
                            else
                            {
                                $data['main_content'] = $this->load->view('registeruser/Subpage/pubg_reg_view', $data, TRUE);
                                $this->load->view('registeruser/user_mainTemplate_view', $data);

                            }
                    
                      
            
                
                    
                    }
                    
                    
                    
                    
                    
                    
            
               }
         } 
        
        
        
        else {

            if((int)$listPerson >= (int)$newtotalPersonCount )
                {
                $this->regClose($gamename);
                }
                
                
            else 
                {
                
                
                
                $userId = $this->session->userdata('id');
                    $subTfindId = $id;
                    $oneIndex = "userid";
                    $twoIndex  = "subtorunamentId";      
                    $findData = $this->Get_model->getDataForTowIndex($newTableName,$oneIndex,$twoIndex,$userId,$subTfindId);

                    if($findData)
                    {
                         $data['main_content'] = $this->load->view('registeruser/Subpage/no_reg_view', $data, TRUE);
                         $this->load->view('registeruser/user_mainTemplate_view', $data);

                    }
                else
                    {
                
                    $this->load->model('admin/Get_model');
                    $data['sub_t_ID'] = $id;
                    $data['TableName'] = $tablename;
                    $data['sub_cotent'] = $this->Get_model->getAllIteams($newTableName);
                    $data['header'] = $this->load->view('Template/hedder_view', '', TRUE);
                    $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
                    $data['main_content'] = $this->load->view('registeruser/Subpage/game_reg_view', $data, TRUE);
                    $this->load->view('registeruser/user_mainTemplate_view', $data);
                    }
                }   
        }
    }
    
    
    
    public function paymentLoad($table,$id)
    {
      
        $data['TableName'] = $table;
        $data['tid'] = $id;

        $data['main_content'] = $this->load->view('registeruser/forms/payment_form_view', $data, TRUE);
        $this->load->view('registeruser/user_mainTemplate_view', $data);
    }
    
    public function TeamView($uid,$subid)
    {
       $this->load->model('admin/Get_model');
        $data['TableName'] = "subpubg";
        $tableName = "subpubg";
        $oneIndex = "teamleadid";
        $twoIndex = "subtid";
        $oneValue = $uid;
        $twoValue = $subid;
        $Value = $this->Get_model->getDataForTowIndexExistOrNot($tableName,$oneIndex,$twoIndex,$oneValue,$twoValue);
        
        if($Value)
        {
            
              $data['sub_cotent']   =   $this->Get_model-> getDataForTowIndex($tableName,$oneIndex,$twoIndex,$oneValue,$twoValue);
         $data['main_content'] = $this->load->view('registeruser/tables/team_reg_list_view', $data, TRUE);
        $this->load->view('registeruser/user_mainTemplate_view', $data);
        }
        else
        {
            $data['main_content'] = $this->load->view('registeruser/Subpage/no_team_view', $data, TRUE);
            $this->load->view('registeruser/user_mainTemplate_view', $data);
            
        }

        
    }
    
    
    public function messageLoad($tableName,$gameName,$maintableId)
    
    {
        $this->load->model('admin/Get_Record_model');
        $this->load->model('admin/Get_model');
        $userId = $this->session->userdata('id');
        $index = "userid";
        $messageTable= "message";
        $subTouTable= "subtournament";
        $messageindex = "subtorunamentId";
        $sunTouindex = "mainTournamentId";
        $data['gamename'] = $gameName;
        $data['tournamentdata'] = $this->Get_model->getDataForEditIndexDesending($tableName, $index, $userId);
        $data['subournamentdata'] = $this->Get_model->getDataForEditIndexDesending($subTouTable, $sunTouindex, $maintableId);
        $data['messagedata'] = $this->Get_model->getAllIteams($messageTable);
        $data['main_content'] = $this->load->view('registeruser/tables/game_reg_list_message_view', $data, TRUE);
        $this->load->view('registeruser/user_mainTemplate_view', $data);
        
    }
    
    
    
    public function seeMassage($id)
    {
        $this->load->model('admin/Get_model');
        $TableName = "message";
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($TableName,$id);
        $data['main_content'] = $this->load->view('registeruser/Subpage/reg_message_show_view', $data, TRUE);
        $this->load->view('registeruser/user_mainTemplate_view', $data);
    }
}
