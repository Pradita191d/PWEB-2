<?php

include_once'../../models/Dosen.php';

class DosenController{
    private $model;

    public function __construct($db)
    {
        $this->model = new Dosen($db);
    }
    // Menampilkan data Dosen
    public function getAllDosen(){
        return $this->model->getAllDosen(); 
    }
    public function createDosen($nip, $nama, $alamat)
    {
        return $this->model->createDosen($nip, $nama, $alamat);
    }
    public function getDosenById($id)
    {
        return $this->model->getDosenById($id);
    }
    public function updateDosen($id, $nama, $nip, $alamat)
    {
        return $this->model->updateDosen($id, $nama, $nip, $alamat);
    }
    public function deleteDosen($id)
    {
        return $this->model->deleteDosen($id);
    }


}