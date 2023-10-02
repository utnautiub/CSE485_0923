<?php
require_once APP_ROOT.'/app/services/PatientService.php';
class HomeController{
    public function index(){
        // Goi du lieu tu PatientService
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();
        // Render du lieu lay duoc ra HomePage
        include APP_ROOT.'/app/views/home/index.php';
    }

}