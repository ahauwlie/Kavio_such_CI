<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function __construct () {
        parent::__construct();
        $this->load->model('model_artikel');
        $this->load->model('comment_model');
    }
    public function index($id) {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('layout/navbar.php', NULL, TRUE);
        $data['lol'] = $this->model_artikel->nyoba($id);
        $data['comments'] = $this->show_tree($id);
        $this->load->view('blog_detail', $data);
    }



    function show_tree($id)
    {
        $store_all_id = array();
        $id_result = $this->comment_model->tree_all($id);
        if($id_result == NULL){
            return "<h3>Belum ada Komen nih :( <br>Komen dong kk!</h3><br><br>";
        }
        else{
            foreach ($id_result as $id_com) {
                array_push($store_all_id, $id_com['parent_id']);
            }
            return  $this->in_parent(0,$id, $store_all_id);
        }
    }

    function in_parent($in_parent,$id,$store_all_id) {
        $html = "";
        if (in_array($in_parent,$store_all_id)) {
            $result = $this->comment_model->tree_by_parent($id,$in_parent);
            $html .=  $in_parent == 0 ? "<ol class='comments-lists'>" : "<ol class='children'>";
            foreach ($result as $re) {
                $html .= " <li class='comment'>
                <div class='comment-body'><h4 class='text-left'>".$re['comment_email']."   ->   ".$re['comment_nama'].
                "<small class='date-posted pull-right'>".date("F j, Y", $re['comment_created'])."</small></h4>
                <p>".$re['comment_body']."</p>
                <a  href='#comment_form' class='pull-left btn-blog' id='" . $re['id_com'] . "'>Reply </a><div class='clearfix'></div></div>";
                $html .=$this->in_parent($re['id_com'],$id, $store_all_id);
                $html .= "</li>";
            }
            $html .=  "</ol>";
        }
        return $html;
    }



}