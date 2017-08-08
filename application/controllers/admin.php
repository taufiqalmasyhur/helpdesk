<?php
    /**
     * 
     */
    class Admin extends CI_Controller {
        
        public function index() {
            
        }

        public function do_Comment()
        {
        	$comment = $this->input->post('tb_comment');
            $ticket_id = $this->input->post('tb_ticketid');
            $auth_id = $this->session->userdata('user_id');
            $this->load->model('admin_model');
            $this->admin_model->insertcomment($ticket_id, $auth_id, $comment);
            return 'page/';
        }

        public function do_Updatestatus()
        {
        	$data = $this->input->post('tb_status');
        	$this->load->model('admin_model');
        	$this->admin_model->updatestatus($data);
        }

        public function do_CHangeLevel()
        {
        	$data = $this->input->post('tb_level');
        	$this->load->model('admin_model');
        	$this->admin_model->changelevel($data);
        }
		
    }
    
?>