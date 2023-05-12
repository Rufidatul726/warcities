<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Erase_Conrtroller extends MY_Controller {

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

    public function delateuser($tableName, $id) {
        $this->load->model('admin/Delate_model');
        $tablename = $tableName;
        $newid = $id;

        if ($this->Delate_model->delateAnyData($tablename, $newid)) {
            return redirect('Admin_Load_controller/successview');
        } else {
            return redirect('Admin_Load_controller/errorview');
        }
    }
    
    
    public function delateTournamentGame($tableName, $id) {
        $this->load->model('admin/Delate_model');
        $tablename = $tableName;
        $newid = $id;

        if ($this->Delate_model->delateAnyData($tablename, $newid)) {
            return redirect('admin/Admin_Load_controller/successview');
        } else {
             return redirect('admin/Admin_Load_controller/errorview');
        }
    }
    
    
    public function delateAnySingelTableData($tableName, $id) {
        $this->load->model('admin/Delate_model');
        $tablename = $tableName;
        $newid = $id;

        if ($this->Delate_model->delateAnyData($tablename, $newid)) {
            return redirect('admin/Admin_Load_controller/successview');
        } else {
             return redirect('admin/Admin_Load_controller/errorview');
        }
    }
    
    
    
    public function delateAnySingelTableDataWithIndex($tableName, $id) {
        $this->load->model('admin/Delate_model');
        $tablename = $tableName;
        $newid = $id;
        $index = "subtorunamentId";
        if ($this->Delate_model->delateAnyDataWithIndex($tablename,$index,$newid)) {
            return redirect('admin/Admin_Load_controller/successview');
        } else {
             return redirect('admin/Admin_Load_controller/errorview');
        }
    }
    
    
    
    
    public function delateAnyTradeData($tableName, $id) {
        
        
         $this->load->model('admin/Delate_model');
         $this->load->model('admin/Get_model');
        $
        $tablename = $tableName;
        $newid = $id;
        $index = "tradeid";
         $picdataTable = "picture";
        
        
        $picdata = $this->Get_model->getDataForEditIndex($picdataTable, $index,$id);
                          
                                foreach ($picdata as $value)
                               {
                                    $did = $value['id'];
                                    $picname = $value['picname'];
                                    unlink("asset/image/trade/".$picname);
                                    
                                    $this->Delate_model->delateAnyData($picdataTable, $did);
                                 
                                }
        
        

        if ($this->Delate_model->delateAnyData($tablename, $newid)) {
            return redirect('admin/Admin_Load_controller/successview');
        } else {
             return redirect('admin/Admin_Load_controller/errorview');
        }
    }
    
    
    
    public function delateAnyDataContent($tableName, $id) {
        
        
         $this->load->model('admin/Delate_model');
         $this->load->model('admin/Get_model');
        
        $tablename = $tableName;
        $newid = $id;
        $index = "gameid";
        
        
        
        $picdata = $this->Get_model->getDataForEditIndex($tablename, $index,$id);
                          
                                foreach ($picdata as $value)
                               {
                                    $did = $value['id'];
                                    $picname = $value['filename'];
                                    unlink("asset/documents/".$picname);
                                    
                                    $this->Delate_model->delateAnyData($tablename, $did);
                                 
                                }
        
        

        if ($this->Delate_model->delateAnyDataWithIndex($tableName,$index,$newid)) {
            return redirect('admin/Admin_Load_controller/successview');
        } else {
             return redirect('admin/Admin_Load_controller/errorview');
        }
    }
    
    
    
    
    
    
    
    

    public function delatemanu($tableName, $id) {


        $this->load->model('admin/Delate_model');
        $tablename = $tableName;
        $newid = $id;
        $this->load->model('admin/Get_model');
        $data = $this->Get_model->getDataForEdit($tableName, $id);

        foreach ($data as $value) {
            $submenu = $value['submenu'];
            $mainId = $value['id'];
            $mainTablename = $value['tablename'];


            if ($submenu === "YES") {
                $newtable = "submenu";
                $sub = $this->Get_model->getDataForNewCatSubList($newtable, $mainId);

                foreach ($sub as $row) {
                    $subid = $row['id'];
                    $table = $row['tablename'];


                    if ($this->Delate_model->droptableYes($table, $subid)) {

                        $this->Delate_model->delateAnyData($newtable, $subid);
                    } else {
                        return redirect('Admin_Load_controller/errorview');
                    }
                }

                $this->Delate_model->delateAnyData($tablename, $id);

                return redirect('Admin_Load_controller/successview');
            } else if ($submenu === "NO") {
                if ($this->Delate_model->droptable($mainTablename, $id)) {
                    $this->Delate_model->delateAnyData($tablename, $newid);

                    return redirect('Admin_Load_controller/successview');
                } else {
                    return redirect('Admin_Load_controller/errorview');
                }
            }
        }
    }

    public function delatesubmenu($tableName, $id) {
        $this->load->model('admin/Delate_model');
        $this->load->model('admin/Get_model');
        $data = $this->Get_model->getDataForEdit($tableName, $id);

        foreach ($data as $value) {

            $subId = $value['id'];
            $subTablename = $value['tablename'];
        }

        if ($this->Delate_model->droptable($subTablename, $id)) {
            $this->Delate_model->delateAnyData($tableName, $id);

            return redirect('Admin_Load_controller/successview');
        } else {
            return redirect('Admin_Load_controller/errorview');
        }
    }

    public function delatepatner($tableName, $id) {
        $this->load->model('admin/Delate_model');
        $tablename = $tableName;
        $newid = $id;

        if ($this->Delate_model->delateAnyData($tablename, $newid)) {
            return redirect('Admin_Load_controller/successview');
        } else {
            return redirect('Admin_Load_controller/errorview');
        }
    }

    public function delateadd($tableName, $id) {
        $this->load->model('admin/Delate_model');
        $tablename = $tableName;
        $newid = $id;

        if ($this->Delate_model->delateAnyData($tablename, $newid)) {
            return redirect('Admin_Load_controller/successview');
        } else {
            return redirect('Admin_Load_controller/errorview');
        }
    }

    
    public function delatnewsMultipic($tableName, $id) {
         $this->load->model('admin/Delate_model');
        $tablename = $tableName;
        $newid = $id;
        

        if ($this->Delate_model->delateAnyDataWithImage($tablename, $newid)) {
            return redirect('admin/Admin_Load_controller/successview');
        } else {
          return redirect('admin/Admin_Load_controller/errorview');
        }
    }


}
