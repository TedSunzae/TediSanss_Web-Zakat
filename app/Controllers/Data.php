<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MData;
use Predis\Command\Redis\SCRIPT;

class Data extends BaseController
{
    protected $mahasiswa;
    protected $tbl_fitrah;

    public function __construct()
    {
        $this->tbl_fitrah = new MData;
        // $this->tbl_mal = new MData;
        
    }

    public function index()
    {
        $data = $this->tbl_fitrah->getData();

        $array = array(
            'hasil' => $data,
        );
        //var_dump($data);
        return view('V_showData_fitrah',$array);
    }

    public function insertDataFitrah()
    {
        return view('V_insertData_fitrah');
    }

    public function saveDataFitrah()
    {
        $data =[
            'nik'          => $this->request->getVar('nik'),
            'keluarga'         => $this->request->getVar('keluarga'),
            'no_hp'     => $this->request->getVar('no_hp'),
            'tgl'     => $this->request->getVar('tgl'),
            'jenis_zakat'       => $this->request->getVar('jenis_zakat'),
            'jumlah_jiwa'     => $this->request->getVar('jumlah_jiwa'),
            'nominal'     => $this->request->getVar('nominal'),
            'keterangan'     => $this->request->getVar('keterangan'),
        ];
        $insert = $this->tbl_fitrah->saveDataFitrah($data);
        return redirect()->to('data');
        //$namakita = $this->request->getVar('nama');
        
    }

    public function editDataFitrah($nik)
    {
        $selectdata = $this->tbl_fitrah->getSelectData($nik);
        $array = [
            'data' =>$selectdata,
        ];
        return view('V_editData_fitrah',$array);
    }
    public function saveEditDataFitrah($nik)
    {
        $data =[
            'nik'          => $this->request->getVar('nik'),
            'keluarga'         => $this->request->getVar('keluarga'),
            'no_hp'     => $this->request->getVar('no_hp'),
            'tgl'     => $this->request->getVar('tgl'),
            'jenis_zakat'       => $this->request->getVar('jenis_zakat'),
            'jumlah_jiwa'     => $this->request->getVar('jumlah_jiwa'),
            'nominal'     => $this->request->getVar('nominal'),
            'keterangan'     => $this->request->getVar('keterangan'),
        ];
        $update = $this->tbl_fitrah->saveEditDataFitrah($data,$nik);
        return redirect()->to('data');
    }
    public function hapusDataFitrah($nik)
    {
        $selectdata = $this->tbl_fitrah->hapusData($nik);
        return redirect()->to('data');
    }

    // Untuk tabel MAL
    // public function insertDataMal()
    // {
    //     return view('V_insertData_Fitrah');
    // }

    // public function saveDataMal()
    // {
    //     $data =[
    //         'nik'          => $this->request->getVar('nik'),
    //         'keluarga'         => $this->request->getVar('keluarga'),
    //         'no_hp'     => $this->request->getVar('no_hp'),
    //         'jenis_zakat'       => $this->request->getVar('jenis_zakat'),
    //         'jumlah_jiwa'     => $this->request->getVar('jumlah_jiwa'),
    //         'nominal'     => $this->request->getVar('nominal'),
    //     ];
    //     $insert = $this->tbl_fitrah->saveDataMal($data);
    //     return redirect()->to('data');
    //     //$namakita = $this->request->getVar('nama');
        
    // }

    // public function editDataMal($nik)
    // {
    //     $selectdata = $this->tbl_fitrah->getSelectData($nik);
    //     $array = [
    //         'data' =>$selectdata,
    //     ];
    //     return view('V_editData',$array);
    // }
    // public function saveEditDataMal($nik)
    // {
    //     $data =[
    //         'nik'          => $this->request->getVar('nik'),
    //         'keluarga'         => $this->request->getVar('keluarga'),
    //         'no_hp'     => $this->request->getVar('no_hp'),
    //         'jenis_zakat'       => $this->request->getVar('jenis_zakat'),
    //         'jumlah_jiwa'     => $this->request->getVar('jumlah_jiwa'),
    //         'nominal'     => $this->request->getVar('fakultas'),
    //     ];
    //     $update = $this->tbl_fitrah->saveEditData($data,$nik);
    //     return redirect()->to('data');
    // }
    // public function hapusDataMal($nik)
    // {
    //     $selectdata = $this->tbl_fitrah->hapusData($nik);
    //     return redirect()->to('data');
    // }
}
