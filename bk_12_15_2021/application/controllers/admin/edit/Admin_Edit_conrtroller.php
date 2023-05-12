<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Edit_conrtroller extends MY_Controller {

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
    
    public function mainTournametListEdit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/edit_forms/main_tournament_edit_form_view', $data, TRUE);
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
        $data['main_content'] = $this->load->view('admin/edit_forms/coc_reg_edit_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    public function pubgListEdit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/edit_forms/pubg_reg_edit_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    public function pubgDuoListEdit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/edit_forms/pubg_duo_reg_edit_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    public function mlbbListEdit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/edit_forms/mlbb_reg_edit_list_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    public function pubgDuoTeamListEdit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/edit_forms/pubg_duo_reg_edit_team_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    public function mlbbTeamListEdit($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/edit_forms/mlbb_reg_edit_team_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
     public function anyGameListEdit($tablename, $id, $gameName) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $data['gamename'] = $gameName;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/edit_forms/game_reg_edit_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
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
        $data['main_content'] = $this->load->view('admin/edit_forms/trade_list_edit_form_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    }
    
    
    public function editAddMessage($subTid)
    {
        $this->load->model('admin/Get_model');
        $data['sub_t_ID'] = $subTid;
        $data['newtablename'] = "message";
        $newTableName = "message";
        $index = "subtorunamentId";
        
        $checkMessage = $this->Get_model->getDataForEditIndex($newTableName, $index,$subTid);
        
        if($checkMessage)
        {
        $data['sub_cotent'] = $this->Get_model->getDataForEditIndex($newTableName, $index,$subTid);
        $data['main_content'] = $this->load->view('admin/edit_forms/message_edit_form_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
            
        }
        else
        {
             $data['main_content'] = $this->load->view('admin/forms/message_edit_error_view','', TRUE);
             $this->load->view('admin/admin_mainTemplate_view', $data);
        }   
        
    }
    
    
   public function payMentConfirm($tablename, $id) {
        $newTableName = $tablename;
        $newid = $id;
        $data['tablename'] = $tablename;
        $this->load->model('admin/Get_model');
        $data['sub_cotent'] = $this->Get_model->getDataForEdit($newTableName, $newid);
        $data['main_content'] = $this->load->view('admin/tables/paymet_confirm_view', $data, TRUE);
        $this->load->view('admin/admin_mainTemplate_view', $data);
    } 
    
    

}
