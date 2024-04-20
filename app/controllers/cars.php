<?php
    class cars extends Controller{
        public function index(){
            $data['judul'] = 'Daftar Mobil';
            $data['cars'] = $this->model('cars_model')->getAllCars();
            $this->view('templates/header', $data);
            $this->view('cars/index', $data);
            $this->view('templates/footer');
        }
        public function tambah(){
            if($this->model('cars_model')->tambahDataCars($_POST) > 0){
                header('Location: ' . BASEURL . '/cars');
                exit;
            }
        }
        public function hapus($id){
            if($this->model('cars_model')->hapusDataCars($id) > 0){
                header('Location: ' . BASEURL . '/cars');
                exit;
            }
        }
        
        public function getEdit(){
            echo json_encode($this->model('cars_model')->getAllCars($_POST['id']));
        }
        public function edit(){
            if($this->model('cars_model')->ubahDataMobil($_POST) > 0){
                
                header('Location: ' . BASEURL . '/cars');
                exit;
            }
            else{
                
                header('Location: ' . BASEURL . '/cars');
                exit;
            }
        }
        public function detail($id){
            $data['judul'] = 'Detail Mobil';
            $data['cars'] = $this->model('cars_model')->getIdCars($id);
            $this->view('templates/header', $data);
            $this->view('cars/detail', $data);
            $this->view('templates/footer');
        }
       
    }
?>