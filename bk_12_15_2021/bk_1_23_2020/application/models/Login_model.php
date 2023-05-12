<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

  public function Login($email, $passwoard) {
  //Prep the query
  $checkdata = array('email' => $email, 'password' => $passwoard);
  $this->db->where($checkdata);
  //$query = $this->db->get('admin');
  $userquery = $this->db->get('reguser');
  //$subquery = $this->db->get('subadmin');
  if ($userquery->num_rows() > 0) {
    $this->load->library('session');
    // If there is a user, then create session data
    $row = $userquery->row();
    $data = array(
        'id' => $row->id,
        'role' => $row->role,
        'mobile' => $row->mobile,
        'name' => $row->fullName,
        'image' => $row->image,
        'email' => $row->email
    );
    $this->session->set_userdata($data);
    if ($this->session->userdata('role')==="REGISER") {
      return "user";
    }else {
      return false;
    }   
  }
  // Run the query
  // Let's check if there are any results
  $checkdata = array('email' => $email, 'password' => $passwoard);
  $this->db->where($checkdata);
  $query = $this->db->get('admin');        
  if ($query->num_rows() > 0) {
    $this->load->library('session');
    // If there is a user, then create session data
    $row = $query->row();
    $tablename = "admin";
    $data = array(
        'id' => $row->id,
        'role' => $row->role,
        'email' => $row->email,
        'image' => $row->image,
        'name' => $row->name
        
    );
    $this->session->set_userdata($data);
           
    if ($this->session->userdata('role')==="ADMIN") {
      return "admin";
    }else {
      return false;
    }            
  }else {
    return FALSE;
  }      
}
    
    
    
    
 public function forgatePass($email) {
// Prep the query

        $checkdata = array('email' => $email);


        $this->db->where($checkdata);

//        $query = $this->db->get('admin');
         $userquery = $this->db->get('reguser');
//        $subquery = $this->db->get('subadmin');
        
         
         if ($userquery->num_rows() > 0) {
                $this->load->library('session');
                // If there is a user, then create session data
                $row = $userquery->row();
                 $tablename = "reguser";
                $data = array(
                    'id' => $row->id,
                     'role' => $row->role,
                    'mobile' => $row->mobile,
                    'name' => $row->fullName,
                    'image' => $row->image,
                     'email' => $row->email,
                    'tableName' => $tablename
                );
                $this->session->set_userdata($data);
                
               
                
                if ($this->session->userdata('role')==="REGISER") {
                 return "user";
            }
                else {
                return false;
           }
                
                
                
            }
         
         
         
         
        
        // Run the query
        // Let's check if there are any results
         
         $checkdata = array('email' => $email, 'password' => $passwoard);


        $this->db->where($checkdata);
        
         $query = $this->db->get('admin');   
              
            
      if ($query->num_rows() > 0) {
            $this->load->library('session');
            // If there is a user, then create session data
            $row = $query->row();
            $tablename = "admin";
            $data = array(
                'id' => $row->id,
                'role' => $row->role,
                'email' => $row->email,
                'image' => $row->image,
                'name' => $row->name,
                'tableName' => $tablename
                
            );
            $this->session->set_userdata($data);
           
            if ($this->session->userdata('role')==="ADMIN") {
                return "admin";
            }
           else {
                return false;
           }
            
            
        }
            
            
            
            
            
            
            else {
                return FALSE;
            }
        
       
            
            
      
        
    }   
    
    
    
    
    
    
    
    

}
