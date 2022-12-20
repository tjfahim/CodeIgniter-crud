<?php

class StudentModel extends CI_Model{
    function create($s_data){
        $this->db->insert('student_from',$s_data);
    }
}

?>