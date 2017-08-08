<?php
    //phpinfo();
    
    
    /**
     *  
     */
    class User extends CI_Controller {
        
        public function index() {
            $this->load->view('login');

        {
            
        public function do_InsertTicket()
        {
            $title = $this->input->post('tb_title');
            $desc = $this->input->post('tb_desc');
            $attachment = $this->input->post('tb_attachment');
            $id = $this->session->userdata('user_id');
            $this->load->model('user_model');
            $this->user_model->insertticket($id, $title, $desc, $attachment);
            return 'page/home';
        }

        public function do_Comment()
        {
        	
        }
		
		public function do_Logout()
		{
			
            $this->session->session_destroy();
            redirect ('page/login');
		}
		
		public function do_Login()
		{
			$username = $this->input->post('tb_username');
            $password = $this->input->post('tb_password');
            $this->load->model('user_model');
            $userrole;
            
            /*
             *  if isset_[$username] & isset_[$password]{            * 
             *      $userrole = SELECT 'auth_user_role' FROM auth WHERE $username & $password;
             *  }
             *   
             */
            if(!isset($username) AND !isset($password)){
                return false;
            }else
            {
                
                $userrole = $this->user_model->authorization($username, $password);
                $user_id = $this->user_model->getID($username, $password);
                $data = array(
                        'username' => $username,
                        'user_id' => $user_id,
                        'user_role' => $userrole,
                        'logged_in' => TRUE
                    ); 
                $this->session->set_userdata($data);
                if ($userrole = "1") 
                {
                    redirect('page/user');
                        
                } 
                else if ($userrole = "2") 
                {
                    redirect('page/admin');
                }
                else if ($userrole = '3')
                {
                    redirect('page/engineer');               
                }
                else redirect('page/loginerror')
            }
            
		}
    }
    
    
?>