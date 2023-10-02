<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require_once '../models/Patient.php';

class PatientService{
    public function getAllPatients(){
        // Bước 1: Kết nối Database
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if($conn != null ){
            // Bước 2: Truy vấn dữ liệu
            $sql = "SELECT * FROM patients ORDER BY id DESC ";
            $stmt = $conn->query($sql);

            // Bước 3: Xử lý kết quả trả về
            $patients = [];
            while ($row = $stmt->fetch()) {
                $patient = new Patient($row['id'], $row['fullname'], $row['gender'], $row['dateOfBirth'], $row['address'], $row['mobile']);
                $patients[] = $patient;
            }
            return $patients;
        }
    }

    public function addPatients(){
        // Bước 1: Kết nối Database
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if($conn != null ){
            $fullname = $_POST['fullname'];
            $gender = $_POST['gender'];
            $dateOfBirth = $_POST['dateOfBirth'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
            // Bước 2: Truy vấn dữ liệu
            $sql = "INSERT INTO Patients(fullname, gender, dateOfBirth, address, mobile) VALUES ($fullname, $gender, $dateOfBirth, $address, $mobile)";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            // Bước 3: Xử lý kết quả trả về
            if($stmt->rowCount()>0){

//                header("Location:../view/home/index.php");
                echo "Thanh cong";
                // Thong bao da thanh cong
            }
            else{
                // Thong bao khong thanh cong
                echo "ko Thanh cong";
            }
        }
    }
}