<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Create_model extends CI_Model {

    public function create($newtablename) {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            
            'name' => array(
                'type' => 'TEXT'
            ),
            'email' => array(
                'type' => 'TEXT'
            ),
            'mobile' => array(
                'type' => 'TEXT',
            ),
            'playerPaymentSatus' => array(
                'type' => 'TEXT'
            ),
            'tranjectionid' => array(
                'type' => 'TEXT'
            ),
            'totalamount' => array(
                'type' => 'TEXT'
            ),
            'trantype' => array(
                'type' => 'TEXT'
            ),
            'userid' => array(
                'type' => 'INT'
            ),
            'subtorunamentId' => array(
                'type' => 'INT'
            ),
            'tagid' => array(
                'type' => 'TEXT'
            ),
            
            
        );
        $tablename = $newtablename;
        $this->load->dbforge();
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table($tablename);

        return true;
    }

}
