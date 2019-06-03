<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu_access_model extends CI_Model
{

    public $table = 'menu_access';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,id_user_level,menu_id');
        $this->datatables->from('menu_access');
        //add this line for join
        //$this->datatables->join('table2', 'menu_access.field = table2.field');
        
        $this->datatables->add_column('action', 
                anchor(site_url('menu_access/read/$1'),'<i class="fa fa-eye" aria-hidden="true"></i> View', array('class' => 'btn btn-info btn-sm')).
                " | "
                .anchor(site_url('menu_access/update/$1'),'<i class="icofont icofont-edit" aria-hidden="true"></i> Update', array('class' => 'btn btn-success btn-sm')).
                " | "
                .anchor(site_url('menu_access/delete/$1'),'<i class="icofont icofont-ui-delete" aria-hidden="true"></i> Delete', array('class' => 'btn btn-danger btn-sm delete-btn')), 'id');
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
        $this->db->like('id', $q);
	$this->db->or_like('id_user_level', $q);
	$this->db->or_like('menu_id', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('id_user_level', $q);
	$this->db->or_like('menu_id', $q);
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