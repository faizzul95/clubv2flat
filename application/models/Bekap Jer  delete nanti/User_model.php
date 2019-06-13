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

        // join table with user_detail table
        // $this->datatables->select('user.*,user_detail.*,user_id');
        // $this->datatables->from('user');
        // $this->datatables->join('user_detail', 'user.user_id = user_detail.user_id');

        // try from application
        $this->datatables->select('user.*,user_detail.*,application.*,app_id');
        $this->datatables->from('application');
        $this->datatables->join('user', 'application.user_id = user.user_id');
        $this->datatables->join('user_detail', 'application.user_id = user_detail.user_id');

        $this->datatables->where('user.usr_status', 'active');
        $this->datatables->where('user.usr_role', 'member');


        $this->datatables->add_column('action', anchor(site_url('user/read/$1'),'<i class="fa fa-eye" aria-hidden="true"></i> View', array('class' => 'btn btn-info btn-sm'))." | ".anchor(site_url('user/update/$1'),'<i class="fa fa-pencil" aria-hidden="true"></i> Update', array('class' => 'btn btn-success btn-sm'))." | ".anchor(site_url('user/delete/$1'),'<i class="icofont icofont-ui-delete" aria-hidden="true"></i> Delete', array('class' => 'btn btn-danger btn-sm delete-btn')), 'app_id');
        return $this->datatables->generate();


        // copy dari application model
        //  $this->datatables->select('user.*,user_detail.*,application.*,app_id');
        // $this->datatables->from('application');
        // $this->datatables->join('user', 'application.user_id = user.user_id');
        // $this->datatables->join('user_detail', 'application.user_id = user_detail.user_id');

        // //add this line for join
        // //$this->datatables->join('table2', 'application.field = table2.field');
        // $this->datatables->add_column('action', anchor(site_url('application/read/$1'),'<i class="fa fa-eye" aria-hidden="true"></i> View', array('class' => 'btn btn-info btn-sm'))." | ".anchor(site_url('application/update/$1'),'<i class="fa fa-eye" aria-hidden="true"></i> Update', array('class' => 'btn btn-success btn-sm'))." | ".anchor(site_url('application/delete/$1'),'<i class="icofont icofont-ui-delete" aria-hidden="true"></i> Delete', array('class' => 'btn btn-danger btn-sm'),'onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'app_id');
        // return $this->datatables->generate();
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
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        echo 'Deleted successfully.';
    }


}