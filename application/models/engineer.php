<?php
    /**
     * 
     */
    class Engineer_model extends CI_ModelO {
        
        function index() {
            
        }

        function insertcomment($ticket_id, $auth_id, $comment){
        	$sql = $this->db->query('INSERT INTO comment( comment_ticket_id, comment_desc, comment_auth_id) VALUES ('.$ticket_id.', '.$auth_id.', '.$comment.')');
        	return $sql;	
        }

    }
    
?>