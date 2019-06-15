<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model
{

    public $table = 'user';
    public $id = 'user_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        // $this->datatables->select('user_id,usr_username,usr_password,usr_role,usr_status');
        // $this->datatables->from('user');

        // try from application
        $this->datatables->select('user.*,user_detail.*,application.*,app_id');
        $this->datatables->from('application');
        $this->datatables->join('user', 'application.user_id = user.user_id');
        $this->datatables->join('user_detail', 'application.user_id = user_detail.user_id');
        $this->datatables->where('user.usr_role', 'member');
        $this->datatables->where('user.usr_status', 'active');

        $this->datatables->add_column('action', anchor(site_url('user/read/$1'),'<i class="fa fa-eye" aria-hidden="true"></i> View', array('class' => 'btn btn-info btn-sm'))." | ".anchor(site_url('user/update/$1'),'<i class="icofont icofont-edit" aria-hidden="true"></i> Change Status', array('class' => 'btn btn-success btn-sm'))." | ".anchor(site_url('user/delete/$1'),'<i class="icofont icofont-ui-delete" aria-hidden="true"></i> Delete', array('class' => 'btn btn-danger btn-sm delete-btn')), 'app_id');
        return $this->datatables->generate();

    }

    
    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('user_id', $q);
    	$this->db->or_like('usr_username', $q);
    	$this->db->or_like('usr_password', $q);
    	$this->db->or_like('usr_role', $q);
        $this->db->or_like('usr_image', $q);
    	$this->db->or_like('usr_status', $q);
    	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('user_id', $q);
    	$this->db->or_like('usr_username', $q);
    	$this->db->or_like('usr_password', $q);
    	$this->db->or_like('usr_role', $q);
        $this->db->or_like('usr_image', $q);
    	$this->db->or_like('usr_status', $q);
    	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    function validate($username){
        $this->db->where('usr_username',$username);
        $result = $this->db->get($this->table,1);
        return $result;
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id)
    {
        // set for inactive
        $this->db->set('usr_status', 'inactive', true);
        $this->db->update($this->table);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        echo 'Deleted successfully.';
    }


}