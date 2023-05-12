<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Delate_model extends CI_Model {

    public function delateAnyData($tableName, $id) {
        $newTableName = $tableName;

        $newid = $id;

        $this->db->where('id', $newid);
        $this->db->delete($newTableName);
        return true;
    }
    
    
     public function delateAnyDataWithIndex($tableName,$index,$id) {
        $newTableName = $tableName;

        $newid = $id;
        $delateIndex = $index;
        $this->db->where($delateIndex, $newid);
        $this->db->delete($newTableName);
        return true;
    }

    public function droptable($tableName, $id) {

        $this->load->dbforge();
        $newTableName = $tableName;

        $newid = $id;


        if ($this->db->table_exists($newTableName)) {

            $this->dbforge->drop_table($newTableName);

            $this->db->where('tablename', $newTableName);
            $this->db->delete('tablelist');
            $this->db->where('id', $newid);
            $this->db->delete('mainmenu');
            return true;
        } else {

            return FALSE;
        }
    }

    public function droptableYes($tableName, $id) {

        $this->load->dbforge();
        $newTableName = $tableName;

        $newid = $id;
         if ($this->dbforge->drop_table($newTableName)) {

            $this->db->where('tablename', $newTableName);
            $this->db->delete('tablelist');

            return true;
        } else {
            $this->db->where('id', $newid);
            $this->db->delete('mainmenu');
            return true;
        }
    }
    
    
     public function delateAnyDataWithImage($tableName, $id) {
        $this->load->model('admin/Get_model');


        $tablename = $tableName;
        $newid = $id;

        $picdata = $this->Get_model->getDataForEdit($tablename, $id);

        foreach ($picdata as $value) {
           
            $picname = $value['picname'];
            unlink("asset/image/Background_image/slider/" . $picname);
        }


        $this->db->where('id', $newid);
        $this->db->delete($tablename);
        return true;
    }
    
    

}
