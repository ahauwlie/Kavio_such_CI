<?php

class Model_artikel extends CI_Model {

	    function detail_artikel()
	    {
			return $this->db->get('artikel')->result_array();
	    }

	    public function getAll()
	    {
	        return $this->db->get('artikel')->result_array();
	    }

	    public function insert($data)
	    {
	        $this->db->insert('artikel', $data);
	    }

	    public function update($data, $id)
	    {
	        $this->db->update('artikel', $data, array('id_ar' => $id));
	    }

	    public function delete($id)
	    {
	        $this->db->delete('artikel', array('id_ar' => $id));
	    }

	    public function getSpecified($id)
	    {
	        return $this->db->get_where('artikel', array('id_ar' => $id))->row_array();
	    }

	    function nyoba($id)
	    {
	        $query = $this->db->get_where('artikel', array('id_ar' => $id));
			return $query->row_array();
	    }

		public function dis_products1()
		{
			$this->db->distinct();
			$query = $this->db->query('SELECT DISTINCT id_kat FROM artikel');
			return $query->result();
		}

		public function dis_products2()
		{
			$this->db->distinct();
			$query = $this->db->query('SELECT DISTINCT id_tag FROM artikel');
			return $query->result();
		}

		public function countRow(){
	        $query = $this->db->query("SELECT COUNT(*) AS num_of_time FROM artikel");
	     	return $query->result();
    	}

    	public function record_count() {
        	return $this->db->count_all('artikel');
    	}

    	public function getAr($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->get('artikel');

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	    }

	    public function atas($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->query("SELECT * FROM artikel ORDER BY tanggal_ar DESC");

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	    }

    	public function side(){
			$this->db->order_by('tanggal_ar','desc');
			return $this->db->get('artikel');
    	}

}