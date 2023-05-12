<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {
    
    
    
    
    
    
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

	
	public function index()
                
	{
            
         
            $this->load->model('admin/Get_model');

        $TableName = "tournament";
        $pubid = "2";
        $mlbbid = "4";
        $data['TableName'] = "tournament";
        $status = $this->Get_model->getDataForEdit($TableName,$pubid);
        $mlbbstatus = $this->Get_model->getDataForEdit($TableName,$mlbbid);
            
        foreach ($status as $row)
            
        {
            $newStatus = $row['status'];
        }
        foreach ($mlbbstatus as $row)
            
        {
            $mlbbnewStatus = $row['status'];
        }
            
            
            $this->load->model('admin/Get_Record_model');
            

            $newTableName = "pubg";
            
            $mlbbnewTableName = "mlbb";
            
            
            $sliderTableName = "slider";
            
            $data['slider'] = $this->Get_model->getAllIteams($sliderTableName);
            
            $data['TableName'] = "pubg";
            $data['mlbbTableName'] = $mlbbnewTableName;
            $data['statusNew'] = $newStatus;
            $data['mlbbstatusNew'] = $mlbbnewStatus;
            $data['totalplayer'] = $this->Get_Record_model->coutntRow($newTableName);
            $data['mlbbtotalplayer'] = $this->Get_Record_model->coutntRow($mlbbnewTableName);

            
            $data['header'] = $this->load->view('Template/hedder_view','', TRUE);
            $data['boday'] = $this->load->view('Template/body_view', $data, TRUE);
            $data['footer'] = $this->load->view('Template/footer_view', '', TRUE);
            $this->load->view('Template/mainTemplate_view', $data);
    }
      
    
        
        public function successview() {
            
            $data['header'] = $this->load->view('Template/hedder_view','', TRUE);
                
                $data['footer'] = $this->load->view('Template/footer_view','', TRUE);

        $data['main_content'] = $this->load->view('admin/success_view', '', TRUE);
       $this->load->view('Template/subTemplate_view',$data);
    }

    public function errorview() {

        
        $data['header'] = $this->load->view('Template/hedder_view','', TRUE);
                
        $data['footer'] = $this->load->view('Template/footer_view','', TRUE);
                
        $data['main_content'] = $this->load->view('admin/error_view', '', TRUE);
        $this->load->view('Template/subTemplate_view',$data);
    }
        
        
}
