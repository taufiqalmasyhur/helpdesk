<?php
    /**
     * 
     */
    class User_model extends CI_ModelD {
        
        function index() {
            
        }

        function authorization($username, $password){
        	$sql = $this->db->query('SELECT auth_user_role FROM auth WHERE auth_email ='.$username.' AND auth_pass = '.$password);
        	return $sql;
        }

		function getID($username, $password){
        	$sql = $this->db->query('SELECT auth_id FROM auth WHERE auth_email ='.$username.' AND auth_pass = '.$password);
        	return $sql;
        }

        function insertcomment($ticket_id, $auth_id, $comment){
        	$sql = $this->db->query('INSERT INTO comment( comment_ticket_id, comment_desc, comment_auth_id) VALUES ('.$ticket_id.', '.$auth_id.', '.$comment.')');
        	return $sql;	
        }        

        function insertticket($id, $title, $desc, $attachment){
        	$sql = $this->db->query('INSERT INTO ticket( ticket_title, ticket_desc, ticket_issuer_id, ticket_attachment) VALUES ('.$title.', '.$desc.', '.$id.', '.$attachment.')');
        }
    }
    
?>