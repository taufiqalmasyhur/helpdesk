<?php
    /**
     * 
     */
    class Engineer extends CI_Controller {
        
        function index() {
            
        }

        public function do_Comment()
        {
        	$comment = $this->input->post('tb_comment');
            $ticket_id = $this->input->post('tb_ticketid');
            $auth_id = $this->session->userdata('user_id');
            $this->load->model('engineer_model');
            $this->engineer_model->insertcomment($ticket_id, $auth_id, $comment);
            return 'page/';
        }
    }
    
?>