<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Get_model extends CI_Model {
    
    
    
    
    
    
    public function CheckDataExistOrNot($tableName, $fieldName, $value) {
        $newTableName = $tableName;
        $indexName = $fieldName;
        $indexdata = $value;
        $array = array($indexName => $indexdata);
        $this->db->where($array);
        $query = $this->db->get($newTableName);
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    
    public function getGrpupByRecordCount($tableName,$GropuByfield,$GroupByCreateField)
    {
        $this->db->select(''.$GropuByfield.', COUNT('.$GropuByfield.') as '.$GroupByCreateField.'');
         $this->db->group_by($GropuByfield); 
         $this->db->order_by($GroupByCreateField, 'desc');
          $query = $this->db->get($tableName);
           $result = $query->result_array();
           return $result;
    }

    
    

    public function getLastRow($tableName) {
        $newTableName = $tableName;


        $this->db->select("*");
        $this->db->from($newTableName);
        $this->db->limit(1);
        $this->db->order_by('id', "DESC");
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

 public function getAllIteamsPageignation($tableName,$limit,$ofset) {
      
         $this->db->order_by("id", "desc");
        $this->db->limit($limit, $ofset);
        $query = $this->db->get($tableName);
        $result = $query->result_array();
        return $result;
    }





    public function getAllIteams($tableName) {
        $newTableName = $tableName;
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        return $result;
    }
    
    
    public function getAllRowCount($tableName) {
        $newTableName = $tableName;
        $query = $this->db->get($newTableName);
        $result = $query->num_rows();
        return $result;
    }
    
    
    

    public function getDataForEdit($tableName, $id) {
        $newTableName = $tableName;
        $newid = $id;

        if ($id != '')
            $this->db->where('id', $newid);

        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        //print_r($this->db->last_query());die();
        return $result;
    }

    public function getDataForEditDesending($tableName, $id) {
        $newTableName = $tableName;
        $newid = $id;
        $this->db->where('id', $newid);
        $this->db->order_by("id", "desc");
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        //print_r($this->db->last_query());die();
        return $result;
    }

    
    public function getDataForEditIndex($tableName, $index,$indexValue) {
        $newTableName = $tableName;
       
        $indexName = $index;
        $indexdata = $indexValue;
        
         $array = array($indexName => $indexdata);
        
        $this->db->where($array);
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        return $result;
    }
    public function getDataForEditIndexDesending($tableName, $index,$indexValue='') {
        $newTableName = $tableName;
       
        $indexName = $index;
        $indexdata = $indexValue;
        
        $array = array($indexName => $indexdata);
        if ($indexValue != '') 
            $this->db->where($array);

        $this->db->order_by("id", "desc");
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        //print_r($this->db->last_query());die();
        return $result;
    }
    
    
    
    
    
    public function getDataForTowIndexWithCount($tableName,$oneIndex,$twoIndex,$oneValue,$twoValue) {
        $newTableName = $tableName;
        
        $indexOnw = $oneIndex;
        $indexTwo = $twoIndex;
        $indexOneValue = $oneValue;
        $indexTwoValue = $twoValue;
        $array = array($indexOnw => $indexOneValue, $indexTwo => $indexTwoValue);
        $this->db->where($array);
        $query = $this->db->get($newTableName);
        $result = $query->num_rows();
        return $result;
    }
    
    
    
    public function getDataForTowIndex($tableName,$oneIndex,$twoIndex,$oneValue,$twoValue) {
        $newTableName = $tableName;
        
        $indexOnw = $oneIndex;
        $indexTwo = $twoIndex;
        $indexOneValue = $oneValue;
        $indexTwoValue = $twoValue;
        $array = array($indexOnw => $indexOneValue, $indexTwo => $indexTwoValue);
        $this->db->where($array);
        $query = $this->db->get($newTableName);
        $result = $query->result_array();;
        return $result;
    }
    public function getDataForTowIndexExistOrNot($tableName,$oneIndex,$twoIndex,$oneValue,$twoValue) {
        $newTableName = $tableName;
        
        $indexOnw = $oneIndex;
        $indexTwo = $twoIndex;
        $indexOneValue = $oneValue;
        $indexTwoValue = $twoValue;
        $array = array($indexOnw => $indexOneValue, $indexTwo => $indexTwoValue);
        $this->db->where($array);
        $query = $this->db->get($newTableName);
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    

    public function getDataCountForOneIndex($tableName, $indexName,$indexValue) {
        $newTableName = $tableName;
        $newindexName = $indexName;
        $newindexValue = $indexValue;
        $this->db->where($newindexName, $newindexValue);
        $query = $this->db->get($newTableName); ;
        $result = $query->num_rows();
        return $result;
    }

  
     public function getAllDataForDesending($tableListCheck, $tablenameExist, $checkField,$orderTypeIndex) {
        $newTableName = $tableListCheck;
        $newtablenameExist = $tablenameExist;
        $newOderTypeIndex = $orderTypeIndex;
        $this->db->where($checkField, $newtablenameExist);
        $this->db->order_by($newOderTypeIndex, "asc");
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        return $result;
    }
    
    
    
       public function getRandomDataForchecktable($tableListCheck, $tablenameExist, $checkField) {
        $newTableName = $tableListCheck;
        $newtablenameExist = $tablenameExist;
        $this->db->where($checkField, $newtablenameExist);
         $this->db->order_by("id", "RANDOM");
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        return $result;
    }
    
    
    
   public function getSearchData($tableName, $indexName,$indexValue,$kye) {
        
       $newTableName = $tableName;
        $newindexName = $indexName;
        $newindexValue = $indexValue;
      
        $ItemExist = $kye;
        
       $this->db->like('heading',$ItemExist,'both');
//        $this->db->or_like('description', $ItemExist,'both');
        
        $this->db->or_like('gamename', $ItemExist,'both');
        $this->db->or_like('itemname', $ItemExist,'both');
           $this->db->where($newindexName, $newindexValue);
        $query = $this->db->get($newTableName);
        $result = $query->result_array();;
        return $result;
        
        
        
        
    } 
    
     public function search($tablename, $SearchTableIndex, $searchkye) {
        $newTableName = $tablename;
        $index = $SearchTableIndex;
       
        $this->db->like($index, $searchkye, 'both');
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        return $result;
    }
    
    
    

    public function getDataForchecktable($tableListCheck, $tablenameExist, $checkField) {
        $newTableName = $tableListCheck;
        $newtablenameExist = $tablenameExist;
        $this->db->where($checkField, $newtablenameExist);
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        return $result;
    }

    public function getAllNewsToList($tablename, $tablecheckdata, $checkField) {
        $newTableName = $tablename;
        $checkdata = $tablecheckdata;
        $this->db->where($checkField, $checkdata);
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        return $result;
    }

    public function searchAllNewsToList($tablename, $tablecheckdata, $checkField, $searchkye) {
        $newTableName = $tablename;
        $checkdata = $tablecheckdata;
        $this->db->where($checkField, $checkdata);
        $this->db->like('newsheadline', $searchkye, 'both');
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        return $result;
    }

    public function getGroupByAllNewsToList($tablename, $groupby, $currentdate, $prochodField, $porchodata) {
        $newTableName = $tablename;
        $newgroupby = $groupby;
        $newprochodField = $prochodField;

        $this->db->where($groupby, $currentdate);
        $this->db->where($newprochodField, $porchodata);

        $query = $this->db->get($newTableName);
        $result = $query->result_array();

        return $result;
    }





    public function getDataRandom($tablename, $currentDate, $checkFieldDate) {
        $newTableName = $tablename;

        $this->db->select('*');

        $this->db->where($checkFieldDate, $currentDate);
        $this->db->order_by('rand()');
        $this->db->limit(1);
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        if ($result) {
            $result['0']['tablename'] = $newTableName;
            return $result;
        } else {
            return null;
        }
    }

    public function getDatalast($tablename, $currentDate, $checkFieldDate) {
        $newTableName = $tablename;

        $this->db->select('*');
        $this->db->where($checkFieldDate, $currentDate);
        $this->db->limit(1);
        $this->db->order_by('id', "DESC");
        $query = $this->db->get($newTableName);
        $result = $query->result_array();


        if ($result) {
            $result['0']['tablename'] = $newTableName;
            return $result;
        } else {
            return null;
        }
    }
    
    
    public function getDataForOneIndexJoinTwoTable($tableName,$oneIndex,$oneValue)
     {
        
           
        $this->db->select('*');
        
        $this->db->from('reguser',$tableName);

        
        $this->db->join($tableName, '  '.$tableName.'.userid = reguser.id','left'); 
        $indexOnw = $oneIndex;
        $indexOneValue = $oneValue;
        $array = array($indexOnw => $indexOneValue);
        $this->db->where($array);
        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }
    
    
    
    
      public function getAllIteamsJoinTwoTable($tableName) {
          
          
         
        $this->db->select('*');
        $this->db->from($tableName,'reguser');
        $this->db->join('reguser', 'reguser.id = '.$tableName.'.userid'); 
          

        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    
    
    
    
    

}
