<?php  
    class cars_model{
        private $tabel = 'mobil';
        private $db;
        public function __construct(){
            $this->db = new Database;
        }
        public function getAllcars(){
            $this->db->query('SELECT * FROM ' . $this->tabel);
            return $this->db->resultSet();
        }
        public function getIdCars($id){
            $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE id_mobil = :id_mobil');
            $this->db->bind('id_mobil', $id);
            return $this->db->single();
        }
        // public function ubahDataMobil($data){
            
        //     $query = "UPDATE mobil SET plat_mobil = :plat_mobil, nama_mobil = :nama_mobil, harga_sewa = :harga_sewa, status = :status, deskripsi = :deskripsi WHERE id_mobil = :id_mobil";
        //     $this->db->query($query);
        //     $this->db->bind('id_mobil', $data['id']);
        //     $this->db->bind('plat_mobil', $data['plat']);
        //     $this->db->bind('nama_mobil', $data['nama']);
        //     $this->db->bind('harga_sewa', $data['sewa']);
        //     $this->db->bind('status', $data['status']);
        //     $this->db->bind('deskripsi', $data['deskripsi']);
        //     $this->db->execute();
        //     return $this->db->rowCount();

        // }
        public function tambahDataCars($data){
            $filename = $_FILES['image']['name'];
            $tempname = $_FILES['image']['tmp_name'];
            $folder = "img/".$filename;
            move_uploaded_file($tempname, $folder);
            
            $query = "INSERT INTO `mobil`(`plat_mobil`, `nama_mobil`, `gambar`, `harga_sewa`, `status`, `deskripsi`) VALUES (:plat_mobil, :nama_mobil, :gambar , :harga_sewa, :status, :deskripsi)";
            $this->db->query($query);
            $this->db->bind('plat_mobil', $data['plat']);
            $this->db->bind('nama_mobil', $data['nama']);
            $this->db->bind('harga_sewa', $data['sewa']);
            $this->db->bind('status', $data['status']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('gambar', $filename);
            
            $this->db->execute();
            return $this->db->rowCount();
            
        }   
        public function hapusDataCars($id){
            $query = "DELETE FROM mobil WHERE id_mobil = :id_mobil";
            $this->db->query($query);
            $this->db->bind('id_mobil', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }
 }
?>