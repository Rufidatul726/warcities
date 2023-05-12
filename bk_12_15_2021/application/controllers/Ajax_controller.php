<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_controller extends CI_Controller {

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


    public function emailCheck() {
        if (!($_POST['email']) && ($_POST['email']) === '') {
            echo '<p class = "text-danger">can not be empty</p>';
        } else {
            $value = $_POST['email'];
            $fieldName = "email";
            $tableName = "reguser";
            $this->load->model("admin/Get_model");

            if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $newvalue = $this->Get_model->CheckDataExistOrNot($tableName, $fieldName, $value);

                if ($newvalue) {
                    $link_address = base_url('Call_controller/login');
                    echo "<span class = 'text-danger'>email already exits please Go To <a href='".$link_address."'> Login</a></span>";
                } else {
                    echo '<span class = "text-success">ok</span>';
                }
            } else {
                echo '<span class = "text-danger">invalid email formate</span>';
            }
        }
    }

    public function tablenameCheck() {
        if (!($_POST['name']) && ($_POST['name']) === '') {
            echo '<p class = "text-danger">can not be empty</p>';
        } else {
            $value = $_POST['name'];
            $fieldName = "tablename";
            $tableName = "teblelist";
            $this->load->model("common/Get_model");

            if ($value != "" && strlen($value) > 2) {
                $newvalue = $this->Get_model->CheckDataExistOrNot($tableName, $fieldName, $value);

                if ($newvalue) {
                    echo '<span class = "text-danger">table already exits</span>';
                } else {
                    echo '<span class = "text-success">ok</span>';
                }
            } else {

                echo '<span class = "text-danger">invalid formate</span>';
            }
        }
    }
    
    
    
    public function gradenameCheck() {
        if (!($_POST['name']) && ($_POST['name']) === '') {
            echo '<p class = "text-danger">can not be empty</p>';
        } else {
            $value = $_POST['name'];
            $fieldName = "name";
            $tableName = "grade";
            $this->load->model("common/Get_model");

            if ($value != "" && strlen($value) > 2) {
                $newvalue = $this->Get_model->CheckDataExistOrNot($tableName, $fieldName, $value);

                if ($newvalue) {
                    echo '<span class = "text-danger">grade already exits</span>';
                } else {
                    echo '<span class = "text-success">ok</span>';
                }
            } else {

                echo '<span class = "text-danger">invalid formate</span>';
            }
        }
    }
    
    
    
    
    public function productionCheck() {
        if (!($_POST['name']) && ($_POST['name']) === '') {
            echo '<p class = "text-danger">can not be empty</p>';
        } else
            {
            $value = $_POST['name'];
            $fieldName = "gradeid";
            $tableName = "gradedetails";
            $this->load->model("common/Get_model");

            if ($value != "" && strlen($value) > 0) 
                {
                $newvalue = $this->Get_model->getDataForEditIndex($tableName, $fieldName, $value);
                $newTableName = "rawmaterial";
                foreach ($newvalue as $value)
                {
                   $productid = $value['productid'];
                
                   $totalkg = $value['totalkg'];  
                   
                  $newData =  $this->Get_model->getDataForEdit($newTableName, $productid);
                   
                   $inventoryStock = $newData['0']['stock'];
                   $productName = $newData['0']['productname'];
                   
                   if ((int)$totalkg > (int)$inventoryStock) 
                    {
                    echo '<span class = "text-danger">Not enough '.$productName.' in Inventory</span>';
                     
                     } 
               
                     
                   
                }
                
                
            }
            
            
            else 
                {

                echo '<span class = "text-danger">insufficient stock</span>';
            }
       
            }
    }
    
    
    
  public function companyMaterialAddToGrade() {
     if (!(isset($_POST['name']))) {
            echo '<p class = "text-danger">can not be empty</p>';
        } else {
            $value = $_POST['name'];
            $fieldName = "id";
            $tableName = "rawmaterial";
            $this->load->model("common/Get_model");

            if ($value != "" && (int) $value > 0) {
                $newvalue = $this->Get_model->getDataForEditIndex($tableName, $fieldName,$value);
                    $tableid = $newvalue[0]['tableid'];
                    $newTable = "teblelist";
                      $newFieldName = "id";
                 $tableNameList = $this->Get_model->getDataForEditIndex($newTable, $newFieldName,$tableid);
                 $newtableNameList = $tableNameList['0']['tablename'];
                 $companyData =  $this->Get_model->getAllIteams($newtableNameList);
                  echo '<option  selected="true" value="empty"disabled="disabled">Choose One</option>';
                 foreach ( $companyData as $value) {
                     $cname = $value['company'];
                     $pid = $value['id'];
                     
                     echo '<option value="'.$pid.'">'.$cname.'</option>';
                 }
                   
                }
             
                
        }
    }
    
    
    public function test()
            
    {
        if ((isset($_POST['name'])))
        {
           $value = $_POST['name'];
            $fieldName = "id";
            $tableName = "rawmaterial";
            $this->load->model("common/Get_model");
              if ($value != "" && (int) $value > 0)
              {
                   $newvalue = $this->Get_model->getDataForEditIndex($tableName, $fieldName,$value);
                    $tableid = $newvalue[0]['tableid'];
                    $newTable = "teblelist";
                      $newFieldName = "id";
                       $tableNameList = $this->Get_model->getDataForEditIndex($newTable, $newFieldName,$tableid);
                 $newtableNameList = $tableNameList['0']['tablename'];
                 $companyData =  $this->Get_model->getAllRowCount($newtableNameList);
                 
                 
                  echo '<option value="">'.$companyData.'</option>';
              }
              else
                {
                 echo '<p class = "text-danger">no item found</p>';
                }  
              
        }
    }  
    

}
