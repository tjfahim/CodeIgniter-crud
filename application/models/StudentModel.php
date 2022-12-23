<?php

class StudentModel extends CI_Model{
    function create($s_data){
        $this->db->insert('student_from',$s_data);
    }

    function read(){
        return $students = $this->db->get('student_from')->result_array();
    }

    function getStudent($studentId){
        $this->db->where('id',$studentId);
        return $user=$this->db->get('student_from')->row_array();
    }

    function update($studentId,$formArray){
        $this->db->where('id',$studentId);
        $this->db->update('student_from',$formArray);
    }
    function delete($studentId){
        $this->db->where('id',$studentId);
        $this->db->delete('student_from');
    }
}

?>