<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Join_member_activity_model extends CI_Model
{

    public $table = 'join_member_activity';
    public $id = 'member_activity_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        // $this->datatables->select('member_activity_id,act_id,user_id,join_date,join_status');
        // $this->datatables->from('join_member_activity');
        // $this->datatables->where('join_status', 'pending');

        $this->datatables->select('activity.*,user_detail.*,join_member_activity.*,member_activity_id');
        $this->datatables->from('join_member_activity');
        $this->datatables->join('activity', 'join_member_activity.act_id = activity.act_id');
        $this->datatables->join('user_detail', 'join_member_activity.user_id = user_detail.user_id');
        $this->datatables->where('join_member_activity.join_status', 'pending');
        
        $this->datatables->add_column('action', 
                anchor(site_url('join_member_activity/approve_request/$1'),'<i class="icofont icofont-ui-check" aria-hidden="true"></i> Approve', array('class' => 'btn btn-info btn-sm approve-btn')).
                " | "
                .anchor(site_url('join_member_activity/delete/$1'),'<i class="icofont icofont-ui-close" aria-hidden="true"></i> Reject', array('class' => 'btn btn-danger btn-sm reject-btn')), 'member_activity_id');
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
        $this->db->like('member_activity_id', $q);
	$this->db->or_like('act_id', $q);
	$this->db->or_like('user_id', $q);
	$this->db->or_like('join_date', $q);
	$this->db->or_like('join_status', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('member_activity_id', $q);
	$this->db->or_like('act_id', $q);
	$this->db->or_like('user_id', $q);
	$this->db->or_like('join_date', $q);
	$this->db->or_like('join_status', $q);
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