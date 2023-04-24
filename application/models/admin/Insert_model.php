<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_model extends CI_Model {

    public function insert($tableName, $data) {
        $newTableName = $tableName;
        $newdata = $data;

        $this->db->insert($newTableName, $newdata);
        return true;
    }
    
    public function batchinsert($tableName, $data) {
        $newTableName = $tableName;
        $newdata = $data;

        $this->db->insert_batch($newTableName, $newdata);
        return true;
    }

}
