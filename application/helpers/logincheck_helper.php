<?php

function check_login() {
	$ci =& get_instance();
	$user_session = $ci->session->userdata('userid');
	$level_session = $ci->session->userdata('level');

	if (!$user_session) {
		redirect('auth');
	}else {
		
		if($level_session == "admin" || $level_session == "member")
		{		

			$menu = $ci->uri->segment(1); 
			$submenu = $ci->uri->segment(2); 

			// $queryMenu =  $ci->db->get('menu')->row_array();
			$queryMenu =  $ci->db->get_where('menu', ['menu_url' => $menu])->row_array();
			$menu_id = $queryMenu['menu_id'];

			$userAccess =  $ci->db->get_where('menu_access', [
				'id_user_level' => $level_session,
				'menu_id' => $menu_id
				]);

			if ($userAccess->num_rows()<1) {
				redirect('auth/blockpage');
			}
		}

	}
}
