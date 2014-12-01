<?php


class Search_model extends CI_Model {
   function get_all_students($email)
   { 
       return $this->db->query("SELECT * FROM Students WHERE email LIKE ?", $email.'%')->result_array();
   }
}
?>