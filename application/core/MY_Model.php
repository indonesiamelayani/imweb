<?php

class MY_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

        // $this->conn = $this->adodbloader->getConn();
        // $this->conn->debug = $this->debug;
    }
    function newUUID()
    {
        $query = $this->db->query('SELECT gen_random_uuid()');
        return $query->row();
    }
    function check($table, $where)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
    function check2a($table, $where)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result_array();
        }
    }
    function singleData($table, $where)
    {
        return $this->db->select('*')->from($table)->where($where)->limit(1)->get()->row();
    }

    function getList($table, $where)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }
    function getListOrderby($table, $where, $orderby)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->order_by($orderby);
        $query = $this->db->get();
        return $query;
    }
    function getListData($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query;
    }
    function getListJoin($destination, $join, $where, $table, $filter)
    {
        $this->db->select($filter);
        $this->db->from($table);
        $this->db->join($destination, $join);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }
    function getListJoin2($destination, $join, $destination2, $join2, $where, $table, $filter)
    {
        $this->db->select($filter);
        $this->db->from($table);
        $this->db->join($destination, $join);
        $this->db->join($destination2, $join2);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }
    function getListJoin3($destination, $join, $destination2, $join2, $destination3, $join3, $where, $table, $filter)
    {
        $this->db->select($filter);
        $this->db->from($table);
        $this->db->join($destination, $join);
        $this->db->join($destination2, $join2);
        $this->db->join($destination3, $join3);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }
    function getListJoin3OrderBy($destination, $join, $destination2, $join2, $destination3, $join3, $where, $table, $filter, $orderby)
    {
        $this->db->select($filter);
        $this->db->from($table);
        $this->db->join($destination, $join);
        $this->db->join($destination2, $join2);
        $this->db->join($destination3, $join3);
        $this->db->where($where);
        $this->db->order_by($orderby);
        $query = $this->db->get();
        return $query;
    }
    function getListJoin4distinct($filter, $destination, $join, $destination2, $join2, $destination3, $join3, $destination4, $join4, $where, $table, $order)
    {
        $this->db->distinct();
        $this->db->select($filter);
        $this->db->from($table);
        $this->db->join($destination, $join);
        $this->db->join($destination2, $join2);
        $this->db->join($destination3, $join3);
        $this->db->join($destination4, $join4);
        $this->db->order_by($order, 'DESC');
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }
    function getListJoin5distinct($filter, $destination, $join, $destination2, $join2, $destination3, $join3, $destination4, $join4, $destination5, $join5, $where, $table)
    {
        $this->db->distinct();
        $this->db->select($filter);
        $this->db->from($table);
        $this->db->join($destination, $join);
        $this->db->join($destination2, $join2);
        $this->db->join($destination3, $join3);
        $this->db->join($destination4, $join4);
        $this->db->join($destination5, $join5);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }
    function getListJoinOrderby($destination, $join, $where, $group, $table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($destination, $join);
        $this->db->where($where);
        $this->db->order_by($group);
        $query = $this->db->get();
        return $query;
    }
    function tambah($form_data, $table)
    {
        $this->db->set($form_data);
        $this->db->insert($table);
    }
    function update($form_data, $where, $table)
    {
        $this->db->set($form_data);
        $this->db->where($where);
        $this->db->update($table);
    }
    function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function insert_activity($data = '') {
        $userid = isset($_SESSION['username']) ? trim($_SESSION['username']) : '';
        $agent = (isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '');
        $ipaddr = $this->libs->get_client_ip();
        $query_string = "INSERT IGNORE INTO user_activity(userid,agent,ipaddr,data,date) VALUES(" . $this->db->escape($userid) . "," .  $this->db->escape($agent) . "," . $this->db->escape($ipaddr) . "," . $this->db->escape($data) . ",NOW());";
        $this->db->query($query_string);
        $this->db->close();
    }
}
