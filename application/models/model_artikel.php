<?php

class Model_artikel extends CI_Model {

	    function detail_artikel()
	    {
	  //       $query = $this->db->get_where('artikel', array('id_ar' => $id));
			// return $query->row_array();
			return $this->db->get('artikel')->result_array();
	    }

}