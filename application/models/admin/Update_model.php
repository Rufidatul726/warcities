<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Update_model extends CI_Model {

    

    public function updateAnydata($tableName, $data, $id) {
        $newTableName = $tableName;
        $newdata = $data;
        $newid = $id;

        $this->db->where('id', $newid);
        $this->db->update($newTableName, $newdata);
        return true;
    }

}
