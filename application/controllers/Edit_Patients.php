<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_Patients extends CI_Controller{

    public function index(){
       
        $data['patient_records'] = $this -> patient_model -> get_patientrecords();
        $this->load->view('templates/header');
        $this->load->view('pages/editpatient', $data);
        $this->load->view('templates/footer');
    }
}