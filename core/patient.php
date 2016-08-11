<?php 

include 'base.php';

// Patient Model
// Clase del Core
class patient extends base
{
    public function __construct()
    {
        // constructing the parent gives us 
        // access to the db through $this->db
        // which is a native php mysqli interface
        parent::__construct();
    }

    public function list_all()
    {
        $result_array = array();
        $result = $this->db->query('select * from patients order by patient_name');

        return parent::result_array($result);
    }

    public function list_all_mayores()
    {
        $result_array = array();
        $result = $this->db->query('select * from patients where patient_age >= 50 order by patient_age');

        return parent::result_array($result);
    }    


    public function list_all_grupos()
    {
        $result_array = array();
        $result = $this->db->query('select * from patients group by patient_age');

        return parent::result_array($result);
    }        

    public function get_pacientes_ajax($nombre)
    {
        $result_array = array();
        $result = $this->db->query('select patient_name from patients where patient_name='.$nombre);

        return parent::result_array($result);
    }    

    public function prueba(){
        return "bye";
    }



}