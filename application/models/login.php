<?php
    /**
     * 
     */
    class Login_model extends CI_Model {
        
        function index() {
            
        }
		
		function do_Login()
		{
			$username;
			$password;
			$userrole;
			
			/*
			 *  if isset_[$username] & isset_[$password]{			 * 
			 * 		$userrole = SELECT 'auth_user_role' FROM auth WHERE $username & $password;
			 * 	}
			 * 	 
			 */
			
			
			if ($userrole = "1") 
			{
				// do method user
				
			} 
			else if ($userrole = "2") 
			{
				// do method admin
			}
			else 
			{
				// do method engineer				
			}
			
			
		}
		
    }
    
?>