<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctormodel extends CI_Model
{

   public function __construct()
   {
   	 //$this->load->database();
   }
   function get_all($id)
   {
   	  $this->db->select('*');
            $this->db->from('treats a'); 
            $this->db->join('inpatient b', 'b.p_id=a.p_id', 'left');
            //$this->db->join('Soundtrack c', 'c.album_id=a.album_id', 'left');
            $this->db->where('a.d_id',$id);
            $this->db->order_by('b.D_O_Admit','asc');         
            $query = $this->db->get(); 
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
   }

   function get_info($id1)
   {
      $this->db->select('*');
            $this->db->from('doctor a'); 
            $this->db->join('employee b', 'b.e_id=a.e_id', 'left');
            $this->db->where('a.e_id',$id1);
            //$this->db->order_by('b.D_O_Admit','asc');         
            $query = $this->db->get(); 
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
   }

   function get_patient_info($patitentid)
   {      
         //  $query = $this->db->query( "SELECT a.p_id,a.Name,a.Sex,a.DOB,a.Age,a.Address,a.PhNo,b.D_O_Admit,b.ward_no,b.Diagnosis,c.Dept,d.description FROM //patient as a  JOIN inpatient as b on a.p_id=b.p_id JOIN medical_history as c ON b.p_id=c.p_id JOIN medicine as d ON c.m_id=d.m_id WHERE a.p_id=$id");


        $this->db->select('a.p_id,a.Name,a.Sex,a.DOB,a.Age,a.Address,a.PhNo,b.D_O_Admit,b.ward_no,b.Diagnosis,c.Dept,d.description ');
            $this->db->from('patient a'); 
            $this->db->join('inpatient b', ' a.p_id=b.p_id', 'left');
            $this->db->join('medical_history c','b.p_id=c.p_id','left');
            $this->db->join('medicine d','c.m_id=d.m_id','left');
            $this->db->where('a.p_id',$patitentid);   
             $query = $this->db->get();          //$this->db->order_by('b.D_O_Admit','asc');         
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
   }

    function get_appointment_info($date,$D_id)
   {
     # code...
   //$date1 = date('d-m-Y', strtotime($date));
   // echo $date;
    $this->db->select('app_id,Name,Sex,DOB,Diagnosis,D_O_Appointment');
    $this->db->from('appointment');
    $this->db->where('d_id',$D_id);
    $this->db->where('D_O_Appointment',$date);
    $query=$this->db->get();
    if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }

   }
    function deleteapp($app_id)
   {    
        $this ->db-> where('app_id', $app_id);
        $this ->db-> delete('appointment');
       $row= $this->db->affected_rows();
       if($row==1)
       {
         echo "Deleted!";
         return true;
       }
       
      else
        return false;
   }

   function deleteRecord($table, $where = array()) {
  $this->db->where($where);
  $res = $this->db->delete($table); 
  if($res)
    return TRUE;
  else
    return FALSE;
}
}

?>