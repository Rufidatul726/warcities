<?php


class MY_Controller extends CI_Controller{
    
        public function __construct() {


        parent::__construct();
        
        
        
        
        if (!($this->session->userdata('id') && $this->session->userdata('role'))) {

            return redirect('Call_controller/login');
        }
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
   
}
}