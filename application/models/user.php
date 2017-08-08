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
    }
    
?>