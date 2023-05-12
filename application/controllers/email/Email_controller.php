<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email_controller extends CI_Controller {

    public function __construct() {


        parent::__construct();

        $this->load->library('email');
        $this->email->set_newline("\r\n");
        $config['protocol'] = 'smtp';
        $config['_smtp_auth']   = false;
        $config['smtp_host']='ssl://smtp.gmail.com';
        $config['smtp_port']='465';
        $config['smtp_timeout']='60';
        $config['smtp_user']='warcities2@gmail.com';
        $config['smtp_pass']='warcities@2019';
        $config['_smtp_auth']   = true;
        // $config['smtp_host'] = 'mail.warcities.com';
        // $config['smtp_port'] = '25';
        // $config['smtp_timeout'] = '59';
        // $config['smtp_user'] = 'info@warcities.com';
        // $config['smtp_pass'] = 'war@2019';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
    }

    public function reguser($getEmail, $getName) {

        $this->load->model('admin/Get_model');
        

        $name = $getName;
        $email = 'info@warcities.com';
        $comments = '<html>';
          $comments .= 'Thanks,'.$name.'';
        $comments .= '<br>Congrats ! Your have  succesfully registered with us.';
        
         $comments .= '</html>';
        $this->email->from($email, 'WarCities');
        $this->email->to($getEmail);
        $this->email->message($comments);

        $this->email->subject('New User Registration');


        if ($this->email->send()) {


            return redirect('Main_controller/successview');
        } else {
            echo $this->email->print_debugger();
            //return redirect('Main_controller/errorview');
        }
    }

    public function regTournamentUser($getEmail, $getName, $gameName) {

        
        $newNameGame = str_replace("%20"," ",$gameName);
        $newName = str_replace("%20"," ",$getName);
       

        $name = $newName;
        $email = 'info@warcities.com';
         $comments = '<html>';
          $comments .= 'Thanks,'.$name.'';
        $comments .= '<br>Congrats ! Your have  succesfully registered with us.<br> You have register for '.$newNameGame.'. Join our Discord server for any query and update news   https://discord.gg/kzTt556 Thanks you for your participation..';
        
        
         $comments .= '</html>';
        
        $this->email->from($email, 'WarCities');
        $this->email->to($getEmail);
        $this->email->message($comments);

        $this->email->subject('Register For Tournament');


        if ($this->email->send()) {


            return redirect('Main_controller/successview');
        } else {
            echo $this->email->print_debugger();
            //return redirect('Main_controller/errorview');
        }
    }
    
    public function regUserTournament($getEmail, $getName, $gameName) {

        
        $newNameGame = str_replace("%20"," ",$gameName);
        $newName = str_replace("%20"," ",$getName);
       

        $name = $newName;
        $email = 'info@warcities.com';
         $comments = '<html>';
          $comments .= 'Thanks,'.$name.'';
        $comments .= '<br>Congrats ! Your have  succesfully registered with us.<br> You have register for '.$newNameGame.'. Your tournamet details will be publish in website soon.';
        $comments .= '<br>For any inquiry mail us warcities2@gmail.com. Thank you for your participation.';
        $comments .= '<br>Join our facebook page for the update news : https://www.facebook.com/warcities/.';
        
         $comments .= '</html>';
        
        $this->email->from($email, 'WarCities');
        $this->email->to($getEmail);
        $this->email->message($comments);

        $this->email->subject('Register For Tournament');


        if ($this->email->send()) {


            return redirect('reguser/Reguser_Load_controller/successview');
        } else {
            echo $this->email->print_debugger();
           // return redirect('reguser/Reguser_Load_controller/errorview');
        }
    }
    
    
    
     public function varificationNumber($id,$tableName) {

        
        $this->load->model('admin/Get_model');
         $index= "id";
         
         $varificationCode = $this->Get_model->getDataForEditIndex($tableName, $index,$id);
         
         foreach ($varificationCode as $row) {
             $code = $row['recover'];
             $getEmail = $row['email'];
             
         }
         
        

        
        $email = 'info@warcities.com';
         $comments = '<html>';
          $comments .= 'HELLO,';
        $comments .= '<br>Your Varification code is '.$code.' .';

         $comments .= '</html>';
        
        $this->email->from($email, 'WarCities');
        $this->email->to($getEmail);
        $this->email->message($comments);

        $this->email->subject('Verification Code');


        if ($this->email->send()) {


            return redirect('Call_controller/forgaterePassView');
        } else {
            echo $this->email->print_debugger();
            //return redirect('Main_controller/errorview');
        }
    }
    
    
    
    
  
    
    

}
