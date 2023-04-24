<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Load_controller extends MY_Controller {
    
   
    public function dashboard() {

        $data['main_content'] = $this->load->view('admin/admin_dashboadr_view', '', TRUE);

        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
    
    
    
    
     public function profile() {
          $this->load->model('admin/Get_model');
          $data['table']= "admin";
         $TableName = "admin";
         $index = "id";
         
         $indexValue= $this->session->userdata('id');
        
        $data['sub_cotent'] =  $this->Get_model->getDataForEditIndex($TableName, $index,$indexValue);
        $data['main_content'] = $this->load->view('Subpage/profile_view', $data, TRUE);

       $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
    
    
    
    public function tradeAddForm($itemId,$itemName,$gameId,$gameName) {
        
         $data['itemId'] = $itemId;
          $data['itemName'] = $itemName;
           $data['gameId'] = $gameId;
            $data['gameName'] = $gameName;
            $data['TableName'] = "trade";

        $data['main_content'] = $this->load->view('admin/forms/trade_add_form_view', $data, TRUE);

        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    

    public function tournamentRegForm() {

        $data['main_content'] = $this->load->view('admin/forms/main_tournament_add_form_view', '', TRUE);

        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    public function subTournamentRegForm($id) {
        
        
        $data['subTid'] = $id;
      
        $data['main_content'] = $this->load->view('admin/forms/tournament_add_form_view', $data, TRUE);

        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    public function subTournamentPubgRegForm($id) {
        
        
        $data['subTid'] = $id;
      
        $data['main_content'] = $this->load->view('admin/forms/pubg_tournament_add_form_view', $data, TRUE);

        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
     public function gameAddForm() {

        $data['main_content'] = $this->load->view('admin/forms/game_add_form_view', '', TRUE);

        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    public function iteamAddForm() {

        $data['main_content'] = $this->load->view('admin/forms/iteam_add_form_view', '', TRUE);

        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    

    public function successview() {

        $data['main_content'] = $this->load->view('admin/success_view', '', TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }

    public function errorview() {

        $data['main_content'] = $this->load->view('admin/error_view', '', TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }

    public function tournametList() {


        $this->load->model('admin/Get_model');

        $TableName = "tournament";
        $data['TableName'] = "tournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);

        $data['main_content'] = $this->load->view('admin/tables/tournament_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    public function tournametListMessage() {


        $this->load->model('admin/Get_model');

        $TableName = "tournament";
        $data['TableName'] = "tournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);

        $data['main_content'] = $this->load->view('admin/tables/tournament_list_message_view', $data, TRUE);
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

    
    
    public function subtournametListDeactivate($tableName, $id,$name,$nnid) {

        $this->load->model('admin/Update_model');
        $data = array
            (
            'status' => "DISABLE"
        );

        $this->Update_model->updateAnydata($tableName, $data, $id);

        $this->load->model('admin/Get_model');

        $TableName = "subtournament";
        $data['TableName'] = "subtournament";
         $data['Name'] = $name;
        $data['nnid'] = $nnid;
        $index = "mainTournamentId";
        
        $data['sub_cotent'] = $this->Get_model->getDataForEditIndexDesending($TableName, $index,$nnid);

        $data['main_content'] = $this->load->view('admin/tables/sub_tournament_list_view', $data, TRUE);
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
    
    public function subtournametListAactivate($tableName, $id,$name,$nnid) {

        $this->load->model('admin/Update_model');
        $data = array
            (
            'status' => "ACTIVE"
        );

        $this->Update_model->updateAnydata($tableName, $data, $id);

        $this->load->model('admin/Get_model');

        $TableName = "subtournament";
        $data['TableName'] = "subtournament";
        $data['Name'] = $name;
        $data['nnid'] = $nnid;
          $index = "mainTournamentId";
        
        $data['sub_cotent'] = $this->Get_model->getDataForEditIndexDesending($TableName, $index,$nnid);

        $data['main_content'] = $this->load->view('admin/tables/sub_tournament_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
    
    public function tournametListDetails() {


        $this->load->model('admin/Get_model');

        $TableName = "tournament";
        $data['TableName'] = "subtournament";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);

        $data['main_content'] = $this->load->view('admin/boxlist/load_any_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    public function subtournametList($tablename,$id) {


        $this->load->model('admin/Get_model');
        $mainTournament = "tournament";
        $TableName = $tablename;
        $Id = $id;
        $index = "mainTournamentId";
        $data['TableName'] = $TableName;
        $data['nnid'] = $Id;
        $gameName =$this->Get_model->getDataForEdit($mainTournament, $id);
       
        $data['Name'] = $gameName['0']['tournamentName'];
        
        $data['sub_cotent'] =$this->Get_model->getDataForEditIndexDesending($TableName, $index,$Id);

        $data['main_content'] = $this->load->view('admin/tables/sub_tournament_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    public function subtournametMessageList($tablename,$id) {


        $this->load->model('admin/Get_model');
        $mainTournament = "tournament";
        $TableName = $tablename;
        $Id = $id;
        $index = "mainTournamentId";
        $data['TableName'] = $TableName;
        $data['nnid'] = $Id;
        $gameName =$this->Get_model->getDataForEdit($mainTournament, $id);
       
        $data['Name'] = $gameName['0']['tournamentName'];
        
        $data['sub_cotent'] =$this->Get_model->getDataForEditIndexDesending($TableName, $index,$Id);

        $data['main_content'] = $this->load->view('admin/tables/sub_tournament_message_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
    
    
    
    public function subtournametListDetails($tablename,$id) {


        $this->load->model('admin/Get_model');
        $mainTournament = "tournament";
        $newTable= "subtournament";
        $TableName = $tablename;
        $Id = $id;
        $index = "mainTournamentId";
        $data['TableName'] = $TableName;
        $data['nnid'] = $Id;
        $gameName =$this->Get_model->getDataForEdit($mainTournament, $id);
       
        $data['Name'] = $gameName['0']['tournamentName'];
        
        $data['sub_cotent'] =$this->Get_model->getDataForEditIndexDesending($newTable, $index,$Id);

        $data['main_content'] = $this->load->view('admin/tables/sub_torunamet_list_Details_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    public function searchSubtournametListDetails() {


         $this->load->model('admin/Get_model');
        
        $TableName = "subtournament";
        $Id = $this->input->post('idName');
        $oneIndex = "mainTournamentId";
        $twoIndex = "startDate";
       
       
        $data['Name'] = $this->input->post('gamename');
        $data['TableName'] = $this->input->post('tablename');
        $data['nnid'] = $this->input->post('idName');
        $twoValue = $this->input->post('date');
        
        $data['sub_cotent'] =$this->Get_model->getDataForTowIndex($TableName,$oneIndex,$twoIndex,$Id,$twoValue);

        $data['main_content'] = $this->load->view('admin/tables/sub_torunamet_list_Details_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
    
    
    
    
    public function searchSubgame()
    {
        
         $this->load->model('admin/Get_model');
        
        $TableName = $this->input->post('tablename');
        $Id = $this->input->post('idName');
        $oneIndex = "mainTournamentId";
        $twoIndex = "startDate";
       
       
        $data['Name'] = $this->input->post('gamename');
        $data['TableName'] = $this->input->post('tablename');
        $data['nnid'] = $this->input->post('idName');
        $twoValue = $this->input->post('date');
        
        
        $data['sub_cotent'] =$this->Get_model->getDataForTowIndex($TableName,$oneIndex,$twoIndex,$Id,$twoValue);

        $data['main_content'] = $this->load->view('admin/tables/sub_tournament_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
        
        
    }
    
    
    
    
    
    public function searchSubgameMessage()
    {
        
         $this->load->model('admin/Get_model');
        
        $TableName = $this->input->post('tablename');
        $Id = $this->input->post('idName');
        $oneIndex = "mainTournamentId";
        $twoIndex = "startDate";
       
       
        $data['Name'] = $this->input->post('gamename');
        $data['TableName'] = $this->input->post('tablename');
        $data['nnid'] = $this->input->post('idName');
        $twoValue = $this->input->post('date');
        
        
        $data['sub_cotent'] =$this->Get_model->getDataForTowIndex($TableName,$oneIndex,$twoIndex,$Id,$twoValue);

        $data['main_content'] = $this->load->view('admin/tables/sub_tournament_message_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
        
        
    }
    






    public function gameListTrade() {


        $this->load->model('admin/Get_model');

        $TableName = "game";
        $data['TableName'] = "game";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);

        $data['main_content'] = $this->load->view('admin/boxlist/load_any_game_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
    public function gameItemListTrade($gmaeId,$gameName) {


        $this->load->model('admin/Get_model');

        $TableName = "iteam";
        $data['TableName'] = "iteam";
        $data['gameId'] = $gmaeId;
        $data['gameName'] = $gameName;
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);

        $data['main_content'] = $this->load->view('admin/boxlist/load_any_game_iteam_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
    
     public function getAnyDataList($TableName) {


        $this->load->model('admin/Get_model');
        $result = $this->Get_model->getAllIteams($TableName);
        return $result;
        
    }
    
    
    public function gameRegList($TableName,$gameName,$id) {

         $this->load->model('admin/Get_model');
         
         $index = "subtorunamentId";
        $indexValue = $id;
        $data['sub_cotent'] =  $this->Get_model->getDataForEditIndex($TableName, $index,$indexValue);
        
        if($TableName === "coc")
            
        {
             $data['TableName'] = $TableName;
             $data['gamename'] = $gameName;
             $data['id'] = $id;
            $data['main_content'] = $this->load->view('admin/tables/coc_reg_list_view', $data, TRUE);
            $this->load->view('admin/admin_mainTemplate_view', $data);
        }
        
        elseif($TableName === "pubg")
            
        {
             $data['TableName'] = $TableName;
             $data['gamename'] = $gameName;
             $data['id'] = $id;
             $searchTableName = "subtournament";
             $pubgDetails = $this->Get_model->getDataForEdit($searchTableName,$id);
             $gamType = $pubgDetails[0]['gametype'];
            
             $pubgSubTable = "subpubg";
              $data['pubgTable'] = $pubgSubTable;
              
             $oneIndex = "subtid"; 
            
            
          
             
              if($gamType == 1)
            {
                $data['main_content'] = $this->load->view('admin/tables/pubg_reg_list_view', $data, TRUE);
                $this->load->view('admin/admin_mainTemplate_view', $data);
                  
            }
            else if($gamType == 2)
            {
                
                 
                 $data['sub_player'] =  $this->Get_model->getDataForEditIndex($pubgSubTable, $oneIndex,$indexValue);
                 $data['main_content'] = $this->load->view('admin/tables/pubg_duo_reg_list_view', $data, TRUE);
                $this->load->view('admin/admin_mainTemplate_view', $data);
                
            }
            
            else if($gamType == 3)
            {
                 $data['sub_player'] =  $this->Get_model->getDataForEditIndex($pubgSubTable, $oneIndex,$indexValue);
                 $data['main_content'] = $this->load->view('admin/tables/pubg_squad_reg_list_view', $data, TRUE);
                $this->load->view('admin/admin_mainTemplate_view', $data);
              
            }
            else 
                {
                $data['main_content'] = $this->load->view('admin/tables/pubg_reg_list_view', $data, TRUE);
                $this->load->view('admin/admin_mainTemplate_view', $data);
                
                }
             
             
        }
        
        
        elseif($TableName === "mlbb")
            
        {
             $data['TableName'] = $TableName;
             $data['gamename'] = $gameName;
             $data['id'] = $id;
             $searchTableName = "subtournament";
             $pubgDetails = $this->Get_model->getDataForEdit($searchTableName,$id);
             $gamType = $pubgDetails[0]['gametype'];
            
             $pubgSubTable = "submlbb";
              $data['pubgTable'] = $pubgSubTable;
              
             $oneIndex = "subtid"; 
            
            
          
           
           
                 $data['sub_player'] =  $this->Get_model->getDataForEditIndex($pubgSubTable, $oneIndex,$indexValue);
                 $data['main_content'] = $this->load->view('admin/tables/mlbb_reg_list_view', $data, TRUE);
                $this->load->view('admin/admin_mainTemplate_view', $data);
              
           
           
             
             
        }
        
        
        else
            {
             $data['gamename'] = $gameName;
             $data['TableName'] = $TableName;
               $data['id'] = $id;
            $data['main_content'] = $this->load->view('admin/tables/game_reg_list_view', $data, TRUE);
            $this->load->view('admin/admin_mainTemplate_view', $data);
            
            
            }
        


    }
    
  public function userListView() {


        $this->load->library('pagination');
       $this->load->model('admin/Get_model');
        $TableName = "reguser";
        
       
       
      $totalrow = $this->Get_model->getAllRowCount($TableName);

        $config['base_url'] = base_url() . "admin/Admin_Load_controller/userListView/";
        $config['total_rows'] = $totalrow;
        $config["per_page"] = 50;
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
      
      
       
        $this->pagination->initialize($config);
       
        $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0;
        
        $data['TableName'] = "reguser";
        $data['sub_cotent'] = $this->Get_model->getAllIteamsPageignation($TableName, $config["per_page"], $page);

        $data['main_content'] = $this->load->view('admin/tables/reg_user_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
    
    public function itemListView() {


        $this->load->model('admin/Get_model');

        $TableName = "iteam";
        $data['TableName'] = "iteam";
        $data['sub_cotent'] = $this->Get_model->getAllIteams($TableName);

        $data['main_content'] = $this->load->view('admin/tables/iteam_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
    public function unsoldTradeListView() {


        $this->load->model('admin/Get_model');

        $tableName = "trade";
        $data['TableName'] = "trade";
        $oneValue = $this->session->userdata('id');
        $twoIndex = "status";
        $oneIndex = "sellerid";
        $twoValue = "UNSOLD";
        $data['sub_cotent'] = $this->Get_model->getDataForTowIndex($tableName,$oneIndex,$twoIndex,$oneValue,$twoValue);

        $data['main_content'] = $this->load->view('admin/tables/trade_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
       public function soldTradeListView() {


        $this->load->model('admin/Get_model');

        $tableName = "trade";
        $data['TableName'] = "trade";
        $oneValue = $this->session->userdata('id');
        $twoIndex = "paymentbuyer";
        $oneIndex = "sellerid";
        $twoValue = "YES";
        $data['sub_cotent'] = $this->Get_model->getDataForTowIndex($tableName,$oneIndex,$twoIndex,$oneValue,$twoValue);

        $data['main_content'] = $this->load->view('admin/tables/trade_sold_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    public function closeTournament($TableName)
            
    {
        $this->load->model('admin/Get_model');
          $this->load->model('admin/Update_model');
          
        $playerList = $this->Get_model->getAllIteams($TableName);
        
        foreach ($playerList as $row )
            
        {
             $id = $row['id']; 
            $season = $row['season'];
            
            if ($season ==='') 
                
            {
                $value = date("Y-m-d");
                
                $data = array
                (
                'season' => $value
               );
                
                $this->Update_model->updateAnydata($TableName, $data, $id);
            }
            
            
                    
        }
        
      $this->successview();  
        
    }
    
    
    
    public function addMessage($subTid)
    {   
        $this->load->model('admin/Get_model');
        
        $newTableName = "message";
        $index = "subtorunamentId";
        $message =  $this->Get_model->getDataForEditIndex($newTableName, $index,$subTid);
      
        if($message)
        {
            $data['main_content'] = $this->load->view('admin/forms/message_error_view','', TRUE);
             $this->load->view('admin/admin_mainTemplate_view', $data);
        }
       else 
           {
             $data['sub_t_ID'] = $subTid;
             $data['newtablename'] = "message";
             $data['main_content'] = $this->load->view('admin/forms/message_add_form_view', $data, TRUE);
             $this->load->view('admin/admin_mainTemplate_view', $data);
           }
        
        
    }
    
    
    
    public function addslide()
    {   
        $this->load->model('admin/Get_model');
        
        $newTableName = "slider";
        
          
             $data['sub_t_ID'] = $this->Get_model->getAllIteams($newTableName);
             $data['tablename'] = "slider";
             $data['main_content'] = $this->load->view('admin/forms/slide_add_form_view', $data, TRUE);
             $this->load->view('admin/admin_mainTemplate_view', $data);
       
        
        
    }
    
    
    
    
    

}
