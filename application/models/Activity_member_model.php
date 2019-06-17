<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Activity_member_model extends CI_Model
{

    public $table = 'activity';
    public $id = 'act_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
        $this->load->model('join_member_activity_model');
        $this->load->library('session');
    }

    // datatables
    function json() {
        $this->datatables->select('act_id,act_name,act_post_by,act_description,act_date,act_time,act_venue,act_category,act_image,act_fee');
        $this->datatables->from('activity');
        //add this line for join
        //$this->datatables->join('table2', 'activity.field = table2.field');
        
        $this->datatables->add_column('action', 
                anchor(site_url('activity_member/join_activity_member/$1'),'<i class="icofont icofont-court-hammer" aria-hidden="true"></i> Join Activity', array('class' => 'btn btn-info btn-sm join-btn')), 'act_id');
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
        $this->db->like('act_id', $q);
	$this->db->or_like('act_name', $q);
	$this->db->or_like('act_post_by', $q);
	$this->db->or_like('act_description', $q);
	$this->db->or_like('act_date', $q);
	$this->db->or_like('act_time', $q);
	$this->db->or_like('act_venue', $q);
	$this->db->or_like('act_category', $q);
	$this->db->or_like('act_image', $q);
	$this->db->or_like('act_fee', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('act_id', $q);
	$this->db->or_like('act_name', $q);
	$this->db->or_like('act_post_by', $q);
	$this->db->or_like('act_description', $q);
	$this->db->or_like('act_date', $q);
	$this->db->or_like('act_time', $q);
	$this->db->or_like('act_venue', $q);
	$this->db->or_like('act_category', $q);
	$this->db->or_like('act_image', $q);
	$this->db->or_like('act_fee', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
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
    }
}