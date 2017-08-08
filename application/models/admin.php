<?php

	/**
	 * 
	 */
	class Admin_model extends CI_Model {
		
		function index() {
			
		}

		function insertcomment($ticket_id, $auth_id, $comment){
        	$sql = $this->db->query('INSERT INTO comment( comment_ticket_id, comment_desc, comment_auth_id) VALUES ('.$ticket_id.', '.$auth_id.', '.$comment.')');
        	return $sql;	
        }

        function updatestatus($data)
        {
        	$sql = $this->db->query('UPDATE ticket SET (ticket_status = '.$data.')');
        	return $sql;
        }

        function changelevel($data)
        {
        	$sql = $this->db->query('UPDATE ticket SET (ticket_level = '.$data.')');
        	return $sql;
        }
	}
	
?>