<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Application_model extends CI_Model
{

    public $table = 'application';
    public $id = 'app_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables all list
    function json() {
        // $this->datatables->select('app_id,application_id,user_id,application_date,application_evaluate_date');
        // $this->datatables->from('application');
        // $this->datatables->where('application_status', 'approve');

        $this->datatables->select('user.*,user_detail.*,application.*,app_id');
        $this->datatables->from('application');
        $this->datatables->join('user', 'application.user_id = user.user_id');
        $this->datatables->join('user_detail', 'application.user_id = user_detail.user_id');

        //add this line for join
        //$this->datatables->join('table2', 'application.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('application/read/$1'),'<i class="fa fa-eye" aria-hidden="true"></i> View', array('class' => 'btn btn-info btn-sm'))." | ".anchor(site_url('application/update/$1'),'<i class="fa fa-eye" aria-hidden="true"></i> Update', array('class' => 'btn btn-success btn-sm'))." | ".anchor(site_url('application/delete/$1'),'<i class="icofont icofont-ui-delete" aria-hidden="true"></i> Delete', array('class' => 'btn btn-danger btn-sm delete-btn')), 'app_id');
        return $this->datatables->generate();
    }

     // datatables new application
    function newapp() {

        $this->datatables->select('application.*,user_detail.*,app_id');
        $this->datatables->from('application');
        $this->datatables->join('user_detail', 'application.user_id = user_detail.user_id');
        $this->datatables->where('application.application_status', 'pending');

        $this->datatables->add_column('action', anchor(site_url('application/approve/$1'),'<i class="icofont icofont-ui-check" aria-hidden="true"></i> Approve', array('class' => 'btn btn-info btn-sm approve-btn'))." | ".anchor(site_url('application/reject/$1'),'<i class="icofont icofont-ui-close" aria-hidden="true"></i> Reject', array('class' => 'btn btn-danger btn-sm reject-btn')), 'app_id');
        return $this->datatables->generate();
    }


     // datatables new application
    function rejectapp() {
        $this->datatables->select('application.*,user_detail.*,app_id');
        $this->datatables->from('application');
        $this->datatables->join('user_detail', 'application.user_id = user_detail.user_id');
        $this->datatables->where('application.application_status', 'reject');

        $this->datatables->add_column('action', anchor(site_url('application/reapprove/$1'),'<i class="icofont icofont-ui-check" aria-hidden="true"></i> Approve', array('class' => 'btn btn-info btn-sm'))." | ".anchor(site_url('application/delete/$1'),'<i class="icofont icofont-ui-close" aria-hidden="true"></i> Delete', array('class' => 'btn btn-danger btn-sm'),'onclick="javascript: return confirm(\'Are You Sure ?\')"'), 'app_id');
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
        $this->db->like('app_id', $q);
    	$this->db->or_like('application_id', $q);
    	$this->db->or_like('user_id', $q);
    	$this->db->or_like('application_date', $q);
    	$this->db->or_like('application_evaluate_date', $q);
    	$this->db->or_like('application_status', $q);
    	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('app_id', $q);
    	$this->db->or_like('application_id', $q);
    	$this->db->or_like('user_id', $q);
    	$this->db->or_like('application_date', $q);
    	$this->db->or_like('application_evaluate_date', $q);
    	$this->db->or_like('application_status', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    function validate($checkApp){
        $this->db->where('application_id',$checkApp);
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

     // approve application
    function approve($id)
    {
        // set for application approve
        $this->db->where($this->id, $id);
        $this->db->set('application_status', 'approve', true);
        $this->db->set('application_evaluate_date', date('Y-m-d'), true);
        $this->db->update($this->table); 

        // set for active
        $this->db->set('usr_status', 'active', true);
        $this->db->update('user');
    }

    // approve application
    function reject($id)
    {
        $this->db->where($this->id, $id);
        $this->db->set('application_status', 'reject', true);
        $this->db->set('application_evaluate_date', date('Y-m-d'), true);
        $this->db->update($this->table); 
    }

    // delete data
    function delete($id)
    {
        // delete from application
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);

    }

     // delete data
    function deleteUser($userid)
    {
        // delete from application
        $this->db->where('user_id', $userid);
        $this->db->delete('user');

    }

}
