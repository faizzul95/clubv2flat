<?php

// untuk chek akses level pada modul peberian akses
function check_access($id_user_level,$menu_id){

	if ($id_user_level == 1) {
       $id_user_level = "superadmin";
    }elseif ($id_user_level == 2) {
        $id_user_level = "admin";
    }else
        $id_user_level = "member";

    $ci = get_instance();
    $ci->db->where('id_user_level',$id_user_level);
    $ci->db->where('menu_id',$menu_id);
    $data = $ci->db->get('menu_access');
    if($data->num_rows()>0){
        return "checked='checked'";
    }
}