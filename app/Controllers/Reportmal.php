<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Dompdf;
use App\Models\MData;


class Reportmal extends BaseController
{
    protected $tbl_mal;
    
    public function __construct()
    {
        $this->tbl_mal = new MData;
    }

    public function index()
    {
        $data = $this->tbl_mal->getData();
        $array = array(
            'hasil' => $data,
        );
        //var_dump($data);
        $tampil = view('V_pdfTabelmal',$array);

            $dompdf = new Dompdf();
            $dompdf->loadHtml($tampil);

                // (Optional) Setup the paper size and orientation
            $dompdf->setPaper('A4', 'potrait');

                // Render the HTML as PDF
            $dompdf->render();

                // Output the generated PDF to Browser
            $dompdf->stream('test',array("Attachment" => false));

    }
}
