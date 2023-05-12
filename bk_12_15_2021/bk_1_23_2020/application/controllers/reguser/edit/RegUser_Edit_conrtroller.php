<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RegUser_Edit_conrtroller extends MY_Controller {

//    public function __construct() {
//
//
//        parent::__construct();
//        if (!($this->session->userdata('id') && $this->session->userdata('mobile'))) {
//
//            return redirect('Login_controller/login');
//        }
//        $this->load->model('admin/Get_Record_model');
//
//        $this->personaldata = $this->Get_Record_model->personalinfo();
//        $this->catagory = $this->Get_Record_model->menu();
//        $hit = $this->Get_Record_model->getcounterdata();
//        foreach ($hit as $value) {
//            $visitor = $value['visitor'];
//        }
//        $this->visitte = $visitor;
//        $this->user = $this->Get_Record_model->user();
//        $this->news = $this->Get_Record_model->totalArticle();
//    }

    public function tournametListEdit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/edit_forms/tournament_edit_form_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
    public function gameListEdit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/edit_forms/game_list_edit_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    public function itemListEdit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/edit_forms/item_list_edit_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
    
    public function cocListEdit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('registeruser/edit_forms/coc_reg_edit_view', $data, TRUE);
        $this->load->view('registeruser/user_mainTemplate_view', $data);
    }
    
    
      public function pubgListEdit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $pubgEditdata = $this->Get_model->getDataForEdit($newTableName, $newid);
            $gameType = $pubgEditdata["0"]["team"];
        if($gameType === "SOLO")
        {
            $data['main_content'] = $this->load->view('registeruser/edit_forms/pubg_reg_edit_list_view', $data, TRUE);
             $this->load->view('registeruser/user_mainTemplate_view', $data);
            
        }
        
        else
          {
            $data['main_content'] = $this->load->view('registeruser/edit_forms/pubg_reg_gameType_edit_list_view', $data, TRUE);
             $this->load->view('registeruser/user_mainTemplate_view', $data);
          }
        
        
    }
    
      public function pubgTeamListEdit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('registeruser/edit_forms/pubg_team_reg_edit_list_view', $data, TRUE);
         $this->load->view('registeruser/user_mainTemplate_view', $data);
    }
    
    
     public function anyGameListEdit($tablename, $id, $gameName) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $data['gamename'] = $gameName;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('registeruser/edit_forms/game_reg_edit_view', $data, TRUE);
       $this->load->view('registeruser/user_mainTemplate_view', $data);
    }


    public function editnews($tablename, $catagoryid, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $data['newsid'] = $catagoryid;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/edit_news_view', $data, TRUE);
        $this->load->view('Template/admin_dashboar_view', $data);
    }

    public function useredit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/user_edit_view', $data, TRUE);
        $this->load->view('Template/admin_dashboar_view', $data);
    }

    public function partneredit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/patner_edit_view', $data, TRUE);
        $this->load->view('Template/admin_dashboar_view', $data);
    }

    public function adverticementedit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/advertise_edit_view', $data, TRUE);
        $this->load->view('Template/admin_dashboar_view', $data);
    }
    
    
    
    public function editTradeInfo($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $picTable = "picture";
        $index = "tradeid";
       
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
         $data['pic_cotent'] = $this->Get_model->getDataForEditIndex($picTable, $index,$newid);
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('registeruser/edit_forms/trade_list_edit_form_view', $data, TRUE);
        $this->load->view('registeruser/user_mainTemplate_view', $data);
    }
    
    public function paymentLoad($table,$id)
    {
        $this->load->model('admin/Get_model');
        
        $testpayMent = $this->Get_model->getDataForEdit($table, $id);
        
        if($testpayMent)
        {
            $data['TableName'] = $table;
            $data['tid'] = $id;
            $data['sub_cotent'] = $this->Get_model->getDataForEdit($table, $id);
            $data['main_content'] = $this->load->view('registeruser/edit_forms/payment_form_view', $data, TRUE);
            $this->load->view('registeruser/user_mainTemplate_view', $data);
            
        }
       else
           {    
             $data['main_content'] = $this->load->view('registeruser/edit_forms/nodata_view','', TRUE);
            $this->load->view('registeruser/user_mainTemplate_view', $data);
           }
        
    }
    
    
    

}
