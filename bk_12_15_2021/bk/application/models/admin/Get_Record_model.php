<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Get_Record_model extends CI_Model {
    
    
     public function coutntRow($tablename) {
        $newTableName = $tablename;
        $this->db->select("*");
        $this->db->from($newTableName);
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }
    
    
    
    public function getAllRowCountWithIndex($tableName, $index,$indexValue) {
        $newTableName = $tableName;
       
        $indexName = $index;
        $indexdata = $indexValue;
        
         $array = array($indexName => $indexdata);
        
        $this->db->where($array);
        $query = $this->db->get($newTableName);
        $result = $query->num_rows();
        return $result;
    }
    
    public function personalinfo() {
        $newTableName = "admin";
        $newid = $this->session->userdata('id');
        $this->db->where('id', $newid);
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        return $result;
    }

    public function subpersonalinfo() {
        $newTableName = "user";
        $newid = $this->session->userdata('id');
        $this->db->where('id', $newid);
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        return $result;
    }

    public function getcounterdata() {
        $newTableName = "hitcounter";
        $query = $this->db->get($newTableName);
        $result = $query->result_array();
        return $result;
    }

    public function menu() {
        $newTableName = "mainmenu";
        $this->db->select("*");
        $this->db->from($newTableName);
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }

    public function user() {
        $newTableName = "user";
        $this->db->select("*");
        $this->db->from($newTableName);
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }

    public function totalArticle() {

        $date = date("Y-m-d");
        $news = 0;
        $newTableName = "tablelist";
        $query = $this->db->get($newTableName);
        $result = $query->result_array();

        foreach ($result as $value) {
            $tablename = $value['tablename'];
            $this->db->select("*");
            $this->db->where('date', $date);

            $query = $this->db->get($tablename);
            $result = $query->num_rows();
            $news = $news + $result;
        }


        return $news;
    }

}
