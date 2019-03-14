<?php
Class Pdf_all extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('M_kpb');
    }

    public function index(){
        $pdf = new FPDF("L","cm","legal");

        $pdf->SetMargins(1,1,1);
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','B',11);
       
        $pdf->ln(1);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(32,0.7,"DATA TELECENTER KOTA PEKALONGAN TAHUN 2018",0,10,'C');
        $pdf->ln(1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
        $pdf->ln(1);
        $pdf->SetFont('Arial','B',8);

        $pdf->Cell(0.8,0.4,' ','LTR',0,'L',0);   // empty cell with left,top, and right borders
        $pdf->Cell(3,0.4,'Nama','LTR',0,'C',0);
        $pdf->Cell(3,0.4,'Alamat','LTR',0,'C',0);
        $pdf->Cell(3,0.4,'Nama','LTR',0,'C',0);
        $pdf->Cell(3,0.4,'Alamat','LTR',0,'C',0);
        $pdf->Cell(2.8,0.4,'Jumlah','LTR',0,'C',0);
        $pdf->Cell(2.8,0.4,'Jumlah','LTR',0,'C',0);
        $pdf->Cell(2.8,0.4,'Jaringan','LTR',0,'C',0);
        $pdf->Cell(2,0.4,' ','LTR',0,'L',0);
        $pdf->Cell(2,0.4,'Jumlah','LTR',0,'C',0); 
        $pdf->Cell(2,0.4,'Posisi','LTR',0,'C',0);
        $pdf->Cell(3,0.4,' ','LTR',0,'L',0); 
        $pdf->Cell(3,0.4,'Keterangan',1,0,'C',0);

        $pdf->Ln();

        $pdf->Cell(0.8,0.4,'No','LR',0,'C',0);  // cell with left and right borders
        $pdf->Cell(3,0.4,'Telecenter','LR',0,'C',0);
        $pdf->Cell(3,0.4,'Telecenter','LR',0,'C',0);
        $pdf->Cell(3,0.4,'Pengelola','LR',0,'C',0);
        $pdf->Cell(3,0.4,'Tinggal','LR',0,'C',0);
        $pdf->Cell(2.8,0.4,'Perangkat','LR',0,'C',0);
        $pdf->Cell(2.8,0.4,'Perangkat','LR',0,'C',0);
        $pdf->Cell(2.8,0.4,'Online','LR',0,'C',0);
        $pdf->Cell(2,0.4,'Listrik','LR',0,'C',0);
        $pdf->Cell(2,0.4,'Pengguna/','LR',0,'C',0);
        $pdf->Cell(2,0.4,'Peletakan','LR',0,'C',0);
        $pdf->Cell(3,0.4,'Lokasi','LR',0,'C',0);
        $pdf->Cell(3,0.4,'(B/KB/TB)','LR',0,'C',0);

        $pdf->Ln();

        $pdf->Cell(0.8,0.4,'','LBR',0,'L',0);   // empty cell with left,bottom, and right borders
        $pdf->Cell(3,0.4,'','LBR',0,'L',0);
        $pdf->Cell(3,0.4,'','LBR',0,'L',0);
        $pdf->Cell(3,0.4,'','LBR',0,'L',0);
        $pdf->Cell(3,0.4,'','LBR',0,'L',0);
        $pdf->Cell(2.8,0.4,'PC/Komputer','LBR',0,'C',0);
        $pdf->Cell(2.8,0.4,'Printer','LBR',0,'C',0);
        $pdf->Cell(2.8,0.4,'Langganan','LBR',0,'C',0);
        $pdf->Cell(2,0.4,'','LBR',0,'L',0);
        $pdf->Cell(2,0.4,'1 minggu','LBR',0,'C',0);
        $pdf->Cell(2,0.4,'Perangkat','LBR',0,'C',0);
        $pdf->Cell(3,0.4,'','LBR',0,'L',0); 
        $pdf->Cell(3,0.4,'','LRB',0,'C',0);


        $pdf->SetFont('Arial','',7);

        $dataWilayah = $this->db->get('tb_telecenter')->result();
        foreach ($dataWilayah as $row){


        $pdf->ln();
        
        $pdf->Cell(0.8,0.8, $row->id_telecenter,'LTR',0,'C',0);   
        $pdf->Cell(3,0.8, $row->nama_telecenter,'LTR',0,'C',0);   
        $pdf->Cell(3,0.8, $row->alamat_telecenter,'LTR',0,'C',0);   
        $pdf->Cell(3,0.8, $row->nama_pengelola,'LTR',0,'C',0);   
        $pdf->Cell(3,0.8, $row->alamat_pengelola,'LTR',0,'C',0);   
        $pdf->Cell(2.8,0.8, $row->pc_jumlah, 1,0,'C',0);
        $pdf->Cell(2.8,0.8, $row->printer_jumlah, 1,0,'C',0);
        $pdf->Cell(2.8,0.8, $row->jaringan_jumlah, 1,0,'C',0);
        $pdf->Cell(2,0.8, $row->listrik_jumlah, 1,0,'C',0);
        $pdf->Cell(2,0.8, $row->jumlah_pengguna,'LTR',0,'C',0);   
        $pdf->Cell(2,0.8, $row->posisi,'LTR',0,'C',0);   
        $pdf->Cell(3,0.8, $row->lokasi,'LTR',0,'C',0);   
        $pdf->Cell(3,0.8, $row->ket_1, 1,0,'C',0); 

        $pdf->Ln();

        $pdf->Cell(0.8,0.8,'','LRB',0,'C',0); 
        $pdf->Cell(3,0.8,'','LRB',0,'C',0); 
        $pdf->Cell(3,0.8,'','LRB',0,'C',0); 
        $pdf->Cell(3,0.8,'','LRB',0,'C',0); 
        $pdf->Cell(3,0.8,'','LRB',0,'C',0); 
        $pdf->Cell(2.8,0.8, $row->pc_status, 'LRB',0,'C',0);
        $pdf->Cell(2.8,0.8, $row->printer_status, 'LRB',0,'C',0);
        $pdf->Cell(2.8,0.8, $row->jaringan_status, 'LRB',0,'C',0);
        $pdf->Cell(2,0.8, $row->listrik_status, 'LRB',0,'C',0);
        $pdf->Cell(2,0.8,'','LRB',0,'C',0); 
        $pdf->Cell(2,0.8,'','LRB',0,'C',0); 
        $pdf->Cell(3,0.8,'','LRB',0,'C',0); 
        $pdf->Cell(3,0.8, $row->ket_2, 'LTRB',0,'C',0);


          // $pdf->Cell(0.8,0.8,$row->id_telecenter,1,0, 'C');
          // $pdf->Cell(3,0.8,$row->nama_telecenter,1,0, 'L');
          // $pdf->Cell(3,0.8,$row->alamat_telecenter,1,0, 'L');
          // $pdf->Cell(3,0.8,$row->nama_pengelola,1,0, 'L');
          // $pdf->Cell(3,0.8,$row->alamat_pengelola,1,0, 'L');
          // $pdf->Cell(2.8,0.8,$row->pc_jumlah,1,0, 'L');
          // $pdf->Cell(2.8,0.8,$row->printer_jumlah,1,0, 'L');
          // $pdf->Cell(2.8,0.8,$row->jaringan_status,1,0, 'L');
          // $pdf->Cell(2,0.8,$row->listrik_status,1,0, 'L');
          // $pdf->Cell(2,0.8,$row->jumlah_pengguna,1,0, 'L');
          // $pdf->Cell(2,0.8,$row->posisi,1,0, 'L');
          // $pdf->Cell(3,0.8,$row->lokasi,1,0, 'L');
          // $pdf->Cell(3,0.8,$row->ket_2,1,0, 'L');
         
          
         
      }

      $pdf->Output();

  }}

