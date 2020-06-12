<?php

class Model_admin extends CI_Model {

	    function detail_admin()
	    {
	  //       $query = $this->db->get_where('artikel', array('id_ar' => $id));
			// return $query->row_array();
			return $this->db->get('admin')->result_array();
	    }

}