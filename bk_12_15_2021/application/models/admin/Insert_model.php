<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_model extends CI_Model {

    public function insert($tableName, $data) {
        $newTableName = $tableName;
        $newdata = $data;

        $ai_id = $this->db->insert($newTableName, $newdata);
        //echo '<pre>';print_r($ai_id);die();
        return true;
    }

    public function insert_subtournanament($tableName, $data) {
        $newTableName = $tableName;
        $newdata = $data;

        $this->db->insert($newTableName, $newdata);
        $insert_id = $this->db->insert_id();
        //echo '<pre>';print_r($insert_id);die();
        return $insert_id;
    }
    
    public function batchinsert($tableName, $data) {
        $newTableName = $tableName;
        $newdata = $data;

        $this->db->insert_batch($newTableName, $newdata);
        return true;
    }

}
